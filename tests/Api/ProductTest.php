<?php

namespace Mucan\Magento\Tests;

use Mucan\Magento\Api\Products;
use Mucan\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class ProductTest extends TestCase
{
    public function test_can_call_magento_api_products()
    {
        $this->assertInstanceOf(Products::class, MagentoFacade::api('products'));
    }

    public function test_can_call_magento_api_products_all()
    {
        Http::fake();

        $api = MagentoFacade::api('products')->all();

        $this->assertTrue($api->ok());
    }

    public function test_can_call_magento_api_products_show()
    {
        Http::fake();

        $api = MagentoFacade::api('products')->show('foo');

        $this->assertTrue($api->ok());
    }
}
