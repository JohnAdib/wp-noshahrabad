$j = jQuery.noConflict();
$j(document).ready(function() {
	$j('form#contactForm').submit(function() {
		$j('form#contactForm .error').remove();
		var hasError = false;
		$j('.requiredField').each(function() {
			if(jQuery.trim($j(this).val()) == '') {
				var labelText = $j(this).prev('label').text();
				$j(this).parent().append('<span class="error">فیلد اجباری '+labelText.toLowerCase()+' وارد نشده است.</span>');
				hasError = true;
			} else if($j(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($j(this).val()))) {
					var labelText = $j(this).prev('label').text();
					$j(this).parent().append('<span class="error">مقدار '+labelText.toLowerCase()+' به اشتباه وارد شده است.</span>');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			var formInput = $j(this).serialize();
			$j.post($j(this).attr('action'),formInput, function(data){
				$j('form#contactForm').slideUp("fast", function() {
					$j(this).before('<p class="thanks"><strong>ممنون</strong>پیغام شما ارسال شد. بزودی با شما تماس خواهیم گرفت.</p>');
				});
			});
		}
		  return false;

	});
});