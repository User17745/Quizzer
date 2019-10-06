<?php
require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == 'POST'){         
    if(isset($_POST['qnums'])) 
        if($_POST['qnums'] > 0){
            $qId = $marked = '';
            $markedArr = array();

            for($i = 1; $i < $_POST['qnums']; $i++){
                // Separate id and answer.
                $qId = substr($_POST[$i], 0, strpos($_POST[$i], "#"));
                $marked = substr($_POST[$i], strpos($_POST[$i], "#") + 1);

                // Storing marking in an associative array.
                $markedArr[$qId] = $marked;
            }

            // Check if marking are correct and assigning score.
            $score = 0;
            
            // Select all the rows with marked questions
            $query = "SELECT id, answer FROM question_bank WHERE ";
            foreach($markedArr as $key => $value)
                $query .= "id = '$key' OR ";
            $query = substr($query, 0, strlen($query) - 4);
            
            $result = $GLOBALS['sqlConnection']->query($query);

            while($rows = $result->fetch_assoc())
                foreach($markedArr as $key => $value)
                    if($rows['id'] == $key){
                        if($rows['answer'] == $value)
                            $score++;
                        break;
                        }
            echo "Your score is: <b>$score</b>";
        }
}
?>