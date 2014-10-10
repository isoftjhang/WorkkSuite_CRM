<?php

namespace App\Services\Crm;

class NotificationService
{
    public function channels(): array
    {
        return ['email', 'sms', 'in-app'];
    }
}
