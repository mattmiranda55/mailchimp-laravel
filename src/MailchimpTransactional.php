<?php

namespace Mattmiranda55\MailchimpLaravel;

use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;

/**
 * Thin wrapper over the Mailchimp Transactional (Mandrill) API.
 * Mandrill authenticates with the key in the JSON body, not a header.
 */
class MailchimpTransactional
{
    public function __construct(
        protected Factory $http,
        protected string $apiKey,
        protected int $timeout = 30,
    ) {
    }

    protected function request(): PendingRequest
    {
        return $this->http
            ->baseUrl('https://mandrillapp.com/api/1.0')
            ->acceptJson()
            ->asJson()
            ->timeout($this->timeout)
            ->throw();
    }

    public function call(string $endpoint, array $data = []): array
    {
        return $this->request()
            ->post($endpoint, ['key' => $this->apiKey] + $data)
            ->json();
    }

    public function ping(): array|string
    {
        return $this->call('/users/ping.json');
    }

    /**
     * @param  array  $message  Mandrill message array (html, subject, from_email, to, ...)
     */
    public function send(array $message): array
    {
        return $this->call('/messages/send.json', ['message' => $message]);
    }
}
