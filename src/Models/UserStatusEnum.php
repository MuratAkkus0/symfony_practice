<?php

namespace App\Models;

enum UserStatusEnum: string
{
    case ACTIVE = "Active";
    case BUSY = "Busy";
    case OFFLINE = "Offline";
}