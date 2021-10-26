
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentals</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
        }
        </style>
</head>
<body>
    
<?php
 echo '<h3>Selection and Comparison Operators</h3>';

$day = date('l');  //that is a lower case L
$month= date('n');
$date= date('j');
$year= date('Y');
echo 'It\'s '.$day.'<br>';
echo $date.'/'.$month.'/'.$year;
echo '<br>';

if(date('l')=='Wednesday'){
    echo 'It\'s midweek.';
}
else{
    echo 'It\'s not midweek';
}
echo '<br>';

$hour=date('H');
$minute= date('i');
$second= date('s');
echo $hour.' '.$minute.' '.$second;

echo '<br>';

if($hour<12){
    echo 'Good Morning';
}
else if($hour>=12 AND $hour<=18){
    echo 'Good Afternoon';
}
else{
    echo'Good Night';
}

echo '<br>';

$password= 'password';
if(strlen($password)>4 AND strLen($password)<10){
    echo 'Password length is valid';
}
else{
    echo 'Password length is invalid';
}
?>

<br /><table >
        <tr>
            <th>Age/Member</th>
            <th>Discount</th>
        </tr>
        <tr>
            <td>Under 12</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>Under 18</td>
            <td>25%</td>
        </tr>
        <tr>
            <td>Over 65</td>
            <td>25%</td>
        </tr>
        <tr>
            <td>Member</td>
            <td>10% - in addition to any other discount.</td>
        </tr>
    </table>
    <p>Please enter your details:</p>
    <form action ="fundamentals.php" method ="post">
        <label for ="age">Age: </label>
        <input type = "text"  name = "age"><br>
        <input type="radio"  name="membership" value ="yes" >
        <label for="yes">Yes</label><br>
        <input type="radio"  name="membership" value ="no">
        <label for="no">No</label><br><br>
        <input type="submit" value="submit" name = "submit">
    </form>
<?php
$initialPrice=25;
$discount=0;
if(isset($_POST['submit'])){
    $age=$_POST['age'];
    $member=$_POST['membership'];
    if($age<12){
        if($member=='yes'){
            $discount=(60/100)*$initialPrice;
    }

    elseif($member=='no'){
        $discount=(50/100)*$initialPrice;
    }
}

if($age>12 AND $age<18){
    if($member=='yes'){
        $discount=(35/100)*$initialPrice;
}
elseif($member=='no'){
    $discount=(25/100)*$initialPrice;
}
}

if($age>65){
    if($member=='yes'){
        $discount=(35/100)*$initialPrice;
}
elseif($member=='no'){
    $discount=(25/100)*$initialPrice;
}
}
echo '<br />Initial Ticket Price: '.$initialPrice.'<br />';
echo 'Age: '.$age.'<br />';
echo 'Member: '.$member.'<br />';
$total=$initialPrice-$discount;
echo 'Final Ticket Price: '.$total;
}

?>


<?php
echo '<h3>Arrays</h3>';
echo '<h4>Simple Arrays</h4>';

$products=['t-shirt', 'cap', 'mug'];
print_r($products);

echo '<br>';

$products[]='skirt';
print_r($products);

echo '<br>';

echo 'The item at index[2] is: '.$products[2];
echo '<br>';
echo 'The item at index[3] is: '.$products[3];

echo '<h4>Associative Arrays</h4>';

$customer=array('CustID'=> 12 , 'CustName'=> 'Sarah' ,  'CustAge'=> 23 , 'CustGender'=> 'F', );
print_r($customer);
echo '<br>';

$customer['CustAge']=21 ;
$customer['CustEmail']='sarah@gmail.com' ;
print_r($customer);
echo '<br>';

echo 'Items in my customer array';
echo '<br>';
echo 'The item at index[CustName] is: '.$customer['CustName'];
echo '<br>';
echo 'The item at index[CustEmail] is: '.$customer['CustEmail'];

echo '<br />';

echo '<h4>Multi-Dimensional Associative array</h4>';
$stock=array(
    'id1'=>array('description'=>'tshirt', 'price'=> 9.99, 'stock'=>100, 'color'=>array('blue', 'green', 'red')),
    'id2'=>array('description'=>'cap', 'price'=> 4.99, 'stock'=>50, 'color'=>array('blue', 'black', 'grey')),
    'id3'=>array('description'=>'mug', 'price'=> 6.99, 'stock'=>30, 'color'=>array('yellow', 'green', 'pink'))
);

echo 'This is my order: <br />';
echo $stock['id1']['color'][1].' '.$stock['id1']['description'];
echo '<br />';
echo 'Price: '.$stock['id1']['price'];
echo '<br />';
echo $stock['id2']['color'][2].' '.$stock['id2']['description'];
echo '<br />';
echo 'Price: '.$stock['id2']['price'];

echo '<h3>Loops</h3>';
echo '<h4>While Loop</h4>';

$counter=1;
while($counter<6){
    echo 'Count: '.$counter.'<br/>';
    $counter++;
}
echo '<br>';

$counter=1;
$shirtPrice=9.99;
while($counter<=10){
    echo 'The cost of '.$counter.' shirt is: '.$counter*$shirtPrice.'<br>';
    $counter++;
}
            $shirtprice = 9.99;
            $counter = 1;
            
            echo '<table border= 1px solid black>';
                echo '<tr>';
                    echo '<th>Quantitiy</th>';
                    echo '<th>Price </th>';
                    while($counter <= 10){
                        $total = $counter*$shirtprice;
                        echo '<tr>';
                        echo '<td>'.$counter.'</td>';
                        echo '<td>£ '.$total.'</td>';
                        echo '</tr>';
                        //echo $counter.'- £'.$total;
                        $counter++;
                        echo '<br />';
                    }
            echo '</table>';


echo '<h4>For Loop</h4>';
$names=['Tula', 'Sima', 'Rima', 'Shweata', 'Samit'];
for($i=0; $i<5; $i++){
    echo $names[$i].'<br>';
}

echo '<h4>Foreach Loop</h4>';
$names=array('Rima'=> 'C7227229', 'Shristi'=> 'C7227238', 'Sweta'=> 'C7227345', 'Manisha'=> 'C7227421');
foreach($names as $key=>$value){
    echo 'Name: '.$key. ' '.'ID: '.$value.'<br />';
}

echo '<br>';

$city=array('Peter'=>'LEEDS', 'Kat'=>'bardford', 'Laura'=>'wakeFIeld');
print_r($city);
echo '<br>';

foreach($city as $key=>$value){
    $city[$key]=ucfirst(strtolower($value));
}
print_r($city);
?>

<footer>
<br /><a href='../watIndex.php'>Home</a>
</footer>
</body>
</html>

