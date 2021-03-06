<?php

namespace Abiturma\PhpFints\DataElements\Groups;

use Abiturma\PhpFints\DataElements\DataElementGroup;

/**
 * Class SecurityProfile
 *
 * Fields
 * - 1 SecurityMechanism (PIN/RAH)
 * - 2 MechanismVersion (1 (PIN), 7,9,10 (RAH))
 *
 * @package Abiturma\PhpFints
 */
class SecurityProfile extends DataElementGroup
{
    const SECURITY_MECHANISM = 'PIN'; //PIN, RAH

    const MECHANISM_VERSION = 1; // 1 for PIN, 7,9,10 for RAH


    protected function boot()
    {
        $this->addElement(static::SECURITY_MECHANISM)->addElement(static::MECHANISM_VERSION);
    }
}
