<?php

declare(strict_types=1);

namespace AleksandrDolgov\OtusStudentPackage;

class Reverser
{
    public function reverseInt(int $numbers): int {
        return (int) strrev((string) $numbers);
    }

    public function reverseString(string $string): string {
        return strrev($string);
    }
}
