<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once __DIR__ . '/vendor/autoload.php';
$errors = [];
$errorMessage = '';
if (!empty($_POST)) {
   $title = $_POST['title'];
   $country = $_POST['country'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $dob = $_POST['dob'];
   $cv = $_POST['cv'];
   $citizenship = $_POST['citizenship'];
     if (!empty($errors)) {
       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   } else {
       $mail = new PHPMailer();
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'boharas371@gmail.com';
       $mail->Password = 'sexafpiukiqozexc';
       $mail->SMTPSecure = 'tls';
       $mail->Port = 2525;
       $mail->setFrom($email, 'Mailtrap Website');
       $mail->addAddress('boharas371@gmail.com', 'Me');
       $mail->Subject = 'New message from your website';

       // Enable HTML if needed
       $mail->isHTML(true);
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Address: {$address}","DOB: {$dob}","Job Title: {$title}","Apply Country: {$country}","CV: {$cv}","Citizenship: {$citizenship}"];
       $body = join('<br />', $bodyParagraphs);
       $mail->Body = $body;
       echo $body;
      $mail->AddAttachment($_FILES["cv"]["tmp_name"], $_FILES["cv"]["name"]);

       if($mail->send()){
           header('Location: index.php');
       } else {

        $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
       }

   }

}

?>
