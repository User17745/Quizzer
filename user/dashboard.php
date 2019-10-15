<?php
    // During the AJAX call, the file doesn't have access to the session like it did when it was originally executed.
    // Therefore, whenever the session status is not active(2) (in case of a AJAX call i.e), we simple start the session. 
    if(session_status() != 2)
        session_start();

    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        if(isset($_POST['dash_page']))
            $_SESSION['user-dash-page'] = $_POST['dash_page'];
    }

    if(!isset($_SESSION['user-dash-page']))
        $_SESSION['user-dash-page'] = 'exams.php';
?>

<div class="columns is-gapless" id="user-dashboard">
    <div class="column is-3" id="sidebar">
        <?php include './user/partials/sidebar.php'; ?>
    </div>
    <div class="column" id="user-dashboard-partial">
        <?php
            // if(isset($_SESSION['user-dash-page']))
                include './user/partials/' . $_SESSION['user-dash-page']; 
            // else{
            //     include './user/partials/exams.php';
            //     $_SESSION['user-dash-page'] = 'exams.php';
            // }
        ?>
    </div>
</div>