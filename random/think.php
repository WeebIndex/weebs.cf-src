<?php
$path = 'https://img.weebs.cf/img/think/';
$fileType = '.gif';
$num = rand(1, 22);
$result = $path.$num.$fileType;
if(isset($_GET['json'])) {
  header('Access-Control-Allow-Origin: *');
  header('Content-type: application/json');
  $response = array('url' => $result);
  echo json_encode($response, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES); 
} else {
  echo $result;
}
?>