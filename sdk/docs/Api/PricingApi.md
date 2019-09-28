# OpenAPI\Client\PricingApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateFeePreviewUsingPOST**](PricingApi.md#calculateFeePreviewUsingPOST) | **POST** /pricing/offer-fee-preview | Calculate fee and commission for an offer
[**offerQuotesPublicUsingGET**](PricingApi.md#offerQuotesPublicUsingGET) | **GET** /pricing/offer-quotes | Get the user&#39;s current offer quotes
[**previewFeesPublicAPIUsingPOST**](PricingApi.md#previewFeesPublicAPIUsingPOST) | **POST** /pricing/fee-preview | Preview offer fees



## calculateFeePreviewUsingPOST

> \OpenAPI\Client\Model\FeePreviewResponse calculateFeePreviewUsingPOST($public_offer_preview_request)

Calculate fee and commission for an offer

Provides information about fee and commission for an offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_offer_preview_request = new \OpenAPI\Client\Model\PublicOfferPreviewRequest(); // \OpenAPI\Client\Model\PublicOfferPreviewRequest | 

try {
    $result = $apiInstance->calculateFeePreviewUsingPOST($public_offer_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->calculateFeePreviewUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_offer_preview_request** | [**\OpenAPI\Client\Model\PublicOfferPreviewRequest**](../Model/PublicOfferPreviewRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\FeePreviewResponse**](../Model/FeePreviewResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offerQuotesPublicUsingGET

> \OpenAPI\Client\Model\OfferQuotesDto offerQuotesPublicUsingGET($offer_id, $name)

Get the user's current offer quotes

This endpoint returns current offer quotes (listing and promo fees) cycles for authenticated user and list of offers. <a href=\"../../news/2018-02-14-zasob_do_sprawdzania_daty_oplaty/\" target=\"_blank\">Read more</a>. <br/>2018-07-18 - resource update <a href=\"../../news/2018-07-18-aktualizacja_zasob_do_sprawdzania_daty_oplaty/\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array('offer_id_example'); // string[] | List of offer ids, maximum 20 values
$name = 'name_example'; // string | 

try {
    $result = $apiInstance->offerQuotesPublicUsingGET($offer_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->offerQuotesPublicUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | [**string[]**](../Model/string.md)| List of offer ids, maximum 20 values |
 **name** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\OfferQuotesDto**](../Model/OfferQuotesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## previewFeesPublicAPIUsingPOST

> \OpenAPI\Client\Model\WrapsListingAndCommissionsFees previewFeesPublicAPIUsingPOST($wrapper_type_for_preview_conditions)

Preview offer fees

This endpoint calculates fees for a provided offer conditions. The quotation is estimated and based on the current configuration of the Allegro price list and the data entered in this API. The stated price does not include package discounts. The rules of charging and amount of charges are described in the Allegro regulations in Appendix 4. The final amount of the fee for the offer will be available after approval under the tab: My Account> Accounts> History. <a href=\"../../news/2017-10-30-kalkulator_ogloszenia/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wrapper_type_for_preview_conditions = new \OpenAPI\Client\Model\WrapperTypeForPreviewConditions(); // \OpenAPI\Client\Model\WrapperTypeForPreviewConditions | command

try {
    $result = $apiInstance->previewFeesPublicAPIUsingPOST($wrapper_type_for_preview_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->previewFeesPublicAPIUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wrapper_type_for_preview_conditions** | [**\OpenAPI\Client\Model\WrapperTypeForPreviewConditions**](../Model/WrapperTypeForPreviewConditions.md)| command |

### Return type

[**\OpenAPI\Client\Model\WrapsListingAndCommissionsFees**](../Model/WrapsListingAndCommissionsFees.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

