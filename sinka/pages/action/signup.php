<?php
include $_SERVER['DOCUMENT_ROOT'] . "/components/action/util.php";

if (!validateField($_POST["username"], 32))
    redirectMessage("/pages/registrar.php", "Nome de usuário deve conter entre 1 e 32 caracteres");

if (!validateField($_POST["first_name"], 32))
    redirectMessage("/pages/registrar.php", "Nome deve conter entre 1 e 32 caracteres");
    
if (!validateField($_POST["last_name"], 32))
    redirectMessage("/pages/registrar.php", "Sobrenone deve conter entre 1 e 32 caracteres");

if (!validateField($_POST["email"], 255))
    redirectMessage("/pages/registrar.php", "Email deve conter entre 1 e 255 caracteres");

if (!validateField($_POST["pass"], 0))
    redirectMessage("/pages/registrar.php", "Senha deve conter ao menos 1 caractere");

if (!strtotime($_POST["birth"]))
    redirectMessage("/pages/registrar.php", "Insira uma data de nascimento válida");
    
if (!validateField($_POST["gender"], 0) || ($_POST["gender"] != "m" && $_POST["gender"] != "f" && $_POST["gender"] != "o"))
    redirectMessage("/pages/registrar.php", "Selecione seu gênero");

$conn = getDatabase("sinka");

filter_var_array($_POST);
$query_existing_username = "SELECT `username` FROM `Person` WHERE `username`='". $_POST["username"] ."';";
$query_existing_email = "SELECT `username` FROM `Person` WHERE `email`='". $_POST["email"] ."';";

$query_register = "INSERT INTO `Person` (`username`, `pass`, `gender`, `birth`, `email`, `first_name`, `last_name`) VALUES ('". $_POST["username"] ."','". password_hash($_POST["pass"], PASSWORD_DEFAULT) ."','". $_POST["gender"] ."','". $_POST["birth"] ."','". $_POST["email"] ."','". $_POST["first_name"] ."','". $_POST["last_name"] ."');";

$result = $conn->query($query_existing_username);
if ($result->num_rows > 0)
    redirectMessage("/pages/registrar.php", "Nome de usuário já está em uso");

$result = $conn->query($query_existing_email);
if ($result->num_rows > 0)
    redirectMessage("/pages/registrar.php", "E-mail já está em uso");
    
$result->free();

$conn->query($query_register);
$conn->close();

redirectMessage("/pages/login.php", "Cadastro realizado com sucesso");