<?php

class StringFormatter {

  /** @var string */
  private $string1;

  /** @var string */
  private $string2;

  /**
  * StringFormatter constructor
  *
  * @param $string1
  * @param $string2
  */

  public function __construct($string1, $string2) {
    $this->string1 = $string1;
    $this->string2 = $string2;
  }

  /**
  * @return string
  */
  public function getString1() {
    return $this->string1;
  }

  /**
  * @return string
  */
  public function getString2() {
    return $this->string2;
  }

  /**
  * Setter string1
  */
  public function setString1($string1) {
    $this->string1 = $string1;
  }

  public function setString2($string2) {
    $this->string2 = $string2;
  }

  /**
  * @return string
  */
  public function concat($string1, $string2) {
    return $string1 . $string2;
  }



}


?>
