<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spica Admin</title>
    <!-- base:css -->
    <!-- <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css"> -->
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="container-scroller d-flex">
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item sidebar-category">
                                <p>Navigation</p>
                                <span></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('listing.index',['model'=>'Product'])}}">
                                    <i class="mdi mdi-view-quilt menu-icon"></i>
                                    <span class="menu-title">Products</span>
                                    <div class="badge badge-info badge-pill">2</div>
                                </a>
                                <a class="nav-link" href="{{route('listing.index',['model'=>'Admin'])}}">
                                    <i class="mdi mdi-view-quilt menu-icon"></i>
                                    <span class="menu-title">Admins</span>
                                    <div class="badge badge-info badge-pill">2</div>
                                </a>
                            </li>

                            <li class="nav-item sidebar-category">
                                <p>Components</p>
                                <span></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                    <i class="mdi mdi-palette menu-icon"></i>
                                    <span class="menu-title">UI Elements</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="ui-basic">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/forms/basic_elements.html">
                                    <i class="mdi mdi-view-headline menu-icon"></i>
                                    <span class="menu-title">Form elements</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/charts/chartjs.html">
                                    <i class="mdi mdi-chart-pie menu-icon"></i>
                                    <span class="menu-title">Charts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/tables/basic-table.html">
                                    <i class="mdi mdi-grid-large menu-icon"></i>
                                    <span class="menu-title">Tables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/icons/mdi.html">
                                    <i class="mdi mdi-emoticon menu-icon"></i>
                                    <span class="menu-title">Icons</span>
                                </a>
                            </li>
                            <li class="nav-item sidebar-category">
                                <p>Pages</p>
                                <span></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                                    <i class="mdi mdi-account menu-icon"></i>
                                    <span class="menu-title">User Pages</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="auth">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                                        <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                                        <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item sidebar-category">
                                <p>Apps</p>
                                <span></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs/documentation.html">
                                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                    <span class="menu-title">Documentation</span>
                                </a>
                            </li>
                        </ul>
                    </nav>



                </div>

            </div>
            <div class="col-md-9">
                <div class="row" style="display: block;">

                    <!-- <div class="col-md-12 col-sm-6  ">               
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Count_buy</th>
                                            <th>Category_id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <th scope="row">1</th>
                                            

                                        </tr>
                                      
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div> -->

                   
                </div>
            </div>
        </div>
        <!-- /page content -->


    </div>
    </div>
    </div>



    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>



<!-- base:js -->

<script src="vendors/js/vendor.bundle.base.js"></script>

<!-- endinject -->
<!-- Plugin js for this page-->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->


</body>


</html>