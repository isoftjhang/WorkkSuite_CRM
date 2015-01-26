<?php

namespace App\Services\Crm;

class ClientPortalService
{
    public function modules(): array
    {
        return ['Invoices', 'Projects', 'Knowledge Base'];
    }
}
