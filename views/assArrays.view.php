<?php require ("partials/head.php"); ?>

<H1>Person's details</H1>
<ul>
<?php foreach ($person as $key => $value): ?>
  <li><?= $key.": ".$value; ?>
<?php endforeach; ?>
</ul>

<?php require ("partials/footer.php"); ?>
