<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubObjectConversionRule;

class TerminalRoamingStatus extends AbstractObject {

    public $servingMccMnc;
    public $address;
    public $currentRoaming;
    public $resourceURL;
    public $retrievalStatus;
    public $callbackData;
    public $extendedData;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'hispasms\models\TerminalRoamingStatus',
        array(
                new SubObjectConversionRule('hispasms\models\ServingMccMnc', 'servingMccMnc'),
                new SubObjectConversionRule('hispasms\models\TerminalRoamingExtendedData', 'extendedData'),
        )
);

