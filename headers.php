<?php

setcookie("alx",22,time()+(60*60*24*7));

echo  print_r($_COOKIE);
if ($_GET["id"]==1) {
header("Location: htmlpart2.php");
}
else {
header("Location: loops.php");
}


?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
 

</body>
</html>