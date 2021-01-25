<?php

namespace Mucan\Magento\Api;

class Products extends AbstractApi
{
    /**
     * The list of Products.
     *
     * @param int $pageSize
     * @param int $currentPage
     *
     * @return  array
     */
    public function all($pageSize = 50, $currentPage = 1)
    {
        return $this->get('/products', [
            'searchCriteria[pageSize]'    => $pageSize,
            'searchCriteria[currentPage]' => $currentPage,
        ]);
    }

    /**
     * Get info about product by product SKU.
     *
     * @param string $sku
     *
     * @return array
     */
    public function show($sku)
    {
        return $this->get('/products/'.$sku);
    }

    /**
     * Get info about product by product SKU.
     *
     * @param string $sku
     *
     * @return array
     */
    public function update($sku,$info=[])
    {

        return $this->put('/products/'.$sku,$info);
    }

    /**
     * Get info about product by product SKU.
     *
     * @param string $sku
     *
     * @return array
     */
    public function del($sku)
    {
        return $this->delete('/products/'.$sku);
    }

    /**
     * Get info about product by product SKU.
     *
     * @param string $sku
     *
     * @return array
     */
    public function save($sku,$info=[])
    {

        return $this->post('/products/'.$sku,$info);
    }

}
