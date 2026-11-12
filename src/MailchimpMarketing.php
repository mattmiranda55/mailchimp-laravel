<?php

namespace Mattmiranda55\MailchimpLaravel;

use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;
use Mattmiranda55\MailchimpLaravel\Resources\Campaigns;
use Mattmiranda55\MailchimpLaravel\Resources\Ecommerce;
use Mattmiranda55\MailchimpLaravel\Resources\Members;

/**
 * Thin wrapper over the Mailchimp Marketing API (v3).
 * Endpoint helpers live in Resources/; this class is the HTTP plumbing.
 */
class MailchimpMarketing
{
    public function __construct(
        protected Factory $http,
        protected string $apiKey,
        protected string $server,
        protected ?string $defaultListId = null,
        protected int $timeout = 30,
    ) {
    }

    protected function request(): PendingRequest
    {
        return $this->http
            ->baseUrl("https://{$this->server}.api.mailchimp.com/3.0")
            ->withToken($this->apiKey)
            ->acceptJson()
            ->timeout($this->timeout)
            ->throw();
    }

    public function defaultListId(): ?string
    {
        return $this->defaultListId;
    }

    // --- Resources -------------------------------------------------------

    public function campaigns(): Campaigns
    {
        return new Campaigns($this);
    }

    public function members(): Members
    {
        return new Members($this);
    }

    public function ecommerce(): Ecommerce
    {
        return new Ecommerce($this);
    }

    // --- Raw HTTP (public so users can hit endpoints you haven't wrapped) -

    public function ping(): array
    {
        return $this->get('/ping');
    }

    public function get(string $path, array $query = []): array
    {
        return $this->request()->get($path, $query)->json();
    }

    public function post(string $path, array $data = []): array
    {
        return $this->request()->post($path, $data)->json();
    }

    public function put(string $path, array $data = []): array
    {
        return $this->request()->put($path, $data)->json();
    }

    public function patch(string $path, array $data = []): array
    {
        return $this->request()->patch($path, $data)->json();
    }

    public function delete(string $path): void
    {
        $this->request()->delete($path);
    }
}
