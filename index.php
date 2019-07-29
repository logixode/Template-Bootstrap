<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="src/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="src/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="src/css/all.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right h-100" id="sidebar-wrapper">
      <div class="sidebar-heading">Template Bootstrap</div>
      <div class="list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Modal</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Button</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Dropdown Button</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Breadcrumb</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Accordion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Collapse</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Alert</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Form</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn bg-dark text-white" id="menu-toggle"><i class="fas fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid p-4">
        <h1>Template-Bootstrap</h1>
        <hr/>
        <h2>Breadcrumb</h2>
        <!-- breadcrumb -->
        <?php include "breadcrumb.html"; ?>
        <!-- / breadcrumb -->
        <hr/>
        <br/><br/>

        <h2>Modal</h2>
        <!-- modal -->
        <?php include "modal.html"; ?>
        <!-- / modal -->
        <hr/>
        <br/><br/>

        <h2>Form</h2>
        <!-- form -->
        <?php include "form.html"; ?>
        <!-- / form -->
        <hr/>
        <br/><br/>

        <h2>Button</h2>
        <!-- button -->
        <?php include "button.html"; ?>
        <!-- / button -->
        <hr/>
        <br/><br/>

        <h2>Alert</h2>
        <!-- alert -->
        <?php include "alert.html"; ?>
        <!-- / alert -->
        <hr/>
        <br/><br/>

        <h2>Card</h2>
        <!-- Card -->
        <?php include "card.html"; ?>
        <!-- / Card -->
        <hr/>
        <br/><br/>

        <h2>Collapse</h2>
        <!-- Collapse -->
        <?php include "collapse.html"; ?>
        <!-- / Collapse -->
        <hr/>
        <br/><br/>

        <h2>Accordion</h2>
        <!-- Accordion -->
        <?php include "accordion.html"; ?>
        <!-- / Accordion -->
        <hr/>
        <br/><br/>

        <h2>dropdown</h2>
        <!-- dropdown -->
        <?php include "dropdown.html"; ?>
        <!-- / dropdown -->
        <hr/>
        <br/><br/>

      </div>
      <!-- / container-fluid -->

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap JavaScript -->
  <script src="src/js/jquery.js"></script>
  <script src="src/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle -->
  <script>
    // $("#menu-toggle").click(function(e) {
    //   e.preventDefault();
    //   $("#wrapper").toggleClass("toggled");
    // });
  </script>

</body>

</html>

<!-- === EOF === -->