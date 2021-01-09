<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <form action="getdata.php" method="get">
        Name: <input type="text" name="username">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <form action="getdata.php" method="post">
        password: <input type="password" name="password"><br>
        Jim grade: <input type="checkbox" name="grade[]" value="Jim"> <br>
        May grade: <input type="checkbox" name="grade[]" value="May"> <br>
        <input type="submit">
    </form>


    <br>

    Your name is <?php echo $_GET["username"] ?>
    <br>
    Your Age is <?php echo $_GET["age"] ?>
    <br>
    Your password is <?php echo $_POST["password"] ?>
    <br>
    <?php $grade = $_POST["grade"];
    echo "checkbox -> : $grade[0]";
    ?>
    <br>
    <?php
    $grades = array("Jim" => "A+", "May" => "A");
    echo "grades -> : ";
    echo $grades[$_GET["username"]];
    ?>




    </dody>

</html>