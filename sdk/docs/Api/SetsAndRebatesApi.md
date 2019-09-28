# OpenAPI\Client\SetsAndRebatesApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionUsingPOST1**](SetsAndRebatesApi.md#createPromotionUsingPOST1) | **POST** /sale/loyalty/promotions | Create a new promotion
[**deactivatePromotionUsingDELETE**](SetsAndRebatesApi.md#deactivatePromotionUsingDELETE) | **DELETE** /sale/loyalty/promotions/{promotionId} | Deactivate a promotion by id
[**getPromotionUsingGET**](SetsAndRebatesApi.md#getPromotionUsingGET) | **GET** /sale/loyalty/promotions/{promotionId} | Get a promotion data by id
[**listSellerPromotionsUsingGET1**](SetsAndRebatesApi.md#listSellerPromotionsUsingGET1) | **GET** /sale/loyalty/promotions | Get the user&#39;s list of promotions



## createPromotionUsingPOST1

> \OpenAPI\Client\Model\SellerRebateDto createPromotionUsingPOST1($seller_create_rebate_request_dto)

Create a new promotion

This endpoint creates a new promotion. You can define the following types of promotions:  1. Bundle  In order to create a new bundle, you have to define a  promotion with a single benefit of type **ORDER_FIXED_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. In the benefit specification you have to declare the discount amount that you want to be deducted from the sum of bundled offers prices. In the offer criterion you need to pass a list of offers that are to be grouped as a bundle. For each offer you have to define a fixed quantity (that many pieces of your offer will be part of the bundle) and you also have to set a promotionEntryPoint flag (offers with this flag set to true will have a section that allows the users to purchase your bundle).  2. Multipack  In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect.  3. Cross-offer multipack  A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.  Read more about <a href=\"../../news/2017-10-18-news_promocyjne_zestawy_ofert/\" target=\"_blank\">bundles</a>, <a href=\"../../news/2018-02-01-rabaty_ilosciowe/\" target=\"_blank\">multipack</a> and <a href=\"../../news/2018-10-08-rabaty_ilosciowe/\" target=\"_blank\">cross-offer multipack</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SetsAndRebatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_create_rebate_request_dto = {"benefits":[{"specification":{"type":"ORDER_FIXED_DISCOUNT","value":{"amount":"10.00","currency":"PLN"}}}],"offerCriteria":[{"type":"CONTAINS_OFFERS","offers":[{"id":"1122334455","quantity":2,"promotionEntryPoint":true},{"id":"2233445566","quantity":1,"promotionEntryPoint":false}]}]}; // \OpenAPI\Client\Model\SellerCreateRebateRequestDto | 

try {
    $result = $apiInstance->createPromotionUsingPOST1($seller_create_rebate_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsAndRebatesApi->createPromotionUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_create_rebate_request_dto** | [**\OpenAPI\Client\Model\SellerCreateRebateRequestDto**](../Model/SellerCreateRebateRequestDto.md)|  |

### Return type

[**\OpenAPI\Client\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deactivatePromotionUsingDELETE

> deactivatePromotionUsingDELETE($promotion_id)

Deactivate a promotion by id

Use this resource to deactivate the requested promotion. You need to use its unique id. Read more about <a href=\"../../news/2017-10-18-news_promocyjne_zestawy_ofert/#4\" target=\"_blank\">bundles</a> and <a href=\"../../news/2018-02-01-rabaty_ilosciowe/#4\" target=\"_blank\">multipack</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SetsAndRebatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | promotionId

try {
    $apiInstance->deactivatePromotionUsingDELETE($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling SetsAndRebatesApi->deactivatePromotionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| promotionId |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPromotionUsingGET

> \OpenAPI\Client\Model\SellerRebateDto getPromotionUsingGET($promotion_id)

Get a promotion data by id

Use this resource to returns the requested promotion. You need to use its unique id. Read more about <a href=\"../../news/2017-10-18-news_promocyjne_zestawy_ofert/#3\" target=\"_blank\">bundles</a> and <a href=\"../../news/2018-02-01-rabaty_ilosciowe/#3\" target=\"_blank\">multipack</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SetsAndRebatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | promotionId

try {
    $result = $apiInstance->getPromotionUsingGET($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsAndRebatesApi->getPromotionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| promotionId |

### Return type

[**\OpenAPI\Client\Model\SellerRebateDto**](../Model/SellerRebateDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSellerPromotionsUsingGET1

> \OpenAPI\Client\Model\SellerRebatesDto listSellerPromotionsUsingGET1($user_id, $limit, $offset, $offer_id, $promotion_type)

Get the user's list of promotions

<p>Get a list of promotions defined by the authorized user.</p> <p>Restrictions:</p> <p>Sum of limit and offset must be equal to or lower than 50000. Limit must be equal to or lower than 5000.</p> <p>Example:</p> <p>offset = 49950 and limit = 50 will return promotions</p> <p>offset = 49950 and limit = 51 will return 422 http error</p> <p>offset = 0 and limit = 5000 will return promotions</p> <p>offset = 0 and limit = 5001 will return 422 http error</p> <p>Read more about <a href=\"../../news/2017-10-18-news_promocyjne_zestawy_ofert/#2\" target=\"_blank\">Bundles</a> and <a href=\"../../news/2018-02-01-rabaty_ilosciowe/#2\" target=\"_blank\">Multipack</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SetsAndRebatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 11111111; // string | The id of the user who is the owner of the promotions.
$limit = 50; // int | Limit of promotions per page.
$offset = 0; // int | Distance between the beginning of the document and the point from which promotions are returned.
$offer_id = 8226673525; // string | Filter by offer id.
$promotion_type = 'promotion_type_example'; // string | Filter by promotion type.

try {
    $result = $apiInstance->listSellerPromotionsUsingGET1($user_id, $limit, $offset, $offer_id, $promotion_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetsAndRebatesApi->listSellerPromotionsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user who is the owner of the promotions. |
 **limit** | **int**| Limit of promotions per page. | [optional] [default to 50]
 **offset** | **int**| Distance between the beginning of the document and the point from which promotions are returned. | [optional] [default to 0]
 **offer_id** | **string**| Filter by offer id. | [optional]
 **promotion_type** | **string**| Filter by promotion type. | [optional]

### Return type

[**\OpenAPI\Client\Model\SellerRebatesDto**](../Model/SellerRebatesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

