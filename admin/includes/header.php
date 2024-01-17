
<?php 
require_once('../backend/auth.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <title>Admin Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" type="image/png" href="../assets/img/logoE.png">
  <!-- Favicons -->
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style>
        .notifications-wrapper {
            max-height: 300px; /* Set the maximum height to allow scrolling */
            overflow-y: auto; /* Enable vertical scrolling */
            }
        </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logoE.png" alt="">
        <span class="d-none d-lg-block">eBarangay <div class="text-warning">Portal</div> </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

   

        <li class="nav-item dropdown">
          <?php 
          include '../backend/db.php';
          include '../backend/helpers.php';
          // count pending requests
          $tables = array("brgy_cert_submission", "burial_assistance_submission", "business_permit_submission", "financial_assistance_submission", "medical_assistance_submission", "senior_citizen_application");
          $totalCount = 0;

          foreach($tables as $table){
              $sql = "SELECT COUNT(*) AS count FROM $table WHERE status = 2";
              $result = $conn->query($sql);

              if($result->num_rows > 0){
                  $row = $result->fetch_assoc();
                  $count = $row['count'];
                  $totalCount += $count;
              } else {
                  echo "No record to be count.";
              }
          }


          ?>
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"><?= $totalCount ?></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
    <div class="notifications-wrapper">
            <li class="dropdown-header">
              You have <?= $totalCount ?> pending request
              <a href="requests.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
           <?php include '../backend/notification.php'; ?>

                       
<!-- Output the generated notifications HTML -->

    <?php echo $notificationsHTML; ?>


            
            <li class="dropdown-footer">
              <a href="requests.php">Show all notifications</a>
            </li>
    </div>
          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $firstname;  ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle mb-2">
              <h6><?= $firstname ?> <?= $lastname; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="settings.php">
                <i class="bi bi-person"></i>
                <span>Edit Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="edit-password.php">
                <i class="bi bi-gear"></i>
                <span>Change Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
  <a class="dropdown-item d-flex align-items-center" href="../backend/logout.php">
    <i class="bi bi-box-arrow-right"></i>
    <span>Logout</span>
  </a>
</li>


          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard_admin.php">
        <i class="bi bi-house-door-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="residents.php">
        <i class="bi bi-people-fill"></i>
          <span>Resident</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="admin.php">
        <i class="bi bi-person-fill"></i>
          <span>Admin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="requests.php">
        <i class="bi bi-file-earmark-fill"></i>
          <span>Request</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="news.php">
        <i class="bi bi-megaphone-fill"></i>
          <span>News</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="settings.php">
        <i class="bi bi-gear-fill"></i>
          <span>Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../backend/logout.php">
        <i class="bi bi-box-arrow-in-right"></i>
          <span>Log out</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">