<?php


namespace EbazaarsSdk\Holder\Banner;


class FilterHolder
{
    
    public $bannerType;
    public $bannerPosition;
    public $brand;
    public $category;
    public $page;
    public $product;
    public $tag;

    /**
     * @return mixed
     */
    public function getBannerType()
    {
        return $this->bannerType;
    }

    /**
     * @param mixed $bannerType
     */
    public function setBannerType($bannerType): void
    {
        $this->bannerType = $bannerType;
    }

    /**
     * @return mixed
     */
    public function getBannerPosition()
    {
        return $this->bannerPosition;
    }

    /**
     * @param mixed $bannerPosition
     */
    public function setBannerPosition($bannerPosition): void
    {
        $this->bannerPosition = $bannerPosition;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag): void
    {
        $this->tag = $tag;
    }
    
}