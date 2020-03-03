<?php

  require_once('../_config.php');
  require_once('_utilities/_connect.php') 
    /*
    OBJECTIVE:
      1: Connect to the database and update the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the update was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  $conn=connect();
  $res = mysqli_query($conn, "UPDATE comicstrips SET
  title = '{$_POST['title']}',
  newspaper = '{$_POST['newspaper']}',
  'date' = '{$_POST["date"]}'
  WHERE id = {$_POST['id']}");

session_start();

  if ($res) {
    // We were successful
    $_SESSION['notification'] = "The new comicstrip was created successfully.";
  } else {
    // We failed
    $_SESSION['notification'] = "There was an error creating the record: " . mysqli_error($conn);
  }

  header("Location: ../notification.php");
  exit;
?>