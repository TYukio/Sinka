<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.html";?>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body theme="light" class="authpage">
    <img src="/img/sinka.svg" height="80" width="100%"/>  
    <div id="login-container1">
        
        <h1>Login</h1>
        <form action="">
            <label id="emailform" for="email"></label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
            <label id="passwordform" for="password"></label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" >
            
            <a href="https://www.youtube.com/watch?v=ZvmdK1vHDiY" class="forget">Esqueceu sua senha?</a>
            <input type="submit" value="Login">
          
        </form>
       
        <div id="register-container">
            <p>Ainda não possui uma conta?</p>
            <a href="/pages/registrar.php">Registre-se</a>

        </div>

    </div>
    
</body>
</html>