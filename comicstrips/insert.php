<?php

  require_once('../_config.php');

  /*
    OBJECTIVE:
      1: Connect to the database and insert the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the insert was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  include_once('_utilities/_connect.php') 
  $res = mysqli_query($conn, "INSERT INTO comicstrips (
    title,
    newspaper,
    date
  ) VALUES (
    '{$_POST['title']}',
    '{$_POST['newspaper']}',
    {$_POST['date']}
  )");

  // Initialize/resume the session
  session_start();

  if ($res) {
    // We were successful
    $_SESSION['notification'] = "The new comicstrip was created successfully.";
  } else {
    // We failed
    $_SESSION['notification'] = "There was an error creating the record: " . mysqli_error($conn);
  }

  header("Location: ./notification.php");
  exit;
?>