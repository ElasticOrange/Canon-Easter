$(document).ready(function()
{
    $('[data-buton=true]').click(function(e)
    {
        e.preventDefault();
        
        var pass1 = $('[data-password=true]').val();
        var pass2 = $('[data-password_confirm=true]').val();
        if(pass1.length >= 4)
        {
            if(pass1 === pass2) 
            {
                ajax_submit();
            }
            else 
            {
                alert("Parola nu a fost confirmata");
            }
        }
        else
        {
            alert("Parola trebuie sa contina minim 4 caractere");
        }
    });
    
    function ajax_submit()
    {
        var user = 
        {
            username: $('[data-username=true]').val(),
            password: $('[data-password=true]').val()
        };
        return $.ajax(
            {
                url: $('[data-form=true]').attr('action'),
                type: $('[data-form=true]').attr('method'),
                data: user,
                content: 'json',
                success: function(conditie)
                {
                    if(conditie.status === 'OK')
                    {
                        return window.location.href = '/admin/user';
                    }
                    else
                    {
                        alert("Userul exista, alegeti alt user.");
                        return false;
                    }
                }
            });
    }
        
});