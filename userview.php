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
        <?php if($_SESSION["is_admin"]): ?>
            <table class="table">
                <tbody>
                    <thead>
                        <tr><th><abbr title="Serial Number">S. No.</th><th>Name</th><th>E-Mail</th><th>Phone</th></tr>
                    </thead>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ampm";
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $sql = "SELECT id, name, email, phone FROM users";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td> <td>" . $row["email"] . "</td><td>" . $row["phone"] . "<td></tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nothing to see here</p>
        <?php endif; ?>
    </div>
  </section>    
<?php
    include './inc/footer.php'
?>