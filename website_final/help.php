<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    //header("location: login.php");
  }
?>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				
				$('#chat1').click(function(){
					$('#chatlink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#helplink').removeClass("active");
                                        $('#homelink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('chat.php');
					return false;
				});
                                
				
			});
      </script>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Help</h1>
        <p style="color:white">Need support? Have questions? We'll answer them here - if we can't, send us a message using the <a href="" id="chat1" style="textdecoration:none;">chat</a> and we'll respond to you as soon as we can.<br>
		<font size="2"><i>Note: clicking on a link will open the page in a new tab or window.</i></p>
      </div>


      <div class="container">
          <div class="row">
            <div class="span9">
		<h2>Support Hotlines & Websites</h2>
                <p><font size="4"><a href="https://www.esafety.gov.au/" target="_blank">Office of the Children's eSafety Commissioner</a> > <a href="https://www.esafety.gov.au/complaints-and-reporting/cyberbullying-complaints/i-want-to-report-cyberbullying" target="_blank">File a Complaint</a></font>
			<br>The Office of the Children's eSafety Commissioner is the governmental body that looks after your safety on the internet. If you see serious cyberbullying occurring online that should be removed immediately (like on YouTube, Twitter or Instagram), file a complaint and they will take action.
			<br><br>
		   <font size="4"><a href="https://kidshelpline.com.au/" target="_blank">Kids Helpline</a> > <a href="tel:+611800551800" target="_blank">1800 55 1800</a></font>
			<br>Kids Helpline is Australia's only free, 24/7 phone and online counselling service for young people aged 5 to 25. If you want to talk to someone immediately about your problems or issues, give them a call, or talk to them on their web chat.
			<br><br>
		   <font size="4"><a href="http://au.reachout.com/" target="_blank">ReachOut</a> > <a href="http://forums.au.reachout.com/" target="_blank">Forums</a></font>
			<br>ReachOut is Australia's leading online youth mental health service, available 24 hours a day, 365 days a year, providing practical information, tools and support to young people for everyday troubles to really tough times. They cover all sorts of topics - not just cyberbullying! If you are experiencing any issues, get in touch with them on their forums and join the conversation.
			<br><br>
		   <font size="4"><a href="https://www.education.gov.au/" target="_blank">Dept. Education & Training</a> > <a href="https://www.education.gov.au/state-and-territory-anti-bullying-policies" target="_blank">State and Territory Anti-bullying Policies</a></font>
			<br>Know your rights! Each of Australia's states and territories have different policies regarding bullying and the action you can take - read up about your state so you know who to go to, and better recognise bullying when it happens to you or someone around you.
		</p>
	    </div>

            <div class="span9">
		<h2>FAQ</h2>
                <p><b>What is 'Blast Off!'?</b>
			<br>We're a website that lets you upload screenshots of cyberbullying incidents to a secure server and keeps a log of it, so that you can keep track of cyberbullying incidents happening to you.
			<br><br>

		   <b>Why do we need a log?</b>
			<br>It's good to have evidence - if someone is bullying you constantly, sending you threatening messages or saying nasty things to you in real life, you can record it and upload it here, and keep track of it. This evidence can then be presented to the relevant authorities (like your school counsellor or principal, or even the police) and your claims will be sufficiently supported.
			<br><br>
			
		   <b>What kind of files can I upload?</b>
			<br>All sorts of files - it's up to you! It is best to upload direct screenshots from your phone or computer, recordings or videos as soon as the incident occurs, so we have an accurate timestamp.
			<br><br>
			
		   <b>How do I upload files?</b>
			<br>Once you've logged in, click the "Record" button on the top and then select the file you would like to upload.
			<br><br>

		   <b>Can I view, edit and/or delete my previous uploads?</b>
			<br>Your previous uploads can be viewed under "Record". These files can <b>not</b> be edited or deleted - if someone hacks in to your account without your permission, they will not be able to edit or delete any details, so your uploads will be safe.
			<br><br>
			
		   <b>What is "Report an Incident" and how do I use it?</b>
			<br>"Report an Incident" works in the same way as "Record" - but when it is not happening to <i>you</i>. Even if it is not happening to you, you can still help! If you see someone else experiencing any sort of bullying, you can upload it here as well. Please include as much detail about the incident as you can in the text box, including <b>names of the people involved</b>, the <b>location</b>, the <b>time it occurred</b>, and <b>which school(s) they attend</b>, so we can contact the relevant authorities.
			<br><br>

		   <b>My question is not here!</b>
			<br>Send us a message using the <b>chat</b> and we'll answer it as soon as possible.
			
		</p>
	    </div>

            <div class="span9">
		<h2>Our Affiliates</h2>
                <p><font size="5"><a href="http://projectrockit.com.au/" target="_blank"><img src="https://static1.squarespace.com/static/ta/552b558ae4b0395c41ad41d8/828/assets/projectrockit.png" style="background-color:black;"></a>
			<a href="http://telstra.com.au/" target="blank"><img src="https://www.telstra.com.au/etc/designs/tcom/tcom-core/img/telstra/favicon-base-blue.ico">Telstra</a>
		</p>
	    </div>



          </div>
      </div>