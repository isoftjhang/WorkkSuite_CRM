<?php

namespace App\Services\Crm;

class ProjectTimelineService
{
    public function milestones(): array
    {
        return [
            ['year' => '2013', 'focus' => 'Foundation, lead tracking, and sales pipeline'],
            ['year' => '2014', 'focus' => 'Billing automation, reporting dashboards, and collaboration workflows'],
            ['year' => '2015', 'focus' => 'Client portal, activity timelines, and customer success tools'],
        ];
    }
}
