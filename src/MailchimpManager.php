<?php

namespace Mattmiranda55\MailchimpLaravel;

class MailchimpManager
{
    public function __construct(
        protected MailchimpMarketing $marketing,
        protected MailchimpTransactional $transactional,
    ) {
    }

    public function marketing(): MailchimpMarketing
    {
        return $this->marketing;
    }

    public function transactional(): MailchimpTransactional
    {
        return $this->transactional;
    }
}
