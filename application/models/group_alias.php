<?php

class Group_Alias extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'groups_alias';
        $this->primary_key_id = 'alias_name';        
    }    
    
}