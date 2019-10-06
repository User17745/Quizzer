<?php
    require_once('../../config.php');
    
    $sqlQuery = "SELECT * FROM question_bank WHERE subject = 'PHP'";
    $result = $GLOBALS['sqlConnection']->query($sqlQuery);

    $questionNumber = 1;
    if($result->num_rows > 0)
        echo "<form id='test-form' action='././controllers/test.php' method='POST'>";
            while($row = $result->fetch_assoc()){
                echo "<div class='card card-question'><div class='card-content'><div class='control'><div class='title' style='margin-bottom: 0;'>";
                echo $row['question'] . "</div><br>";
                if($row['a'] != '')
                    echo "<label class='radio'><input type='radio' name='" . $questionNumber . "' name='" . $questionNumber . "' value='" . $row['id'] . "#a'>" . $row['a'] . "</label><br>";
                if($row['b'] != '')
                    echo "<label class='radio'><input type='radio' name='" . $questionNumber . "' value='" . $row['id'] . "#b'>" . $row['b'] . "</label><br>";
                if($row['c'] != '')
                    echo "<label class='radio'><input type='radio' name='" . $questionNumber . "' value='" . $row['id'] . "#c'>" . $row['c'] . "</label><br>";
                if($row['d'] != '')
                    echo "<label class='radio'><input type='radio' name='" . $questionNumber . "' value='" . $row['id'] . "#d'>" . $row['d'] . "</label><br>";
                echo "</div></div></div>";
                               
                $questionNumber++;
            }
            echo "<input type='hidden' id='qnums' value='$questionNumber'>";
            echo "<input class='button' type='submit' value='Submit'>";
        echo "</form>";
?>
<script>
    document.getElementById('test-form').addEventListener('submit', submitTest);
    function submitTest(e) {
        e.preventDefault();

        let markings = {};

        for(let i = 1; i < <?php echo $questionNumber ?>; i++)
            markings[i] = $("input[name='" + i + "']:checked").val();

        markings['qnums'] = <?php echo $questionNumber ?>;
        
        $.post("././controllers/test.php", markings,
            function(data, status){
                $('#user-dashboard-partial').html(data);
            });
    }
</script>
