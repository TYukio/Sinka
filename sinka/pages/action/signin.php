<?php
include $_SERVER['DOCUMENT_ROOT'] . "/components/action/util.php";

if (!validateField($_POST["email"], 255))
    redirectMessage("/pages/registrar.php", "Email deve conter entre 1 e 255 caracteres");

if (!validateField($_POST["pass"], 0))
    redirectMessage("/pages/registrar.php", "Senha deve conter ao menos 1 caractere");

$conn = getDatabase("sinka");

filter_var_array($_POST);

$query_existing = "SELECT `email`, `pass` FROM `Person` WHERE `email` = '". $_POST["email"] ."';";
$result = $conn->query($query_existing);

if ($row = $result->fetch_assoc())
{
    if (password_verify($_POST["pass"], $row["pass"]))
    {
        session_start();
        $_SESSION["userid"] = $row["id"];
        redirectMessage("/pages/login.php", "Autenticado com sucesso");
    }
}

$result->free();
$conn->close();

redirectMessage("/pages/login.php", "Email ou senha incorretos");