<?php


namespace EbazaarsSdk\Model;


class AbstractModel
{

    public function toArray()
    {
        return (new \ArrayIterator($this))->getArrayCopy();
    }

}