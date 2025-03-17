<?php

namespace App\Models;

enum UserStatusEnum: string
{
    case ACTIVE = "green";
    case BUSY = "red";
    case OFFLINE = "gray";
}