<?php

namespace Mattmiranda55\MailchimpLaravel\Enums;

enum CampaignType: string
{
    case Regular = 'regular';
    case Plaintext = 'plaintext';
    case Absplit = 'absplit';
    case Rss = 'rss';
    case Variate = 'variate';
}