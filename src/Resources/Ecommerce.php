<?php

namespace Mattmiranda55\MailchimpLaravel\Resources;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;
use Mattmiranda55\MailchimpLaravel\Resources\Ecommerce\Customers;
use Mattmiranda55\MailchimpLaravel\Resources\Ecommerce\Orders;
use Mattmiranda55\MailchimpLaravel\Resources\Ecommerce\Products;
use Mattmiranda55\MailchimpLaravel\Resources\Ecommerce\Stores;

/**
 * Entry point for /ecommerce. Everything under a store is reached through
 * an accessor scoped to that store, e.g.
 *   Mailchimp::marketing()->ecommerce()->orders($storeId)->create([...]);
 */
class Ecommerce
{
    public function __construct(protected MailchimpMarketing $client)
    {
    }

    public function stores(): Stores
    {
        return new Stores($this->client);
    }

    public function customers(string $storeId): Customers
    {
        return new Customers($this->client, $storeId);
    }

    public function orders(string $storeId): Orders
    {
        return new Orders($this->client, $storeId);
    }

    public function products(string $storeId): Products
    {
        return new Products($this->client, $storeId);
    }
}
