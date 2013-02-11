<?php

if($_POST['submit']) {
	if(empty($_POST['inputName']) || empty($_POST['inputEmail']) || empty($_POST['inputComments'])) {
		$error = true;
	} else {
		$to = 'cvo.media@gmail.com';
		
		$name = $_POST['inputName'];
		$email = $_POST['inputEmail'];
		$comments = $_POST['inputComments'];
		
		$subject = $name . ' has sent you a message through Mousefolio';
		
		$email_message = 'Name: ' . $name . '\n';
		$email_message .= 'Email: ' . $email . '\n';
		$email_message .= 'Message: ' . $comments;
		
		$mail_snet = mail($to,$subject,$email_message,
			"From: " . $_POST['inputEmail'] . "\n" .
			"MIME-Version: 1.0\n" .
			"Content-type: text/html; charset=iso-8859-1");
			
		if($mail_sent) {
			$sent = true;
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Mousefolio | A portfolio site by Christine Vo, Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
	<div class="header" id="top">
		<div class="container">
	        <div class="row-fluid">
	            <div class="span12 text-center">
	                <img class="logo" src="assets/img/logo.png" alt="Mousefolio" />
	                <h5>a portfolio site by Christine Vo</h5>
	            </div>
	        </div>
		</div>
	</div>
	<div class="navigation hidden-tablet" data-spy="affix" data-offset-top="260">
		<div class="container">
			<div class="row-fluid">
	            <ul class="nav">
	                <li class="active"><a href="#top">Home</a></li>
	                <li><a href="#skills">Skills</a></li>
	                <li><a href="#works">Works</a></li>
	                <li><a href="#contact">Contact</a></li>
	            </ul>
	        </div>
		</div>
	</div>
	<div class="navigation visible-tablet" data-spy="affix" data-offset-top="320">
		<div class="container">
			<div class="row-fluid">
	            <ul class="nav">
	                <li class="active"><a href="#top">Home</a></li>
	                <li><a href="#skills">Skills</a></li>
	                <li><a href="#works">Works</a></li>
	                <li><a href="#contact">Contact</a></li>
	            </ul>
	        </div>
		</div>
	</div>
	<div class="main">
	    <div class="container">
	        <div class="row-fluid about">
	            <div class="span12">
	            	<h3>Hello!</h3>
	                <p>My name is Christine Vo, and I am a web developer.  I mostly specialize in front-end development; however, I love discovering </p>
	            </div>
	        </div>
	        <div class="row-fluid skills" id="skills">
	        	<div class="span12">
	        		<h3>Skills</h3>
	        		<p>I'm learning new techniques and software all the time, so these lists are constantly updating!</p>
	        		<div class="row-fluid">
	        			<div class="span4 languanges">
	        				<h4 class="title">Languages</h4>
	        				<ul>
	        					<li>HTML/XHTML</li>
	        					<li>CSS3</li>
	        					<li>LESS</li>
	        					<li>JavaScript</li>
	        					<li>jQuery</li>
	        					<li>PHP</li>
	        					<li>cakePHP</li>
	        					<li>SQL</li>
	        				</ul>
	        			</div>
	        			<div class="span4 primary-software">
	        				<h4 class="title">Primary Software</h4>
	        				<ul>
	        					<li>PhpStorm 4</li>
	        					<li>Aptana Studio 3</li>
	        					<li>FileZilla</li>
	        					<li>Adobe Photoshop CS5</li>
	        					<li>Amazon Webstore 2.0</li>
	        					<li>Git</li>
	        				</ul>
	        			</div>
	        			<div class="span4 other-software">
	        				<h4 class="title">Other Software</h4>
	        				<ul>
	        					<li>XAAMP</li>
	        					<li>phpMyAdmin</li>
	        					<li>Clarizen</li>
	        					<li>Wordpress</li>
	        					<li>Adobe Dreamweaver CS5</li>
	        					<li>Adobe Illustrator CS5</li>
	        					<li>MS Office 2010</li>
	        				</ul>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	        <div class="row-fluid works" id="works">
	            <div class="span12">
	                <h3>Works</h3>
	                <div class="row-fluid">
	                    <div class="span4 thumbnail"><a href="http://www.highsierra.com" target="_blank"><img src="assets/img/thumbnails/highsierra.jpg" alt="High Sierra" /></a></div>
	                    <div class="span4 thumbnail"><a href="http://www.unionbay.com" target="_blank"><img src="assets/img/thumbnails/unionbay.jpg" alt="Union Bay" /></a></div>
	                    <div class="span4 thumbnail"><a href="http://store.taylorswift.com" target="_blank"><img src="assets/img/thumbnails/taylorswift.jpg" alt="" /></a></div>
	                </div>
	                <div class="row-fluid">
	                    <div class="span4 thumbnail"><a href="http://www.dymegroup.com" target="_blank"><img src="assets/img/thumbnails/dymegroup.jpg" alt="Dyme Group" /></a></div>
	                    <div class="span4 thumbnail"><a href="http://www.valaevents.com" target="_blank"><img src="assets/img/thumbnails/valaevents.jpg" alt="Vala Events" /></a></div>
	                    <div class="span4 thumbnail"><a href="http://www.indieinsurance.com" target="_blank"><img src="assets/img/thumbnails/indieinsurance.jpg" alt="Independence Insurance" /></a></div>
	                </div>
	            </div>
	        </div>
	        <div class="row-fluid contact" id="contact">
	        	<div class="span12">
	        		<h3>Contact Me</h3>
	        		<p>So enough about me, is there anything you'd like to say?  Whether it's a question about my skills, a comment about my work, or even constructive criticism about my coding, I'm more than happy to hear from you!</p>
	        		<div class="row-fluid">
	        			<div class="span6 offset3">
	        				<?php if($error == true) { ?>
	        					<div class="alert alert-error">
	        						There was a missing field on the form.  Please make sure you enter your details and comments in all the boxes provided.
	        					</div>
	        				<?php } ?>
			        		<form class="form-horizontal" name='contact_form' method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) . '#contact'; ?>">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="inputName">Name</label>
										<div class="controls">
									    	<input type="text" id="inputName" name="inputName" placeholder="Hey You">
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail">Email</label>
										<div class="controls">
									    	<input type="email" id="inputEmail" name="inputEmail" placeholder="your-email@email.com">
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputComments">Comments or Questions</label>
										<div class="controls">
											<textarea rows="4" id="inputComments" name="inputComments"></textarea>
									    </div>
									</div>
									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit" class="btn" value="Submit">
										</div>
									</div>
								</fieldset>
							</form>
							<?php if($sent == true) { ?>
	        					<div class="alert alert-success">
	        						Thank-you for your input!  I will respond to your message as soon as I can.
	        					</div>
	        				<?php } ?>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
	<div class="footer">
	    <div class="row-fluid footer">
	    	<div class="copyright text-center">
	    		<small>&copy; <?php echo date('Y'); ?> Christine Vo</small>
	    	</div>
	    </div>
	</div>



    <!-- Le javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
    	$(document).ready(function() {
    		
    		// navigation: scroll to page section
			$('ul.nav li a').click(function(e){
				e.preventDefault();
				var div = $(this).attr('href');
				div = 'div' + div;
				var pos_div = $(div).offset().top;
				var pos_current = $(document).scrollTop();
				if(pos_current <= 260) {
					pos_div = pos_div - 42;
				}
				$('html, body').animate({
			         scrollTop: pos_div
			     }, 800);
			});
			
			// clear contact input values
			$(':input').each(function() {
                if ($(this).attr("type") == 'text') {
                    $(this).val('');
                }
            });
			$("textarea").val('');
			
    	});
		
		// contact form validation
		function validate_form(){
            if (document.contact_form.inputName.value == '') {
                alert('Please enter your name');
                document.contact_form.inputName.focus();
                return false;
            }
            var emailaddress = document.contact_form.inputEmail.value;
            if (validateEmail(emailaddress) == false) {
                document.contact_form.inputEmail.focus();
                return false;
            }
            if (document.contact_form.inputComments.value == '') {
                alert('Please enter your comments or questions');
                document.contact_form.inputComments.focus();
                return false;
            }
            return true;
        }
        
        function createConfirm() {
        	var alert_confirm = $('<div />').addClass('alert alert-success').text('Thank-you for your input!  I will respond to your message as soon as I can.');
        	$('div#contact form fieldset').append(alert_confirm);
        }
        
        function validateEmail(email) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email;
            if(reg.test(address) == false) {
                alert('Please enter valid email address.')
                return false;
            } else {
                return true;
            }
        }

    </script>

</body>
</html>