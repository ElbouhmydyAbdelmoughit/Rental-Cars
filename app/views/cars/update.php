<div class="contanier">
  <div class="row col-12">
    <div class="col-1">
      <?php require APPROOT . '/views/inc/header_sidebar.php'; ?>
    </div>
    <div class="col-6 mx-auto  rounded-3 bg-light mt-5">
      <form action="<?php echo URLROOT; ?>/cars/add" method="POST" class="p-5">
        <div class="mb-3">
          <input type="text" name="model" placeholder="Model">
        </div>
        <div class="mb-3">
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
          <input type="text" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
          <input type="file" name="image" accept=".png, .jpg, .jpeg" placeholder="Image">
        </div>
        <div class="mb-3">
          <input type="submit" name="" value="Create">
        </div>
      </form>
    </div>
  </div>
</div>