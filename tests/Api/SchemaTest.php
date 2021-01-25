<?php

namespace Mucan\Magento\Tests;

use Mucan\Magento\Api\Schema;
use Mucan\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class SchemaTest extends TestCase
{
    public function test_can_call_magento_api_schema()
    {
        $this->assertInstanceOf(Schema::class, MagentoFacade::api('schema'));
    }

    public function test_can_call_magento_api_schema_show()
    {
        Http::fake();

        $api = MagentoFacade::api('schema')->show();

        $this->assertTrue($api->ok());
    }
}
