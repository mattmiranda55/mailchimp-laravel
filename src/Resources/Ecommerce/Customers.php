<?php

namespace Mattmiranda55\MailchimpLaravel\Resources\Ecommerce;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Customers
{
    public function __construct(
        protected MailchimpMarketing $client,
        protected string $storeId,
    ) {
    }

    public function list(array $query = []): array
    {
    }

    public function create(array $data): array
    {
    }

    public function find(string $customerId): array
    {
    }

    public function update(string $customerId, array $data): array
    {
    }

    public function delete(string $customerId): void
    {
    }
}
