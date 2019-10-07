<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Model\Order;

class PaymentService extends AbstractService
{

    const PAYMENT_CREATE = '/payment/create';
    const CHECK_PAYMENT = '/payment/check/{orderUuid}';
    const PAYMENT_PAY = '/pay/';

    public function create(Order $order, $completeUrl = '', $options = [])
    {
        $options['form_params'] = json_decode(json_encode($order), true);
        $options['form_params']['complete_url'] = $completeUrl;
        $response = $this->getClient()->postRequest(self::PAYMENT_CREATE, $options);

        return $this->getContent($response);
    }

    public function checkPayment($token, $orderUuid, $options = [])
    {
        $options['form_params']['token'] = $token;

        $response = $this->getClient()->postRequest(
            str_replace('{orderUuid}', $orderUuid, self::CHECK_PAYMENT),
            $options
        );

        return $this->getContent($response);
    }

    public function pay(Order $order, $completeUrl = '', $options = [])
    {
        $options['form_params'] = json_decode(json_encode($order), true);
        $options['form_params']['complete_url'] = $completeUrl;
        $response = $this->getClient()->postRequest(self::PAYMENT_PAY, $options);

        return $this->getContent($response);
    }

}