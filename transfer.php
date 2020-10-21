<?php 
  session_start(); 
  $db="bank";
  $connect = mysqli_connect('localhost','root','',$db);
  if(isset($_GET['name'])){
    $name=$_GET['name'];
  }
  $result = mysqli_query($connect,"SELECT * FROM customer WHERE name='$name'");
  $result2=mysqli_query($connect,"SELECT * FROM customer");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic Banking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <header>
      <h3>BASIC BANKING SYSTEM</h3>
    </header>
    <form method="get" action="index.php">
    <center><button id="home">HOME</button></center>
  </form>
    <center>
      <h1>Transfer</h1>
      <form action="transaction.php?name=<?php echo $name ?>" method="post">
        <table>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:
            </td>
            <td><?php echo "$name" ?>
            </td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:</td>
          <td>
            <select name="to">
              <?php 
              while($row=mysqli_fetch_array($result2)){
                ?>
                <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></option>
              <?php }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount:</td><td><input type="text" name="amount"></td>
        </tr>
      </table>
      <button type="submit" onclick="alert('Transaction successfully completed');" name="submit" id="submit" value="submit">Send</button>
    </form><br>
  </center>
</body>
<footer>
  <small>&copy; Copyright 2020, Afeefa Abdullah Manjanoor</small>
</footer>
</body>
</html>
