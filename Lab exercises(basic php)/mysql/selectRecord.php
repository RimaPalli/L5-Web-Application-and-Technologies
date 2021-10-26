<?php
//Make connection to database
include 'connection.php';
//Display heading
echo '<h3>Select ALL from the Customer Table</h3>';
//run query to select all records from customer table
$query="SELECT * FROM Customer";
$finalResult=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($finalResult)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

echo '<h3>Select ALL from the Customer Table with Age>22</h3>';
$query="SELECT * FROM Customer WHERE Age>22";
$answer=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($answer)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

echo '<h3>Select Females from the Customer Table with Age>=22</h3>';
$query="SELECT * FROM Customer WHERE Age>=22 AND Gender='F'";
$final=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($final)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

echo '<h3>Select Males from the Customer Table list by age descending</h3>';
$query="SELECT * FROM Customer WHERE Gender='M' ORDER BY Age DESC";
$ans=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($ans)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

echo '<h3>Select ALL from the Customer Table with "a" in the first name</h3>';
$query="SELECT * FROM Customer WHERE FirstName like '%a'";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';


}

?>