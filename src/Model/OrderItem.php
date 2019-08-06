<?php


namespace EbazaarsSdk\Model;


class OrderItem
{
    public $uuid;

    public $price;

    public $discount;

    public $tax;

    public $raw_price;

    public $meta_data;

    public $cargo_price;

    public $product_uuid;

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRawPrice()
    {
        return $this->raw_price;
    }

    /**
     * @param mixed $raw_price
     */
    public function setRawPrice($raw_price): self
    {
        $this->raw_price = $raw_price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetaData()
    {
        return $this->meta_data;
    }

    /**
     * @param mixed $meta_data
     */
    public function setMetaData($meta_data): self
    {
        $this->meta_data = $meta_data;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoPrice()
    {
        return $this->cargo_price;
    }

    /**
     * @param mixed $cargo_price
     */
    public function setCargoPrice($cargo_price): self
    {
        $this->cargo_price = $cargo_price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductUuid()
    {
        return $this->product_uuid;
    }

    /**
     * @param mixed $product_uuid
     */
    public function setProductUuid($product_uuid): void
    {
        $this->product_uuid = $product_uuid;
    }

}