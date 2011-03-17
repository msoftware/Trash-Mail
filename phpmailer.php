<?

include "config.php";
include "inc/PHPMailer_v5.1/class.phpmailer.php";

function sendMail ($frommail, $fromname, $tomail, $toname, $subject, $body, $ccmail = null, $ccname = null)
{
	global $username, $password, $smtphost;

	$mailer = new PHPMailer();
	$mailer->IsSMTP();
	$mailer->Host = $smtphost;
	$mailer->SMTPAuth = TRUE;
	$mailer->CharSet = 'utf-8';
	$mailer->SetLanguage ("de");
	$mailer->Username = $username;
	$mailer->Password = $password;

	$mailer->From = $frommail;
	$mailer->FromName = $fromname;
	$mailer->Body = $body;
	$mailer->Subject = $subject;

	$mailer->AddAddress($tomail, $toname);
	if (isset ($ccmail))
	{
		$mailer->AddCC($ccmail, $ccname);
	}

	if(!$mailer->Send()) {
		return false;
	} else {
		return true;
	}
}

?>
