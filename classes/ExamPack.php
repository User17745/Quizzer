<?php
    
    require_once(dirname(__FILE__, 2) . '/config.php');
    require_once(dirname(__FILE__, 2) . '/controllers/PackReviewController.php');

    class ExamPack {

        // Table Name
        private $table_name = "exam_packs";

        // Fields
        private $id;
        private $name;
        private $price;
        private $thumbImg;
        private $coverImg;
        private $date;
        private $type;
        private $organization;
        private $numSeats;
        private $requiredQualifications;
        private $details;
        private $testsIdList;
        private $studyMaterialIdList;
        private $numTestsIncluded;
        private $numResourcesIncluded;
        private $studyMaterialAmountHrs;
        private $providerId;
        private $numSales;

        // Variables to be received from PackReviewController
        private $overalRating;
        private $percentFiveRating;
        private $percentFourRating;
        private $percentThreeRating;
        private $percentTwoRating;
        private $percentOneRating;
        private $relatedReviewIds = array();

        private $data;

        function __construct($pack_id) {
            $this->id = $pack_id;
            
            $this->getFieldsData();
            $this->getVariableValues();
        }

        private function getFieldsData() {
                $query = "SELECT * FROM $this->table_name WHERE id = '$this->id';";
                
                $this->data = $GLOBALS['sqlConnection']->query($query);
                
                if($this->data->num_rows > 0)
                        while($row = $this->data->fetch_assoc()) {
                                $this->name = $row['name'];
                                $this->price = $row['price'];
                                $this->thumbImg = $row['thumb_img'];
                                $this->coverImg = $row['cover_img'];
                                $this->date = $row['date'];
                                $this->type = $row['type'];
                                $this->organization = $row['organization'];
                                $this->numSeats = $row['no_seats'];
                                $this->requiredQualifications = $row['required_qualifications'];
                                $this->details = $row['details'];
                                $this->testsIdList = $row['tests_id_list'];
                                $this->studyMaterialIdList = $row['study_material_id_list'];
                                $this->numTestsIncluded = $row['no_tests_included'];
                                $this->numResourcesIncluded = $row['no_resources_included'];
                                $this->studyMaterialAmountHrs = $row['study_material_amount_hrs'];
                                $this->providerId = $row['provider_id'];
                                $this->numSales = $row['no_sales'];
                        }
        }

        private function getVariableValues(){
                $packReviewController = new PackReviewController($this->id);

                $this->overalRating = $packReviewController->getOveralRating();
                $this->percentFiveRating = $packReviewController->getpercentFiveRating();
                $this->percentFourRating = $packReviewController->getpercentFourRating();
                $this->percentThreeRating = $packReviewController->getpercentThreeRating();
                $this->percentTwoRating = $packReviewController->getpercentTwoRating();
                $this->percentOneRating = $packReviewController->getpercentOneRating();
                $this->relatedReviewIds = $packReviewController->getRelatedReviewIds();
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Get the value of thumbImg
         */ 
        public function getThumbImg()
        {
                return $this->thumbImg;
        }

        /**
         * Get the value of coverImg
         */ 
        public function getCoverImg()
        {
                return $this->coverImg;
        }
        
        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Get the value of examType
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Get the value of organization
         */ 
        public function getOrganization()
        {
                return $this->organization;
        }

        /**
         * Get the value of numSeats
         */ 
        public function getNumSeats()
        {
                return $this->numSeats;
        }

        /**
         * Get the value of requiredQualifications
         */ 
        public function getRequiredQualifications()
        {
                return $this->requiredQualifications;
        }

        /**
         * Get the value of details
         */ 
        public function getDetails()
        {
                return $this->details;
        }

        /**
         * Get the value of testsIdList
         */ 
        public function getTestsIdList()
        {
                return $this->testsIdList;
        }

        /**
         * Get the value of studyMaterialIdList
         */ 
        public function getStudyMaterialIdList()
        {
                return $this->studyMaterialIdList;
        }

        /**
         * Get the value of numTestsIncluded
         */ 
        public function getNumTestsIncluded()
        {
                return $this->numTestsIncluded;
        }

        /**
         * Get the value of numResourcesIncluded
         */ 
        public function getNumResourcesIncluded()
        {
                return $this->numResourcesIncluded;
        }

        /**
         * Get the value of studyMaterialAmountHrs
         */ 
        public function getStudyMaterialAmountHrs()
        {
                return $this->studyMaterialAmountHrs;
        }

        /**
         * Get the value of providerId
         */ 
        public function getProviderId()
        {
                return $this->providerId;
        }

        /**
         * Get the value of numSales
         */ 
        public function getNumSales()
        {
                return $this->numSales;
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
        public function getPercentFiveRating()
        {
                return $this->percentFiveRating;
        }

        /**
         * Get the value of percentFourRating
         */ 
        public function getPercentFourRating()
        {
                return $this->percentFourRating;
        }

        /**
         * Get the value of percentThreeRating
         */ 
        public function getPercentThreeRating()
        {
                return $this->percentThreeRating;
        }

        /**
         * Get the value of percentTwoRating
         */ 
        public function getPercentTwoRating()
        {
                return $this->percentTwoRating;
        }

        /**
         * Get the value of percentOneRating
         */ 
        public function getPercentOneRating()
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