<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Holder\Banner\FilterHolder;

class BannerService extends AbstractService
{

    const GET_BY_BANNER_TYPE = '/banner/type/{slug}';
    const FILTER = '/banner/filter';

    public function getByBannerType($slug, $options = [])
    {
        $response = $this->getClient()->getRequest(str_replace('{slug}', $slug, self::GET_BY_BANNER_TYPE), $options);

        return $this->getContent($response);
    }

    public function filter(FilterHolder $filter, $options = [])
    {
        $options['form_params'] = json_decode(json_encode($filter), true);
        $response = $this->getClient()->postRequest(self::FILTER, $options);

        return $this->getContent($response);
    }

}