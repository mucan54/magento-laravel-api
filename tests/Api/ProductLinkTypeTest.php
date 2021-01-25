<?php

namespace Mucan\Magento\Tests;

use Mucan\Magento\Api\ProductLinkType;
use Mucan\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class ProductLinkTypeTest extends TestCase
{
    public function test_can_call_product_link_type()
    {
        $this->assertInstanceOf(ProductLinkType::class, MagentoFacade::api('productLinkType'));
    }

    public function test_can_call_product_link_type_types()
    {
        Http::fake();

        $api = MagentoFacade::api('productLinkType')->types();

        $this->assertTrue($api->ok());
    }
}
