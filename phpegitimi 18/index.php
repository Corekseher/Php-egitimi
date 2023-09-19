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
  $isimler = array("PHP" => "seher","hakan","JS" => "onur" );
  echo "<pre>";
  print_r($isimler);
  $degerler = $isimler;
  $degerler = "levent";
  $degerler = "ahmet";
  $degerler = "mehmet";

  echo "<pre>";
  print_r($degerler);
  echo"</pre><br /><br />";
   ?>
</body>
</html>