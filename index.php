<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include( "klus.php" ); ?>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
   <div id="header" >
       <h1><?php var_dump( $task -> some );  ?></h1>

       <div id="menu">
<nav>

    <a href="#first">first</a>

    <a href="#second">second</a>

    <a href="#third">third</a>

    <a href="#four">four</a>

    <a href="#five">five</a>

    <a href="#last">last</a>

</nav>
</div>
   </div>


<div id="first"><h1>this is first</h1></div>

<div id="second">this is second</div>

<div id="third">this is third</div>

<div id="four">this is four</div>

<div id="five">this is five</div>

<div id="last">this is last</div>

</body>
</html>




