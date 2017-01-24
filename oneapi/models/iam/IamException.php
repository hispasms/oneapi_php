<?php

namespace hispasms\models\iam;

use hispasms\Models;
use hispasms\models\AbstractObject;
use hispasms\SubObjectConversionRule;

class IamException extends AbstractObject {

    public $requestError;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\iam\IamException', array (
  new SubObjectConversionRule('hispasms\models\iam\IamRequestError', 'requestError')
));

?>
