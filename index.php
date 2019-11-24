<?php
  session_start();
  if(isset($_SESSION["user"])){
    header("Location: ./userview.php");
    exit();
  }

  include './inc/header.php';
?>

  <section class="section">
    <div class="card card-form">
        <div class="card-content">
            <p class="title">
              Welcome to the site!
            </p>
            <p class="subtitle">
              Please login
            </p>
            <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" onsubmit="startLoading()">
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text" name="username" id="uname" autocomplete="username" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password" id="pword" autocomplete="password" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>
                
                <footer class="card-footer">
                    <input type="submit" style="line-height: 0; margin: 1rem 0 0 0;" class="card-footer-item button" value="Login">
                </footer>
            </form>
        </div>
      <div class="card-loader">
        <progress class="progress is-primary" max="100">15%</progress>
      <div>
    </div>
  </section>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uname = $password = $dbpass = "";
      $isAdmin = false;
      $username = "";
      
      $uname = $_POST["username"];
      $password = $_POST["password"];

      $sqlQuery = "SELECT * FROM users WHERE name  = '$uname'";
      $result = $GLOBALS['sqlConnection']->query($sqlQuery);
      if ($result) {
        if($result->num_rows > 0)
          while($row = $result->fetch_assoc()){
            $dbpass = $row["password"];
            $isAdmin = $row["is_admin"];
            $username = $row["name"];
          }
      }
        
      if($dbpass === md5($password)){
        $_SESSION["user"] = $username;
        $_SESSION["is_admin"] = $isAdmin;
        
        echo '
        <div class="notification is-success">
          <button class="delete"></button>
          Logged in Successfully!
        </div>';
        
        $GLOBALS['sqlConnection']->close();

        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ./userview.php">';
        exit();
      }
      else
        echo '
        <div class="notification is-danger">
          <button class="delete"></button>
          Wrong details!
        </div>';
    }

    include './inc/footer.php';