<?php

namespace App\Services\Crm;

class ProjectTimelineService
{
    public function milestones(): array
    {
        return [
            ['year' => '2013', 'focus' => 'Foundation, sales pipeline, and account planning'],
            ['year' => '2014', 'focus' => 'Billing automation, reporting dashboards, and team collaboration'],
            ['year' => '2015', 'focus' => 'Client portal, notifications, and activity timeline'],
        ];
    }
}
