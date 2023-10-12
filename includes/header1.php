<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Admin Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <!-- Font Awesome -->
        <link rel="stylesheet" href="style/all.min.css">
    <!-- Theme style -->
        <link rel="stylesheet" href="style/adminlte.min.css">
      
    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./assects/css/bootstrap_responsive.css">
    <link rel="stylesheet" href="./style/header1.css">


  </head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class='bx bx-left-indent h5'></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Home</a>
            </li>
           
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class='bx bx-search'></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <div class="nav-item text-nowrap">
              <a class="nav-link px-3" href="logout.php">Sign out</a>
            </div>
          </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-primary elevation-4" style="background-color:#2c3e50">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center my-2">
      <span class="brand-text font-weight-dark text-white">AAKRITI ENTERPRISE</span>
    </a>

    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw text-white"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
            <a href="#" class="nav-link" >
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p class="NAVIGATION text-white">
                NAVIGATION
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav">
              <li class="nav-item">
              <a href="admin.php" class="nav-link text-white">
              <i class='bx bxs-dashboard mx-2 h6'></i>
                  <p class="h6">Dashboard</p>
              </a>

              <a href="aboutdashboard.php" class="nav-link text-white">
              <i class='bx bx-list-ul mx-2 h6'></i>
                  <p class="h6">About</p>
              </a>


              
              </li>
              
  
            </ul>
            
          </li>
          
        </ul>
      </nav>
      
    </div>
    <!-- end sidebar -->
  </aside>
  

  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>