<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">New Comicstrips</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/comicstrips/insert.php' method='post'>
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="title">
	</div>

	<div class='form-group'>
		<label>Newspaper</label>
		<input class="form-control" type="text" name="newspaper">
	</div>

	<div class='form-group'>
		<label>Date</label>
		<input class="form-control" type="date" name="date">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>