<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP</title>  <!my first PHP>
</head>
<body>
<?php 
    
    echo '<h3>Variables</h3>';

        $name="Rima Palli";
        $age=21;

        echo 'Hi! My name is ' .$name. ' and I am ' .$age. ' years old<br>';
        echo 'Mi nombre es ', $name, ' y tengo ', $age, ' anos de edad';

    echo '<h3>Functions</h3>';

        //gettype() returns the data type of the varaibles.
        echo gettype($name);
        echo '<br />';

        //strlen() returns the length of the variables.
        echo strlen($name);
        echo '<br />';

        //strtoUpper()returns the variable in Upper Case
        echo strtoUpper($name);

    echo '<h3>Arithmetic</h3>';

        $num1=7;
        $num2=13;

        $multiplication= $num1*$num2;
        $percentage= ($num1/$num2)*100;
        $division= $num2/$num1;
        $remainder=$num2%$num1;

        echo 'num1= '.$num1.'<br>';
        echo 'num2= '.$num2.'<br>';
        echo 'num1 as percentage of num2= '.number_format($percentage, 2).'%<br>';
        echo 'num2 divided by num1= '.floor($division).' remainder '.$remainder;

    echo '<h3>Extra Work</h3>';
        
        $height_in_meters=1.63;
        $height_in_inches=($height_in_meters*100)/2.54;
        $feet=$height_in_inches/12;
        $inches=$height_in_inches%12;
        

        echo 'Name: '.$name.'<br>';
        echo 'Age: '.$age.'<br>';
        echo 'Height in Meters: '.$height_in_meters.'<br>';
        echo 'Height in feet and inches: '.floor($feet).'  ft'.' and '.$inches.' inches';

        ?>
</body>
<footer>
<br /><a href='../watIndex.php'>Home</a>
</footer>
</html>

