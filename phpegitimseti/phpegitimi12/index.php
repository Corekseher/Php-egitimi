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
   function Deneme(){
      $GLOBALS["Deger"]  = "merhaba nasilisin";
   }
   Deneme();

   echo $Deger ;
  
   
   ?>
</body>
</html>