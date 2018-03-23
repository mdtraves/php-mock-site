<?php
$pageTitle = 'Contact Page';
include ('wtf.php');
?>

<div class="text-center contact-form-div">
    <h1>Contact Us If You Like</h1>

    <?php

    function has_injections($str){
        return preg_match('/[\r\n]/', $str);
    }

    if (isset($_POST['contact-submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];



        if( has_injections($name) || has_injections($email)) {
            die();


        }
            if( !$email || !$msg || !$name) {
                echo '<h3>All fields are required!</h3><a href="contact.php">BACK</a>';
            exit;
            }

            // add recipient email //

        $to = 'mdtraves@hotmail.com';
        $subject = "$name sent you a message";
        $message = "Name; $name\r\n";
        $message .= "Email; $email\r\n";
        $message .= "Message; \r\n$msg";

        if (isset($_POST['subsribe'])){
            $message .= "\r\n\r\nPlease add $email to the mailing list\r\n";
        }
        $message = wordwrap($message, 70);

        $headers = "MIME-version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";

    mail($to, $subject, $message, $headers);

    ?>
    <h4>Thanks for the contact!</h4>
        <p><a href="index.php">&laquo; Go Home</a></p>

    <?php } else { ?>

        <form method="POST" action="" id="contact-form">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name">

            <label for="email">Your email</label>
            <input type="email" name="email" id="email">

            <label for="message">Your Message</label>
            <textarea name="message" id="message"></textarea>

            <input type="checkbox" name="subscribe" id="subscribe" value="subscribe"><label for="subscribe">Subscribe to
                the Newsletter</label>

            <input type="submit" class="button" name="contact-submit" value="Send Message">
        </form>
        <?php } ?>
</div>

<?php
include ('footer.php');
?>
