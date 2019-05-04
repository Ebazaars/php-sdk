<?php


namespace EbazaarsSdk\Service;


class ProductService extends AbstractService
{
    const ALL_PRODUCTS = '/products/';
    const GET_BY_SLUG = '/product/slug/{slug}';
    const GET_BY_CATEGORY = '/by-category-id/{id}';

    public function getAllProducts()
    {
        $response = $this->getClient()->getRequest(self::ALL_PRODUCTS);

        return $this->getContent($response);
    }

    public function getBySlug($slug)
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::GET_BY_SLUG));

        return $this->getContent($response);
    }

    public function getByCategory($id)
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $id, self::GET_BY_CATEGORY));

        return $this->getContent($response);
    }
}