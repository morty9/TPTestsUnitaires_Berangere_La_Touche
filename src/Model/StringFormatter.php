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

  /**
  * @return string
  */
  public function toCamelCase($string1, $string2, $capitalize_first_char = false) {

      $string1 = str_replace('-', ' ', $string1);
    	$string1 = str_replace('_', ' ', $string1);
    	$string1 = ucwords(strtolower($string1));
    	$string1 = str_replace(' ', '', $string1);

      $string2 = str_replace('-', ' ', $string2);
    	$string2 = str_replace('_', ' ', $string2);
    	$string2 = ucwords(strtolower($string2));
    	$string2 = str_replace(' ', '', $string2);

      if ($capitalize_first_char) {
        $string1[0] = strtoupper($string1[0]);
        $string2[0] = strtoupper($string1[0]);
      }

    	return $string1 . $string2;
  }

  /**
  * @return string
  */
  public function prefix($string1, $string2, $toCamelCase = false) {
      if ($toCamel) {
        return toCamelCase($string2, $string1);
      }
      return concat($string2, $string1);
  }



}


?>
