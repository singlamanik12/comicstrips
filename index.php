<?php require_once('./_config.php') ?>
<?php include_once('_partials/_header.php');?>
<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Fetch all the comicstrips rows from the database and display them in a table.
    3: Create two links for each row that point to the edit.php and delete.php files. These links must provide a query parameter called 'id' with the row's id column's value.
-->

<?php
 require_once('_utilities/_connect.php');
 $conn = connect();
  $result = mysqli_query($conn, "SELECT * FROM comicstrips");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>

<header>
  <h1 class="display-1">Comicstrips</h1>
  <hr>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
			<th>Newspaper</th>
			<th>Date</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
    <?php
      foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>{$row['title']}</td>";
        echo "<td>{$row['newspaper']}</td>";
        echo "<td>{$row['date']}</td>";
        echo "<td>";
        echo "<a href='./edit_form.php?id={$row['id']}'>edit</a>";
        echo " | ";
        echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
        echo"</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
<?php include_once('_partials/_footer.php') ?>