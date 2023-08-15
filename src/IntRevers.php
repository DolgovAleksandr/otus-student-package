<?php

declare(strict_types=1);

namespace AleksandrDolgov\OtusStudentPackage;

class IntRevers
{
    public function reverseInt(int $numbers): int {
        return (int) strrev((string) $numbers);
    }
}
