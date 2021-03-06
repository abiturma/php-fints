<?php

namespace Abiturma\PhpFints\Tests\Segments;

use Abiturma\PhpFints\Segments\HKSPA;
use Abiturma\PhpFints\Tests\TestCase;

/**
 * Class HKSPATest
 * @package Tests\Segments
 */
class HKSPATest extends TestCase
{

    
    /** @test */
    public function a_sepa_accounts_segment_is_built()
    {
        $this->assertEquals("HKSPA:1:1'", (new HKSPA())->toString());
    }
}
