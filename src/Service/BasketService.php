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

    protected $cookie;

    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->cookie = new EbazaarsCookie();
    }

    public function create($customerUuid = null)
    {
        $formParams = [];
        if (!empty($customerUuid)) {
            $formParams['customer-uuid'] = $customerUuid;
        }

        $response = $this->getClient()->putRequest(self::CREATE, ['form_params' => $formParams]);

        return $this->getContent($response);
    }

    public function show()
    {

    }

    public function detail($cookie)
    {
        $response = $this->getClient()->getRequest(str_replace('{basket_cookie}' ,$cookie, self::GET_BY_COOKIE));

        return $this->getContent($response);
    }

    /**
     * @param $basketUuid
     * @param $productQuantity
     * {
     *  uuid => string,
     *  tax => float,
     *  price => float,
     *  raw_price => float,
     *  market_price => float
     * }
     *
     * @return mixed
     */
    public function addItemByBasketUuid($basketUuid, $productQuantity)
    {
        $response = $this->getClient()
            ->postRequest(
                str_replace(['{basket_uuid}'], [$basketUuid], self::ADD_ITEM_BY_UUID),
                ['form_params' => $productQuantity]
            );

        return $this->getContent($response);
    }

    /**
     * @param $basketCookie
     * @param $productQuantity
     * {
     *  uuid => string,
     *  tax => float,
     *  price => float,
     *  raw_price => float,
     *  market_price => float
     * }
     *
     * @return mixed
     */
    public function addItemByBasketCookie($basketCookie, $productQuantity)
    {
        $response = $this->getClient()
            ->postRequest(
                str_replace(['{basket_cookie}'], [$basketCookie], self::ADD_ITEM_BY_COOKIE),
                ['form_params' => $productQuantity]
            );

        return $this->getContent($response);
    }
}