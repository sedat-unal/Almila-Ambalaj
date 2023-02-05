<?php include('./inc/header.php'); ?>
<body class="dark scrollable-layout">
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->

    <!-- Sidebar group -->
    <div class="sidebar-group">

        <!-- BEGIN: Settings -->
        <div class="sidebar" id="settings">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        Settings
                        <a class="btn-sidebar-close" href="#">
                            <i class="ti-close"></i>
                        </a>
                    </h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Settings -->

        <!-- BEGIN: Chat List -->
        <div class="sidebar" id="chat-list">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        Chats
                        <a class="btn-sidebar-close" href="#">
                            <i class="ti-close"></i>
                        </a>
                    </h6>
                    <div class="list-group list-group-flush">
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-danger">
                                <img src="./assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Cass Queyeiro</h6>
                                <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-warning">
                                <img src="./assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Evered Asquith</h6>
                                <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item px-0 d-flex align-items-start">
                            <div class="pr-3">
                                <div class="avatar avatar-state-danger">
                                    <span class="avatar-title bg-success rounded-circle">F</span>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Francisco Ubsdale</h6>
                                <span class="text-muted">Hello how are you?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item px-0 d-flex align-items-start">
                            <div class="pr-3">
                                <div class="avatar avatar-state-success">
                                    <img src="./assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Natale Janu</h6>
                                <span class="text-muted">Hi!</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                                <span class="small text-muted">08:27 PM</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-warning">
                                <img src="./assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Orelie Rockhall</h6>
                                <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-info">
                                <img src="./assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Barbette Bolf</h6>
                                <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                                </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Dudley Laborde</h6>
                                <span class="text-muted">Hello how are you?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-success">
                                <img src="./assets/media/image/user/man_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Barbaraanne Riby</h6>
                                <span class="text-muted">Hi!</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">08:27 PM</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-danger">
                                <img src="./assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Mariana Ondrousek</h6>
                                <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-warning">
                                <img src="./assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Ruprecht Lait</h6>
                                <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-info">
                                <img src="./assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Cosme Hubbold</h6>
                                <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                            <div class="pr-3">
                                <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                                </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Mallory Darch</h6>
                                <span class="text-muted">Hello how are you?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Chat List -->

    </div>
    <!--  Sidebar group -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <!-- Header -->
        <div class="header d-print-none">
            <div class="header-container">
                <div class="header-left">
                    <div class="navigation-toggler">
                        <a href="#" data-action="navigation-toggler">
                            <i data-feather="menu"></i>
                        </a>
                    </div>

                    <div class="header-logo">
                        <a href=index.html>
                            <img class="logo" src="./assets/media/image/logo.png" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="header-body">
                    <div class="header-body-left">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-3">
                                <div class="header-search-form">
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn">
                                                <i data-feather="search"></i>
                                            </button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn header-search-close-btn">
                                                <i data-feather="x"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">Apps</a>
                                <div class="dropdown-menu dropdown-menu-big">
                                    <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between">
                                        <h5 class="mb-0">Apps</h5>
                                    </div>
                                    <div class="p-3">
                                        <div class="row row-xs">
                                            <div class="col-6">
                                                <a href="chat.html">
                                                    <div class="border-radius-1 text-center mb-3">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span class="avatar-title bg-primary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="message-circle"></i>
                                                </span>
                                                        </figure>
                                                        <div class="mt-2">Chat</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="mail.html">
                                                    <div class="border-radius-1 text-center mb-3">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span class="avatar-title bg-secondary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="mail"></i>
                                                </span>
                                                        </figure>
                                                        <div class="mt-2">Mail</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="todo-list.html">
                                                    <div class="border-radius-1 text-center">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span class="avatar-title bg-info text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="check-circle"></i>
                                                </span>
                                                        </figure>
                                                        <div class="mt-2">Todo List</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="file-manager.html">
                                                    <div class="border-radius-1 text-center">
                                                        <figure class="avatar avatar-lg border-0">
                                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="file"></i>
                                                </span>
                                                        </figure>
                                                        <div class="mt-2">File Manager</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Actions" data-toggle="dropdown">Create</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Add Products</a>
                                    <a href="#" class="dropdown-item">Add Category</a>
                                    <a href="#" class="dropdown-item">Add Report</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Reports</a>
                                    <a href="#" class="dropdown-item">Customers</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="header-body-right">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                    <i data-feather="search"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                    <i class="maximize" data-feather="maximize"></i>
                                    <i class="minimize" data-feather="minimize"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link-notify" title="Chats" data-sidebar-target="#chat-list">
                                    <i data-feather="message-circle"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                    <i data-feather="bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Notifications</h5>
                                        <small class="opacity-7">2   unread notifications</small>
                                    </div>
                                    <div class="dropdown-scroll">
                                        <ul class="list-group list-group-flush">
                                            <li class="px-4 py-2 text-center small text-muted bg-light">Today</li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="ti-lock"></i>
                                                        </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            2 steps verification
                                                            <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">20 min ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                            <i class="ti-server"></i>
                                                        </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            Storage is running low!
                                                            <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">45 sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-2 text-center small text-muted bg-light">Old Notifications</li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                            <i class="ti-file"></i>
                                                        </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            1 person sent a file
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-download"></i>
                                                        </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            Reports ready to download
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-4 py-3 list-group-item">
                                                <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                    <div class="flex-shrink-0">
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-primary-bright text-primary rounded-circle">
                                                            <i class="ti-arrow-top-right"></i>
                                                        </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            The invitation has been sent.
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                        </p>
                                                        <span class="text-muted small">Last Week</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 text-right border-top">
                                        <ul class="list-inline small">
                                            <li class="list-inline-item mb-0">
                                                <a href="#">Mark All Read</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                                    <i data-feather="shopping-bag"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Cart</h5>
                                        <small class="opacity-7">4 products</small>
                                    </div>
                                    <div class="dropdown-scroll">
                                        <div class="list-group list-group-flush">
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded" src="assets/media/image/products/product6.png" alt="Canon 4000D 18-55 MM">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Canon 4000D 18-55 MM
                                                        <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $1,200</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded" src="./assets/media/image/products/product3.png" alt="pineapple">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Snopy SN-BT96 Pretty
                                                        <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $250</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="./assets/media/image/products/product7.png" class="rounded" alt="pineapple">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Lenovo Tab E10 TB-X104F 32GB
                                                        <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $100</span>
                                                </div>
                                            </a>
                                            <a href="#" class="px-4 py-3 list-group-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img class="rounded" src="./assets/media/image/products/product6.png" alt="Canon 4000D 18-55 MM">
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Canon 4000D 18-55 MM
                                                        <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item small ti-close"></i>
                                                    </p>
                                                    <span class="text-muted small">X $1,200</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-top text-right small">
                                        <p class="d-flex justify-content-between align-items-center mb-1">
                                            <span>Sub Total</span>
                                            <span>$1,650</span>
                                        </p>
                                        <p class="d-flex justify-content-between align-items-center mb-1">
                                            <span>Taxes</span>
                                            <span>$15</span>
                                        </p>
                                        <p class="d-flex justify-content-between align-items-center mb-1 font-weight-bold">
                                            <span>Total</span>
                                            <span>$1,665</span>
                                        </p>
                                        <button class="btn btn-primary btn-block mt-2">
                                        Order and Payment <i class="ti-arrow-right ml-2"></i>
                                    </button>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                    <i data-feather="settings"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                    <figure class="avatar avatar-sm">
                                        <img src="./assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="avatar">
                                    </figure>
                                    <span class="ml-2 d-sm-inline d-none">Bony Gidden</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="text-center py-4">
                                        <figure class="avatar avatar-lg mb-3 border-0">
                                            <img src="./assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                        <h5 class="text-center">Bony Gidden</h5>
                                        <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                        <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                                    </div>
                                    <div class="list-group">
                                        <a href="profile.html" class="list-group-item">View Profile</a>
                                        <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger" data-sidebar-target="#settings">Sign Out!</a>
                                    </div>
                                    <div class="p-4">
                                        <div class="mb-4">
                                            <h6 class="d-flex justify-content-between">
                                                Storage
                                                <span>%25</span>
                                            </h6>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <hr class="mb-3">
                                        <p class="small mb-0">
                                            <a href="#">Privacy policy</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--  Header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->
            <div class="navigation">
                <div class="navigation-header">
                    <span>Navigation</span>
                    <a href="#">
                        <i class="ti-close"></i>
                    </a>
                </div>
                <div class="navigation-menu-body">
                    <ul>
                        <li>
                            <a class="active" href=index.html>
                                <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <span class="nav-link-icon">
                        <i data-feather="message-circle"></i>
                    </span>
                                <span>Chat</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="mail.html">
                                <span class="nav-link-icon">
                        <i data-feather="mail"></i>
                    </span>
                                <span>Mail</span>
                            </a>
                        </li>
                        <li>
                            <a href="todo-list.html">
                                <span class="nav-link-icon">
                        <i data-feather="check-square"></i>
                    </span>
                                <span>Todo List</span>
                                <span class="badge badge-warning">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="file-manager.html">
                                <span class="nav-link-icon">
                        <i data-feather="file-plus"></i>
                    </span>
                                <span>File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <span class="nav-link-icon">
                        <i data-feather="calendar"></i>
                    </span>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                <span class="nav-link-icon">
                        <i data-feather="image"></i>
                    </span>
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="invoice.html">
                                <span class="nav-link-icon">
                        <i data-feather="file-text"></i>
                    </span>
                                <span>Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="shopping-cart"></i>
                    </span>
                                <span>E-commerce</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="products.html">Products</a>
                                </li>
                                <li>
                                    <a href="product-detail.html">Product Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="edit-3"></i>
                    </span>
                                <span>Forms</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="basic-forms.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="custom-forms.html">Custom Forms</a>
                                </li>
                                <li>
                                    <a href="advanced-forms.html">Advanced Forms</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>

                                <li>
                                    <a href="form-repeater.html">Form Repeater</a>
                                </li>
                                <li>
                                    <a href="file-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="ckeditor.html">CKEditor</a>
                                </li>
                                <li>
                                    <a href="datepicker.html">Datepicker</a>
                                </li>
                                <li>
                                    <a href="timepicker.html">Timepicker</a>
                                </li>
                                <li>
                                    <a href="colorpicker.html">Colorpicker</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="layers"></i>
                    </span>
                                <span>Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Elements</a>
                                    <ul>
                                        <li>
                                            <a href="alert.html">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="accordion.html">Accordion</a>
                                        </li>
                                        <li>
                                            <a href="buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="dropdown.html">Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="list-group.html">List Group</a>
                                        </li>
                                        <li>
                                            <a href="pagination.html">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="media-object.html">Media Object</a>
                                        </li>
                                        <li>
                                            <a href="progress.html">Progress</a>
                                        </li>
                                        <li>
                                            <a href="modal.html">Modal</a>
                                        </li>
                                        <li>
                                            <a href="spinners.html">Spinners</a>
                                        </li>
                                        <li>
                                            <a href="navs.html">Navs</a>
                                        </li>
                                        <li>
                                            <a href="tab.html">Tab</a>
                                        </li>
                                        <li>
                                            <a href="tooltip.html">Tooltip</a>
                                        </li>
                                        <li>
                                            <a href="popovers.html">Popovers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cards</a>
                                    <ul>
                                        <li>
                                            <a href="basic-cards.html">Basic Cards </a>
                                        </li>
                                        <li>
                                            <a href="image-cards.html">Image Cards </a>
                                        </li>
                                        <li>
                                            <a href="scroll-cards.html">Scroll Cards </a>
                                        </li>
                                        <li>
                                            <a href="other-cards.html">Others Cards</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                    <ul>
                                        <li>
                                            <a href="basic-tables.html">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="dataTable.html">Datatable</a>
                                        </li>
                                        <li>
                                            <a href="responsive-tables.html">Responsive Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Charts</a>
                                    <ul>
                                        <li>
                                            <a href="apexchart.html">Apex Chart</a>
                                        </li>
                                        <li>
                                            <a href="chartjs.html">Chartjs</a>
                                        </li>
                                        <li>
                                            <a href="justgage.html">Justgage</a>
                                        </li>
                                        <li>
                                            <a href="morsis.html">Morsis</a>
                                        </li>
                                        <li>
                                            <a href="peity.html">Peity</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Maps</a>
                                    <ul>
                                        <li>
                                            <a href="google-map.html">Google Map</a>
                                        </li>
                                        <li>
                                            <a href="vector-map.html">Vector Map</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="avatar.html">
                                    Avatar
                                </a>
                                </li>
                                <li>
                                    <a href="icons.html">
                                    Icons
                                </a>
                                </li>
                                <li>
                                    <a href="colors.html">
                                    Colors
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </span>
                                <span>Plugins</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="sweet-alert.html">Sweet Alert</a>
                                </li>
                                <li>
                                    <a href="lightbox.html">Lightbox</a>
                                </li>
                                <li>
                                    <a href="toast.html">Toast</a>
                                </li>
                                <li>
                                    <a href="tour.html">Tour</a>
                                </li>
                                <li>
                                    <a href="slick-slide.html">Slick Slide</a>
                                </li>
                                <li>
                                    <a href="nestable.html">Nestable</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="copy"></i>
                    </span>
                                <span>Pages</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="users.html">Users</a>
                                </li>
                                <li>
                                    <a href="settings.html">Settings</a>
                                </li>
                                <li>
                                    <a href="login.html" target="_blank">Login</a>
                                </li>
                                <li>
                                    <a href="register.html" target="_blank">Register</a>
                                </li>
                                <li>
                                    <a href="recovery-password.html" target="_blank">Recovery Password</a>
                                </li>
                                <li>
                                    <a href="lock-screen.html" target="_blank">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="pricing-table.html">Pricing Table</a>
                                </li>

                                <li>
                                    <a href="pricing-table-2.html">Pricing Table 2</a>
                                </li>
                                <li>
                                    <a href="search-result.html">Search Result</a>
                                </li>
                                <li>
                                    <a href="#">Error Pages</a>
                                    <ul>
                                        <li>
                                            <a href="404.html" target="_blank">404</a>
                                        </li>
                                        <li>
                                            <a href="mean-at-work.html" target="_blank">Mean at Work</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blank-page.html">Blank Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="mailing.html">
                                <span class="nav-link-icon">
                        <i data-feather="corner-up-right"></i>
                    </span>
                                <span>Mailing</span>
                            </a>
                            <ul>
                                <li>
                                    <a target="_blank" href="email-template-basic.html">Basic</a>
                                </li>
                                <li>
                                    <a target="_blank" href="email-template-alert.html">Alert</a>
                                </li>
                                <li>
                                    <a target="_blank" href="email-template-billing.html">Billing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                        <i data-feather="menu"></i>
                    </span>
                                <span>Menu Level</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="disabled">
                                <span class="nav-link-icon">
                        <i data-feather="mouse-pointer"></i>
                    </span>
                                <span>Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end::navigation -->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">
                    <div class="page-header d-md-flex justify-content-between">
                        <div>
                            <h3>Welcome back, Bony</h3>
                            <p class="text-muted">This page shows an overview for your account summary.</p>
                        </div>
                        <div class="mt-3 mt-md-0">
                            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                                <span></span>
                            </div>
                            <a href="#" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0 dropdown-toggle" data-toggle="dropdown">Actions</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Print</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Monthly Financial Status</h6>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="btn btn-floating">
                                                <i class="ti-reload"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-4">Check how you're doing financially for current month</p>
                                    <div id="sales"></div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-primary">
                                            <i class="ti-download mr-2"></i> Create Report
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Positive Reviews</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span class="avatar-title bg-primary-bright text-primary rounded-pill">
                                            <i class="ti-cloud"></i>
                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">0.16%</div>
                                            </div>
                                            <p class="mb-0"><a href="#" class="link-1">See comments</a> and respond to customers' comments.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Bounce Rate</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span class="avatar-title bg-info-bright text-info rounded-pill">
                                            <i class="ti-map"></i>
                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">12.87%</div>
                                            </div>
                                            <p class="mb-0"><a class="link-1" href="#">See visits</a> that had a higher than expected bounce rate.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Active Referrals</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span class="avatar-title bg-secondary-bright text-secondary rounded-pill">
                                            <i class="ti-email"></i>
                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">12.87%</div>
                                            </div>
                                            <p class="mb-0"><a class="link-1" href="#">See referring</a> domains that sent most visits last month.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Opened Invites</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span class="avatar-title bg-warning-bright text-warning rounded-pill">
                                            <i class="ti-dashboard"></i>
                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">12.87%</div>
                                            </div>
                                            <p class="mb-0"><a class="link-1" href="#">See clients</a> that accepted your invitation to connect.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Report</h6>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Stats</h5>
                                                    <div>Last month targets</div>
                                                </div>
                                                <h3 class="text-success mb-0">$1,23M</h3>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Payments</h5>
                                                    <div>Week's expenses</div>
                                                </div>
                                                <div>
                                                    <h3 class="text-danger mb-0">- $58,90</h3>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Orders</h5>
                                                    <div>Total products ordered</div>
                                                </div>
                                                <div>
                                                    <h3 class="text-info mb-0">65</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="btn btn-info">Report Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Statistics</h6>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Reports</h5>
                                                    <div>Monthly sales reports</div>
                                                </div>
                                                <h3 class="text-primary mb-0">421</h3>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>User</h5>
                                                    <div>Visitors last week</div>
                                                </div>
                                                <div>
                                                    <h3 class="text-success mb-0">+10</h3>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Sales</h5>
                                                    <div>Total average weekly report</div>
                                                </div>
                                                <div>
                                                    <h3 class="text-primary mb-0">140</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="btn btn-warning">Statistics Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-2 text-center">Financial year</h6>
                                    <p class="mb-0 text-muted">Expenses statistics to date</p>
                                    <hr>
                                    <div class="font-size-40 font-weight-bold">$502,680</div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <p class="text-muted mb-1">Current month</p>
                                            <div>
                                                <span class="font-weight-bold">$46,362</span>
                                                <span class="badge bg-danger-bright text-danger ml-1">-8%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-muted mb-1">Last year</p>
                                            <div>
                                                <span class="font-weight-bold">$34,546</span>
                                                <span class="badge bg-success-bright text-success ml-1">-13%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-weight-bold">Monthly report</p>
                                    <div id="ecommerce-activity-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">Reviews</h6>
                                        <a href="#" class="link-1">View All</a>
                                    </div>
                                    <div class="card-scroll" style="height: 430px">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex px-0 py-4">
                                                <a href="#" class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="./assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#">
                                                            <h6>Valentine Maton</h6>
                                                            <ul class="list-inline mb-1">
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">(5)</li>
                                                            </ul>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more-alt"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View</a>
                                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex px-0 py-4">
                                                <a href="#" class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="./assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#">
                                                            <h6>Valentine Maton</h6>
                                                            <ul class="list-inline mb-1">
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star-o"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">(3.5)</li>
                                                            </ul>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more-alt"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View</a>
                                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex px-0 py-4">
                                                <a href="#" class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="./assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#">
                                                            <h6>Valentine Maton</h6>
                                                            <ul class="list-inline mb-1">
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">(4.5)</li>
                                                            </ul>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more-alt"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View</a>
                                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex px-0 py-4">
                                                <a href="#" class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <img src="./assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </a>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#">
                                                            <h6>Valentine Maton</h6>
                                                            <ul class="list-inline mb-1">
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star text-warning"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <i class="fa fa-star-o"></i>
                                                                </li>
                                                                <li class="list-inline-item mb-0">(4)</li>
                                                            </ul>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more-alt"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item">View</a>
                                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h6 class="card-title mb-4 text-center">Total sales this month</h6>
                                        <h2 class="font-size-35 font-weight-bold text-center">$1.158,000</h2>
                                        <p>This chart shows total sales. You can use the button below for details of this month's sales.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-primary">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-info-bright">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h6 class="card-title mb-4 text-center">Total sales in the past week</h6>
                                        <h2 class="font-size-35 font-weight-bold text-center">$950,000</h2>
                                        <p>This chart shows total sales. You can use the button below for details of this month's sales.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-primary">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h6 class="card-title mb-1">Monthly Sales</h6>
                                            <p class="small text-muted">Avarage total sales +25,5%</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-floating">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="monthly-sales"></div>
                                    <ul class="list-inline text-center">
                                        <li class="list-inline-item">
                                            <i class="fa fa-circle mr-1 text-success"></i> Bank Card <br>
                                            <small class="text-muted">25,45% over</small>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-circle mr-1 text-primary"></i> Credit Card <br>
                                            <small class="text-muted">75,55% over</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Recent Orders</h6>
                            <div class="table-responsive">
                                <table id="recent-orders" class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Customer</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product1.png" class="rounded mr-3" alt="Vase">
                                                    <span>Vase</span>
                                                </a>
                                            </td>
                                            <td>Dollie Bullock</td>
                                            <td>$230</td>
                                            <td>
                                                <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                            </td>
                                            <td>2020/02/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product2.png" class="rounded mr-3" alt="Glasses">
                                                    <span>Glasses</span>
                                                </a>
                                            </td>
                                            <td>Holmes Hines</td>
                                            <td>$300</td>
                                            <td>
                                                <span class="badge bg-success-bright text-success">Payment accepted</span>
                                            </td>
                                            <td>2020/08/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product3.png" class="rounded mr-3" alt="Plate">
                                                    <span>Plate</span>
                                                </a>
                                            </td>
                                            <td>Serena Glover</td>
                                            <td>$250</td>
                                            <td>
                                                <span class="badge bg-danger-bright text-danger">Payment error</span>
                                            </td>
                                            <td>2020/08/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product4.png" class="rounded mr-3" alt="Pen">
                                                    <span>Pen</span>
                                                </a>
                                            </td>
                                            <td>Dianne Prince</td>
                                            <td>$550</td>
                                            <td>
                                                <span class="badge bg-success-bright text-success">Payment accepted</span>
                                            </td>
                                            <td>2020/08/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product5.png" class="rounded mr-3" alt="Armchair">
                                                    <span>Armchair</span>
                                                </a>
                                            </td>
                                            <td>Morgan Pitts</td>
                                            <td>$280</td>
                                            <td>
                                                <span class="badge bg-warning-bright text-warning">Preparing the order</span>
                                            </td>
                                            <td>2020/03/30</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product6.png" class="rounded mr-3" alt="Flowerpot">
                                                    <span>Flowerpot</span>
                                                </a>
                                            </td>
                                            <td>Merrill Richardson</td>
                                            <td>$128</td>
                                            <td>
                                                <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
                                            </td>
                                            <td>2020/01/14</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product7.png" class="rounded mr-3" alt="Wall Clock">
                                                    <span>Wall Clock</span>
                                                </a>
                                            </td>
                                            <td>Krista Mathis</td>
                                            <td>$500</td>
                                            <td>
                                                <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                                            </td>
                                            <td>2020/02/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product8.png" class="rounded mr-3" alt="Desk">
                                                    <span>Desk</span>
                                                </a>
                                            </td>
                                            <td>Frankie Hewitt</td>
                                            <td>$300</td>
                                            <td>
                                                <span class="badge bg-success-bright text-success">Remote payment accepted</span>
                                            </td>
                                            <td>2020/02/09</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product9.png" class="rounded mr-3" alt="Night Light">
                                                    <span>Night Light</span>
                                                </a>
                                            </td>
                                            <td>Hayden Fitzgerald</td>
                                            <td>$200</td>
                                            <td>
                                                <span class="badge bg-success-bright text-success">Delivered</span>
                                            </td>
                                            <td>2020/01/14</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-detail.html" class="d-flex align-items-center">
                                                    <img width="40" src="./assets/media/image/products/product10.png" class="rounded mr-3" alt="Shoe">
                                                    <span>Shoe</span>
                                                </a>
                                            </td>
                                            <td>Cole Holcomb</td>
                                            <td>$700</td>
                                            <td>
                                                <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                            </td>
                                            <td>2020/02/28</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View Detail</a>
                                                        <a href="#" class="dropdown-item">Send</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <div class="row my-3">
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <figure>
                                                <img class="img-fluid" src="./assets/media/svg/upgrade.svg" alt="upgrade">
                                            </figure>
                                        </div>
                                    </div>
                                    <h4 class="mb-3 text-center">Get an Upgrade</h4>
                                    <div class="row my-3">
                                        <div class="col-md-10 ml-auto mr-auto">
                                            <p class="text-muted">Get additional 500 GB space for your documents and files. Expand your storage and enjoy your business. Change plan for more space.</p>
                                            <button class="btn btn-primary" data-dismiss="modal">Plan Upgrade</button>
                                        </div>
                                    </div>
                                    <a href="#" class="align-items-center d-flex link-1 small justify-content-center" data-dismiss="modal">
                                        <i class="ti-close font-size-10 mr-1"></i>Close
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <footer class="content-footer">
                    <div>© 2020 Gogi - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                    <div>
                        <nav class="nav">
                            <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                            <a href="#" class="nav-link">Change Log</a>
                            <a href="#" class="nav-link">Get Help</a>
                        </nav>
                    </div>
                </footer>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="./vendors/bundle.js"></script>

    <!-- Apex chart -->
    <script src="./vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="./vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="./vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="./assets/js/examples/pages/dashboard.js"></script>

    <!-- App scripts -->
    <script src="./assets/js/app.min.js"></script>
</body>

</html>