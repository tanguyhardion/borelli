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
menu.onclick = () => {
    toggleMenu();
};

// Close the menu when user clicks away or scrolls
overlay.onclick = () => {
    toggleMenu();
};



// Make navbar appear when scrolling down
window.onscroll = () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
        navbar.style.backgroundColor = 'black';

    else
        navbar.style.backgroundColor = 'transparent';

    if (navbar.classList.contains('active'))
        toggleMenu();
};



// Open the detailed view of a product when the user clicks on it
if (document.body.className === 'productpage') {
    let views = document.querySelectorAll('.popup-view');
    let opens = document.querySelectorAll('.popup-btn');
    let closes = document.querySelectorAll('.product-close');

    let popup = function (popUp) {
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

    views.forEach((view) => {
        view.onclick = function (e) {
            if (e.target.classList.contains('popup-view'))
                view.classList.remove('poped');
        }
    });
}



// Format the user's phone number on the contact page
if (document.body.className === 'contactpage') {
    let phone = document.getElementById("phone-number");
    phone.oninput = function (e) {
        e.target.value = e.target.value.replace(/[^\d]/g, '').replace(/(.{2})/g, '$1 ').trim();
    }
}


//Scroll to top on reload
/* window.onbeforeunload = function () {
    window.scrollTo(0, 0);
} */