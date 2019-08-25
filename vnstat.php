<!DOCTYPE html>
<?php
exec("vnstati -vs -o vnstati-vs.png;vnstati -d -o vnstati-d.png;vnstati -m -o vnstati-m.png");
?>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>vnstati</title>
<style>
body{text-align:center}
</style>
</head>
<body>
<img src="vnstati-vs.png" alt="vnstati-vs.png"><br/>
<img src="vnstati-d.png" alt="vnstati-d.png"><br/>
<img src="vnstati-m.png" alt="vnstati-m.png">
</body>
</html>
