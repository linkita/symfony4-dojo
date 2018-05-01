<?php
declare(strict_types=1);

namespace Dojo;

class Greeter
{
    public function greet(? string $name, ? bool $yell): string
    {
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($yell) {
            $text = strtoupper($text);
        }

        return $text;
    }
}
