<?php
    $sqlQuery = "SELECT * FROM question_bank WHERE subject = 'PHP'";
    $result = $GLOBALS["sqlConnection"]->query($sqlQuery);
    if($result->num_rows > 0)
        while($row = $result->fetch_assoc()){
            echo "<div class='card card-question'><div class='card-content'><div class='control'><div class='title' style='margin-bottom: 0;'>";
            echo $row['question'] . "</div><br>";
            if($row['a'] != '')
                echo "<label class='radio'><input type='radio' name='" . $row['id'] . "' value='" . $row['a'] . "'>" . $row['a'] . "</label><br>";
            if($row['b'] != '')
                echo "<label class='radio'><input type='radio' name='" . $row['id'] . "' value='" . $row['b'] . "'>" . $row['b'] . "</label><br>";
            if($row['c'] != '')
                echo "<label class='radio'><input type='radio' name='" . $row['id'] . "' value='" . $row['c'] . "'>" . $row['c'] . "</label><br>";
            if($row['d'] != '')
                echo "<label class='radio'><input type='radio' name='" . $row['id'] . "' value='" . $row['d'] . "'>" . $row['d'] . "</label><br>";
            echo "</div></div></div>";
        }
?>