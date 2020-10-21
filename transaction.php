<?php
if(isset($_POST['submit'])){
    $from = $_GET['name'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $database = "bank";
    $db = mysqli_connect('localhost','root','',$database);
    echo "$from";
    $q1 = "UPDATE customer SET credit=credit-$amount WHERE name='$from'";
    echo "$q1";
    mysqli_query($db,$q1);
    $q2 = "UPDATE customer SET credit=credit+$amount WHERE name='$to'";
    mysqli_query($db,$q2);
    header('Location:customers.php');
}
?>

-