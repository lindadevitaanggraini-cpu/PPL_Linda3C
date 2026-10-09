<?php
//file : validatortest.php

use PharIo\Version\InvalidVersionException;
use PHPUnit\Framework\TestCase;

require_once "Validator.php";

class ValidatorTest extends TestCase {
    // Test age
    public function TesValidAge() {
        $this->assertTrue(validateAge(30));
        $this->assertTrue(validateAge(-30));
    }
    public function tesEmptyAgeThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}