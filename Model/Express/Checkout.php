<?php
namespace Jh\CoreBugPaypalExpress\Model\Express;

use Magento\Paypal\Model\Express\Checkout as DefaultCheckout;

/**
 * Class Checkout
 * @package Jh\CoreBugPaypalExpress\Model\Express
 * @author Leo Gumbo <leo@wearejh.com>
 * @author Reka Szekely <reka@wearejh.com>
 */
class Checkout extends DefaultCheckout
{
    public function place($token, $shippingMethodCode = null)
    {
        $this->_quote = $this->quoteRepository->get($this->_quote->getId());
        parent::place($token, $shippingMethodCode);
    }
}
