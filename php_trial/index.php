<?php
    $insert=false;
    if(isset($_POST['name']))
    {
        $server="localhost";
        $username="root";
        $password="";

        $con=mysqli_connect($server,$username,$password);   
        if (!$con){
            die("Could not connect to database " . mysqli_connect_error());
        }
        // echo "Successfully connected"; 

        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $other=$_POST['other'];

        $sql=" INSERT INTO `TRIP`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other',  current_timestamp());";
        // echo $sql;
        if($con->query($sql)){
            $insert=true;
            // echo "Successfully inserted";
        }
        else{
            echo "Error inserting $sql <br> $con->error";
        }

        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IIT kahragpur US trip form</h1>
        <p class="intro">Enter your details and submit this form to confirm your participation in the trip</p>

        <?php
            if($insert == TRUE){
                echo "<p class ='submitMsg'>Thanks for submitting your form</p>";
                echo "<style>input , textarea,h1,.intro,.btn{
                                display: none;
                            }
                    </style>";
            }
            
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter name">
            <input type="text" name="age" id="age" placeholder="enter age">
            <input type="text" name="gender" id="gender" placeholder="enter gender">
            <input type="email" name="email" id="email" placeholder="enter email">
            <input type="phone" name="phone" id="phone" placeholder="phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="enter any other info here"></textarea>
            <button class="btn">Submit</button>
        </form>


    </div>
    <script src="index.js"></script>
</body>
</html>