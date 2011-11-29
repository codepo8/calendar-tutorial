<?php
  $data = '';
  $day = 0;
  $day = +$_GET['day'];
  // if (+date('m') < 12 || $day > +date('d')) {
  //   $day = 0;
  // }
  if ($day > 24) { $day = 24; }

  if ($day) {
    $data .= '<h1><a href="#">Title '.$day.'</a></h1>'.
             '<p>Description</p>'.
             '<p>See it in action <a href="#">here</a></p>';
  }
  if (isset($_GET['ajax'])) { echo $data; }
?>