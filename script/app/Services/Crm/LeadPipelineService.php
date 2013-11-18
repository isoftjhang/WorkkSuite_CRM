<?php

namespace App\Services\Crm;

class LeadPipelineService
{
    public function stages(): array
    {
        return [
            ['name' => 'Discovery', 'owner' => 'Sales'],
            ['name' => 'Qualified', 'owner' => 'Account Executive'],
            ['name' => 'Proposal', 'owner' => 'Sales'],
            ['name' => 'Negotiation', 'owner' => 'Account Executive'],
            ['name' => 'Closed', 'owner' => 'Sales Ops'],
        ];
    }
}
