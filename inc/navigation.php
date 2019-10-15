<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="./">
      quizzer
    </a>

    <a role="button" class="navbar-burger burger" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-start">
      <a href="./" class="navbar-item">
        Home
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <span id="nav-user-icon"></span>
      <div class="navbar-item" id="nav-left">
        <div class="buttons">
            <?php if(strpos($_SERVER["SCRIPT_NAME"], "userview.php") !== false): ?>
                <form action="./inc/logout.php" method="post">
                  <input class="button is-light" type="submit" value="Logout">
                </form>
            <?php else: ?>
              <a href="./register.php" class="button is-primary">
                  <strong>Sign up</strong>
              </a>
              <a href="./" class="button is-light">
                  Log in
              </a>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <progress id="loading-page" class="progress is-small is-primary" max="100">15%</progress>
</nav>