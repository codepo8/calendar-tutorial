<?php include('api.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pulling real content</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
  <article <?php if($day) {echo ' class="show"';} ?>>
    <?php if($day) {echo $data;} ?>
  </article>
  <section>
<ol><li style="left:104px;top:452px"><a href="dummyapi.php?day=1">1</a></li><li style="left:344px;top:226px"><a href="dummyapi.php?day=2">2</a></li><li style="left:631px;top:257px"><a href="dummyapi.php?day=3">3</a></li><li style="left:636px;top:28px"><a href="dummyapi.php?day=4">4</a></li><li style="left:519px;top:483px"><a href="dummyapi.php?day=5">5</a></li><li style="left:17px;top:399px"><a href="dummyapi.php?day=6">6</a></li><li style="left:489px;top:101px"><a href="dummyapi.php?day=7">7</a></li><li style="left:190px;top:368px"><a href="dummyapi.php?day=8">8</a></li><li style="left:382px;top:640px"><a href="dummyapi.php?day=9">9</a></li><li style="left:587px;top:570px"><a href="dummyapi.php?day=10">10</a></li><li style="left:534px;top:591px"><a href="dummyapi.php?day=11">11</a></li><li style="left:216px;top:488px"><a href="dummyapi.php?day=12">12</a></li><li style="left:18px;top:634px"><a href="dummyapi.php?day=13">13</a></li><li style="left:68px;top:60px"><a href="dummyapi.php?day=14">14</a></li><li style="left:404px;top:581px"><a href="dummyapi.php?day=15">15</a></li><li style="left:403px;top:498px"><a href="dummyapi.php?day=16">16</a></li><li style="left:353px;top:66px"><a href="dummyapi.php?day=17">17</a></li><li style="left:43px;top:303px"><a href="dummyapi.php?day=18">18</a></li><li style="left:314px;top:669px"><a href="dummyapi.php?day=19">19</a></li><li style="left:321px;top:152px"><a href="dummyapi.php?day=20">20</a></li><li style="left:472px;top:329px"><a href="dummyapi.php?day=21">21</a></li><li style="left:541px;top:280px"><a href="dummyapi.php?day=22">22</a></li><li style="left:420px;top:51px"><a href="dummyapi.php?day=23">23</a></li><li style="left:639px;top:122px"><a href="dummyapi.php?day=24">24</a></li></ol>
    
  </section>
<script src="calendar.js"></script>
</body>
</html>