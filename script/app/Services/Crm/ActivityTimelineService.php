<?php

namespace App\Services\Crm;

class ActivityTimelineService
{
    public function events(): array
    {
        return ['Lead Created', 'Invoice Sent', 'Follow-up Scheduled'];
    }
}
