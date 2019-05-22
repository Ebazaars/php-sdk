<?php


namespace EbazaarsSdk\Service;


class PageService extends AbstractService
{

    const PAGES = '/pages/';
    const BY_SLUG = '/page/slug/{slug}';

    public function getAll()
    {
        $response = $this->getClient()->getRequest(self::PAGES);

        return $this->getContent($response);
    }

    public function getBySlug($slug)
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::BY_SLUG));

        return $this->getContent($response);
    }

}