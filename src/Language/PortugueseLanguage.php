<?php

namespace PhpMg\Octopus\Language;

class PortugueseLanguage implements LanguageInterface
{
    private $words = [
        1 => 'um',
        2 => 'dois',
        3 => 'três',
        4 => 'quatro',
        5 => 'cinco',
        6 => 'seis',
        7 => 'sete',
        8 => 'oito',
        9 => 'nove',
        10 => 'dez',
    ];

    public function getValueInWords($value)
    {
        if ($value <= 10) {
            return $this->words[$value];
        }
    }

    public function getValueInNumbers($value)
    {

    }
}
