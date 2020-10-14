<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="index.php">
                <h3> ISTE TKMCE </h3>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-prepend search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
            </ul>

            <ul class="nav-right">
                <li class="header-notification">
                    <?php
                    $sql = "SELECT * FROM `notification`";
                    $query = $dbh->prepare($sql);
                    $cnt = 0;
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                            $cnt++;
                        }
                    } ?>
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-red"><?php echo htmlentities("$cnt"); ?> </span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            <?php
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {    ?>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="jpg/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">
                                                    <?php echo htmlentities("$result->name"); ?> </h5>
                                                <p class="notification-msg">
                                                    <?php echo htmlentities("$result->description"); ?></p>
                                                <span class="notification-time"><?php echo htmlentities("$result->date"); ?></span>
                                            </div>
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </li>
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green"></span>
                        </div>
                    </div>
                </li>
                <?php
                $name = $_SESSION['alogin'];
                $sql = "SELECT * FROM `user` WHERE name=:name";
                $query = $dbh->prepare($sql);
                $query->bindParam(':name', $name, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {    ?>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo htmlentities("$result->name"); ?></span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="../index.php">
                                            <i class="feather icon-home"></i> Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="feather icon-settings"></i> Change Password
                                        </a>
                                    </li>
                                    <!-- <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li> -->
                                    <li>
                                        <a href="login.php">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                <?php }
                } ?>
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="chat-search-box">
                    <a class="back_friendlist">
                        <i class="feather icon-x"></i>
                    </a>
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Admin">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="jpg/avatar-3.jpg"
                                            alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
                                    </div>
                                </div>
                            </div> -->
            </div>
        </div>
    </div>
</div>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="pcoded-navigation-label">Menu</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="index.php" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-home"></i>
                                </span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="view.php" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                </span>
                                <span class="pcoded-mtext">NewsLetter</span>
                            </a>
                        </li>

                        <!-- <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Newsletter</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>

                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                            <li class="">
                                                <a href="view.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">View Sample</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="submit.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Submit</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> -->
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                <span class="pcoded-mtext">Article</span>
                                <span class="pcoded-badge label label-warning">NEW</span>
                            </a>

                            <ul class="pcoded-submenu">
                                <li class=" pcoded-hasmenu">
                                <li class="">
                                    <a href="article.php" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">View Sample</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="article_sub.php" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Submit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="project.php" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                </span>
                                <span class="pcoded-mtext">Project Development</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="server.php" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-layers"></i>
                                </span>
                                <span class="pcoded-mtext">Server access</span>
                            </a>
                            
                        </li>

                    </ul>
                    
                </div>
                
            </div>
        </nav>
        <div class="footer pcoded-wrapper">
                    <li  class="pcoded-hasmenu fixed-bottom text-center" style="background-color: white;list-style-type:none;line-height:30px;">
                        <span class="text-black  pcoded-mtext">Copyright &copy; 2020 All Rights Reserved | Devoloped by 404 ISTE</span>
                    </li>
                </div>