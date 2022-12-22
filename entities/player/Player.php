<?php
class User {
  // Properties
  private $tag;
  private $name;
  private $trophies;
  private $brawler;

  function __construct($tag, $name, $trophies, $brawler) {
    $this->tag = $tag;
    $this->name = $name;
    $this->trophies = $trophies;
    $this->brawler = $brawler;
  }
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_tag($tag) {
    $this->tag = $tag;
  }
  function get_tag() {
    return $this->tag;
  }

  function set_trophies($trophies) {
    $this->$trophies = $trophies;
  }
  function get_trophies() {
    return $this->$trophies;
  }
}
?>