<?php
  require 'dist/php/session.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Data table -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Select 2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Data tables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

  <!-- sweet alert -->
  <script src="plugins\sweetalert2\sweetalert2.all.js"></script>


  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

<!-- custom script -->
<link rel="stylesheet" href="dist\css\custom.css">

</head>
  <style media="screen">
    /* Hide scrollbar for Chrome, Safari and Opera */
    .notif-div::-webkit-scrollbar {
    display: none;

    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .notif-div {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
    }
    p.msg-notif{
      word-break: break-all !important;
    }
    a.notSeen{
      background: #efefef;
      /* color: #007bff; */
    }
  </style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link notif-a-tag" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge new-count-notif"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width:450px;">

          <span class="dropdown-header">Notifications</span>

          <div class="notif-div" style="max-height:500px; overflow-y:scroll">

          </div>


          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">The Cybernet Place</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?page=profile&user_id=<?php echo $_SESSION['user_id']; ?>" class="d-block"><?php echo $_SESSION['fullname']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=report" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Reports</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=users" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=customer" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>Custumers</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=subscription" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Subscriptions</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="index.php?page=Customer_subsription" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Customer Subsription</p>
            </a>
          </li> -->

          <!-- <li class="nav-item">
            <a href="index.php?page=settings" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li> -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- select2 -->
  <script src="plugins\select2\js\select2.full.min.js"></script>
  <div class="content-wrapper">

    <!-- content Here -->
    <?php
      if(isset($_GET['page'])){
        if(file_exists('pages/' . $_GET['page'] . '.php')){
          include 'pages/' . $_GET['page'] . '.php';
        }else{

          include 'pages/report.php';

        }
      }

    ?>

  </div>

  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<input type="hidden" id="allIdsOfNotif">
<!-- ./wrapper -->

<script>
  $(document).ready(function(){
    notifyGet();
    var url = window.location.search;
    var urlParams = new URLSearchParams(url);
    var page = urlParams.get('page');
    console.log(page)
    if( page == null ){
      window.location.assign('index.php?page=report');
    }


    $('.notif-a-tag').on('click', function(){
      $.ajax({
        url:'dist/php/passer/customer_getter.php',
        method: 'POST',
        dataType: "JSON",
        data : {
          'action' : 'setNotif',
          'idsTobe' : $('#allIdsOfNotif').val()
        },success: function( res ){

          if (res['status'] == 'success') {
            notifyGet();
          }
        }, error: function(res){
          console.log(res);
        }
      })
    })




    function notifyGet(){

      $.ajax({
        url:'dist/php/passer/customer_getter.php',
        method: 'POST',
        dataType: "JSON",
        data : {
          'action' : 'getNotication'
        },success: function( res ){
          $('.notif-div').html('')

          var count = 0;
          var allIdsOfNotif = '';
          for (var i = 0; i < res.length; i++) {
            var classFor = '';
            if (res[i]['isread'] == '0') {
              classFor = 'notSeen'
            }

            if (res[i]['isNoticed'] == 0) {
              count ++;

              if (allIdsOfNotif == '') {
                allIdsOfNotif = res[i]['Id'];
              }else{
                allIdsOfNotif += ',' + res[i]['Id'];
              }

            }

            $('.notif-div').append(
              `<div class="dropdown-divider"></div>
                <a href="?page=paymentDetails&customer_id=${res[i]['customer_id']}&filter=none" class="dropdown-item ${classFor}">
                <p class="msg-notif"><i class="fas fa-bullhorn mr-2"></i> ${res[i]['first_name']} ${res[i]['last_name']}${res[i]['msg']}</p>
                  <div><span class="text-muted text-sm">3 mins</span></div>
                </a>`
            )
          }

          $('#allIdsOfNotif').val(allIdsOfNotif);
          if (count == 0) {
            $('.notif-a-tag span.new-count-notif').css('display', 'none')
          }else{
            $('.notif-a-tag span.new-count-notif').css('display', 'block')
            $('.new-count-notif').text( count );
          }

        }, error: function(res){
          console.log(res);
        }
      })
    }





  })
</script>
</body>
</html>
