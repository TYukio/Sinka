<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.html";?>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body theme="light" class="authpage">
    <img src="/img/sinka.svg" height="80" width="100%"/>  
    <div id="login-container" height="800">
        
        <h3>Registre-se no Sinka</h3>
        <form action="">
             <label for="Nome"></label>
            <input type="nome" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="off">
            <label for="Nome"></label>
            <input type="Nome" name="Nome" id="email" placeholder="Digite seu sobrenome" autocomplete="off">
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">

            <label for="usuario"></label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" autocomplete="off">
            <label for="data-nascimento"></label>
            <input type="date" id="data-nascimento" name="data-nascimento">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" >
            <label for="password"></label>
            <input type="password"  id="confirmpassword" placeholder="Confirme sua senha" >
            <p id="genero">Escolha seu genero</p>
           <div style="display:flex;">
           
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Masculino</label>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">Feminino</label>
    
       
            </div>  
           
            
        <input type="submit" value="Continuar">
        
        
        </form>
    

    </div>
    
</body>
</html>