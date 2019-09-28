# OpenAPI\Client\PromotionCampaignsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPromotionToCampaignUsingPOST**](PromotionCampaignsApi.md#addPromotionToCampaignUsingPOST) | **POST** /sale/loyalty/promotion-campaigns | Create an application for a promotion campaign
[**deleteCampaignFromPromotionUsingDELETE**](PromotionCampaignsApi.md#deleteCampaignFromPromotionUsingDELETE) | **DELETE** /sale/loyalty/promotion-campaigns | Delete a campaign in a promotion
[**deletePromotionCampaignApplicationUsingDELETE**](PromotionCampaignsApi.md#deletePromotionCampaignApplicationUsingDELETE) | **DELETE** /sale/loyalty/promotion-campaign-applications/{applicationId} | Delete an application for promotion campaign
[**getPromotionCampaignApplicationUsingGET**](PromotionCampaignsApi.md#getPromotionCampaignApplicationUsingGET) | **GET** /sale/loyalty/promotion-campaign-applications/{applicationId} | Get an application for promotion campaign
[**getPromotionCampaignsUsingGET**](PromotionCampaignsApi.md#getPromotionCampaignsUsingGET) | **GET** /sale/loyalty/promotion-campaigns | Get the user&#39;s promotion campaigns



## addPromotionToCampaignUsingPOST

> \OpenAPI\Client\Model\PromotionCampaignResponseDto addPromotionToCampaignUsingPOST($promotion_campaign_request_dto)

Create an application for a promotion campaign

For an additional fee, you can place a discount mark on a list of offers.         You have to define promotion id and campaign section giving LISTING_BADGE as the id.         Your promotion campaign application will be verified and you will be notified about the verification status via e-mail.         Fees will be charged in accordance with Annex No. 1 to the Daily deals zone regulations.         <a href=\"../../offer_bundles/#11\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_campaign_request_dto = new \OpenAPI\Client\Model\PromotionCampaignRequestDto(); // \OpenAPI\Client\Model\PromotionCampaignRequestDto | request

try {
    $result = $apiInstance->addPromotionToCampaignUsingPOST($promotion_campaign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->addPromotionToCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_campaign_request_dto** | [**\OpenAPI\Client\Model\PromotionCampaignRequestDto**](../Model/PromotionCampaignRequestDto.md)| request |

### Return type

[**\OpenAPI\Client\Model\PromotionCampaignResponseDto**](../Model/PromotionCampaignResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaignFromPromotionUsingDELETE

> deleteCampaignFromPromotionUsingDELETE($promotion_id, $campaign_id)

Delete a campaign in a promotion

Use this resource to delete campaign from promotion by promotion id and campaign id. <a href=\"../../offer_bundles/#16\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | The promotion unique id
$campaign_id = 'campaign_id_example'; // string | The campaign unique id

try {
    $apiInstance->deleteCampaignFromPromotionUsingDELETE($promotion_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->deleteCampaignFromPromotionUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The promotion unique id |
 **campaign_id** | **string**| The campaign unique id |

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


## deletePromotionCampaignApplicationUsingDELETE

> deletePromotionCampaignApplicationUsingDELETE($application_id)

Delete an application for promotion campaign

Use this resource to delete promotion campaign application by application id. You need to use its unique id. <a href=\"../../offer_bundles/#15\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string | The application unique id

try {
    $apiInstance->deletePromotionCampaignApplicationUsingDELETE($application_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->deletePromotionCampaignApplicationUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The application unique id |

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


## getPromotionCampaignApplicationUsingGET

> object getPromotionCampaignApplicationUsingGET($application_id)

Get an application for promotion campaign

Use this resource to retrieve promotion campaign application. You need to use its unique id. <a href=\"../../offer_bundles/#12\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string | The application unique id

try {
    $result = $apiInstance->getPromotionCampaignApplicationUsingGET($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->getPromotionCampaignApplicationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The application unique id |

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPromotionCampaignsUsingGET

> \OpenAPI\Client\Model\PromotionCampaignsResponseDto getPromotionCampaignsUsingGET($promotion_id, $limit, $offset)

Get the user's promotion campaigns

Use this resource to retrieve promotion campaigns. You can find promotion campaign by promotion id. <a href=\"../../offer_bundles/#13\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PromotionCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | The promotion unique id
$limit = 50; // int | limit
$offset = 0; // int | offset

try {
    $result = $apiInstance->getPromotionCampaignsUsingGET($promotion_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCampaignsApi->getPromotionCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The promotion unique id | [optional]
 **limit** | **int**| limit | [optional] [default to 50]
 **offset** | **int**| offset | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\PromotionCampaignsResponseDto**](../Model/PromotionCampaignsResponseDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

