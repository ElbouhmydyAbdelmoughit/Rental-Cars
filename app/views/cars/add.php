<div class="contanier bg-light">
  <div class="row col-12">
    <div class="col-1">
      <?php require APPROOT . '/views/inc/header_sidebar.php'; ?>
    </div>
    <div class="col-6 mx-auto shadow h-50 rounded-3 bg-white mt-5" id="addCar">
      <h3 class="fw-bold mx-auto text-center mt-3"> Create Car</h3>
      <form action="<?php echo URLROOT; ?>/cars/add" method="post" class="p-5" enctype="multipart/form-data">
        <div class="mb-3">
          <input type="text" name="model" placeholder="Model"
            class="form-control <?php echo (!empty($data['model_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['model']; ?>">
          <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
        </div>
        <div class="mb-3">
          <input type="text" name="name" placeholder="Name"
            class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['name']; ?>">
          <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="mb-3">
          <input type="text" name="price" placeholder="Price"
            class="form-control <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['price']; ?>">
          <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
        </div>
        <div class="mb-3">
          <input type="file" name="image" accept=".png, .jpg, .jpeg" placeholder="Image"
            class="form-control <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>">
          <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
        </div>
        <div class="mb-3">
          <input type="submit" id="create" value="Create" class="btn form-control">
        </div>
      </form>
    </div>
  </div>
</div>