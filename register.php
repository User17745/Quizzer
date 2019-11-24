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
                Registration
            </p>
            <p class="subtitle">
                Create a new account.
            </p>
            <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" onsubmit="startLoading()">
                <div class="field">
                    <label class="label">Username*</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text" name="name" id="name" autocomplete="username" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <p class="help">Pick a unique username.</p>
                </div>

                <div class="field">
                    <label class="label">Email*</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="email" name="email" id="email" autocomplete="email" required>
                        <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

                <div class="field-body">
                    <div class="field">
                        <label class="label">Password*</label>
                        <p class="control has-icons-left">
                            <input class="input" type="password" name="password" id="password" autocomplete="new-password" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                            </span>
                            <p class="help">Use a strong password.</p>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">Password Confirmation*</label>
                        <p class="control has-icons-left">
                            <input class="input" type="password" name="conpassword" id="conpassword" autocomplete="new-password" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="field">
                <div class="label">Phone</div>
                <div class="field-label"></div>
                    <div class="field-body">
                        <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                            <a class="button is-static">
                                +91
                            </a>
                            </p>
                            <p class="control is-expanded">
                            <input class="input" type="tel" pattern="[0-9]{10}" name="phone" id="phone" autocomplete="tel">
                            </p>
                        </div>
                        <p class="help">Formate: 10 Digits; Do not enter the first zero.</p>
                        </div>
                    </div>
                </div>

                <footer class="card-footer">
                    <input type="submit" style="line-height: 0; margin: 1rem 0 0 0;" class="card-footer-item button" value="Register">
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
        $name = $email  = $userPassword = $conUserPassword = "";
        $phone = NULL;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $userPassword = $_POST['password'];
        $conUserPassword = $_POST['conpassword'];
        if($_POST['phone'] != "")
            $phone = "+91" . $_POST['phone'];
        
        if($userPassword === $conUserPassword){
            $sqlQuery = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '" . md5($userPassword) . "' ,'$phone' )";
            if ($GLOBALS['sqlConnection']->query($sqlQuery) === true) {
                echo '
                <div class="notification is-success">
                <button class="delete"></button>
                Registration Successful!
                </div>';
            } else
                echo "Error : " . mysqli_error($GLOBALS['sqlConnection']);

            $GLOBALS['sqlConnection']->close();

            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ./userview.php">';
            exit();
        }
    else
        echo '
            <div class="notification is-danger">
                <button class="delete"></button>
                Passwords do not match!
            </div>';
}
    include './inc/footer.php';