<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<ul>
  <?php foreach ($data['cars'] as $car) : ?>
  <li><?php echo $car->title; ?></li>
  <?php endforeach; ?>
</ul>
<?php require APPROOT . '/views/inc/footer.php'; ?>