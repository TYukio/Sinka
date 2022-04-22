<nav id="navbar">
    <img class="logo" src="/img/sinka.svg"/>

    <a>Link aqui</a>
    <a>Link aqui</a>
    <a>Link aqui</a>
    <a>Link aqui</a>

    <div id="daynight-toggle">
        <input class="daynight-toggle-input" type="checkbox" onchange="setTheme(this.checked);"/>
        <div class="toggle-bg"></div>
        <div class="daynight-toggle-switch">
            <div class="toggle-switch-figure"></div>
            <div class="toggle-switch-figureAlt"></div>
        </div>  
    </div>

    <span id="hamburger-menu" class="material-icons" onclick="toggleHamburger()">menu</span>
    
    <script>recallTheme()</script>
</nav>