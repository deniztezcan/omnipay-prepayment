<?php
/**
 * Purchase | src/Message/Request/Purchase.php.
 *
 * @author      Deniz Tezcan <howdy@deniztezcan.me>
 * @package		Omnipay-PrePayment
 * @since       v0.1
 */

namespace Omnipay\PrePayment\Message\Request;

use Carbon\Carbon;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\PrePayment\Message\Response\Purchase as PurchaseResponse;
use Exception;

use Omnipay\Common\Message\AbstractRequest;

class Purchase extends AbstractRequest
{	
	public function getData()
    {	
    	return $this->getParameters();
    }

    public function sendData($data)
    {
    	return $this->createResponse($data);
    }
    
    public function createResponse($data){
    	return new PurchaseResponse($this, $data);
    }
}