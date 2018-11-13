<!--
  Author: Ivgeni Darinski
  Student NO.: 250920885
  Date Created: 2018-11-11
  File: updatephonenumber.php
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> EBAY - Phone Number Updater</title>
  </head>
  <body>
    <!-- Connects database to HTML document -->
    <?php
      include 'connectdb.php';
    ?>

    <!-- Updates the customers phone number -->
    <?php
      # Query string required to run the proper query
      $update_query = 'UPDATE customer SET phonenumber="' . $_POST["newNumber"] . '" WHERE customerid=' . $_POST["customer"];

      # Querys to SQL and checks if the query is successful
      if (mysqli_query($connection, $update_query)) {
        echo 'Record successfully updated';
      }
      # If query unsuccessful run this
      else {
        echo 'Error updating record: ' . mysqli_error($connection);
      }
    ?>
  </body>
</html>