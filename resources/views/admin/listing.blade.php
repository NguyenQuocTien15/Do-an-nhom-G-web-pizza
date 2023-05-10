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
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <div class="col-md-2">
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
                                    <div class="badge badge-info badge-pill">1</div>
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
            <div class="col-md-10 ">
                <h3><?= $title ?></h3>
                <div class="filter-item d-flex flex-wrap" style="display: inline-block;">
                    <!-- tìm kiếm -->

                    <form action="{{route('listing.index',['model'=>'Product'])}}" method="POST" class="filter-form">
                    @csrf   
                    <fieldset>
                            <legend> Tìm Kiếm:</legend>
                            <?php foreach ($configs as $config) { ?>
                                <?php if (!empty($config['filter'])) { ?>
                                    <?php switch ($config['filter']) {
                                        case "equal": ?>
                                            <label for="fname"><?= $config['name'] ?></label>
                                            <input type="text" id="fname" <?= $config['field'] ?> name="id" value="<?= (!empty($configs['filter_value']))?($configs['filter_value']):""?>" >

                                        <?php break;
                                        case "like": ?>
                                            <label for="fname"><?= $config['name'] ?></label>
                                            <input type="text" id="fname" <?= $config['field'] ?> name="id" value="<?= (!empty($configs['filter_value']))?($configs['filter_value']):""?>">

                                        <?php break;
                                        case "between": ?>
                                            <label for="gia"><?= $config['name'] ?></label>
                                            <input type="text" id="gia" <?= $config['field'] ?> name="price[from]" value="<?= (!empty($configs['filter_from_value']))?($configs['filter_from_value']):""?>">
                                            <label for="to">đến:</label>
                                            <input type="text" id="gia" <?= $config['field'] ?> name="price[to]" value="<?= (!empty($configs['filter_to_value']))?($configs['filter_to_value']):""?>">

                                    <?php break;
                                    } ?>
                                <?php } ?>
                            <?php } ?>



                            <input type="submit" value="Tìm">
                        </fieldset>
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php foreach ($configs as $config) { ?>
                                <th><?= $config['name'] ?></th>
                            <?php } ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $record) { ?>
                            <tr>
                                <?php foreach ($configs as $config) { ?>
                                    <?php switch ($config['type']) {
                                        case "text":
                                    ?>
                                            <td><?= $record[$config['field']] ?></td>

                                        <?php
                                            break;
                                        case "image": ?>
                                            <td><img onerror="this.src='/images_admin/choco.jpg'" src="<?= $record[$config['field']] ?>"></td>

                                        <?php
                                            break;
                                        case "number": ?>
                                            <td><?= number_format($record[$config['field']], 0, ',', ',') ?></td>

                                        <?php
                                            break;
                                        case "copy": ?>
                                            <td><a href="#" style="text-decoration: none; color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    </svg>Copy</a></td>
                                        <?php
                                            break;
                                        case "edit": ?>
                                            <td><a href="#" style="text-decoration: none; color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>Sửa</a></td>
                                        <?php
                                            break;
                                        case "delete": ?>
                                            <td><a href="#" style="text-decoration: none; color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>Xóa</a></td>
                                    <?php
                                            break;
                                    } ?>

                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <?= $records->links("pagination::bootstrap-4") ?>
            </div>
        </div>
        <div class="clearfix"></div>
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