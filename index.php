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
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
   <div>
       <h1><?php var_dump( $task -> some );  ?></h1>
   </div>
<div id="first"></div>
<div id="second"></div>
<div id="third"></div>
<div id="four"></div>
<div id="five"></div>
<div id="last"></div>
<div></div>
</body>
</html>




