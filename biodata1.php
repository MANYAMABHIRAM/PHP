<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>
    </head>
<style>
    table{
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        border-style: ridge;
    }
    .submit{
        width: 100px;
        height: 40px;
        background-color: #EDEDED;
        border-radius: 30px;
        padding: 10px;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .submit:hover{
        background-color: crimson;
    }
    h1{
        color: crimson;
    }
    td{
        font-size: 20px;
    }
</style>
    <body bgcolor=#B7CADB>
        <form action="" method="post">
            <table  border="1">
            <th colspan="2" align="center" cellspacing="10"><h1>Bio-Data</h1></th>
            <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
            <tr><td>Father's Name:</td><td><input type="text" name="fn"></td></tr>
            <tr><td>Father's Occupation:</td><td><input type="text" name="fo"></td></tr>
            <tr><td>Mother's name:</td><td><input type="text" name="mn"></td></tr>
            <tr><td>Mother's Occupation:</td><td><input type="text" name="mo"></td>
            <tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
            <tr><td>Age:    </td><td><input type="number" name="age"></td></tr><br><br>
            <tr><td>Phone:  </td><td><input type="number" name="num"></td></tr><br><br>
            <tr><td>Email:  </td><td><input type="email" name="email"></td></tr><br><br>
            <tr><td>Educational Qualification:</td><td><input type="text" name="edu"></td></tr><br><br>
            <tr><td>CGPA</td><td><input type="text" name="cgpa"></td></tr>
            <tr><td colspan="2" align="center"><input class="submit" type="submit" value="Enter"></td></tr>
            </table>
        </form>
    </body>
</html>
    <?php
    if ($_POST) {
        echo "<h1>Biodata</h1>";
        echo "Name: " . $_POST["name"] . "<br>";
        echo "Father's Name: " . $_POST["fn"] . "<br>";
        echo "Father's Occupation: " . $_POST["fo"] . "<br>";
        echo "Mother's Name: " . $_POST["mn"] . "<br>";
        echo "Mother's Occupation: " . $_POST["mo"] . "<br>";
        echo "Address: " . $_POST["address"] . "<br>";
        echo "Age: " . $_POST["age"] . "<br>";
        echo "Mobile: " . $_POST["num"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Qualification: " . $_POST["email"] . "<br>";
        echo "CGPA: " . $_POST["cgpa"] . "<br>";
    }
    ?>
