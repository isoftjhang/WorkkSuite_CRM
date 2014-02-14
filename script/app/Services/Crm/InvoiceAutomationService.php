<?php

namespace App\Services\Crm;

class InvoiceAutomationService
{
    public function generateInvoiceSummary(array $items): array
    {
        $subtotal = array_sum(array_column($items, 'total'));
        $tax = round($subtotal * 0.16, 2);

        return [
            'subtotal' => $subtotal,
            'tax' => $tax,
            'grand_total' => round($subtotal + $tax, 2),
            'currency' => 'USD',
        ];
    }
}
