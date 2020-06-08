<?php 
// https://stackoverflow.com/questions/16616250/form-submit-with-ajax-passing-form-data-to-php-without-page-refresh
if(isset($_POST["name"]) || isset($_POST["subject"]) || isset($_POST["phone"]) || isset($_POST["email"]) || isset($_POST["message"]) ) 
    {
    $to = "shaynhacker@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    // $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " ". " wrote the following:" . "\n\n" . $_POST['subject'];
    // $message = $name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
