<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include( "klus.php" ); ?>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
   <div>
       <h1><?php var_dump( $task -> some );  ?></h1>
   </div>
<div id="menu">
<nav>

    <li><a href="#first"></a></li>

    <li><a href="#second"></a></li>

    <li><a href="#third"></a></li>

    <li><a href="#four"></a></li>

    <li><a href="#five"></a></li>

    <li><a href="#last"></a></li>

</nav>
</div>

<div id="first"><h1>this is first</h1></div>

<div id="second">this is second</div>

<div id="third">this is third</div>

<div id="four">this is four</div>

<div id="five">this is five</div>

<div id="last">this is last</div>

</body>
</html>




