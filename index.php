<?php

class Some {


public $some = "salam";

}

$task = new Some();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <div>
       <h1><?php var_dump( $task -> some );  ?></h1>
   </div>

</body>
</html>




