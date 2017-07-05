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

}
 ?>
