// Scroll down when discover is clicked

var btn = document.getElementById('discover-btn');

btn.onclick = function()
{
    document.getElementById('first-content').scrollIntoView({behavior: "smooth", block:"start"});
}