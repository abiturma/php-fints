<?php

namespace Abiturma\PhpFints\Tests\DataElements\Groups;

use Abiturma\PhpFints\DataElements\Groups\KeyName;
use Abiturma\PhpFints\DataElements\Groups\Kik;
use Abiturma\PhpFints\Tests\TestCase;

/**
 * Class KeyNameTest
 * @package Tests\DataElements\Groups
 */
class KeyNameTest extends TestCase
{

    
    /** @test */
    public function the_key_name_has_sensible_defaults()
    {
        $kik = (new Kik())->toString();
        $this->assertEquals("$kik:Username:S:0:0", (new KeyName())->toString());
    }
}
