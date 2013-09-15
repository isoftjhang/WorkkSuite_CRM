<?php

namespace App\Services\Crm;

class TeamWorkspaceService
{
    public function collaborationChannels(): array
    {
        return ['sales', 'support', 'finance'];
    }
}
