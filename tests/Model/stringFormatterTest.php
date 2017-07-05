<?php

namespace Tests\Model;

use Model\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase {

  public function test_Concat()
    {
        $str1 = 'Bonjour';
        $str2 = 'Aurevoir';

        $result = StringFormatter::concat($str1, $str2);
        $this->assertSame('BonjourAurevoir', $result);
    }

    public function test_ToCamelCase()
    {
        $str1 = 'bonJourMada';
        $str2 = 'meBb';
        $result = StringFormatter::toCamelCase($str1, $str2, true);

        $this->assertSame('BonjourmadaMebb', $result);
    }

    public function test_Prefix()
    {
        $str1 = 'Bonjour';
        $str2 = 'Aurevoir';
        $res = StringFormatter::prefix($str1, $str2);

        $this->assertSame('AurevoirBonjour', $res);
    }

    public function test_Suffix()
    {
        $str1 = 'Bonjour';
        $str2 = 'Aurevoir';
        $res = StringFormatter::suffix($str1, $str2);

        $this->assertSame('BonjourAurevoir', $res);
    }

}
 ?>
