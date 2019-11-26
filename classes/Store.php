<?php
    
    require_once(dirname(__FILE__, 2) . '/config.php');
    require_once(dirname(__FILE__, 2) . '/classes/ExamPack.php');

    class Store {

        private $table_name = 'store_options';
        private $id_col_name = 'id';
        private $value_col_name = 'value';
        private $featured_pack_ids_option_id = 1;

        private $featured_pack_ids = array();

        private $data;

        function __construct() {
                $this->fetchFeaturedPacks();

        }

        private function fetchFeaturedPacks() {
            $query = "SELECT * FROM $this->table_name";

            $this->data = $GLOBALS['sqlConnection']->query($query);
            if($this->data->num_rows > 0)
                while($row = $this->data->fetch_assoc()) {
                    if($row[$this->id_col_name] == $this->featured_pack_ids_option_id)
                        $this->featured_pack_ids = explode(',', $row[$this->value_col_name]);
                }
        }
        

        /**
         * Get the value of featured_pack_ids
         */ 
        public function getFeaturedPackIds()
        {
                return $this->featured_pack_ids;
        }

        /**
         * Get the pack with specific id
         */ 
        public function getPack($pack_id)
        {
                return new ExamPack($pack_id);
        }
    }