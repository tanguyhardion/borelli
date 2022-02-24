// Variables and functions

var navbar = document.getElementById("main-nav");
var menu = document.getElementById("menu");
var overlay = document.getElementById("overlay");

function toggleMenu() {
    navbar.classList.toggle('open');
    menu.classList.toggle('open');
    overlay.classList.toggle('open');
}



// Appear On Scroll initialization

AOS.init({
    easing: 'ease-in-quad',
});



// Make navbar appear when scrolling down

window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
    {
        navbar.style.backgroundColor = "black";
        navbar.style.boxShadow = "0 .5rem 1.5rem rgba(255 ,255 ,255 , .1)";
    }
    else
    {
        navbar.style.backgroundColor = "transparent";
        navbar.style.boxShadow = "none";
    }
};



// Display menu on smaller screens

menu.onclick = function() {
    toggleMenu();
};

overlay.onclick = function() {
    toggleMenu();
};



// Format the user's phone number on the contact page

if(document.body.className === 'contactpage')
{
    let phone = document.getElementById("phone-number");

    phone.oninput = function(e){
        e.target.value = e.target.value.replace(/[^\d]/g, '').replace(/(.{2})/g, '$1 ').trim();
    }
}



/* // Send email when submitting form

var submit = document.getElementById("form-submit");

submit.onclick = function() {

} */



// Validate email input for the newsletter

var newsletterEmail = document.getElementById('newsletter-email');
var newsletterSubmit = document.getElementById('newsletter-submit');
var inputIcon = document.getElementById('input-icon');
var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

newsletterEmail.addEventListener('input', function() {
    let newsletterText = newsletterEmail.value;
    inputIcon.style.display = 'inline';

    if(newsletterText.match(regex))
    {
        newsletterSubmit.style.display = 'inline';
        inputIcon.style.display = 'none';
    }
    else if(newsletterEmail.value.length == 0)
    {
        inputIcon.style.display = 'none';
        newsletterSubmit.style.display = 'none';
    }
    else
    {
        newsletterSubmit.style.display = 'none';
    }
});



// ------- Other Scripts -------

//Scroll to top on reload
/* window.onbeforeunload = function () {
    window.scrollTo(0, 0);
} */


// Redirect to homepage if empty pathname
/* window.addEventListener('load', function() {
   if (window.location.hostname == 'https://website.com' && window.location.pathname == '')
   {
        window.location.href = 'https://website.com/accueil'; 
   }
}); */



// Scroll down when discover is clicked
/* var btn = document.getElementById('discover-btn');

btn.onclick = function() {
    document.getElementById('').scrollIntoView({behavior: "smooth", block:"start"});
} */