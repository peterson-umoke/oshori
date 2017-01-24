
	</div><!--end wrapper-->
<script type="text/javascript" src="<?php echo js_uri('jquery.placeholder'); ?>"></script>	<!-- placeholder html5 tag support for IE and Old Browsers -->
<script>
    jQuery(document).ready(function($){
        //function for the contact-form dropdown
        function contact() {
            if ($("#cform").is(":hidden"))
            {
                $("#ribbon").css({"background":"url(<?php echo site_url('assets/img/ribbon.png'); ?>) bottom left no-repeat"});
                $("#home").slideUp("fast");
                $("#cform").slideDown("slow");
            }
            else{
                $("#ribbon").css({"background":"url(<?php echo site_url('assets/img/ribbon.png'); ?>) top left no-repeat"});
                $("#cform").slideUp("slow");
                $("#home").slideDown("slow");
            }
        }
        
        //run contact form when the ribbon is clicked
        $(".contact").click(function(){contact()});	

        $('#contactform').submit(function(){

            var action = $(this).attr('action');

            $("#message").slideUp(750,function() {
            $('#message').hide();

            $('#submit')
                .after('<img src="<?php echo site_url('assets/img/ajax-loader.gif'); ?>" class="loader" />')
                .attr('disabled','disabled');

            $.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                subject: $('#subject').val(),
                comments: $('#comments').val(),
                verify: $('#verify').val()
            },
                function(data){
                    document.getElementById('message').innerHTML = data;
                    $('#message').slideDown('slow');
                    $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
                    $('#submit').removeAttr('disabled');
                    if(data.match('success') != null) $('#contactform').slideUp('slow');

                }
            );

            });

            return false;

        });

        $('#subscribe').submit(function(){

		var action = $(this).attr('action');

		$("#mesaj").slideUp(750,function() {
		$('#mesaj').hide();

 		$('#ssubmit')
            .after('<img src="<?php echo site_url('assets/img/ajax-loader.gif'); ?>" class="subscribe-loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			email: $('#semail').val()
		},
			function(data){
				document.getElementById('mesaj').innerHTML = data;
				$('#mesaj').slideDown('slow');
				$('#subscribe img.subscribe-loader').fadeOut('slow',function(){$(this).remove()});
				$('#ssubmit').removeAttr('disabled');
				if(data.match('success') != null) $('#subscribe').slideUp('slow');

			}
		);

		});

		return false;

	});

    });
</script>
</body> 
</html>

