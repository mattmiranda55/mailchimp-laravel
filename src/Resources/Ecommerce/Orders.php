<?php

namespace Mattmiranda55\MailchimpLaravel\Resources\Ecommerce;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Orders
{
    public function __construct(
        protected MailchimpMarketing $client,
        protected string $storeId,
    ) {
    }

    // --- Orders ----------------------------------------------------------

    public function list(array $query = []): array
    {
    }

    public function create(array $data): array
    {
    }

    public function find(string $orderId): array
    {
    }

    public function update(string $orderId, array $data): array
    {
    }

    public function delete(string $orderId): void
    {
    }

    // --- Order line items ------------------------------------------------

    public function listLineItems(string $orderId, array $query = []): array
    {
    }

    public function createLineItem(string $orderId, array $data): array
    {
    }

    public function findLineItem(string $orderId, string $lineId): array
    {
    }

    public function updateLineItem(string $orderId, string $lineId, array $data): array
    {
    }

    public function deleteLineItem(string $orderId, string $lineId): void
    {
    }
}
