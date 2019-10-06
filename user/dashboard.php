<?php
    // if($_SERVER["REQUEST_METHOD"] == 'POST')
    //     $_SESSION['user-dash-page'] == $_POST['dash_page'];
?>

<div class="columns is-gapless" id="user-dashboard" style="margin: 0;">
    <div class="column is-3" id="sidebar" style="z-index: 2;">
        <?php include './user/partials/sidebar.php'; ?>
    </div>
    <div class="column" id="user-dashboard-partial" style="height: 38.2em; overflow-y: auto; z-index: 1;">
        <?php
            if(isset($_SESSION['user-dash-page']))
                include './user/partials/' . $_SESSION['user-dash-page']; 
            else{
                include './user/partials/exams.php';
                $_SESSION['user-dash-page'] = 'exams.php';
            }
        ?>
    </div>
</div>