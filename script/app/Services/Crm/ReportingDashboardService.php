<?php

namespace App\Services\Crm;

class ReportingDashboardService
{
    public function metrics(): array
    {
        return [
            'won_deals' => 128,
            'open_invoices' => 47,
            'active_clients' => 89,
            'forecast' => 320000,
        ];
    }
}
