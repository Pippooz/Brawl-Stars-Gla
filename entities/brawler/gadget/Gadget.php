<?php
class Gadget {
  // Properties
  private $id;
  private $name;

  function __construct($id, $name) {
    $this->id = $id;
    $this->name = $name;
  }

  // Methods
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

}
?>