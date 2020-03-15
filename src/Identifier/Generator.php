<?php
namespace App\Identifier;

use RandomLib\Factory;

class Generator
{
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    public function createIdentifier(): string
    {
        $factory = new Factory;
        $generator = $factory->getMediumStrengthGenerator();

        return $generator->generateString(256, self::ALPHABET);
    }
}