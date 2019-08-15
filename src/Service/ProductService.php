<?php


namespace EbazaarsSdk\Service;


class ProductService extends AbstractService
{
    const ALL_PRODUCTS = '/products/';
    const GET_BY_SLUG = '/product/slug/{slug}';
    const GET_BY_CATEGORY = '/by-category-id/{id}';
    const GET_BY_UUID = '/product/uuid/{productUuid}';
    const GET_ALL_CATEGORIES = '/categories/all';

    public function getAllProducts($options = [])
    {
        $response = $this->getClient()->getRequest(self::ALL_PRODUCTS, $options);

        return $this->getContent($response);
    }

    public function getBySlug($slug, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{slug}', $slug, self::GET_BY_SLUG),
            $options
        );

        return $this->getContent($response);
    }

    public function getByCategory($id, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{slug}', $id, self::GET_BY_CATEGORY),
            $options
        );

        return $this->getContent($response);
    }

    public function getByUuid($productUuid, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{productUuid}', $productUuid, self::GET_BY_UUID),
            $options
        );

        return $this->getContent($response);
    }

    public function getAllCategories($options = [])
    {
        $response = $this->getClient()->getRequest(self::GET_ALL_CATEGORIES, $options);

        return $this->getContent($response);
    }
}