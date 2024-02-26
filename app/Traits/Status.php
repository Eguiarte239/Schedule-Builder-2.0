<?php

namespace App\Traits;

enum Status: int
{
    case Pending = 0;
    case InProgress = 1;
    case Completed = 2;
}