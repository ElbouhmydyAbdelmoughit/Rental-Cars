<div class="bg-light" id="dashboard">
  <div class="row col-12">
    <div class="contant d-flex">
      <div class="col-2 me-3">
        <?php require APPROOT . '/views/inc/header_sidebar.php'; ?>
      </div>
      <div class="col-10 mt-5 table-responsive">
        <table class="table border border-1 border-dark text-nowrap" style="min-width: 600px;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Model</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Operation</th>
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
                <div class="operation">
                  <a class="me-3 text-success" href="<?php echo URLROOT; ?>/cars/update"><i class="bi bi-pen"></i></a>
                  <a class="ms-3 text-danger" href="<?php echo URLROOT; ?>/cars/delete"><i class="bi bi-trash"></i></a>
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