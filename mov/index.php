<!DOCTYPE html>

<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../main.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script
  </head>
  <body>
  <div class="header2"><h1> >>>movieSHARE &#8634</h1></div>
  <div style="padding-top:200px">

  <table style="width:65%;">
  <tr><th> FILENAME </th><th> SIZE </th><th> DATE </th><th> &#9654 </th></tr>

<?php

include "../php/classes/calcFilesize.php";

$files = scandir('.');
for ($i=0; $i <= count($files)-1; $i++) {
  if ($files[$i] != '.' && $files[$i] != '..' && $files[$i] != 'index.php')
  {
    echo '<tr><td class="tdownload";><a href=?path=.'.$files[$i].'>'.$files[$i].'</a></td>';
    echo '<td>'.calcfs(filesize($files[$i])).'</td>';
    echo '<td>'.date("d F y H:i:s",filemtime($files[$i])).'</td>';
    echo '<td style="background-image:url(../covers/'.substr($files[$i], 0, strrpos($files[$i], ".")).'.jpeg);
          background-size:60px 80px; width:60px; height:80px;"><a href="./'.$files[$i].'"><div style="witdh:60px; height:80px;"></div></a></td></tr>';
    }
  }

  if(isset($_GET['path'])){
      header('Content-Type: application/octet-stream');
      header("Content-Transfer-Encoding: Binary");
      header("Content-disposition: attachment; filename=\"" .ltrim($_GET['path'],'.'). "\"");
      readfile($_GET['path']);
}

?>
</table>
</body>
</html>
