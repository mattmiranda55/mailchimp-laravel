<?php

namespace Mattmiranda55\MailchimpLaravel\Resources;

use Mattmiranda55\MailchimpLaravel\Enums\CampaignType;
use Mattmiranda55\MailchimpLaravel\MailchimpMarketing;

class Campaigns
{
    public function __construct(protected MailchimpMarketing $client)
    {
    }

    /**
     * Create a new marketing campaign.
     */
    public function create(CampaignType $type, array $settings = []): array
    {
        return $this->client->post('/campaigns', [
            'type' => $type->value,
            'settings' => $settings,
        ]);
    }

    public function find(string $campaignId): array
    {
        return $this->client->get("/campaigns/{$campaignId}");
    }

    /**
     * Send a campaign. The send endpoint needs no body, only the campaign id.
     */
    public function send(string $campaignId): array
    {
        return $this->client->post("/campaigns/{$campaignId}/actions/send");
    }
}
