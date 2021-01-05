<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_subject = $_POST['cf_subject'];
$field_message = $_POST['cf_message'];


$mail_to = 'basile22agustin@gmail.com';
$subject = 'MV Diseño Digital -  '.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'Email: '.$field_email."\n";
$body_subject .= 'Asunto: '.$field_email."\n";
$body_message .= 'Mensaje: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>

	<script language="javascript" type="text/javascript">
		Swal.fire({
			title: 'Error!',
			text: 'Do you want to continue',
			icon: 'error',
			confirmButtonText: 'Cool'
		})

		alert('Gracias por contactarte. Te responderé a la brevedad.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>

	<script language="javascript" type="text/javascript">
		alert('El mensaje no pudo ser enviado. Por favor, envie un email a gordon@template-help.com');
		window.location = 'index.html';
	</script>
<?php
}
?>