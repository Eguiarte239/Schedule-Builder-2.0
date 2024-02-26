<?php

namespace App\Traits;

enum Priority: int
{
    use Enum;
    case Low = 0;
    case Medium = 1;
    case High = 2;
    case Urgent = 3;
}