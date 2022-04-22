// Recebe booleano e configura tema do corpo de acordo
function setTheme(dark)
{
    let theme = dark ? "dark" : "light";
    document.body.setAttribute("theme", theme);
    localStorage.setItem("theme", theme);
}

// Lembra do tema salvo em localStorage
function recallTheme()
{
    let dark = localStorage.getItem("theme") == "dark";
    document.getElementById("daynight-toggle").getElementsByTagName("input")[0].checked = dark;
    setTheme(dark);
}

// Ativa ou desativa o botão hamburger
function toggleHamburger()
{
    document.getElementById("navbar").classList.toggle("dropped");
}

// Monitora tamanho da tela e desativa o botão hambúrger caso não seja mais visível
window.addEventListener("resize", function(event) 
{
    if (document.documentElement.clientWidth / document.documentElement.clientHeight > (11 / 10))
    {
        document.getElementById("navbar").classList.remove("dropped");
    }
}, true);