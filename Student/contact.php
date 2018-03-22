<?php
$pageTitle = 'Contact Page';
include ('wtf.php');
?>

<div class="text-center contact-form-div">
    <h1>Contact Us If You Like</h1>
    <form method="'post" action="" id="contact-form">
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" >

        <label for="email">Your email</label>
        <input type="email" name="email" id="email" >

        <label for="message">Your Message</label>
        <textarea  name="message" id="message" ></textarea>

        <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" ><label for="subscribe">Subscribe to the Newsletter</label>

        <input type="submit" class="button" name="contact-submit" value="Send Message">
    </form>
</div>

<?php
include ('footer.php');
?>
