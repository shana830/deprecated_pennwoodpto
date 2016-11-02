<html>
<head>
<title>Welcome to the Pennwood Middle School PTO!</title>
<link rel="stylesheet" type="text/css" href="../base.css">
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div id="PTO">
<ul>
<?php
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<li><a href='$path/$file'>$file</a></li>";
        $i++;
    }
}
closedir($dh);
?></ul>
</div>
</body>
</html>