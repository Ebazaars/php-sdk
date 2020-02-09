<?php


namespace EbazaarsSdk\Service;


class ProductService extends AbstractService
{
    const ALL_PRODUCTS = '/products/';
    const GET_BY_SLUG = '/product/slug/{slug}';
    const GET_BY_CATEGORY_SLUG = '/products/category/slug/{category_slug}';
    const GET_BY_UUID = '/product/uuid/{productUuid}';
    const GET_ALL_CATEGORIES = '/product/categories/all';

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

    public function getByCategory($categorySlug, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{category_slug}', $categorySlug, self::GET_BY_CATEGORY_SLUG),
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