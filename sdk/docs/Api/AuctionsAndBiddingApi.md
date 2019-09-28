# OpenAPI\Client\AuctionsAndBiddingApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBid**](AuctionsAndBiddingApi.md#getBid) | **GET** /bidding/offers/{offerId}/bid | Get current user&#39;s bid information
[**placeBid**](AuctionsAndBiddingApi.md#placeBid) | **PUT** /bidding/offers/{offerId}/bid | Place a bid in an auction



## getBid

> \OpenAPI\Client\Model\MyBidResponse getBid($offer_id)

Get current user's bid information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.

try {
    $result = $apiInstance->getBid($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->getBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |

### Return type

[**\OpenAPI\Client\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## placeBid

> \OpenAPI\Client\Model\MyBidResponse placeBid($offer_id, $bid_request)

Place a bid in an auction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$bid_request = new \OpenAPI\Client\Model\BidRequest(); // \OpenAPI\Client\Model\BidRequest | 

try {
    $result = $apiInstance->placeBid($offer_id, $bid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->placeBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **bid_request** | [**\OpenAPI\Client\Model\BidRequest**](../Model/BidRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

