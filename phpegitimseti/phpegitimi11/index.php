<!DOCTYPE html>
<html lang="tr-TR">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>php eğitim</title>
</head>

<body>
   <?php
   
   $Deger = "merhaba";
   $deger = &$Deger;
   echo $Deger;
   echo "<br />";
   echo $deger;
    
   echo "<br /><br/>";
   $Deger = "nasılsın";
   $deger = $Deger;
   echo $Deger;
   echo "<br />";
   echo $deger;

   
   ?>
</body>
</html>