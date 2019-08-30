<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Model\Order;

class OrderService extends AbstractService
{

    const ORDER_CREATE = '/order/create';
    const GET_ORDER_BY_COOKIE = '/order/cookie/{order_cookie}';
    const GET_ORDER_BY_UUID = '/order/uuid/{order_uuid}';
    const ORDER_PAYMENT_COMPLETE = '/order/payment/complete/{order_uuid}';

    public function create(Order $order, $options = [])
    {
        $options['form_params'] = json_decode(json_encode($order), true);

        $response = $this->getClient()->postRequest(self::ORDER_CREATE, $options);

        return $this->getContent($response);
    }

    public function getByCookie($cookie, $options = [])
    {
        $order = $this->getClient()->getRequest(
            str_replace('{order_cookie}', $cookie, self::GET_ORDER_BY_COOKIE),
            $options
        );

        return $this->getContent($order);
    }

    public function getByUuid($uuid, $options = [])
    {
        $order = $this->getClient()->getRequest(
            str_replace('{order_uuid}', $uuid, self::GET_ORDER_BY_UUID),
            $options
        );

        return $this->getContent($order);
    }

    public function orderPaid($uuid, $paymentStatus,  $paidToken, $options = [])
    {
        $options['form_params'] = ['paid_token' => $paidToken, 'payment_status' => $paymentStatus];
        $order = $this->getClient()->patchRequest(
            str_replace('{order_uuid}', $uuid, self::ORDER_PAYMENT_COMPLETE),
            $options
        );

        return $this->getContent($order);
    }
}