<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testseite</title>
</head>
<body>
<?php
  

$arr = ["var1"=>"derName","var2"=>"hannes","var3"=>"kasparl"];

extract($arr);

echo $var3;

?>
</body>
</html>