<div class="bg-light" id="dashboard">
  <div class="row col-12">
    <div class="contant d-flex mx-auto justify-content-center">
      <div class="">
        <?php require APPROOT . '/views/inc/header_sidebar.php'; ?>
      </div>
      <div class=" mt-5 table-responsive mx-auto">
        <div class="col-6 text-center mx-auto my-5" role="alert">
          <?php flash('car_message'); ?>
        </div>
        <table class="table border-dark text-nowrap table table-dark table-hover" style="width: 750px;">
          <thead>
            <tr>
              <th>#</th>
              <th>Model</th>
              <th>Name</th>
              <th>Price</th>
              <th class="d-flex justify-content-center"> Opreration</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['cars'] as $car) : ?>
            <tr>
              <th><?php echo $car->id; ?></th>
              <td><?php echo $car->model; ?></td>
              <td><?php echo $car->name; ?></td>
              <td><?php echo $car->price; ?></td>
              <td>
                <div class="operation d-flex justify-content-center">
                  <a class="me-3 text-success" href="<?php echo URLROOT; ?>/cars/update/<?= $car->id ?>"><i
                      class="bi bi-pen"></i></a>
                  <a class="ms-3 text-danger" href="<?php echo URLROOT; ?>/cars/delete/<?= $car->id ?>"><i
                      class="bi bi-trash"></i></a>
                  <a class="ms-3 text-info" href=" <?php echo URLROOT; ?>/cars/add">
                    <i class="bi bi-plus-circle"></i>
                  </a>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>