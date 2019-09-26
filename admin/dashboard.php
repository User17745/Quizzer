<table class="table">
    <tbody>
        <thead>
            <tr><th><abbr title="Serial Number">S. No.</th><th>Name</th><th>E-Mail</th><th>Phone</th></tr>
        </thead>
        <?php
            $sqlQuery = "SELECT id, name, email, phone FROM users";
            $result = $GLOBALS['sqlConnection']->query($sqlQuery);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td> <td>" . $row["email"] . "</td><td>" . $row["phone"] . "<td></tr>";
                }
            } else {
                echo "0 results";
            }
            $GLOBALS['sqlConnection']->close();
        ?>
    </tbody>
</table>