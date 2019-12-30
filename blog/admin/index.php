<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>
  <script src="jquery/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="fontawesome/fontawesome.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Blog Admin Panel </div>
      <div class="list-group list-group-flush  ">
        <a href="#" class="list-group-item list-group-item-action bg-dark ">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mr-5 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-plus"></i>  Add Post <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Add Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-camera"></i>	
Add Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fa fa-camera"></span> Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
