<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Select the row using the provided ID.
    3: Add the missing hidden field.
    4: Pre-populate the form with the values from the selected row.
    5: Ensure you're sending the form data to the update.php page.
-->
<?php
	$result = mysqli_query($conn, "SELECT * FROM comicstrips WHERE id = {$_GET['id']}");
  	$row = mysqli_fetch_assoc($result);
  ?>
<header>
  <h1 class="display-1">Edit Comicstrips</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/comicstrips/update.php' method='post'>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="title" value="<?php echo $row['title']; ?>">
	</div>

	<div class='form-group'>
		<label>Newspaper</label>
		<input class="form-control" type="text" name="newspaper" value="<?php echo $row['newspaper']; ?>">
	</div>

	<div class='form-group'>
		<label>Date</label>
		<input class="form-control" type="date" name="date" value="<?php echo $row['date']; ?>">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>