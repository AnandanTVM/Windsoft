<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['id']))
{
	 $id = $_SESSION['id'];
	  $link=mysqli_connect("localhost","root","","windsoft");
		 if($link===false)
		 {
			 die("ERROR : Could not connect . " . mysqli_connect_error());
		 }
		  else
		  {
		  $result=mysqli_query($link,"select * from login where id='$id'");
		 
		  }
}
?>
<html dir="ltr" lang="en"><!-- InstanceBegin template="/Templates/WindsoftMainAdmin-Dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Windsoft Admin</title>
    <!-- InstanceEndEditable -->
  <!-- Favicon icon -->
  <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon.jpg"
    />
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="html/index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
				   <!-- InstanceBeginEditable name="EditRegion5" -->Welcome&nbsp;<?php  
								 
			$row=mysqli_fetch_array($result);
			  $name=$row['name'];
				  echo $name;?><!-- InstanceEndEditable -->		    <!-- put name here-->
                <!-- dark Logo text 
                <img
                  src="../assets/images/logo-text.png"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    ><font size="5" style="font-family: algerian">WINDSOFT</font></span>
                  <span class="d-block d-md-none"
                    ><i class="fa fa-plus"></i
                  ></span>
                </a>
               
              </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
             
               
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
                
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="font-24 mdi mdi-comment-processing"></i>
                </a>
              
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                 
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="WindAdminHome.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
				<li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bubble"></i
                  ><span class="hide-menu">Result</span></a
                >
              </li>
				<li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Authorisation</span></a
                >
              </li>
				
				<li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  >
					  <i class="me-2 mdi mdi-currency-inr"></i
                        >
                        <span class="hide-menu">ATL Fee </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-database-plus"></i
                        ><span class="hide-menu">Fee Payment  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
						<i class="me-2 mdi mdi-database-minus"></i
                        >
                      
                     <span class="hide-menu">D2D Expense</span></a
                    >
                  </li>
					<li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-information"></i
                        ><span class="hide-menu">Fee Balance Info</span></a
                    >
                  </li>
                </ul>
              </li>
				
				<li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  >
					  <i class="me-2 mdi mdi-currency-inr"></i
                        >
                        <span class="hide-menu">CKL Fee </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-database-plus"></i
                        ><span class="hide-menu">Fee Payment  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
						<i class="me-2 mdi mdi-database-minus"></i
                        >
                      
                     <span class="hide-menu">D2D Expense</span></a
                    >
                  </li>
					<li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-information"></i
                        ><span class="hide-menu">Fee Balance Info</span></a
                    >
                  </li>
                </ul>
              </li>
				
				
				
				
              <li class="sidebar-item">

                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  > <i class="fas fa-address-card"></i><span class="hide-menu">Visitors Info</span></a
                >
              </li>
				<li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  >
					<i class="me-2 mdi mdi-account-multiple-plus"></i>
					<span class="hide-menu">Registration </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-account-plus"></i
                        ><span class="hide-menu">Student Entrollment</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-account-plus"></i
                        ><span class="hide-menu">Exam Registration</span></a
                    >
                  </li>
					 <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      ><i class="me-2 mdi mdi-account-plus"></i
                        ><span class="hide-menu">Hall Ticket Apply</span></a
                    >
                  </li>
                </ul>
              </li>
				
              
				
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="WindAdminAddNotice.php"
                  aria-expanded="false"
                  ><i class="fas fa-bell"></i><span class="hide-menu">Update Notice</span></a
                >
              </li>
				 <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="WindAdminAddNotes.php"
                  aria-expanded="false"
                  ><i class="fas fa-cloud-upload-alt"></i><span class="hide-menu">Upload Notes</span></a
                >
              </li>
				
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i class="fas fa-info-circle"></i><span class="hide-menu">Students Info</span></a
                >
              </li><li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  >  <i class="far fa-file-alt"></i
                      ><span class="hide-menu">Course </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                      > <i class="fas fa-clipboard"></i> <span class="hide-menu">View Course </span></a
                    >
					</li>
                </ul>
              </li>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  >  <i class="fas fa-chart-pie"></i> <span class="hide-menu">Mountly Calculation</span></a
                >
              </li>
				<li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  > <i class="fas fa-clipboard-list"></i><span class="hide-menu">Feed Back</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb"><!-- InstanceBeginEditable name="EditRegion1" -->
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Add Notes</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb"></nav>
              </div>
            </div>
          </div>
        <!-- InstanceEndEditable --></div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            
			  
		    <table width="100%" border="0">
			    <tbody>
			      <tr>
			        <td><!-- InstanceBeginEditable name="EditRegion2" -->
			          <table width="100%" border="0">
			            <tbody>
			              <tr>
			                <td>
							  <script language="javascript">
				  function validation()
				  { 
					  var a1,a2,a3,a4;
				   a1=reg.t1.value;
				   a2=reg.t2.value;
				   a3=reg.t3.value;
				   a4=reg.t4.value;
				  
				   
				   
				  
					if(a1=="")
						{
							alert("Please Fill Out This Field");
							reg.t1.focus();
							return true;
						}
				   if(a2=="")
						{
							alert("Please Fill Out This Field");
							reg.t2.focus();
							return true;
						}
				   if(a3=="")
						{
							alert("Please Fill Out This Field");
							reg.t3.focus();
							return true;
						}
				   if(a4=="")
						{
							alert("Please Fill Out This Field");
							reg.t4.focus();
							return true;
						}
					  else
						  {
							   reg.submit();
						  }
				  }
				  </script>
							  
							  <div class="row">
            <div class="col-md-6">
              <div class="card">
                <form class="form-horizontal" action="#" method="post" name="reg">
                  <div class="card-body">
                    <h4 class="card-title">Upload Notes</h4>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="t1" 
                          placeholder="eg:(Data Structure)"
                        />
                      </div>
                    </div>
                   <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Type</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="t2"
                          placeholder="eg:(pdf,zip...)"
                        />
                      </div>
                    </div>
                      <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Date Of Upload</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="date" style="text-transform: uppercase"
                          class="form-control"
                          id="t3"
                          placeholder="eg:(DD/MM/YYYY)"
                        />
                      </div>
                    </div>
                 
                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Description</label
                      >
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="eg:(This Note is based on...)" id="t4"></textarea>
                      </div>
                    </div>
					  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">File Upload</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="validatedCustomFile"
                          required
                        />
                        <label
                          class="custom-file-label"
                          for="validatedCustomFile"
                          >Choose file...</label
                        >
                     
                      </div>
						
                    </div>
						  
                  </div>
					  
                  </div>
					 <div class="border-top">
                    <div class="card-body">
						
                        <button type="button" value="SUBMIT" id="s2" class="btn btn-success text-white" onClick="validation()">
                      Submit
                    </button>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
							  
							  
							  
							  </td>
		                  </tr>
		                </tbody>
		            </table>
			        <!-- InstanceEndEditable --></td>
		          </tr>
		      </tbody>
		    </table>
          </div>
          
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by WINDSOT-admin. Designed and Developed by
          <a href="https://www.wndsoftatl.com">WINDSOFT</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
  </body>
<!-- InstanceEnd --></html>
