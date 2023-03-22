<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phptrial_02</title>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(228,195,195);
            margin: auto;
            padding: 23px;
        }
    </style>
    <div class="container">
        <h1>LEt'S LEARN ABOUT PHP</h1>
        <p>Your party status is here:</p>
        <?php
        $age=7;
        if ($age>18){
            echo "YOU CAN GO TO PARTY";
        }
        else if($age==7){
            echo "YOU ARE 7 YEARS OLD!!!";
        }
        else{
            echo "YOU CAN NOT GO TO PARTY";
        }
        
        $languages = array('Python', 'Java', 'c++', 'php');
        echo "<br>";
        echo $languages[2];
        echo "<br>";
        echo count($languages);
        echo "<br>";
        ?>

        <?php
        echo "<h2>LOOPS IN PHP</h2>";
        echo "<br>";
        $a=0;
        while ($a<=10){
            echo "<br>The value of a is : ";
            echo $a;
            $a++;
        }
        echo "</br>";
        $a=0;
        while ($a < count($languages)){
            echo "<br>The value of language is : ";
            echo $languages[$a];
            $a++;
        }
        echo "</br>";
        for($a=0 ; $a<10 ; $a++){
            echo "<br>The value of a is : ";
            echo $a;
        }
        
        echo "</br>";
        echo "</br>";
        echo "<h2>FUNCTION IN PHP</h2>";
        
        function print5(){
            echo "FIVE";
        }
        print5();
        ?>

    </div>
</body>
</html>