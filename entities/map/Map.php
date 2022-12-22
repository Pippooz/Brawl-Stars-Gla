<?php
class User {
  // Properties
  private $id;
  private $mode;
  private $map;

  function __construct($id, $mode, $map) {
    $this->id = $id;
    $this->mode = $mode;
    $this->map = $map;
  }
  // Methods
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_mode($mode) {
    $this->mode = $mode;
  }
  function get_mode() {
    return $this->mode;
  }

  function set_map($map) {
    $this->$map = $map;
  }
  function get_map() {
    return $this->$map;
  }
}
?>