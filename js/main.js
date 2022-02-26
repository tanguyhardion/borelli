// Appear On Scroll initialization

AOS.init({
    easing: 'ease-in-quad',
});



// Variables and functions

var navbar = document.getElementById('main-nav');
var menu = document.getElementById("menu");
var overlay = document.getElementById("overlay");

function toggleMenu() {
    navbar.classList.toggle('active');
    menu.classList.toggle('active');
    overlay.classList.toggle('active');
}



// Display the menu on smaller screens

menu.onclick = function() {
    toggleMenu();
};

// Close the menu when user clicks away or scrolls

overlay.onclick = function() {
    toggleMenu();
};



// Make navbar appear when scrolling down

window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navbar.style.backgroundColor = "black";
        navbar.style.boxShadow = "0 .5rem 1.5rem rgba(255 ,255 ,255 , .1)";
    }
    else {
        navbar.style.backgroundColor = "transparent";
        navbar.style.boxShadow = "none";
    }

    if (navbar.classList.contains('active')) {
        toggleMenu();
    }
};



// Format the user's phone number on the contact page

if(document.body.className === 'productpage')
{
    let views = document.querySelectorAll('.popup-view');
    let opens = document.querySelectorAll('.popup-btn');
    let closes = document.querySelectorAll('.product-close');

    let popup = function(popUp) {
        views[popUp].classList.add('poped');
    };

    opens.forEach((open, i) => {
        open.addEventListener('click', () => {
            popup(i);
        })
    });

    closes.forEach((close) => {
        close.addEventListener('click', () => {
            views.forEach((view) => {
                view.classList.remove('poped');
            })
        })
    });
}



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