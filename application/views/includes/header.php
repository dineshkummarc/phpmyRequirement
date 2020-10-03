<!DOCTYPE html>
<html>
<<<<<<< HEAD

<head>
  <meta charset="UTF-8">
  <title>
    <?php echo $pageTitle; ?>
  </title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- Datatables style -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.5.1/b-colvis-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/fc-3.2.4/fh-3.1.3/kt-2.3.2/r-2.2.1/rg-1.0.2/rr-1.2.3/sc-1.4.4/sl-1.2.5/datatables.min.css"
  />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <style>
    .error {
      color: red;
      font-weight: normal;
    }
  </style>
  <!-- jQuery 2.1.4 -->
  <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript">
    var baseURL = "<?php echo base_url(); ?>";
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>BSE</b>U</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <b>BSEU</b>YONETIM</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-history"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="header"> Son Giriş :
                  <i class="fa fa-clock-o"></i>
                  <?= empty($last_login) ? "İlk Giriş" : $last_login; ?>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image" />
                <span class="hidden-xs">
                  <?php echo $name; ?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                  <p>
                    <?php echo $name; ?>
                    <small>
                      <?php echo $role_text; ?>
                    </small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url(); ?>userEdit" class="btn btn-default btn-flat">
                      <i class="fa fa-key"></i> Hesap Ayarları </a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">
                      <i class="fa fa-sign-out"></i> Çıkış Yap</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">
          </li>
          <li class="treeview">
            <a href="<?php echo base_url(); ?>dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Anasayfa</span>
              </i>
            </a>
          </li>
          <?php
            // Rol definetion in application/config/constants.php
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>tasks">
                <i class="fa fa-tasks"></i>
                <span>Görevler</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>addNewTask">
                <i class="fa fa-plus-circle"></i>
                <span>Görev Ekle</span>
              </a>
            </li>
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>userListing">
                  <i class="fa fa-users"></i>
                  <span>Kullanıcılar</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>addNew">
                  <i class="fa fa-plus-circle"></i>
                  <span>Kullanıcı Ekle</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>log-history">
                  <i class="fa fa-archive"></i>
                  <span>Log Kayıtları</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>log-history-upload">
                  <i class="fa fa-upload"></i>
                  <span>Yedek Yükle</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>log-history-backup">
                  <i class="fa fa-archive"></i>
                  <span>Log Kayıtları Yedek</span>
                </a>
              </li>
              <?php
            }
            if($role == ROLE_EMPLOYEE)
            {
            ?>
                <li class="treeview">
                  <a href="<?php echo base_url(); ?>etasks">
                    <i class="fa fa-tasks"></i>
                    <span>Görevler</span>
                  </a>
                  <?php
            }
            ?>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
