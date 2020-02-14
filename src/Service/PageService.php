<?php


namespace EbazaarsSdk\Service;


class PageService extends AbstractService
{

    const PAGES = '/pages/';
    const BY_SLUG = '/page/slug/{slug}';
    const GET_ALL_TAG = '/tag/all';

    public function getAll($options = [])
    {
        $response = $this->getClient()->getRequest(self::PAGES, $options);

        return $this->getContent($response);
    }

    public function getBySlug($slug, $options = [])
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::BY_SLUG), $options);

        return $this->getContent($response);
    }

    public function getAllTags($options = [])
    {
        $response = $this->getClient()->getRequest(self::GET_ALL_TAG, $options);

        return $this->getContent($response);
    }

}