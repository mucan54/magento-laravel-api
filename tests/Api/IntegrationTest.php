<?php

namespace Mucan\Magento\Tests;

use Mucan\Magento\Api\Integration;
use Mucan\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class IntegrationTest extends TestCase
{
    public function test_can_call_magento_api_integration()
    {
        $this->assertInstanceOf(Integration::class, MagentoFacade::api('integration'));
    }

    public function test_can_call_magento_api_integration_customer_token()
    {
        Http::fake();

        $api = MagentoFacade::api('integration')->customerToken('foo@bar.com', 'secret');

        $this->assertTrue($api->ok());
    }

    public function test_can_call_magento_api_integration_admin_token()
    {
        Http::fake();

        $api = MagentoFacade::api('integration')->adminToken('admin', 'secret');

        $this->assertTrue($api->ok());
    }
}
