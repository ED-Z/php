<html>
<body>
<head>
<title>Fuzhou weather</title>
</head>
<?php
echo "<h1> Fuzhou Weather Today! </h1>";
$file=fopen("1.txt","w");
$baidu=file_get_contents('http://www.weather.com.cn/weather/101230101.shtml');
fwrite($file,$baidu);
preg_match("/\<li class=\"sky skyid lv3 on\"\>(.*?)\<\/li\>/s",$baidu,$wea);
preg_match("/title=\"(.*?)\"\sclass=\"NW\"\>/",$wea[1],$fx);
print_r($wea[1]);
print_r($fx[1]);
fclose($file);
?>

</body>
</html>