=======
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php $plugins = base_url().PLUGINS_FULL; ?>
    <link href="<?php echo base_url()."assets/css/custom.min.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css?".VER; ?>" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url()."assets/font-awesome/css/font-awesome.min.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url()."assets/dist/css/skins/_all-skins.min.css".VER; ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $plugins."datepicker/datepicker3.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $plugins."datepicker/datepicker3.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $plugins."timepicker/bootstrap-timepicker.min.css?".VER; ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo $plugins."bootstrap-editable/css/bootstrap-editable.css?".VER; ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $plugins."datatables/dataTables.bootstrap.css?".VER; ?>" rel="stylesheet" type="text/css" />
    
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/js/jQuery-2.1.4.min.js?".VER; ?>"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a id="lnkLogo" href="<?php echo base_url(); ?>dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>R</b>A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Requirement</b>Analysis</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a id="lnkProfileDrop" href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a id="lnkChangePass" href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a id="lnkLogout" href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a id="lnkDashboard" href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <?php
            if($role == ROLE_EMPLOYEE)
            {
            ?>
            <li class="treeview">
              <a id="lnkRawListing" href="<?php echo base_url(); ?>rawListing">
                <i class="fa fa-blind"></i><span>Customers</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkFollowListing" href="<?php echo base_url(); ?>followListing">
                <i class="fa fa-bell-o"></i><span>Follow Ups</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkCalender" href="#">
                <i class="fa fa-gear"></i>
                <span> Calender</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu menu-open">
                <li><a id="lnkCalenderListing" href="<?php echo base_url(); ?>calender"><i class="fa fa-circle-o"></i> Calender</a></li>
                <li><a id="lnkCallListing" href="<?php echo base_url(); ?>callListing"><i class="fa fa-circle-o"></i> Calls</a></li>
              </ul>
            </li>
            <?php
            }
            ?>

            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a id="lnkImport" href="<?php echo base_url(); ?>import">
                <i class="fa fa-dashboard"></i> <span>Import</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkCalender" href="#">
                <i class="fa fa-gear"></i>
                <span> Calender</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu menu-open">
                <li><a id="lnkCalenderListing" href="<?php echo base_url(); ?>calender"><i class="fa fa-circle-o"></i> Calender</a></li>
                <li><a id="lnkCallListing" href="<?php echo base_url(); ?>callListing"><i class="fa fa-circle-o"></i> Calls</a></li>
              </ul>
            </li>			
			<li class="treeview">
              <a id="lnkCMS" href="#">
                <i class="fa fa-gear"></i>
                <span>Config & Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu menu-open">
                <li><a id="lnkEmailTemplates" href="<?php echo base_url(); ?>emailTemplates"><i class="fa fa-circle-o"></i> Email Templates</a></li>
                <li><a id="lnkCompanyListing" href="<?php echo base_url(); ?>companyListing"><i class="fa fa-circle-o"></i> Company List</a></li>
                <li><a id="lnkAttachmentListing" href="<?php echo base_url(); ?>attachmentListing"><i class="fa fa-circle-o"></i> Attachments</a></li>
				<li><a id="lnkCronListing" href="<?php echo base_url(); ?>cron"><i class="fa fa-circle-o"></i> Cron Job</a></li>
               <li><a id="lnkAttachmentListing" href="<?php echo base_url(); ?>updateAttachment"><i class="fa fa-circle-o"></i> Update Attachments</a></li>
			   <li><a id="lnkRole" href="<?php echo base_url(); ?>role"><i class="fa fa-circle-o"></i> Roles</a></li>
				<li><a id="lnkpackages" href="<?php echo base_url(); ?>packages"><i class="fa fa-circle-o"></i> Packages</a></li>
				<li><a id="lnkfeedbacktypes" href="<?php echo base_url(); ?>feedbacktypes"><i class="fa fa-circle-o"></i> Feedback Types</a></li>
				<li><a id="lnkattachmenttypes" href="<?php echo base_url(); ?>attachmenttypes"><i class="fa fa-circle-o"></i> Attachment Types</a></li>
              </ul>
            </li>
			
            <li class="treeview">
              <a id="lnkUnassignedCustomers" href="<?php echo base_url(); ?>unassignCustomers">
                <i class="fa fa-users"></i><span>Assign Customers</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkRawCustomerListing" href="<?php echo base_url(); ?>rawCustomerListing">
                <i class="fa fa-blind"></i><span>Customers</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkFollowCustomerListing" href="<?php echo base_url(); ?>followCustomerListing">
                <i class="fa fa-bell-o"></i><span>Follow Ups</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkUserListing" href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Admin Users</span>
              </a>
            </li>
            <li class="treeview">
              <a id="lnkReports" href="#">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu menu-open">
                <li><a id="lnkEmployeeReport" href="<?php echo base_url(); ?>employeeReport"><i class="fa fa-circle-o"></i> Employee Report</a></li>
                <li><a id="lnkSummaryReport" href="<?php echo base_url(); ?>summaryReport"><i class="fa fa-circle-o"></i> Summary Report</a></li>
              </ul>
            </li>
            <?php
            }
            ?>
            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a id="lnkCaching" href="<?php echo base_url(); ?>caching">
                <i class="fa fa-refresh"></i>
                <span>Caching</span>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
>>>>>>> old2/master
