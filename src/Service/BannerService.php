<?php


namespace EbazaarsSdk\Service;


class BannerService extends AbstractService
{

    const GET_BY_BANNER_TYPE = '/banner-type/{slug}';

    public function getByBannerType($slug, $options = null)
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::GET_BY_BANNER_TYPE), $options);

        return $this->getContent($response);
    }

}