<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2D PHP</title>
<!---------------------- STYLE CSS ----------------------------->
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .warp{
        width: fit-content;
        border: 2px solid black;
        position: relative;
        display: flex;
        margin-left: 2%;
        margin-top: 2%;
    }
    .box{
        width: 90px;
        height: 90px;
        
    } 
    .dua{
     background-color: white;
     
    }
    .tiga{
        background-color: black;
        color:white;
    }
    div {
        width: fit-content;
        height: fit-content;
    }
</style>

</head>
<body>
<div class="warp">

<!--------------------------- PHP ------------------------------>
<?php
for($i =1; $i <= 5; $i++){
    echo "<div>";
    for ($j = 1; $j <=5; $j++){      
        $class =($i + $j) % 2 == 0? "tiga":"dua"; 
        echo "<div class = 'box $class'></div>";
    }
    echo "</div>";
}
?>

</div>
</body>
</html>