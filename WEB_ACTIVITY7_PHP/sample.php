<?php 
    $name = "BSIS";
    $campus = 2024;
    $college = "COLLEGE OF INFORMATION AND COMPUTER";

  
    $fullname = (isset($_GET['fullname'])) ? $_GET['fullname']: "";
    $age =  (isset($_GET['age'])) ? $_GET['age']: 0;


    $x = 1234;
    $profile = "BSIS";

    $CollectionOfNames= array("A","B","C","D","E");
    var_dump($x);
    var_dump($profile);

    var_dump($CollectionOfNames);

    foreach($CollectionOfNames as $name => $val){
        echo "<br>".$val."=>".$name. "<br>";

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE</title>
</head>
<body>
    <h1>PHP SAMPLE</h1>
   

    <h2><?php echo $name;?></h2>
    <h1><?php echo $campus;?></h1> 
    <h3><?php echo $college;?></h3>

    <form action="" method = "get">
        <label for="">Name:</label>
        <input type="text" name="fullname">
        <label for="">Age:</label>
        <input type="number" name="age">
        <button type="submit">Submit</button>

    </form>

    <?php
        echo "Fullname:" .$fullname. "<br>";
        echo "Age:" .$age. "<br>";
    
    
    ?>
</body>

</html>