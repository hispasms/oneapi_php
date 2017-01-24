<?php

namespace hispasms\models;
use hispasms\Models;
use hispasms\SubObjectConversionRule;

/**
 * Social Invite response object.
 */
class SocialInviteResponse extends AbstractObject {

  public $sendSmsResponse;

  public function __construct($array=null, $success=true) {
      parent::__construct($array, $success);
  }
}

Models::register('hispasms\models\SocialInviteResponse', array (
  new SubObjectConversionRule('hispasms\models\SISendSmsResponse', 'sendSmsResponse')
));

?>
