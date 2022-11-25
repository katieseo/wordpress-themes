<?php include('citrus-nail-header.php'); ?>

			<div class="content-wrapper">
				<div id="content-main" class="contact-us">
					<h1>Contact Us</h1>
					<div class="content-box">
						<div class="column-wrap">
							<div class="column50-left">
								<p><b>Citrus Nail Lounge Ltd.</b><br />
								Address: 206 Newport Drive, Port Moody, B.C. V3H 5B9<br />
								Phone: 778.355.4141</p>
								<iframe width="370" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?oe=utf-8&amp;client=firefox-a&amp;q=206+Newport+Drive,Port+Moody,+B.C.+V3H+5B9&amp;ie=UTF8&amp;hq=&amp;hnear=206+Newport+Dr,+Port+Moody,+Greater+Vancouver+Regional+District,+British+Columbia+V3H+5B9&amp;gl=ca&amp;t=m&amp;ll=49.282896,-122.826591&amp;spn=0.005879,0.015836&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?oe=utf-8&amp;client=firefox-a&amp;q=206+Newport+Drive,Port+Moody,+B.C.+V3H+5B9&amp;ie=UTF8&amp;hq=&amp;hnear=206+Newport+Dr,+Port+Moody,+Greater+Vancouver+Regional+District,+British+Columbia+V3H+5B9&amp;gl=ca&amp;t=m&amp;ll=49.282896,-122.826591&amp;spn=0.005879,0.015836&amp;z=15&amp;iwloc=A&amp;source=embed">View Larger Map</a></small>
							</div>
							<div class="column50-right">
								<script type="text/javascript">
								<!--
								function sendEmail(){
									var form = document.form1; 

									if(!form.cname.value){
										alert('Please fill out your name');
										form.cname.focus();
										return false;   
									}
									if(!form.email.value){
										alert('Please fill out your E-mail');
										form.email.focus();
										return false;   
									}
									 if(!form.phone.value){
										alert('Please fill out your phone number');
										form.phone.focus();
										return false;   
									}
									 if(!form.comments.value){
										alert('Please fill out your message');
										form.comments.focus();
										return false;   
									}
									if(confirm("Would you like to send?")){
										form.submit();
									}   
									return false;
								}
								//-->
								</script>
								<form action="send-message.php" method="post" name="form1" id="contactform">
									<dl>
										<dt>Name* </dt>
										<dd><input type="text" name="cname" /></dd>
										<dt>E-mail*</dt>
										<dd><input type="text" name="email" /></dd>
										<dt>Telephone*</dt>
										<dd><input type="text" name="phone" /></dd>
										<dt>Messages*</dt>
										<dd><textarea type="text" name="comments" rows="5"></textarea></dd>
										<dt>&nbsp;</dt>
										<dd><input type="button" value="SUBMIT" onclick="javascript:sendEmail()" /></dd>
									</dl>		       
									<input type="hidden" name="proctype" value="send" />           
								</form>
							</div>
						</div><!--/.column-wrap-->
					</div><!--/.content-box-->
				</div><!--/#content-main-->
			</div><!--/.content-wrapper--> 

<?php include('citrus-nail-footer.php'); ?>