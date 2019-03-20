<?php


namespace EbazaarsSdk\Service;


class PageService extends AbstractService
{

    const PAGES = '/pages/';

    public function getAll()
    {
        $response = $this->getClient()->getRequest(self::PAGES);

        return $this->getContent($response);
    }

}