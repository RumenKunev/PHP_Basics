<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORM DATA</title>
    <style>
        body form input{
            display: block;
        }
        body form input[type='radio']{
            display: inline;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="firstName" placeholder="Name..">
        <input type="text" name="age" placeholder="Age..">
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
        <input type="submit" value="Изпращане">
    </form>

    <div>
    <?php
    if(isset($_GET['firstName'])){
        $fname = $_GET['firstName'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo("My name is {$fname}. I am $age years old. I am {$gender}.");
    }
    ?>
</div>
</body>
</html>

