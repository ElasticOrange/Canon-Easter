$(document).ready(function() {
    $('[data-buton=true]').click(ajax_submit);
    $('[data-photo=true]').change(photo_name);
    
    function photo_name()
    {   
        var photo = $('[data-photo=true]')[0].files[0];
        name = photo.name;
        $('[data-photo2=true]').val(name);
    };
    
    function ajax_submit(e)
    {
        e.preventDefault();
        return $.ajax(
            {
                xhr: function () {  
                    return $.ajaxSettings.xhr();
                },
                url: $('[data-form=true]').attr('action'),
                type: $('[data-form=true]').attr('method'),
                data: new window.FormData($('[data-form=true]')[0]),
                content: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(s)
                {
                    if(s.status === 'OK')
                    {
                        $('[data-form=true]').hide();
                        $('.invizibil').show();
                        console.log("OK");
                    }
                    else
                    {
                        console.log("Error");
                    }
                },
                error: function(p)
                {
                    $('.form-control').removeClass("warning");
                    
                    if (typeof p.responseJSON.nume != 'undefined')
                    {
                        console.log('Nu exista nume');
                        $('[data-nume=true]').addClass("warning");
                    }
                    
                    if (typeof p.responseJSON.telefon != 'undefined')
                    {
                        $('[data-telefon=true]').addClass("warning");
                        console.log('Nu exista telefon');
                    }
                    
                    if (typeof p.responseJSON.adresa != 'undefined')
                    {
                        $('[data-adresa=true]').addClass("warning");
                        console.log('Nu exista adresa');
                    }
                    
                    if (typeof p.responseJSON.email != 'undefined')
                    {
                        $('[data-email=true]').addClass("warning");
                        console.log('Nu exista email');
                    }
                    
                    if (typeof p.responseJSON.photo != 'undefined')
                    {
                        $('[data-photo2=true]').addClass("warning");
                        console.log('Nu exista photo');
                    }
                    
                    console.log(p);
                },
            });
    }
});