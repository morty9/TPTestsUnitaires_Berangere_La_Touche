<?php

namespace tests\Model

use Model\StringFormatter

class StringFormatterTest extends \PHPUnit_Framework_TestCase {

  public function test_Concat() {
      $string1 = 'Bonjour';
      $string2 = 'Aurevoir';

      $result = StringFormater::concat($string1, $string2);
      $this->assertSame('BonjourAurevoir', $result);
  }

  public function test_ToCamelCase() {
      $string1 = 'helLojeSuisla';
      $result = StringFormater::toCamelCase($string1);

      $this->assertSame($string1, $result);
  }

  public function test_prefix() {
    $string1 = 'Bonjour'
    $string2 = 'Aurevoir'

    $result = StringFormatter::prefix($string1, $string2);
    $this->assertSame('BonjourAurevoir', $result);
  }

  public function test_suffix() {
    $string1 = 'Bonjour';
    $string2 = 'Aurevoir';

    $result = StringFormatter::suffix($string1, $string2);
    $this->assertSame('AurevoirBonjour', $result);
  }

}
 ?>
