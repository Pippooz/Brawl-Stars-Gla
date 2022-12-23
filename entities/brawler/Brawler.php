<?php
class Brawler {
  // Properties
  private $id;
  private $name;
  private $power;
  private $rank;
  private $highestTrophies;
  private $trophies;

  private $starPower;
  private $gadget;

  function __construct($id, $name, $power, $rank, $highestTrophies, $trophies, $starPower, $gadget) {
    $this->id = $id;
    $this->name = $name;
    $this->power = $power;
    $this->rank = $rank;
    $this->highestTrophies = $highestTrophies;
    $this->trophies = $trophies;
    $this->starPower = $starPower;
    $this->gadget = $gadget;

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

  function set_power($power) {
    $this->power = $power;
  }
  function get_power() {
    return $this->power;
  }

  function set_trophies($trophies) {
    $this->$trophies = $trophies;
  }
  function get_trophies() {
    return $this->$trophies;
  }
}
?>