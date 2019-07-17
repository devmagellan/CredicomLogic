<?php

namespace App\modules\CreditRequest\Block\Epost;

use \App\modules\CreditRequest\Block\Epost\Base as BaseEpostNotification;

class LoanNotificationStep4 extends BaseEpostNotification {
    public $template = 'epost/loanNotificationStep4';
    public $creditRequestNote = 'Step 4';
    public $availableRecipients = self::AVAILABLE_RECIPIENTS_BOTH;
	
	 public function render(){
	
        return view($this->template,['creditRequest'=>$this->getCreditRequest(),'client'=>$this->getClient(),'sender'=>$this->getSender(),'str'=>$this->getCreditRequest()->str,
		'strNr'=>$this->getCreditRequest()->strNr]);
    }
}