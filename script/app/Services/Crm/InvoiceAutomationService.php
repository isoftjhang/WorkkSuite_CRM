<?php

namespace App\Services\Crm;

class InvoiceAutomationService
{
    public function generateInvoiceSummary(array $items): array
    {
        $subtotal = array_sum(array_column($items, 'total'));

        return [
            'subtotal' => $subtotal,
            'tax' => round($subtotal * 0.16, 2),
            'grand_total' => round($subtotal * 1.16, 2),
        ];
    }
}
