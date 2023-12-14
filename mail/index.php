<html>
<head>
	<link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
	<title>Kontak Form</title>
	
</head>
<body>
	
	
	<div class="contact-form">
		<h2>HUBUNGI SAYA</h2>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Nama Kamu" required>
			<input type="tel" name="phone" placeholder="No Telp Kamu" required>
			<input type="email" name="email" placeholder="Email kamu" required>
			<textarea name="message" placeholder="Ketik pesan disini" required></textarea>
			
			<div class="g-recaptcha" data-sitekey="6Lcjjr0UAAAAALNG6t8Umv_dD5xtHP6VU8comOGt"></div>

			
			<input type="submit" name="submit" value="Kirim" class="submit-btn">
		</form>
	
		<div class="status">
		
		<?php
			if(isset($_POST['submit']))
			{
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$email_date = date('d-m-Y H:i:s');
				
				$email_from = 'admin@awannawa.com';
				$email_subject = "New Mail From awannawa.com";
				$email_body = "Nama: $name.\n".
							"No Telepone: $phone.\n".
							"Email: $email.\n".
							"Pesan:  $message.\n".
							"Tanggal: $email_date.\n";
							
			$to_email = "ahmadrizqik@gmail.com";
			$headers = "From: $email_from \r\n";
			$headers .= "Reply-To: $email \r\n";
			
			$secretKey = "6Lcjjr0UAAAAAMVaMi-t3aPw74cqrIgDE9o_-Lpl";
			$responseKey = $_POST['g-recaptcha-response'];
			$UserIP = $_SERVER['REMOTE_ADDR'];
			$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
			
			$response = file_get_contents($url);
			$response = json_decode($response);
			
			if ($response->success)
			{
				mail($to_email,$email_subject,$email_body,$headers);
				echo "Pesan berhasil dikirim";
			}
			else
			{
				echo "<span>Gagal, Coba Lagi</span>";
			}
		  }
		?>
				
		</div>
	
	</div>
</body>

</html>