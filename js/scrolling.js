// Scroll to top on reload
// window.onbeforeunload = function ()
// {
//   window.scrollTo(0, 0);
// }



// Appear On Scroll initialization

AOS.init({
    easing: 'ease-in-quad',
});



// Scroll down when discover is clicked

var btn = document.getElementById('discover-btn');

btn.onclick = function()
{
    document.getElementById('first-content').scrollIntoView({behavior: "smooth", block:"start"});
}


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

