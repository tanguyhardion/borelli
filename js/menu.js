// Display menu on smaller screens

var navbar = document.getElementById('nav-bar');
var fabars = document.getElementById("fa-bars");
var checkmenu = document.getElementById("check-menu");

checkmenu.onclick = function()
{  
    if(checkmenu.checked === true)
    {
        navbar.style.right = 0;
        fabars.classList.toggle('open');
    }
    else
    {
        navbar.style.right = '-200px';
        fabars.classList.toggle('open');
    }
};