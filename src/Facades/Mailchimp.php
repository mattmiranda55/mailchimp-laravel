<?php

namespace Mattmiranda55\MailchimpLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Mattmiranda55\MailchimpLaravel\MailchimpManager;

/**
 * @method static \Mattmiranda55\MailchimpLaravel\MailchimpMarketing marketing()
 * @method static \Mattmiranda55\MailchimpLaravel\MailchimpTransactional transactional()
 *
 * @see MailchimpManager
 */
class Mailchimp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MailchimpManager::class;
    }
}
