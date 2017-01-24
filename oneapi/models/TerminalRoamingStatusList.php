<?php

namespace hispasms\models;

// TODO: Remove this object and use only TerminalRoamingStatus !
use hispasms\Models;
use hispasms\SubObjectConversionRule;

class TerminalRoamingStatusList extends AbstractObject {

    public $terminalRoamingStatus;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'hispasms\models\TerminalRoamingStatusList',
        new SubObjectConversionRule('hispasms\models\TerminalRoamingStatus', 'terminalRoamingStatus', 'terminalRoamingStatusList.roaming')
);

