<?php

namespace Sudo\Slack\Models;

use Illuminate\Notifications\Notifiable;
use Sudo\Base\Models\BaseModel;

class Slack extends BaseModel
{

    use Notifiable;

    public function __construct($webhook) {
        $this->webhook = $webhook;
    }

    public function routeNotificationForSlack()
    {
        return $this->webhook;
    }
    
}
