<?php 
	require_once('../../../wp-load.php');
	$emailResult;

	$your_company = htmlspecialchars($_POST['your_company']);
	$your_name = htmlspecialchars($_POST['your_name']);
	$your_mail = htmlspecialchars($_POST['your_mail']);
	$your_phone = htmlspecialchars($_POST['your_phone']);
	$your_address = htmlspecialchars($_POST['your_address']);
	$your_message = htmlspecialchars($_POST['your_message']);

	//担当先へ
	// $to='masaki@nakarai.co.jp';
	$to = 'ianchen0419@gmail.com';
	$subject = '海外販売支援へのお問い合わせ'; 
	$headers = array('Reply-To: '.$your_name.' <'.$your_mail.'>');
	$content = 
		'NAKARAIの海外販売支援にお問い合わせがありました。'."\n".
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
	$subject = 'お問い合わせありがとうございます。'; 
	$headers = array('Reply-To: '.'NAKARAI MEKKING'.' <masaki@nakarai.co.jp>');
	$content = 
		$your_name.'様'."\n\n".
		'この度はお問い合わせをいただきまして、誠にありがとうございます'."\n".
		'内容を確認いたしましたら、担当より追ってご連絡いたします'."\n\n".
		'---'."\n".
		'【企業名】'.$your_company."\n".
		'【お名前】'.$your_name."\n".
		'【メールアドレス】'.$your_mail."\n".
		'【電話番号】'.$your_phone."\n".
		'【住所】'.$your_address."\n".
		'【メッセージ】'."\n".$your_message."\n";
	wp_mail($to, $subject, $content, $headers);

	echo $emailResult;
?>