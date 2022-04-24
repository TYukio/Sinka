<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.html";?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.fog.min.js"></script>
</head>


</div>

<body theme = "dark">
    

    <section class="banner__index"></section>
    <div class="nav__index">
        <div id="vanta-canvas"></div>
        <header>
            <img href="#" class="logo__index" src="img/sinka.svg" height="100">
            <ul class="navbar__org">
                <li><a href="#" class="navbar__itens">Login</a></li>
                <li><a href="#" class="navbar__itens">Login</a></li>
                <li><a href="#" class="navbar__itens">Login</a></li>
                <li><a href="#" class="active navbar__itens ">Cadastrar</a></li>
            </ul>
        </header>
    </div>

    <script type="text/javascript" src="js/lib/typed.js"></script>

    <div class="slogan">
        <div class="static__slogan">
            <h1>A Plataforma Perfeita</h1>
        </div>

    </div>
    <div class="autotype__slogan">
        <h1>Para <span class="auto-type"></span></h1>
    </div>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["atletas.", "profissionais.", "amadores."],
            
            typeSpeed: 50,
            
            backDelay: 3000,
            backSpeed: 50,
            loop: true
        });
    </script>

    </section>
    <main>

    </main>

    <script type="text/javascript" src="js/jskrollr.min.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
</body>

<script>
    VANTA.FOG({
        el: "#vanta-canvas",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        highlightColor: 0x823aca,
        midtoneColor: 0x6f02a0,
        lowlightColor: 0x883eb3,
        baseColor: 0x510984,
        blurFactor: 1.0,
        speed: 3.00,
        zoom: 1.00
    })
</script>
<div id="vanta-canvas"></div>

</html>