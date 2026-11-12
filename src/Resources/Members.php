<?php

namespace Mattmiranda55\MailchimpLaravel\Resources;

use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Members
{
    public function __construct(protected MailchimpMarketing $client)
    {
    }

    /**
     * Add or update a list member (idempotent, keyed on the email hash).
     */
    public function addOrUpdate(string $email, array $data = [], ?string $listId = null): array
    {
        $listId ??= $this->client->defaultListId();
        $hash = md5(strtolower($email));

        return $this->client->put("/lists/{$listId}/members/{$hash}", $data + [
            'email_address' => $email,
            'status_if_new' => 'subscribed',
        ]);
    }
}
