<?php
/*
Template Name: Contact
*/
if(isset($_POST['submitted'])) {
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = "نام خود را وارد نمایید";
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}

		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = "رایانامه خود را وارد نمایید";
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = "رایانامه خود را به درستی وارد نمایید";
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}

		//Check to make sure comments were entered
		if(trim($_POST['comments']) === '') {
			$commentError = "فراموش کردید نظر بدید!";
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}

		//If there is no error, send the email
		if(!isset($hasError)) {
			$msg .= "------------User informations------------ \r\n"; //Title
			$msg .= "User IP: ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
			$msg .= "Browser Info: ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
			$msg .= "Referrer: ".$_SERVER["HTTP_REFERER"]; //Referrer

			$emailTo = ''.of_get_option('journal_contact_email').'';
			$subject = 'Contact Form Submission from '.$name;
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $comments \n\n $msg";
			$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

			if(mail($emailTo, $subject, $body, $headers)) $emailSent = true;

	}

}
get_header();

?>
<!-- begin colLeft -->
	<section>

			<h1>تماس با ما </h1>
			<p><?php echo stripslashes(stripslashes(of_get_option('journal_contact_summary')))?></p>

            <?php
                if(of_get_option('journal_contact_map')!="") {
            ?>
                <div id="contact-map">
                    <?php echo of_get_option('journal_contact_map'); ?>
                </div>
            <?php } ?>
                <div id="contact-form">

					<form id="contactForm" method="POST">
                    <div>
					<label for="nameinput">نام</label>
						<input type="text" id="nameinput" name="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField"/>
                    </div>
                    <div>
					<label for="emailinput">رایانامه</label>
						<input type="text" id="emailinput" name="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email"/>
                    </div>
                    <div>
					<label for="commentinput">دیدگاه شما</label>
						<textarea cols="20" rows="7" id="commentinput" name="comments" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                    </div><br />
                    <input type="hidden" name="submitted" id="submitted" value="true" />
					<button type="submit" id="submitbutton" class="submitbutton">ارسال پیغام</button>

					</form>

            </div><!-- contact_form -->

            <div id="contact-data">
                    <?php
                        if(of_get_option('journal_contact_address')!="") {
                    ?>	<p>
                        <span class="contact-data-field">آدرس:</span>
                        <span class="contact-data-info"><?php echo of_get_option('journal_contact_address'); ?></span>
                        </p>
                    <?php } ?>
                    <?php
                        if(of_get_option('journal_contact_phone')!="") {
                    ?>	<p>
                        <span class="contact-data-field">تلفن:</span>
                        <span class="contact-data-info"><?php echo of_get_option('journal_contact_phone'); ?></span>
                        </p>
                    <?php } ?>
                    <?php
                        if(of_get_option('journal_contact_fax')!="") {
                    ?>	<p>
                        <span class="contact-data-field">فکس:</span>
                        <span class="contact-data-info"><?php echo of_get_option('journal_contact_fax'); ?></span>
                        </p>
                    <?php } ?>
            </div>

	</section>
	<!-- end colleft -->

			<?php get_sidebar(); ?>

<?php get_footer(); ?>