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

    protected $cookie;

    public function __construct(Client $client)
    {
        parent::__construct($client);
        $this->cookie = new EbazaarsCookie();
    }

    public function show()
    {

    }

    public function detail(){

    }

    public function addItem($productId, $variantId){

    }
}