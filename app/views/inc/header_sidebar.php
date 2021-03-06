<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/Normalize.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/aos.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />
  <title><?= SITENAME ?></title>
</head>

<body>
  <?php require_once APPROOT . '/views/inc/sidebar.php' ?>


  <!--======== Links script =========-->
  <script src="<?= URLROOT ?>/assets/js/poper.min.js"></script>
  <script src="<?= URLROOT ?>/assets/js/aos.min.js"></script>
  <script src="<?= URLROOT ?>/assets/js/sweetalert2.js"></script>
  <script src="<?= URLROOT ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= URLROOT ?>/assets/js/script.js"></script>
  <script>
  AOS.init();
  </script>
</body>

</html>