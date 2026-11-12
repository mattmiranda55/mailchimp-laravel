<?php

namespace Mattmiranda55\MailchimpLaravel\Resources\Ecommerce;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Stores
{
    public function __construct(protected MailchimpMarketing $client)
    {
    }

    public function list(array $query = []): array
    {
    }

    public function create(array $data): array
    {
    }

    public function find(string $storeId): array
    {
    }

    public function update(string $storeId, array $data): array
    {
    }

    public function delete(string $storeId): void
    {
    }
}
