<?php


namespace EbazaarsSdk\Service;


class ProductService extends AbstractService
{
    const ALL_PRODUCTS = '/products/';

    public function getAllProducts()
    {
        $response = $this->getClient()->getRequest(self::ALL_PRODUCTS);

        return $this->getContent($response);
    }

}