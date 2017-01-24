<?php

namespace hispasms\models\two_factor_authentication;

use hispasms\Models;
use hispasms\models\AbstractObject;
use hispasms\SubObjectConversionRule;

class TfaApplication extends AbstractObject {

    public $applicationId;
    public $name;
    public $enabled;
    public $processId;
    public $configuration;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\two_factor_authentication\TfaApplication', array (
  new SubObjectConversionRule('hispasms\models\two_factor_authentication\TfaApplicationConfiguration', 'configuration')
));

?>
