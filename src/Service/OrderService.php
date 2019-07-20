<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Model\Order;

class OrderService extends AbstractService
{

    const ORDER_CREATE = '/order/create';

    public function create(Order $order, $options = [])
    {
        $options['form_params'] = json_decode(json_encode($order), true);

        $response = $this->getClient()->postRequest(self::ORDER_CREATE, $options);

        return $this->getContent($response);
    }

}