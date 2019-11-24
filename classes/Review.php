<?php

    require_once(dirname(__FILE__, 2) . '/config.php');

    class Review {

        // Table Names
        private $review_table_name = "pack_reviews";
        private $user_table_name = "users";

        // Review Table Fields
        private $id;
        private $examPackId;
        private $rating;
        private $title;
        private $review;
        private $createdAt;
        private $userId;

        // User Table Fields
        private $userName;
        
        private $data;

        function __construct($review_id) {
            $this->id = $review_id;

            $query = "SELECT $this->review_table_name.*, $this->user_table_name.name FROM $this->review_table_name INNER JOIN $this->user_table_name ON $this->review_table_name.user_id = $this->user_table_name.id WHERE $this->review_table_name.id = '$this->id';";
            $this->data = $GLOBALS['sqlConnection']->query($query);

            if($this->data->num_rows > 0)
                while($row = $this->data->fetch_assoc()) {
                    $this->examPackId = $row['exam_pack_id'];
                    $this->rating = $row['rating'];;
                    $this->title = $row['title'];;
                    $this->review = $row['review'];;
                    $this->createdAt = $row['created_at'];;
                    $this->userId = $row['user_id'];;
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
         * Get the value of examPackId
         */ 
        public function getExamPackId()
        {
            return $this->examPackId;
        }

        /**
         * Get the value of rating
         */ 
        public function getRating()
        {
            return $this->rating;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * Get the value of review
         */ 
        public function getReview()
        {
            return $this->review;
        }

        /**
         * Get the value of createdAt
         */ 
        public function getCreatedAt()
        {
            return $this->createdAt;
        }

        /**
         * Get the value of userId
         */ 
        public function getUserId()
        {
            return $this->userId;
        }
    }