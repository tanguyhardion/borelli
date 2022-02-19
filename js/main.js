// Appear On Scroll initialization

AOS.init({
    easing: 'ease-in-quad',
});



// Make navbar appear when scrolling down

window.onscroll = function()
{
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
    {
        document.getElementById("main-nav").style.backgroundColor = "black";
    }
    else
    {
        document.getElementById("main-nav").style.backgroundColor = "transparent";
    }
};



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




// Validating email input for the newsletter

var newsletterSignup = document.getElementById('newsletter-signup');
var newsletterOk = document.getElementById('newsletter');
var newsletterX = document.getElementById('input-icon');
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

newsletterSignup.addEventListener('input', function() {
    let newsletterText = newsletterSignup.value;
    newsletterX.style.display = 'inline';

    if(newsletterText.match(emailRegex))
    {
        newsletterOk.style.display = 'inline';
        newsletterX.style.display = 'none';
    }
    else if(newsletterSignup.value.length == 0)
    {
        newsletterX.style.display = 'none';
        newsletterOk.style.display = 'none';
    }
    else
    {
        newsletterOk.style.display = 'none';
    }
});



// ------- Other Scripts -------

//Scroll to top on reload
/*window.onbeforeunload = function ()
{
  window.scrollTo(0, 0);
}*/


// Redirect to homepage if empty pathname
/*window.addEventListener('load', function()
{
   if (window.location.hostname == 'https://website.com' && window.location.pathname == '')
   {
      window.location.href = 'https://website.com/accueil'; 
   }
});*/



// Scroll down when discover is clicked
/*var btn = document.getElementById('discover-btn');

btn.onclick = function()
{
    document.getElementById('').scrollIntoView({behavior: "smooth", block:"start"});
}*/