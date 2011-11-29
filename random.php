<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random-ish distribution</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style>
    * { 
      margin: 0;
      padding: 0;
      font-size: 15px;
      font-family: helvetica,arial,sans-serif;
    }
    footer, section, header {
      display: block;
    }
    section {
      width: 700px;
      height: 800px;
      position: relative;
      background: #b4d455;
    }
    li {
      position: absolute;
      width: 40px;
      height: 40px;
      background: #c0ffee;
      list-style: none;
    }
  </style>
</head>
<body>
  <section>
    <?php 
    echo '<ol>';
    $width = 700;
    $height = 800;
    for ($i=0;$i<24;$i++) {
      $x = rand(10,$width-20);
      $y = rand(10,$width-20);
      echo '<li style="left:'.$x.'px;top:'.$y.'px">'.
              '<a href="index.php?day='.($i+1).'">'.($i+1).'</a>'.
           '</li>';
    }
    echo '</ol>';
    ?>
  </section>
<script>
</script>
</body>
</html>

