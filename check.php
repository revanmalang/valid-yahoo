<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] Yahoo Email Checker [#]    
                                   
Coded by : Revan AR                  
Team     : IndoSec                   
Github   : https//github.com/revan-ar/\n\n\e[0;1m";
sleep(3);
echo $banner;
sleep(2);
echo "Masukan List : ";
$list = trim(fgets(STDIN));
$file = file_get_contents($list);
sleep(1);
if (empty($file)) {
	echo "File ".$list." tidak ada\n";
	}else{
		
$exp = explode("\n", $file);
foreach($exp as $asu) {

$mek = array("language" => "id-ID","color_depth" => 24,"device_memory" => 2,"hardware_concurrency" => 4,"resolution" => array("w" => 640,"h" => 360),"available_resolution" => array("w" => 640,"h" => 360),"timezone_offset" => -420,"session_storage" => 1,"local_storage" => 1,"indexed_db" => 1,"open_database" => 1,"cpu_class" => "unknown","navigator_platform" => "Linux armv8l","canvas" => "canvas winding:yes~canvas","webgl" => 1,"webgl_vendor" => "Qualcomm~Adreno array(TM) 306","adblock" => 0,"has_lied_languages" => 0,"has_lied_resolution" => 0,"has_lied_os" => 0,"has_lied_browser" => 0,"touch_support" => array("points" => 5,"event" => 1,"start" => 1),"audio_fp" => "124.08072291687131","plugins" => array("count" => 0,"hash" => "24700f9f1986800ab4fcc880530dd0ed"),"fonts" => array("count" => 11,"hash" => "1b3c7bec80639c771f8258bd6a3bf2c6"),"ts" => array("serve" => 1549906736357,"render" => 1549906691165));
$post = json_encode($mek);


$cok = curl_init();
curl_setopt($cok, CURLOPT_URL, "https://login.yahoo.com/account/challenge/username?.intl=id&.lang=id-ID&.src=fpctx&done=https%3A%2F%2Fid.yahoo.com%2F&authMechanism=secondary&sessionIndex=Qg--");
curl_setopt($cok, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cok, CURLOPT_HEADER, 1);
curl_setopt($cok, CURLOPT_HTTPHEADER, array("Referer: https://login.yahoo.com/account/challenge/username?.intl=id&.lang=id-ID&.src=fpctx&done=https%3A%2F%2Fid.yahoo.com%2F&authMechanism=secondary&sessionIndex=Qg--", "Upgrade-Insecure-Requests: 1", "Origin: https://login.yahoo.com", "Content-Type: application/x-www-form-urlencoded", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8", "Cookie: AO=u=1; ucs=fs=1&lnct=1539619332; B=1c91sqddjafhv&b=4&d=V1DXPJppYF7oED7Hpnf24a.LBCg-&s=f6&i=MapnNMd.eyWA.CAwUUf_; T=z=jmSScBj65WcBTMs5/DA.CS8Mjc3TwYzMTczTjQ3MTQ0TjAyTj&a=QAE&sk=DAAL.47Os8OMDD&ks=EAAKF0IZkD3GxSCzs2Y8Rl7uA--~G&kt=EAA2q2UUmuIQOiv_ubi5FElHg--~I&ku=FAAhkqL5Y3_xDxeAivOfNjgHEO1IGIHDA.niyU9XNHRQ7PjyTdLFgl2y2ZXaaPHKv3m6SBE5hn6D1OHC12rHUiLz8pa13dfUm.53dqYMH_30HcddIb1f1Fjskz116Q2bhmt8.27iIgk1l7EFAiM_SVgtI9cm.2j9N7fMxPpTKsq5CU-~A&d=bnMBeWFob28BZwFWVk5SNVZIS0pBTDdSVEZBNktXNzVIQU5MVQFzbAFOVEF3T0FFME5qQTBPVE13TmpNek9UYzFPVFE1TkRjLQFhAVFBRQFhYwFBQnlOY0lXbwFjcwEBYWwBenphdXZpeWEBc2MBbW9iaWxlX3dlYgFmcwFvRkQzems1Yk5UNXIBenoBam1TU2NCQTdF&af=JnRzPTE1NDgyOTg2NTkmcHM9dk1jY0VJYlgyTG5LQktCbTB3cE1xdy0t; F=d=Llbgi0E9vP1yxECfyuiNREMMghqzNX6_bt120Q--; PH=fn=HSQLzITUQ.6vOkpnmQ--&l=id-ID&i=id; Y=v=1&n=232jfc675eh05&l=omfwx5ujk7hkhnwac1wx9pia041sdst4cijeueeg/o&p=o34vvid00000000&r=14p&lg=id-ID&intl=id; FS=v=1&d=LtiKjhgFvYKJ1Ie.6hLeo3kg8Ov.BYOOX5tx1U0DnB46MFBBDHFzmee4FYAIGv5VrJ52bK6n6DumHzVzSkZW7sFg91gYjjjchZZXjGap39qRHVf0aGfxTWGR6lbpei_dAaVSpKZ4APzYzgPPyBLSpqasX73dMhyIjG0orpfF1VMSOhb29HH04UZFENbBKpL6895S46dWGWAY8unKijD8Nm_E7Zqk8Vbooh2OfCiqB4e0QUZ2LN9RreVtfMYXdRvADzQh2sC0PkuNKNKEzLNFaAUpo7a.jgAIKTJpxgVHyTGsHscF~A; GUC=AQEAAQJcSnVdEEIeQAS6&s=AQAAAP4NkPp7&g=XEkprQ; AS=v=1&s=t6143VcU&d=A5c6304ad|hOc6rYr.2cJnfM5Ak3fTGF0obNKzq0AJwaBWbfQT8q8p6nTriVXoLdTKBjEjBzL97JaZVvzbMcTkisKKSqxqj_GdZXHdOONWTxyrVlKqmFpMVHUWtqLXSBtz_hxk1LJCakGmRzSLbQHPROwK.opcIQI2PGLRoSVQywqiqWIN3r5ncqoSzOXCKs_L3RjFRWmGrNLwIWi0J.2W4cW1hlorUJ_ikx4SXUuy9N3VpSzlQo6_gjbY7O.VPu8Br3hFApXfIQsKZ_.KGAVzms59K93rO6PnEZjy6.t20P_Ae1LrRdVY7wuylta0qFfK2EZy32ccTeelc43.6xXP7u3M.IQlJrBnqVpVvLlK8_2wcDQMFgFqjDblrkqBoXua2JWCwqBUV39gf0Qo79Dc58pjdDe_ehfmzEORLG5hJnmBw.rFKT67n_bFbA2pBw9yynq3ANfO9AUyjsFW4Ridk6D7ufW27_I8jN1rpb2uTqH3UwkCUBCX5j.h66HlHsAXv7nrxCxCnDb0VAkbFBC6nI7_dqyCUOw8FHn3Pyzlqey4LDYlE0aS.XCGqmky3xGcpmSsn0SO6D6uCR78koJz13RqxXkB7sUsq9Idyn0gQbQ_SlKo.p5RVNP.6i.12eSK4DyhTBoeSfmHBLI411CwAPKHKJAnpI94sNwjzYmzO8Ekl.CXxEOQdq4GHHtjLVRaK5OO_6tni3mur8ir2A34nH7jd24QfTjRMwE_a7ACVsWAo3cGQ5yvdVkvUGtzUiWu~A|B5c6304b0|C7NHvkL.2SqtOD_ga_DtSQXKm_kNVUHzwnBm5RP91RNWPrdLkpOdF1KVUiOUxD7D41FXl0GYdkvWDcit.1R.urjHYPjzODnqEaItWvssxF9Rwp6WPc8o887NRkUBKCHRATHyt_3dL6kPLOXR4tM2M3ryAYlodoZbQ1Shk5vtRMYCOPfVy4DNaTTWfM87yKCUTLM1MKguQC6ogUr7_WYlvceos3eBQt9c6sy4UP8JgEDiB0LeRgVF3XhYKkKT0YAbuGxTOrD2RLYNbNlWysPJGY4N2eN6YLUYQfDEmcGqXPoamLTXKQfW5DXrMKfN3CeIc4CPqIRpj6j14YY81lajGk10mSoVJZI9nTfzNTtCFpExaDBMBrh.dB_bOoqwMYkJ3i7YlyKVJlpFmmYEv063bvDcgRXBRe77JZd2lDXHSi.RR6eFVXqrBzxiUZNFjXD1uJyKBcYOBDND4kuf4D.Ur_n0Ro4nPnUx41OmOlhnpMJJioUaYCSCs4.vynt5RBNlUD4MrQZY0ojc4E5iYX7SVDMKAFrrKwcidEF6HK9wdAXCQ.TGy8WNX6adsQPNy9.bFaii6KEDlpx83QL3GvcWttmNQW3iIbB.bFZlwOjnuiKdotJN0KbCBbhcpOK2FlJSOLnUi7hb00wLXDW8rdcXC50XbcjGIRnksxsC5ePt2yEI3oZQ8a6YQzp0gBbqBoGKs9.G2YZNhuAy0aJanVpFaw--~A"));
curl_setopt($cok, CURLOPT_POST, 1);
curl_setopt($cok, CURLOPT_POSTFIELDS, "browser-fp-data=".$post."&crumb=s3WVuNeW5Za&acrumb=t6143VcU&sessionIndex=Qg--&displayName=&context=&username=".$asu."&verifyYid=true");
curl_setopt($cok, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0.1; ASUS_X00AD Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36");
$zz = curl_exec($cok);
curl_close($cok);


if(!empty(@preg_match("/challenge\/email-verify|challenge\/phone-obfuscation/", $zz))) {
	echo "\e[32;1mVALID\e[0;1m => ".$asu." [".date('d-m-y H:i:s')."]\n";
	$o = fopen("valid_yahoo.txt", 'a');
	fwrite($o, $asu."\n");
	fclose($o);
	}else{
		echo "\e[31;1mINVALID\e[0;1m => ".$asu." [".date('d-m-y H:i:s')."]\n";
		}
	}
}
