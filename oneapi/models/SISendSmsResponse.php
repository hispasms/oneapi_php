<?php

namespace hispasms\models;

// require_once('SISendMessageResult');
use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

/**
 * Send sms response (Social Invite) object.
 */
class SISendSmsResponse extends AbstractObject {

  public $bulkId;
  public $deliveryInfoUrl;
  public $responses;

  public function __construct($array=null, $success=true) {
      parent::__construct($array, $success);
  }
}

Models::register('hispasms\models\SISendSmsResponse', array (
  new ObjectArrayConversionRule('hispasms\models\SISendMessageResult', 'responses')
));

?>
