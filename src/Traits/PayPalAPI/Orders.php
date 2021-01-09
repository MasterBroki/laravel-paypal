<?php


namespace Srmklive\PayPal\Traits\PayPalAPI;


trait Orders {
    public function showOrderDetails($order_id)
    {
        $this->apiEndPoint = "v2/checkout/orders/{$order_id}";
        $this->apiUrl = collect([$this->getConfig()['api_url'], $this->apiEndPoint])->implode('/');
        
        $this->verb = 'get';
        
        return $this->doPayPalRequest();
    }
}