<?php 
function e($str, $rtn=false){
	if($rtn===false){
		echo htmlspecialchars($str, ENT_QUOTES,'UTF-8');
	}else{
		return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
	}
}
?>
<html>
<title><?php e(getCwd()) ?></title>
<body>
<h1>Index of <?php e(getCwd()) ?></h1> 
<hr>
<?php
foreach(glob('*') as $filename){
    echo "<a href='".e($filename,1)."'>".e($filename,1)."</a><br>";
}
?>
</body>
</html>
