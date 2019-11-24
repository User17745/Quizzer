<?php
    
    require_once(dirname(__FILE__, 2) . '/config.php');

    class ExamPack {

        private $table_name = "exam_packs";

        //Variables
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

        private $data;

        function __construct($id) {
            $this->id = $id;
            
            $query = "SELECT * FROM $this->table_name WHERE id = '$id';";
            
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
    }