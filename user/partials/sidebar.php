<div class="sidebar" id="user-sidebar">
    <div class="sidebar-header">
        <div id="sidebar-close"><span class="icon"><i class="fas fa-chevron-circle-left"></i></span></div>
        <div class="is-clearfix"></div>
        <div class="sidebar-header-img">
            <img src="./assets/img/user_img.jpg" alt="user-img">
        </div>
        <div class="sidebar-header-info">
            <div class="sidebar-header-info-name is-capitalized">
                <h3><?php echo $_SESSION["user"];?></h3>
            </div>
            <div class="sidebar-header-info-status">
                <span class="tag"><i class="fas fa-circle" style="color: #008a6e; margin-right: .3rem;"></i>Online</span>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <div class="sidebar-menu-item <?php if(isset($_SESSION['user-dash-page'])) if($_SESSION['user-dash-page'] == 'exams.php') echo 'active'; ?>">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-book-open"></i>
            </span>
            <span class="sidebar-menu-item-text">
                Exams
            </span>
        </div>
        <div class="sidebar-menu-item <?php if(isset($_SESSION['user-dash-page'])) if($_SESSION['user-dash-page'] == 'tests.php') echo 'active'; ?>">
            <span class="sidebar-menu-item-icon">
                <i class="fab fa-pied-piper"></i>
            </span>
            <span class="sidebar-menu-item-text">
                My Tests
            </span>
        </div>
        <div class="sidebar-menu-item <?php if(isset($_SESSION['user-dash-page'])) if($_SESSION['user-dash-page'] == 'stats.php') echo 'active'; ?>">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-chart-area"></i>
            </span>
            <span class="sidebar-menu-item-text">
                Stats
            </span>
        </div>
        <div class="sidebar-menu-item <?php if(isset($_SESSION['user-dash-page'])) if($_SESSION['user-dash-page'] == 'news.php') echo 'active'; ?>">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-newspaper"></i>
            </span>
            <span class="sidebar-menu-item-text">
                News
            </span>
        </div>
    </div>
</div>