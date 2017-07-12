<?php
try{
  echo"メールを送信中";
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  #メール送信（お客様用）
  $to      = $_POST['email'];//arimaron.mohumohu@gmail.com
  $subject = 'フォームのご記入ありがとうございます';
  $headers = 'From:matsuo-bkgoose-33j@i.softbank.jp';
  $message = 'フォームのご記入ありがとうございます。
  意見やコメントなどありがたく拝見さていただきます。
  もし連絡がご希望の方の場合は、内容を拝見次第すみやかに
  こちらから再度メールを送信させていただきますので、
  今しばらくお待ちください。'.'\n'.'\n'.
  ' フォームのご記入内容は以下の通りです。'.'\n';
  $message .= '\n'.'========================='.'\n';
  $message .= 'お名前：'.$_POST['name'].'\n';
  $message .= 'メールアドレス：'.$_POST['email'].'\n';
  $message .= '内容：'.$_POST['detail'].'\n';

  mb_send_mail($to, $subject, $message, $headers);

  #メール送信（自分用）
  $to      = 'matsuo-bkgoose-33j@i.softbank.jp';//arimaron.mohumohu@gmail.com
  $subject = 'フォームのご記入がありました';
  $headers = 'From:matsuo-bkgoose-33j@i.softbank.jp';
  $message = 'フォームのご記入がありました。'.'\n';
  $message .= 'フォームのご記入内容は以下の通りです。'.'\n';
  $message .= '\n'.'========================='.'\n';
  $message .= 'お名前：'.$_POST['name'].'\n';
  $message .= 'メールアドレス：'.$_POST['email'].'\n';
  $message .= '内容：'.$_POST['detail'].'\n';

  mb_send_mail($to, $subject, $message, $headers);

}catch(Exception $e){
  echo $e -> getMessage();
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="1;URL=thanks.html">
</head>
</html>
