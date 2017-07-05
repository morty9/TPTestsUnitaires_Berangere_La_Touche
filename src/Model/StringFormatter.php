<?php

namespace Model;

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

  /**
  * @return string
  */
  public function toCamelCase($string1, $string2) {

      $string1 = str_replace('-', ' ', $string1);
    	$string1 = str_replace('_', ' ', $string1);
    	$string1 = ucwords(strtolower($string1));
    	$string1 = str_replace(' ', '', $string1);

      $string2 = str_replace('-', ' ', $string2);
    	$string2 = str_replace('_', ' ', $string2);
    	$string2 = ucwords(strtolower($string2));
    	$string2 = str_replace(' ', '', $string2);

    	return $string1 . $string2;
  }

  /**
  * @return string
  */
  public function prefix($string1, $string2, $toCamelCase = false) {
      if ($toCamel) {
        return StringFormatter::toCamelCase($string2, $string1);
      }
      return StringFormatter::concat($string2, $string1);
  }

  /**
  * @return string
  */
  public function suffix($string1, $string2, $toCamelCase = false) {
    if ($toCamelCase) {
      return StringFormatter::toCamelCase($string1, $string2);
    }
    return StringFormatter::concat($string1, $string2);
  }


}


?>
