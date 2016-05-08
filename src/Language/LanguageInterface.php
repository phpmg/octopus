<?php
namespace PhpMg\Octopus\Language;

interface LanguageInterface
{
    public function getValueInWords($value);
    public function getValueInNumbers($value);
}
