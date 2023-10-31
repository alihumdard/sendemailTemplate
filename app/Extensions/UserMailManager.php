<?php

namespace App\Extensions;

use Illuminate\Mail\Mailer;

class UserMailManager extends MailManager
{
    public function __construct($app, private $customConfig)
    {
        parent::__construct($app);
    }

    protected function getConfig(string $name)
    {
        return $this->customConfig;
    }
}
