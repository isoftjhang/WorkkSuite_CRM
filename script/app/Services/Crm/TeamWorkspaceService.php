<?php

namespace App\Services\Crm;

class TeamWorkspaceService
{
    public function collaborationChannels(): array
    {
        return [
            ['name' => 'sales', 'owner' => 'Sales Lead'],
            ['name' => 'support', 'owner' => 'Support Manager'],
            ['name' => 'finance', 'owner' => 'Finance Lead'],
        ];
    }
}
