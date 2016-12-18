<?php require ("partials/head.php"); ?>

<H1>Name list</H1>
<ul>
  <?php foreach ($names as $name): ?>
    <li><?= $name; ?></li>
  <?php endforeach ?>
</ul>

<?php require ("partials/footer.php"); ?>
