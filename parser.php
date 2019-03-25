<?php
 $curl = curl_init();  //$curl is datatype curl resource 

 $url = "https://www.kinopoisk.ru/top/"; 
  curl_setopt($curl,CURLOPT_URL, $url);            // Set proper url
  curl_setopt($curl, CURLOPT_ENCODING ,"utf-8");     // Set charset to utf-8
  curl_setopt($curl,CURLOPT_RETURNTRANSFER, true); // Execute in variable
 
  $result = curl_exec($curl);                       // Set a variable
  $result = iconv ('windows-1251','utf-8',$result); // Set charset to utf-8
 
 //<a href="/film/361/" class="all">Бойцовский клуб (1999)</a> // Example of string that  $matches get
 

  preg_match_all('!<a href="\/film\/(\d+)\/" class="all">(.*?)<\/a>!',$result,$matches); // First regular exspression to match 

 $data = array_unique($matches[0]);       // Remove dublicate 
 $i = 0;                                  // Set $i
 $array = array();                        // Set array
  while ( $i <= 249) {                    // While loop 
    preg_match('/(\d+)/',$data[$i],$id);  // Second regular expression to match KinoPoisk id
    $id = array_unique($id);              // Remove dublicate 
    $i++;                                 // Increment 
    foreach ($id as $ie => $val) {        // Foreach loop
      array_push($array,$val);            // Push data into array 
    }                                  
  }

 $dataOne = array_rand($array);         // Set random key
$value = $array[$dataOne];              // Take random value


