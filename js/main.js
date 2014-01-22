(function ($) {
    $('#contactform').on('submit', function (e) {
        e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function (msg) {
                		$('#contactform').find("input[type=text], input[type=email],textarea").val("");
                        $('.feedback').append('<div class="success">Votre message a bien été envoyé</div>').fadeIn( "slow" ).delay(800).fadeOut("slow");
                    },
                error: function(msg) {
                		$('#contactform').find("input[type=text], input[type=email],textarea").val("");
                        $('.feedback').append('<div class="error">Une erreur est survenue lors de l\'envoi de votre message</div>').fadeIn( "slow" ).delay(800).fadeOut("slow");
                }
            });
        });
}).call(this, jQuery);
