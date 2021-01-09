<?php


namespace Srmklive\PayPal\Tests\Mocks\Responses;


trait Orders {
    /**
     * @return array
     */
    private function mockGenerateShowOrderResponse()
    {
        return \GuzzleHttp\json_decode('{
  "id": "ee0044"
}', true);
    }
    
}