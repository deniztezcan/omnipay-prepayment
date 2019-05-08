<?php
/**
 * Gateway | src/Gateway.php.
 *
 * @author      Deniz Tezcan <howdy@deniztezcan.me>
 * @package		Omnipay-PrePayments
 * @since       v0.1
 */

namespace Omnipay\PrePayment;

use Omnipay\Common\AbstractGateway;
use Omnipay\PrePayment\Message\Request\Purchase;
use Omnipay\PrePayment\Message\Request\CompletePurchase;

class Gateway extends AbstractGateway
{
	public function getName()
    {
        return 'PrePayment';
    }

	public function getDefaultParameters()
    {
        return [
            
        ];
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest(Purchase::class, $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest(CompletePurchase::class, $parameters);
    }
}