<!DOCTYPE html>

<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.html"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.fog.min.js"></script>
    <script src="/js/lib/nav.js" defer></script>
</head>


</div>

<body theme="dark">
    <section class="banner__index"></section>
    <div class="nav__index">
        <div id="vanta-canvas"></div>
        <header>
            <button class="mobile-nav-toggle" aria-controls="navbar__org" aria-expanded="false">
                <span class="sr-only"></span>
            </button>

            <img href="#" class="logo__index" src="img/sinka.svg" height="100">
            <ul data-visible="false" class="navbar__org">
                <li><a href="#" class="navbar__itens" aria-hidden="hidden">Ajuda</a></li>
                <li><a href="#" class="navbar__itens" aria-hidden="hidden">Sobre</a></li>
                <li><a href="#" class="navbar__itens" aria-hidden="hidden">Equipe</a></li>
                <li><a href="#" class="navbar__itens" aria-hidden="hidden">Recursos</a></li>
                <li><a href="/pages/login.php" class="navbar__itens" aria-hidden="hidden">Login</a></li>
                <li><a href="/pages/registrar.php" class="active navbar__itens " aria-hidden="hidden">Cadastrar</a></li>
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
            strings: ["atletas.", "profissionais.", "amadores.", ],

            typeSpeed: 50,

            backDelay: 3000,
            backSpeed: 50,
            loop: true
        });
    </script>

    </section>
    <main>
        <section class="about">
            <div class="about__content" data-0-top="opacity:0;left:100px" data-200-top="opacity:1;left:0px">
                <h4>Llorem TOp demais familia</h4>
                <p class="about__text">LLorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>
        <section class="team">
            <div class="team__content">
                <h2>Llorem TOp demais familia</h2>
                <p class="team__text">LLorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>
        <section class="resource">
            <div class="resource__content">
                <h2>Llorem TOp demais familia</h2>
                <p class="resource__text">LLorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

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
        zoom: 0.50
    })
</script>
<div id="vanta-canvas"></div>

</html>