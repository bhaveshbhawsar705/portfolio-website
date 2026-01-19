<!DOCTYPE html>
<html>
<head>
  <title>Achievements</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>My Achievements</h2>

<?php
$xml = simplexml_load_file("achievements.xml");

foreach($xml->achievement as $a)
{
  echo "<p><strong>".$a->title."</strong> - ".$a->year."</p>";
}
?>

</body>
</html>
s