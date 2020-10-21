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
      <h1>Customer Details</h1>
      <?php
      $db="bank";
      $connect = mysqli_connect('localhost','root','',$db);
      $query = mysqli_query($connect,"SELECT * FROM customer");
      echo "<center>";
      ?>
      <table cellpadding="5" cellspacing="5">
        <?php
        echo "<tr>";
        echo "<th>"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo "Name"; echo "&nbsp"; echo "&nbsp";echo "</th>";
        echo "<th>"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo "Credits"; echo "&nbsp"; echo "&nbsp";echo "</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array ($query)) {
          echo "<tr>";
          echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo "<a href = 'transfer.php?name=$row[0]'>$row[0]</a>";echo "&nbsp"; echo "&nbsp"; echo "</td>";
          echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["credit"]; echo "&nbsp"; echo "&nbsp";echo "</td>";
          echo "<td>"; ?>
           <?php echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
          ?>
          <p>Click on customer name to start a transaction</p>
        </center>
        <br><br><br>
      </body>
      <footer>
        <small>&copy; Copyright 2020, Afeefa Abdullah Manjanoor</small>
      </footer>
    </body>
</html>