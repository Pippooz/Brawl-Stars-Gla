<?php
class Battle {
  // Properties
  private $mode;
  private $type;
  private $duration;
  private $trophyChange;
  private $starPlayer;
  private $player;

  function __construct($mode, $type, $duration, $trophyChange, $player) {
    $this->mode = $mode;
    $this->type = $type;
    $this->duration = $duration;
    $this->trophyChange = $trophyChange;
    $this->player= $player;
  }
  // Methods
  function set_mode($mode) {
    $this->mode = $mode;
  }
  function get_mode() {
    return $this->mode;
  }

  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }

  function set_duration($duration) {
    $this->$duration = $duration;
  }
  function get_duration() {
    return $this->$duration;
  }

  function set_trophyChange($trophyChange) {
    $this->$trophyChange = $trophyChange;
  }
  function get_trophyChange() {
    return $this->$trophyChange;
  }

  function set_player($player) {
    $this->$player = $player;
  }
  function get_player() {
    return $this->$player;
  }
}
?>