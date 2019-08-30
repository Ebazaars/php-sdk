<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Authentication\EbazaarsCookie;
use EbazaarsSdk\Client\Client;

class BasketService extends AbstractService
{

    /** @params id # basket id */
    const SHOW = '/{id}';
    /** @param id # user id */
    const DETAIL = '/detail/{id}';

    const CREATE = '/basket/';

    const ADD_ITEM_BY_UUID = '/basket-item/add/uuid/{basket_uuid}';
    const ADD_ITEM_BY_COOKIE = '/basket-item/add/cookie/{basket_cookie}';

    const GET_BY_COOKIE = '/basket/cookie/{basket_cookie}';
    const BASKET_COMPLETE = '/basket/complete/{basket_uuid}';

    protected $cookie;

    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->cookie = new EbazaarsCookie();
    }

    public function create($customerUuid = null, $options = [])
    {
        $options['form_params'] = [];
        if (!empty($customerUuid)) {
            $options['form_params']['customer-uuid'] = $customerUuid;
        }

        $response = $this->getClient()->putRequest(self::CREATE, $options);

        return $this->getContent($response);
    }

    public function show()
    {

    }

    public function detail($cookie, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{basket_cookie}', $cookie, self::GET_BY_COOKIE),
            $options
        );

        return $this->getContent($response);
    }

    /**
     * @param $basketUuid
     * @param $productQuantity
     *  {
     *  uuid => string,
     *  tax => float,
     *  price => float,
     *  raw_price => float,
     *  market_price => float
     *  }
     *
     * @return mixed
     */
    public function addItemByBasketUuid($basketUuid, $productQuantity, $options = [])
    {

        $options['form_params'] = $productQuantity;

        $response = $this->getClient()
            ->postRequest(
                str_replace(['{basket_uuid}'], [$basketUuid], self::ADD_ITEM_BY_UUID),
                $options
            );

        return $this->getContent($response);
    }

    /**
     * @param $basketCookie
     * @param $productQuantity
     *  {
     *  uuid => string,
     *  tax => float,
     *  price => float,
     *  raw_price => float,
     *  market_price => float
     *  }
     *
     * @return mixed
     */
    public function addItemByBasketCookie($basketCookie, $productQuantity, $options = [])
    {

        $options['form_params'] = $productQuantity;

        $response = $this->getClient()
            ->postRequest(
                str_replace(['{basket_cookie}'], [$basketCookie], self::ADD_ITEM_BY_COOKIE),
                $options
            );

        return $this->getContent($response);
    }

    public function complete($uuid, $options = [])
    {
        $basket = $this->getClient()->patchRequest(
            str_replace('{basket_uuid}', $uuid, self::BASKET_COMPLETE),
            $options
        );

        return $this->getContent($basket);
    }
}