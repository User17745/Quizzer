<?php
    
    require_once(dirname(__FILE__, 2) . '/config.php');
    require_once(dirname(__FILE__,2) . '/classes/Review.php');

    class PackReviewController {

        // Table Names
        private $review_table_name = 'pack_reviews';
        private $user_table_name = 'users';

        private $pack_id_field_name = 'exam_pack_id';
        private $review_id_field_name = 'id';
        private $rating_field_name = 'rating';

        // Variables
        private $id;
        
        private $overalRating;
        private $percentFiveRating;
        private $percentFourRating;
        private $percentThreeRating;
        private $percentTwoRating;
        private $percentOneRating;

        private $relatedReviewIds = array();

        private $data;

        function __construct ($post_id) {
            $this->id = $post_id;

            $this->calcRatings();
            $this->findRelatedReviewIdList();
        }

        private function calcRatings() {
            $query = "SELECT * FROM $this->review_table_name WHERE $this->pack_id_field_name='$this->id'";
            $this->data = $GLOBALS['sqlConnection']->query($query);

            if($this->data->num_rows > 0) {
                $total_rating = $total_five_rating = $total_four_rating = $total_three_rating = $total_two_rating = $total_one_rating = 0;
                while($row = $this->data->fetch_assoc()){
                    $total_rating += $row[$this->rating_field_name];
                    
                    switch($row[$this->rating_field_name]) {
                        case 5 : $total_five_rating ++;
                        break;
                        case 4 : $total_four_rating ++;
                        break;
                        case 3 : $total_three_rating ++;
                        break;
                        case 2 : $total_two_rating ++;
                        break;
                        case 1 : $total_one_rating ++;
                    }
                }

                $this->overalRating = $total_rating/$this->data->num_rows;
                $this->percentFiveRating = ($total_five_rating/$this->data->num_rows)*100;
                $this->percentFourRating = ($total_four_rating/$this->data->num_rows)*100;
                $this->percentThreeRating = ($total_three_rating/$this->data->num_rows)*100;
                $this->percentTwoRating = ($total_two_rating/$this->data->num_rows)*100;
                $this->percentOneRating = ($total_one_rating/$this->data->num_rows)*100;
            }
        }

        private function findRelatedReviewIdList() {
            while($row = $this->data->fetch_assoc()) {
                $this->relatedReviewIds.push($row[$this->review_id_field_name]);
            }
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of overalRating
         */ 
        public function getOveralRating()
        {
                return $this->overalRating;
        }

        /**
         * Get the value of percentFiveRating
         */ 
        public function getpercentFiveRating()
        {
                return $this->percentFiveRating;
        }

        /**
         * Get the value of percentFourRating
         */ 
        public function getpercentFourRating()
        {
                return $this->percentFourRating;
        }

        /**
         * Get the value of percentThreeRating
         */ 
        public function getpercentThreeRating()
        {
                return $this->percentThreeRating;
        }

        /**
         * Get the value of percentTwoRating
         */ 
        public function getpercentTwoRating()
        {
                return $this->percentTwoRating;
        }

        /**
         * Get the value of percentOneRating
         */ 
        public function getpercentOneRating()
        {
                return $this->percentOneRating;
        }

        /**
         * Get the value of relatedReviewIds
         */ 
        public function getRelatedReviewIds()
        {
                return $this->relatedReviewIds;
        }
    }