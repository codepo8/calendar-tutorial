<?php
$now = '';
$day = 0;
$data = '';

if (isset($_GET['day'])) {

  $day = +($_GET['day']);

  if ($day > 24) { $day = 24; }

  /* uncomment when it is December */
  
  // if (+date('m') < 12 || $day > +date('d')) {
  //   $day = 0;
  // }

  $url = 'https://docs.google.com/spreadsheet/pub?'.
         'key=0AhphLklK1Ve4dEp5X2tBNHFPM0hQSHpZQnBjYl9NLUE&output=csv';
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  $output = curl_exec($ch); 
  curl_close($ch);

  $csvdata = csv_to_array($output);

  $now = $csvdata[($day-1)];

  if ($now) {
    $data .= '<h1><a href="'.$now[0].'">'.$now[1].'</a></h1>'.
             '<p>'.$now[2].'</p>';
    if ($now[3] !== '') {
      $data .= '<p>You can also <a href="'.$now[3].
               '">see it in action here</a>.</p>';
    }
  } else {
    $data .= '<h1><a href="http://developer.mozilla.com">Not yet!</a></h1>'.
             '<p>You have to wait, like all the others.</p>';
  }
}

$data .= '<a id="close" href="index.php">x</a>';

if (isset($_GET['ajax'])) { echo $data; }

function csv_to_array($input, $delimiter=',') {
  $header = null;
  $data = array();
  $csvData = str_getcsv($input, "\n");
  foreach($csvData as $csvLine) {
    if (is_null($header)) {
      $header = explode($delimiter, $csvLine); 
    } else {
      $items = explode($delimiter, $csvLine);
      for($n = 0, $m = count($header); $n < $m; $n++){
        $prepareData[$n] = $items[$n];
      }
      $data[] = $prepareData;
    }
  }
  return $data;
}
?>