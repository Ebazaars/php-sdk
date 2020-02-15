<?php


namespace EbazaarsSdk\Service;


class PageService extends AbstractService
{

    const PAGES = '/pages/';
    const BY_SLUG = '/page/slug/{slug}';
    const GET_ALL_PAGE_WITH_PAGINATION = '/page/all/page/{page}';
    const GET_ALL_TAG = '/page/tag/all';
    const FILTER_BY_TAGS_WITH_PAGINATION = '/page/filter/by/tags/page/{page}';

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

    public function getAllWithPagination($page = 1, $options = [])
    {
        $response = $this->getClient()->getRequest(
            str_replace('{page}', $page, self::GET_ALL_PAGE_WITH_PAGINATION),
            $options
        );

        return $this->getContent($response);
    }

    public function filterByTags($tags, $page = 1, $options = [])
    {
        $options['form_params']['tags'] = $tags;
        $response = $this->getClient()->postRequest(str_replace('{page}', $page, self::FILTER_BY_TAGS_WITH_PAGINATION), $options);

        return $this->getContent($response);
    }
}