<?php 
if($_POST)
{
	require('konfirmasd123.php');
	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $email_date = date('d-m-Y H:i:s');

    $email_subject = 'New Message From Awannawa Contact';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Phone: $phone.\n".
                  "Message: $message.\n".
                  "Tanggal: $email_date.\n";

    $to ="ahmadrizqik@gmail.com";
	$headers = "From: admin@awannawa.com\n";
    $headers .= "Reply-To: $email \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
    header("location:/success.html");
}else {
$output = json_encode(array("Maaf Pesan atau Halaman yang anda minta tidak dapat diproses"));
	    die($output);
	}
?>