<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
-->
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
        <link rel="shortcut icon" href="/images/favicon.png">
        <title>Tatto_Admin</title>

        <!-- Icons -->
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/simple-line-icons.css" rel="stylesheet">

        <!-- Main styles for this application -->
        <link href="/css/admin_style.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <style type="text/css">
            div.is-invalid{
                color: #f86c6b;
            }

            .modal {
                overflow:visible;
            }
        </style>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    </head>

    <!-- BODY options, add following classes to body to change options
    
    // Header options
    1. '.header-fixed'					- Fixed Header
    
    // Sidebar options
    1. '.sidebar-fixed'					- Fixed Sidebar
    2. '.sidebar-hidden'				- Hidden Sidebar
    3. '.sidebar-off-canvas'		- Off Canvas Sidebar
    4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
    5. '.sidebar-compact'			  - Compact Sidebar
    
    // Aside options
    1. '.aside-menu-fixed'			- Fixed Aside Menu
    2. '.aside-menu-hidden'			- Hidden Aside Menu
    3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
    
    // Breadcrumb options
    1. '.breadcrumb-fixed'			- Fixed Breadcrumb
    
    // Footer options
    1. '.footer-fixed'					- Fixed footer
    
    -->

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-size: 25px;">타투</a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--     <ul class="nav navbar-nav d-md-down-none">
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#">Dashboard</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#">Users</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#">Settings</a>
                  </li>
                </ul> -->
            <ul class="nav navbar-nav ml-auto">
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                      <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
                    <div class="dropdown-header text-center">
                      <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                  </div>
                </li> -->
            </ul>
        </header>

        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/partConfig"><i class="icon-speedometer"></i>시술부위 관리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/locationConfig"><i class="icon-speedometer"></i>사시는곳 관리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/artistConfig"><i class="icon-speedometer"></i>아티스트 관리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/workConfig"><i class="icon-speedometer"></i>작품 관리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/quoteContactConfig"><i class="icon-speedometer"></i>견적요청 관리</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main content -->
            <main class="main">
