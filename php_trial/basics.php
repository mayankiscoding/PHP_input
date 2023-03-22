<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Trial</title>
</head>
<body>
    <div class="container">
        THIS IS MY FIRST PHP WEBSITE
        <?php
        define('PI',3.14);
            echo "<br>";
            echo "hello php";
            echo "<br>";
        ?>
        <?php
            echo "hello php";
            echo "<br>";
            $variable1=5;
            $variable2=2;
            echo "THE VALUE OF VARIABLE 1 is ";
            echo $variable1;
            echo "<br>";
            echo "THE VALUE OF VARIABLE 2 is ";
            echo $variable2;
            echo "<br>";
            echo "<br>"; 
            echo "<br>"; 
            // Operators in php
            echo "<h1>Operators in php</h1>";
            // Athematic operators
            echo "<h2>Athematic operators</h2>";
            echo "THE VALUE OF VARIABLE 1 + VARIABLE 2 = ";    
            echo $variable1 + $variable2;
            echo "<br>";
            echo "THE VALUE OF VARIABLE 1 - VARIABLE 2 = ";    
            echo $variable1 - $variable2;
            echo "<br>";
            echo "THE VALUE OF VARIABLE 1 / VARIABLE 2 = ";    
            echo $variable1 / $variable2;
            echo "<br>";
            echo "THE VALUE OF VARIABLE 1 * VARIABLE 2 = ";    
            echo $variable1 * $variable2;
            echo "<br>"; 
            echo "<br>"; 
            echo "<br>"; 
            // Assingment operators
            echo "<h2>Assingment operators</h2>";
            $newvar=$variable1;
            echo "THE VALUE OF NEWVAR IS ";
            $newvar+=1;
            // $newvar-=1;
            // $newvar*=1;
            // $newvar/=1;
            echo $newvar;
            echo "<br>";
            echo "<br>";
            echo "<br>";
            // Comparison operators
            echo "<h2>Comparison operators</h2>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";
            // Increment / Decrement operators
            echo"<h2>Increment / Decrement operators</h2>";
            echo "post increment of var 1 is ";
            $variable1++;
            echo $variable1;
            echo "<br>";
            echo "post deccrement of var 1 is ";
            $variable1--;
            echo $variable1;
            echo "<br>";
            echo "pre increment of var 1 is ";
            ++$variable1;
            echo $variable1;
            echo "<br>";
            echo "pre decrement of var 1 is ";
            --$variable1;
            echo $variable1;
            echo "<br>";


            // Logical operators
            echo "<h2>Logical operators</h2>";
            // and (&&)
            // or (||)
            // xor 
            // !

            $var1 = (true and true);
            $var2 = (true and false);
            $var3 = (false and false);
            $var4 = (false and true);
            echo var_dump($var1);
            echo "<br>";
            echo var_dump($var2);
            echo "<br>";
            echo var_dump($var3);
            echo "<br>";
            echo var_dump($var4);
            echo "<br>";
            echo "<br>";

            $var1 = (true or true);
            $var2 = (true or false);
            $var3 = (false or false);
            $var4 = (false or true);
            echo var_dump($var1);
            echo "<br>";
            echo var_dump($var2);
            echo "<br>";
            echo var_dump($var3);
            echo "<br>";
            echo var_dump($var4);
            echo "<br>";
            echo "<br>";

            $var1 = (true xor true);
            $var2 = (true xor false);
            $var3 = (false xor false);
            $var4 = (false xor true);
            echo var_dump($var1);
            echo "<br>";
            echo var_dump($var2);
            echo "<br>";
            echo var_dump($var3);
            echo "<br>";
            echo var_dump($var4);
            echo "<br>";

        ?>

        <?php
        // DATA TYPES
        // 1.INTIGER
        // 2.STRING
        // 3.BOOLEAN
        // 4.ARRAY
        // 5.FLOAT
        // 6.OBJECT

        echo "<h1>DATA TYPES</h1>";
        $a=1;
        echo var_dump($a);
        echo "<br>";
        $a=1.1;
        echo var_dump($a);
        echo "<br>";
        $a="1";
        echo var_dump($a);
        echo "<br>";
        $a= true;
        echo var_dump($a);
        echo "<br>";

        echo PI;
        ?>

        
    </div>
</body>
</html>