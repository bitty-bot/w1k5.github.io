<!DOCTYPE html>
<html>
<head>
      <link rel="icon" href="favicon.png" type="image/png">
<title>𝖕𝖆𝖙𝖎𝖊𝖓𝖈𝖊 𝖎𝖘 𝖆 𝖛𝖎𝖗𝖙𝖚𝖊</title>
</head>
      
<body>
<center>
                                                
<h1>𝖕𝖆𝖙𝖎𝖊𝖓𝖈𝖊 𝖎𝖘 𝖆 𝖛𝖎𝖗𝖙𝖚𝖊</h1>      
<img src="waiting.gif" alt="sexy girls on a couch" style="width:40%;height:40%;">
<?php
session_start();
$counter_name = "counter.txt";

if (!file_exists($counter_name)) {
- $f = fopen($counter_name, "w");
- fwrite($f,"0");
- fclose($f);
}

$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

if(!isset($_SESSION['hasVisited'])){
- $_SESSION['hasVisited']="yes";
- $counterVal++;
- $f = fopen($counter_name, "w");
- fwrite($f, $counterVal);
- fclose($f);
}

echo "you are visitor number $counterVal .";

<p>click <a href="http://wikip0rtf0li0.weebly.com">here</a> to escape.</p>
                                                  
</center>
</body>
</html>

