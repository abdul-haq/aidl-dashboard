<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Projects</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("navbar.php")?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require("../../sidebar.php")?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Products</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Prducts</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">
                    #
                  </th>
                  <th style="width: 20%">
                    Product
                  </th>
                  <th style="width: 50%">
                    Product Description
                  </th>
                  <!-- <th>
                    Project Progress
                  </th>
                  <th style="width: 8%" class="text-center">
                    Status
                  </th> -->
                  <th style="width: 20%">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    #
                  </td>
                  <td>
                    <a>
                      Product 1
                    </a>
                    <br />
                    <small>
                      Created 01.01.2019
                    </small>
                  </td>
                  <td>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sit expedita fugit totam dolores nobis omnis, ipsam blanditiis facilis neque adipisci inventore non quisquam qui ipsa, molestiae consequatur reiciendis perspiciatis.</p>
                  </td>
                  <!-- <td class="project_progress">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0"
                        aria-volumemax="100" style="width: 57%">
                      </div>
                    </div>
                    <small>
                      57% Complete
                    </small>
                  </td> -->
                  <!-- <td class="project-state">
                    <span class="badge badge-success">Success</span>
                  </td> -->
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="./project_detail.html">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>
                    <a class="btn btn-info btn-sm" href="./project_edit.html">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    #
                  </td>
                  <td>
                    <a>
                      Product 2
                    </a>
                    <br />
                    <small>
                      Created 01.01.2019
                    </small>
                  </td>
                  <td>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sit expedita fugit totam dolores nobis omnis, ipsam blanditiis facilis neque adipisci inventore non quisquam qui ipsa, molestiae consequatur reiciendis perspiciatis.</p>
                  </td>
                  <!-- <td class="project_progress">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0"
                        aria-volumemax="100" style="width: 57%">
                      </div>
                    </div>
                    <small>
                      57% Complete
                    </small>
                  </td> -->
                  <!-- <td class="project-state">
                    <span class="badge badge-success">Success</span>
                  </td> -->
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="./project_detail.html">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>
                    <a class="btn btn-info btn-sm" href="./project_edit.html">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
               
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>