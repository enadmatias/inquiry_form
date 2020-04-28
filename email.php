<?php


require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");

if(isset($_POST) && isset($_POST['email'])){

$email = $_POST['email'];
$company = $_POST['company'];
$number = $_POST['number'];
$name = $_POST['name'];
$msg = $_POST['message'];
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP(); 

$mail->CharSet="UTF-8";  
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 1; 
$mail->Port = 587 ; //465 or 587
$mail->SMTPKeepAlive = true;
$mail->SMTPSecure = 'tls';  
$mail->SMTPAuth = true; 
$mail->IsHTML(true);

//Authentication
$mail->Username = "junearagoncillo@bpoc.co.jp";
$mail->Password = "junearagonszx111";

//Set Params
$mail->SetFrom($email,$name);
$mail->AddAddress("junearagoncillo@bpoc.co.jp");
$mail->Subject = "Inquiries";
$mail->Body ="<h2><b>Name: ".$name."<br>Company ".$company."<br>Email ".$email."<br>Number: ".$number."<br>Message: ".$msg."</b></h2>";

    if(!$mail->Send()) {
        echo "email not sent";
        
    } else {
     echo "Message has been sent";
}
}
?>		