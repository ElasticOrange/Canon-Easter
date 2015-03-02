$(document).ready(function(){
    $('[data-confirm=true]').click(function(e)
    {
        if(confirm('Vrei sa stergi acest user ?'))
        {
            
        }
            else
            {
                e.preventDefault();
                return true;
            }
    });
});