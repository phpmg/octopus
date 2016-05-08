<?php

namespace PhpMg\Octopus;

use PhpMg\Octopus\Language\LanguageInterface;

class NumberToWord
{
    /**
     * @var LanguageInterface
     */
    private $language;

    public function __construct(LanguageInterface $language)
    {
        $this->language = $language;
    }

    public function getValueInWords($value)
    {
        return $this->language->getValueInWords($value);
    }
}
