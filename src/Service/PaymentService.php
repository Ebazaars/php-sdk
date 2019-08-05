<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Model\Order;

class PaymentService extends AbstractService
{

    const PAYMENT_CREATE = '/payment/create';

    public function create(Order $order, $completeUrl = '', $options = [])
    {
        $options['form_params'] = json_decode(json_encode($order), true);
        $options['form_params']['complete_url'] = $completeUrl;
        $response = $this->getClient()->postRequest(self::PAYMENT_CREATE, $options);

        return $this->getContent($response);
    }

}