# OpenAPI\Client\BatchOfferModificationApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneralReportUsingGET**](BatchOfferModificationApi.md#getGeneralReportUsingGET) | **GET** /sale/offer-modification-commands/{commandId} | Modification command summary
[**getPriceModificationCommandStatusUsingGET**](BatchOfferModificationApi.md#getPriceModificationCommandStatusUsingGET) | **GET** /sale/offer-price-change-commands/{commandId} | Change price command summary
[**getPriceModificationCommandTasksStatusesUsingGET**](BatchOfferModificationApi.md#getPriceModificationCommandTasksStatusesUsingGET) | **GET** /sale/offer-price-change-commands/{commandId}/tasks | Change price command detailed report
[**getQuantityModificationCommandStatusUsingGET**](BatchOfferModificationApi.md#getQuantityModificationCommandStatusUsingGET) | **GET** /sale/offer-quantity-change-commands/{commandId} | Change quantity command summary
[**getQuantityModificationCommandTasksStatusesUsingGET**](BatchOfferModificationApi.md#getQuantityModificationCommandTasksStatusesUsingGET) | **GET** /sale/offer-quantity-change-commands/{commandId}/tasks | Change quantity command detailed report
[**getTasksUsingGET**](BatchOfferModificationApi.md#getTasksUsingGET) | **GET** /sale/offer-modification-commands/{commandId}/tasks | Modification command detailed report
[**modificationCommandUsingPUT**](BatchOfferModificationApi.md#modificationCommandUsingPUT) | **PUT** /sale/offer-modification-commands/{commandId} | Batch offer modification
[**priceModificationCommandUsingPUT**](BatchOfferModificationApi.md#priceModificationCommandUsingPUT) | **PUT** /sale/offer-price-change-commands/{commandId} | Batch offer price modification
[**quantityModificationCommandUsingPUT**](BatchOfferModificationApi.md#quantityModificationCommandUsingPUT) | **PUT** /sale/offer-quantity-change-commands/{commandId} | Batch offer quantity modification



## getGeneralReportUsingGET

> \OpenAPI\Client\Model\GeneralReport getGeneralReportUsingGET($command_id)

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId

try {
    $result = $apiInstance->getGeneralReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getGeneralReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPriceModificationCommandStatusUsingGET

> \OpenAPI\Client\Model\GeneralReport getPriceModificationCommandStatusUsingGET($command_id)

Change price command summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId

try {
    $result = $apiInstance->getPriceModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPriceModificationCommandTasksStatusesUsingGET

> \OpenAPI\Client\Model\TaskReport getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset)

Change price command detailed report

Defaults: limit = 100, offset = 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getQuantityModificationCommandStatusUsingGET

> \OpenAPI\Client\Model\GeneralReport getQuantityModificationCommandStatusUsingGET($command_id)

Change quantity command summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId

try {
    $result = $apiInstance->getQuantityModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getQuantityModificationCommandTasksStatusesUsingGET

> \OpenAPI\Client\Model\TaskReport getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset)

Change quantity command detailed report

Defaults: limit = 100, offset = 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTasksUsingGET

> \OpenAPI\Client\Model\TaskReport getTasksUsingGET($command_id, $limit, $offset)

Modification command detailed report

Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->getTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modificationCommandUsingPUT

> \OpenAPI\Client\Model\GeneralReport modificationCommandUsingPUT($command_id, $offer_change_command)

Batch offer modification

Use this resource to modify multiple offers at once. <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#1\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$offer_change_command = new \OpenAPI\Client\Model\OfferChangeCommand(); // \OpenAPI\Client\Model\OfferChangeCommand | offerChangeCommandDto

try {
    $result = $apiInstance->modificationCommandUsingPUT($command_id, $offer_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->modificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **offer_change_command** | [**\OpenAPI\Client\Model\OfferChangeCommand**](../Model/OfferChangeCommand.md)| offerChangeCommandDto |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## priceModificationCommandUsingPUT

> \OpenAPI\Client\Model\GeneralReport priceModificationCommandUsingPUT($command_id, $offer_price_change_command)

Batch offer price modification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$offer_price_change_command = new \OpenAPI\Client\Model\OfferPriceChangeCommand(); // \OpenAPI\Client\Model\OfferPriceChangeCommand | offerPriceChangeCommandDto

try {
    $result = $apiInstance->priceModificationCommandUsingPUT($command_id, $offer_price_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->priceModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **offer_price_change_command** | [**\OpenAPI\Client\Model\OfferPriceChangeCommand**](../Model/OfferPriceChangeCommand.md)| offerPriceChangeCommandDto |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## quantityModificationCommandUsingPUT

> \OpenAPI\Client\Model\GeneralReport quantityModificationCommandUsingPUT($command_id, $offer_quantity_change_command)

Batch offer quantity modification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | commandId
$offer_quantity_change_command = new \OpenAPI\Client\Model\OfferQuantityChangeCommand(); // \OpenAPI\Client\Model\OfferQuantityChangeCommand | offerQuantityChangeCommandDto

try {
    $result = $apiInstance->quantityModificationCommandUsingPUT($command_id, $offer_quantity_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->quantityModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| commandId |
 **offer_quantity_change_command** | [**\OpenAPI\Client\Model\OfferQuantityChangeCommand**](../Model/OfferQuantityChangeCommand.md)| offerQuantityChangeCommandDto |

### Return type

[**\OpenAPI\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

