<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySql</title>
</head>
<body>
<h2>Insert Command</h2>
<form method="post" action="insertRecord.php">
        <fieldset>
            <legend>
                Enter Customer Details
            </legend>

            <label for="name">First Name: </label>
            <input type="text" name="txtName" /><br /><br />
            <label for="surname">Surname: </label>
            <input type="text" name="txtSurname" /><br /><br />
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" /><br /><br />
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /><br /><br />
            <label for="gender">Gender: </label>
            <!--<select>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            </select><br /><br />-->
            <input type="text" name="txtGender" /><br /><br />
            <label for="age">Age: </label>
            <input type="text" name="txtAge" /><br /><br />
            <input type="submit" value="Submit" name="subUser" />
            
        </fieldset>
    </form>
    <h2>Select Command</h2>
    <?php
    include 'selectRecord.php';

?>
<footer>
<br /><a href='../watIndex.php'>Home</a>
</footer>
</body>
</html>