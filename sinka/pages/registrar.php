<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.html";?>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body theme="light" class="authpage">
    <img src="/img/sinka.svg" height="80" width="100%"/>  
    
    <?php
    if (isset($_GET["msg"])) echo '<h3 id="notification-getter">'. $_GET["msg"] ."</h3>";
    ?>
    
    
    <div id="login-container" height="800">
        
        <h3>Registre-se no Sinka</h3>
        <form action="/pages/action/signup.php" method="post">
             <label for="Nome"></label>
            <input type="nome" name="first_name" id="nome" placeholder="Digite seu nome" autocomplete="off">
            <label for="Nome"></label>
            <input type="Nome" name="last_name" placeholder="Digite seu sobrenome" autocomplete="off">
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
            <label for="usuario"></label>
            <input type="text" name="username" id="usuario" placeholder="Digite seu usuário" autocomplete="off">
            <label for="data-nascimento"></label>
            <input type="date" id="data-nascimento" name="birth">
            <label for="password"></label>
            <input type="password" name="pass" id="password" placeholder="Digite sua senha" >
            <label for="password"></label>
            <input type="password"  id="confirmpassword" placeholder="Confirme sua senha" >
            <p id="genero">Escolha seu genero</p>
            <div style="display:flex;">
                <div style="display: inline;">
                    <input type="radio" id="masculino" name="gender" value="m">
                    <label for="masculino">Masculino</label>

                </div>
                <div style="display: inline;">
                    <input type="radio" id="feminino" name="gender" value="f">
                    <label for="feminino">Feminino</label>
                </div>
                <div style="display: inline;">
                    <input type="radio" id="outro" name="gender" value="o">
                    <label for="outro">Outro</label>
                </div>
            </div>  
              
            <input type="submit" value="Continuar">
        </form>
    

    </div>
    
</body>
</html>