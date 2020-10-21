<?php
if(isset($_POST['submit'])){
    $from = $_GET['name'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $database = "bank";
    $db = mysqli_connect('localhost','root','',$database);
    $q1 = "UPDATE customer SET credit=credit-$amount WHERE name='$from'";
    mysqli_query($connect,$q1);
    $q2 = "UPDATE customer SET credit=credit+$amount WHERE name='$to'";
    mysqli_query($connect,$q2);
    header('Location:customers.php');
}
?>


-
