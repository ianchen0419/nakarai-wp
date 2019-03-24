<?php 
	require_once('../../../wp-load.php');
	$emailResult;

	$your_name = htmlspecialchars($_POST['your_name']);
	$your_mail = htmlspecialchars($_POST['your_mail']);
	$your_phone = htmlspecialchars($_POST['your_phone']);
	$your_address = htmlspecialchars($_POST['your_address']);
	$your_message = htmlspecialchars($_POST['your_message']);

	//担当先へ
	// $to='masaki@nakarai.co.jp';
	$to = 'ianchen0419@gmail.com';
	$subject = '海外言語サイトへのお問い合わせ'; 
	$headers = array('Reply-To: '.$your_name.' <'.$your_mail.'>');
	$content = 		
		'NAKARAIの海外言語サイトにお問い合わせがありました。'."\n".
		'下記の内容をご確認お願いします。'."\n\n".
		'---'."\n".
		'【企業名】'.$your_company."\n".
		'【お名前】'.$your_name."\n".
		'【メールアドレス】'.$your_mail."\n".
		'【電話番号】'.$your_phone."\n".
		'【住所】'.$your_address."\n".
		'【メッセージ】'."\n".$your_message."\n";
	if(wp_mail($to, $subject, $content, $headers)) {
	    	//成功時の記述
	    	$emailResult='success';
	} else {
	    	//失敗時の記述
	    	$emailResult='fail';
	}

	// お客様へ
	$to = $your_mail;
	$subject = 'Thank you for your inquiry.'; 
	$headers = array('Reply-To: '.'NAKARAI MEKKING'.' <masaki@nakarai.co.jp>');
	$content = 
		'Dear '.$your_name.','."\n\n".
		'Thank you for contacting us.'."\n".
		'We are now processing your inquiry and contact you within the next three business days.'."\n".
		'*This is an automatically generated e-mail.'."\n\n".
		'---'."\n".
		'【Name】'.$your_name."\n".
		'【E-mail address】'.$your_mail."\n".
		'【Phone number】'.$your_phone."\n".
		'【Address】'.$your_address."\n".
		'【Message】'."\n".$your_message."\n";

	wp_mail($to, $subject, $content, $headers);

	echo $emailResult;
?>