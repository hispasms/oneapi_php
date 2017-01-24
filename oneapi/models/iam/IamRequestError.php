<?php

namespace hispasms\models\iam;

use hispasms\Models;
use hispasms\models\AbstractObject;
use hispasms\SubObjectConversionRule;

class IamRequestError extends AbstractObject {

    public $serviceException;
    public $clientCorrelator;
    public $variables;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\iam\IamRequestError', array (
  new SubObjectConversionRule('hispasms\models\iam\IamServiceException', 'serviceException')
));

?>
