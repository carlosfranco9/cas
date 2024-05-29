<?php

namespace App\Services;

use Leo108\CAS\Contracts\TicketLocker;

class SSOTickerLocker implements TicketLocker
{
    public function acquireLock($key, $timeout)
    {
        return true;
    }

    public function releaseLock($key)
    {
        return true;
    }
}
