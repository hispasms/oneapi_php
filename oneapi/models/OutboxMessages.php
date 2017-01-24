<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

class OutboxMessages extends AbstractObject
{

    public $logs;
    public $from;
    public $to;
    public $hasMoreLogs;

    public function __construct($array = null, $success = true)
    {
        parent::__construct($array, $success);
    }

    public function isMoreAvailable()
    {
        return $this->hasMoreLogs;
    }

}

Models::register(
    'hispasms\models\OutboxMessages',
    new ObjectArrayConversionRule('hispasms\models\OutboxMessage', 'logs')
);

?>
