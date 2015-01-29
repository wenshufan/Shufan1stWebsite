<?php include('includes/header.php');  ?>

<h2>Contact Me</h2>
<?php


if ( isset ($_POST['submit']) ) 

{ // if the submit button is clicked...

$mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email

$mailSubject = "{$_POST['subject']}"; // subject of the email

$mailRecipient = "susanwen@uw.edu"; // destination email address

$mailSender = "From: {$_POST['email']}"; // the mail sender

mail ($mailRecipient, $mailSubject , $mailMessage, $mailSender); // function to send the email

print ("<p class=\"big\">Thank you for contacting me <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user

echo "Your name: ".$_POST['name']."<br>";
echo "Your email: ".$_POST['email']."<br>";
echo "Your subject: ".$_POST['subject']."<br>";
echo "Your message: ".$_POST['message']."<br>";


$subject=$_POST['subject'];
if($subject=="Nothing Important")

{
	echo "<br>"."If it is not important, why wasting your time?"."<br>";}
	
	elseif($subject=='Comment')
		{echo "<br>"."Only constructive comment please"."<br>";}

}

else { 
	echo '<p> Only send me something important please.</p>';
}





?>

	<!-- Begin Text -->
    <article id="text">
  


    <p> Please contact me if you would like to know more about my work. </p>
 <form action="contact.php" method="post" name="contact">
 <label for="name" method="post">Name:</label>
 <input name="name" type="text" maxlength="20" size="8" required>
 <label for="email" method="post">Email: </label>
 <input name="email" type="email" required> 
 <label for="subject" method="post">Subject: </label>
 
 <select name="subject">
 <option value="Not Specific" selected="Not Specific">Not Specific</option>
 <option value="Generic Inquiry">Generic Inquiry </option>
 <option value="Specific Inquiry"> Specific Inquiry </option>
 <option value="Comment"> Comment </option>
 <option value="Nothing Important"> Nothing Important </option>
 </select>
 
 <label for="message" method="post"> Message:</label>
 <textarea name="message" cols="40" rows="5"> </textarea>
 <input name="swear" type="checkbox" value="swear" required>
 <span> I swear I am human </span>
 <button type="submit" name="submit" value="Submit Message"> Submit Message</button>
 <br>
 <button type="reset" name="reset" value="reset info"> Reset</button>
 </form>
    
    </article>
    <!-- End Text -->
    <!-- Begin Sidebar -->
     <aside id= "sidebar">
    <h2 id="sub-navigation-title">My Work</h2>
    <ul id="sub-navigation">
      <li><a href="portfolioAmazon.php">AWS Internship</a></li>
      <li><a href="portfolioGoogleCloud.php">Google Cloud</a></li>
      <li><a href="portfolioUxpertise.php">UXpertise Website</a></li>
      <li><a href="portfolioMobileAds.php">Mobile Research</a></li>
      <li><a href="portfolioPNV.php">Website Redesign</a></li>
      <li><a href="portfolioTLR.php">Earthquake Preparation</a></li>
      <li><a href="portfolioOldWebsite.php">Axure</a></li>
      <li><a href="portfolioSketch.php">Sketches</a></li>
    </ul>
  </aside>
    <!-- End Sidebar -->
<?php include('includes/footer.php'); ?>