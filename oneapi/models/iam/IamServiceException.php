<?php

namespace hispasms\models\iam;

use hispasms\Models;
use hispasms\models\AbstractObject;

class IamServiceException extends AbstractObject {

    public $messageId;
    public $text;
    public $stackTrace;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\iam\IamServiceException');

?>
