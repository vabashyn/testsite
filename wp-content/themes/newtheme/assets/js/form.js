$(".submit-button").on("click", function (event) {
    event.preventDefault();
    var name = $(".form-name").val();
    var email = $(".form-email").val();
    var tel = $(".form-tel").val();
    var text = $(".form-text").val();
    $.ajax({
        url: "/wp-admin/admin-ajax.php",
        method: 'post',
        data: {
            action: 'ajax_order',
            name: name,
            email: email,
            tel: tel,
            text: text
        },
        success: function (response) {
            $('#submit-ajax').html(response);
        }
    });
});
;(function(factory) {
    'use strict';
    if ( typeof define === 'function' && define.amd ) {
        define(['jquery'], factory);
    } else if ( typeof exports !== 'undefined' ) {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }
}(function($) {
        'use strict';


        $(".js-send-form").submit(function(el) {
            var $this = $(this);
            el.preventDefault();

            if ( $('#'+$this.attr('id')).valid() == false ) {
                return false;
            }

            $this.find('.js-submit-form-button').attr('disabled', true);

            var fd = new FormData();
            fd.append('post', $this.serialize());
            fd.append('action', 'form-send');
            fd.append('nonce', ajaxData.protect);

            var jqXHR = $.ajax({
                xhr: function() {
                    var xhrobj = $.ajaxSettings.xhr();
                    return xhrobj;
                },
                url: ajaxData.url,
                type: "POST",
                contentType:false,
                processData: false,
                cache: false,
                data: fd,
                success: function(data) {
                    if ( data.status == false ) {
                        var errorMessage = 'При отправке формы возникла ошибка!';
                        if ( typeof data.errCode != 'undefined' ) {
                            errorMessage = errorMessage+' Номер ошибки: '+data.errCode+'.';
                        }
                        $this.find('.js-submit-form-button').attr('disabled', false);
                        alert(errorMessage);
                        return;
                    }

                    $this.find('div, button').addClass('blur');
                    $this.append('<div class="success-message">'+data.message+'</div>');

                    if ( typeof dataLayer != 'undefined' ) {
                        dataLayer.push({'event': 'action-form-send'});
                    }
                },
                error: function(data){
                    $this.find('.js-submit-form-button').attr('disabled', false);
                    alert('При отправке формы возникла ошибка!');
                },
            });

            return false;
        });
    }
));

function limitname(element)
{
    var max_chars = 6;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
function limittel(element)
{
    var max_chars = 13;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

function limittext(element)
{
    var max_chars = 65;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}