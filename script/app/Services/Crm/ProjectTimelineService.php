<?php

namespace App\Services\Crm;

class ProjectTimelineService
{
    public function milestones(): array
    {
        return [
            ['month' => 'September 2013', 'focus' => 'Foundation and planning'],
            ['month' => 'October 2013', 'focus' => 'Lead management workflows'],
            ['month' => 'November 2013', 'focus' => 'Billing and reporting'],
            ['month' => 'December 2013', 'focus' => 'Launch preparation'],
        ];
    }
}
