<?php
    include ("variables.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include ("navbar.php");
    ?>
    <center>
    <div>
        <h1>
            <?php
                echo "Hello World";
                echo "<br>";
                $numbers = array(12,24,37);
                foreach ($numbers as $num){
                    echo  "This is the number:" . rand(0,100). " " . $num . "</br>";   
                }
            
            ?>    
        </h1>
    </div>
    
    <?php
        include ("footer.php");
    ?>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>