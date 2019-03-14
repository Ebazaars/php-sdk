<?php


namespace EbazaarsSdk\Service;


class BannerService extends AbstractService
{

    const GET_BY_BANNER_TYPE = '/banner/banner-type/{slug}';

    public function getByBannerType($slug)
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::GET_BY_BANNER_TYPE));

        return $response->getBody()->getContents();
    }

}