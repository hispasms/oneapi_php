<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubFieldConversionRule;
use hispasms\SubObjectConversionRule;

class TerminalRoamingStatusNotification extends AbstractObject {

    public $terminalRoamingStatus;
    public $callbackData;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\TerminalRoamingStatusNotification',
        array(
            new SubObjectConversionRule('hispasms\models\TerminalRoamingStatus', 'terminalRoamingStatus', 'terminalRoamingStatusList.roaming'),
            new SubFieldConversionRule('callbackData', 'terminalRoamingStatusList.roaming.callbackData')
        )
);

?>
