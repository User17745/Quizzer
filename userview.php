<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header("Location: ./");
    exit();
  }

  include './inc/header.php';
?>
<section class="section">
    <div class="container">
      <h1 class="title">Hello, <?php echo $_SESSION["user"] ?>!</h1>
        <p class="subtitle">Let's see what do we have...</p>
    </div>
  </section>
    
  <section class="section">
    <div class="container">
        <?php 
            if($_SESSION["is_admin"])
                include './admin/dashboard.php';
            else
                include './user/dashboard.php';
        ?>
    </div>
  </section>    
<?php
    include './inc/footer.php'
?>