<?php

require_once('helpers.php');

class Validate
{
  private $sanitized_data = [];

  public function __construct($data)
  {
    array_map("htmlspecialchars",$data);

    $this->sanitized_data = $data;
  }

  public function getDatas(){
      return $this->sanitized_data;
  }
}

?>