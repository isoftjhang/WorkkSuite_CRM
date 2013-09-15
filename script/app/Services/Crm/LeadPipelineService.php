<?php

namespace App\Services\Crm;

class LeadPipelineService
{
    public function stages(): array
    {
        return ['Discovery', 'Qualified', 'Proposal', 'Negotiation', 'Closed'];
    }
}
