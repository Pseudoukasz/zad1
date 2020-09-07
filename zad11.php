
<?php
$mod=" ";
$f = fopen("file.txt", "r");
$myfile = fopen("newfile.txt", "w");
while ( $line = fgets($f, 1000) ) {
  $arr = explode(' ', trim($line));
  foreach($arr as $key => $value ){
    $length = strlen($value);
    if($length>2){
      $first = $value[0];
      $last =$value[$length-1];
      $removed = substr($value, 1, -1);
      $shuffled = str_shuffle($removed);
      $value=$first.$shuffled.$last;
    }
    $mod=$mod." ".$value;
  }
}
fwrite($myfile, $mod);
fclose($myfile);
fclose($f);
?>
