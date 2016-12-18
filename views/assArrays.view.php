<?php require ("partials/head.php"); ?>

<H1>Task's details</H1>
<ul>
<?php foreach ($task as $key => $value): ?>
  <li><?= $key.": ".$value; ?>
<?php endforeach; ?>
</ul>

<?php require ("partials/footer.php"); ?>
