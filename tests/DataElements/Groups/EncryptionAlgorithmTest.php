<?php

namespace Abiturma\PhpFints\Tests\DataElements\Groups;

use Abiturma\PhpFints\DataElements\Groups\EncryptionAlgorithm;
use Abiturma\PhpFints\Tests\TestCase;

/**
 * Class EncryptionAlgorithmTest
 * @package Tests\DataElements\Groups
 */
class EncryptionAlgorithmTest extends TestCase
{


    /** @test */
    public function the_encryption_algorithm_has_sensible_defaults()
    {
        $this->assertEquals('2:2:13:@8@00000000:5:1', (new EncryptionAlgorithm())->toString());
    }
}
