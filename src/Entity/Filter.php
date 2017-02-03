<?php

namespace Paysera\Component\RestClientCommon\Entity;

class Filter extends Entity
{
    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->get('limit');
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->get('offset');
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->get('order_by');
    }

    /**
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->get('order_direction');
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->set('limit', $limit);
        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->set('offset', $offset);
        return $this;
    }

    /**
     * @param string $orderBy
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->set('order_by', $orderBy);
        return $this;
    }

    /**
     * @param string $orderDirection
     * @return $this
     */
    public function setOrderDirection($orderDirection)
    {
        $this->set('order_direction', $orderDirection);
        return $this;
    }
}
