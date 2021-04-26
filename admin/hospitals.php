<?php 
include("includes/table/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hospital List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hospitals</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hospital update controls</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Hospital Name</th>
                    <th>Pincode</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="./hospitalDetails.php">Hospital name 1</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="./hospitalDetails.php">Hospital name 2</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="./hospitalDetails.php">Hospital name 3</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="./hospitalDetails.php">Hospital name 4</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><a href="./hospitalDetails.php">Hospital name 5</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><a href="./hospitalDetails.php">Hospital name 6</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><a href="./hospitalDetails.php">Hospital name 7</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><a href="./hospitalDetails.php">Hospital name 8</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><a href="./hospitalDetails.php">Hospital name 9</a></td>
                    <td>700001</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><a href="./hospitalDetails.php">Hospital name 10</a></td>
                    <td>700001</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Hospital Name</th>
                    <th>Pincode</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("includes/table/footer.php");
?>