<?php

// Use to fetch product data
class Prodcut
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  // fetch product data using getData Method
  public function getData($table = 'product') {
   $result = $this->db->con->query("SELECT * FROM {$table}");

   $resultArray = array();
  }
  
}