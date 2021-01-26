<?php
    if(!isset($_SESSION['login'])){
        header("Location: ../login/index.php");
        exit();
    } 
?>
   <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../banner.png">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text logo-mini">
                        Ct
                    </a>
                    <a href="" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="nc-icon nc-notes"></i>
                            <p>
                                Forms
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="formsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../forms/message_response_vacancy.php">
                                        <span class="sidebar-mini">MV</span>
                                        <span class="sidebar-normal">Messages Vacancy</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../forms/message_response_clients.php">
                                        <span class="sidebar-mini">MC</span>
                                        <span class="sidebar-normal">Messages Clients</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>
                                Tables
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="tablesExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../tables/client-table.php">
                                        <span class="sidebar-mini">CT</span>
                                        <span class="sidebar-normal">Clients Table</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="extended.php">
                                        <span class="sidebar-mini">ET</span>
                                        <span class="sidebar-normal">Extended Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="bootstrap-table.php">
                                        <span class="sidebar-mini">BT</span>
                                        <span class="sidebar-normal">Bootstrap Table</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="datatables.net.php">
                                        <span class="sidebar-mini">DT</span>
                                        <span class="sidebar-normal">DataTables.net</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
              
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php?logout-submit=logout">
                            <i class="nc-icon nc-button-power"></i>
                            <p>
                              LOGOUT
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-primary btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Dashboard PRO </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>