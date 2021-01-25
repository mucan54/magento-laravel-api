<?php

namespace Mucan\Magento\Tests;

use Mucan\Magento\Api\SourceItems;
use Mucan\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class SourceItemsTest extends TestCase
{
    public function test_can_instantiate_source_items_from_api()
    {
        $this->assertInstanceOf(SourceItems::class, MagentoFacade::api('sourceItems'));
    }

    public function test_can_call_source_items_all()
    {
        Http::fake();

        $api = MagentoFacade::api('sourceItems')->all();

        $this->assertTrue($api->ok());
    }
}
