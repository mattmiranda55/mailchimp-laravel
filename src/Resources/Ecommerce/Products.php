<?php

namespace Mattmiranda55\MailchimpLaravel\Resources\Ecommerce;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Products
{
    public function __construct(
        protected MailchimpMarketing $client,
        protected string $storeId,
    ) {
    }

    // --- Products --------------------------------------------------------

    public function list(array $query = []): array
    {
    }

    public function create(array $data): array
    {
    }

    public function find(string $productId): array
    {
    }

    public function update(string $productId, array $data): array
    {
    }

    public function upsert(string $productId, array $data): array
    {
    }

    public function delete(string $productId): void
    {
    }

    // --- Images ----------------------------------------------------------

    public function listImages(string $productId, array $query = []): array
    {
    }

    public function createImage(string $productId, array $data): array
    {
    }

    public function findImage(string $productId, string $imageId): array
    {
    }

    public function updateImage(string $productId, string $imageId, array $data): array
    {
    }

    public function deleteImage(string $productId, string $imageId): void
    {
    }

    // --- Variants --------------------------------------------------------

    public function listVariants(string $productId, array $query = []): array
    {
    }

    public function createVariant(string $productId, array $data): array
    {
    }

    public function findVariant(string $productId, string $variantId): array
    {
    }

    public function updateVariant(string $productId, string $variantId, array $data): array
    {
    }

    public function upsertVariant(string $productId, string $variantId, array $data): array
    {
    }

    public function deleteVariant(string $productId, string $variantId): void
    {
    }
}
