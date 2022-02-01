// Redirect to homepage if empty pathname

window.addEventListener('load', function()
{
   if (window.location.hostname == 'localhost/borelli' && window.location.pathname == '')
   {
      window.location.href = 'localhost/borelli/accueil'; 
   }
});