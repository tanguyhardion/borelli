// Validating email input for the newsletter

var newsletterSignup = document.getElementById('newsletter-signup');
var newsletterOk = document.getElementById('newsletter-ok');
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
var newsletterX = document.getElementById('input-icon');

newsletterSignup.addEventListener('input', function(){
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