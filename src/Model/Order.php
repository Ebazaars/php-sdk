<?php


namespace EbazaarsSdk\Model;


class Order
{
    public $uuid;

    public $basket_uuid;

    public $address_uuid;

    public $order_item;

    public $customer_uuid;

    public $item_count;

    public $price;

    public $tax;

    public $item_price;

    public $cargo_price;

    public $item_raw_price;

    public $discount;

    public $address;

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
    public function getBasketUuid()
    {
        return $this->basket_uuid;
    }

    /**
     * @param mixed $basket_uuid
     */
    public function setBasketUuid($basket_uuid): self
    {
        $this->basket_uuid = $basket_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerUuid()
    {
        return $this->customer_uuid;
    }

    /**
     * @param mixed $customer_uuid
     */
    public function setCustomerUuid($customer_uuid): self
    {
        $this->customer_uuid = $customer_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemCount()
    {
        return $this->item_count;
    }

    /**
     * @param mixed $item_count
     */
    public function setItemCount($item_count): self
    {
        $this->item_count = $item_count;

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
    public function getItemPrice()
    {
        return $this->item_price;
    }

    /**
     * @param mixed $item_price
     */
    public function setItemPrice($item_price): self
    {
        $this->item_price = $item_price;

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
    public function getItemRawPrice()
    {
        return $this->item_raw_price;
    }

    /**
     * @param mixed $item_raw_price
     */
    public function setItemRawPrice($item_raw_price): self
    {
        $this->item_raw_price = $item_raw_price;

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
    public function getOrderItem()
    {
        return $this->order_item;
    }

    /**
     * @param mixed $orderItem
     */
    public function addOrderItem($orderItem): self
    {
        $this->order_item[] = new \ArrayIterator($orderItem);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressUuid()
    {
        return $this->address_uuid;
    }

    /**
     * @param mixed $address_uuid
     */
    public function setAddressUuid($address_uuid): self
    {
        $this->address_uuid = $address_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }
}