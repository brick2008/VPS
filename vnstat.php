<?php
$PATH = "/tmp"; 
$images = ['vs.png', 'd.png', 'm.png'];

if (isset($_GET['f']) && in_array($_GET['f'], $images)) {
	header('Content-Type: image/png');
    @readfile("{$PATH}/{$_GET['f']}");
    exit();
}

exec("vnstati -ne -vs -o {$PATH}/vs.png;vnstati -nh -d -o {$PATH}/d.png;vnstati -nh -m -o {$PATH}/m.png");

?>
<html lang="en-US">
<head>
<meta HTTP-EQUIV="refresh" CONTENT="120">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>vnstati</title>
<style>
body{text-align:center}
</style>
</head>
<body>
<img src="?f=vs.png" alt="vs.png"><br/>
<img src="?f=d.png" alt="d.png"><br/>
<img src="?f=m.png" alt="m.png">
</body>
</html>
