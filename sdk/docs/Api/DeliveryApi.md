# OpenAPI\Client\DeliveryApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingRatesSetUsingPOST**](DeliveryApi.md#createShippingRatesSetUsingPOST) | **POST** /sale/shipping-rates | Create a new shipping rates set
[**getListOfDeliveryMethodsUsingGET**](DeliveryApi.md#getListOfDeliveryMethodsUsingGET) | **GET** /sale/delivery-methods | Get the list of delivery methods
[**getListOfShippingRatestUsingGET**](DeliveryApi.md#getListOfShippingRatestUsingGET) | **GET** /sale/shipping-rates | Get the user&#39;s shipping rates
[**getOfferShippingRatesGET**](DeliveryApi.md#getOfferShippingRatesGET) | **GET** /sale/offers/{offerId}/shipping-rates | [BETA] Get shipping rates assigned to an offer
[**getSaleDeliverySettings**](DeliveryApi.md#getSaleDeliverySettings) | **GET** /sale/delivery-settings | Get the user&#39;s delivery settings
[**getShippingRatesSetUsingGET**](DeliveryApi.md#getShippingRatesSetUsingGET) | **GET** /sale/shipping-rates/{id} | Get the details of a shipping rates set
[**modifyShippingRatesSetUsingPUT**](DeliveryApi.md#modifyShippingRatesSetUsingPUT) | **PUT** /sale/shipping-rates/{id} | Edit a user&#39;s shipping rates set
[**putSaleDeliverySettings**](DeliveryApi.md#putSaleDeliverySettings) | **PUT** /sale/delivery-settings | Modify the user&#39;s delivery settings



## createShippingRatesSetUsingPOST

> \OpenAPI\Client\Model\ShippingRatesSet createShippingRatesSetUsingPOST($shipping_rates_set)

Create a new shipping rates set

Use this resource to create a new seller's shipping rates set. <a href=\"../../sale/#shipping-rates\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_rates_set = new \OpenAPI\Client\Model\ShippingRatesSet(); // \OpenAPI\Client\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->createShippingRatesSetUsingPOST($shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->createShippingRatesSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_rates_set** | [**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfDeliveryMethodsUsingGET

> \OpenAPI\Client\Model\InlineResponse2001 getListOfDeliveryMethodsUsingGET()

Get the list of delivery methods

Use this resource to get a list of all delivery methods currently available on the platform, as well as those that have already been discontinued. <a href=\"../../sale/#shipping-rates\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfDeliveryMethodsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfDeliveryMethodsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfShippingRatestUsingGET

> \OpenAPI\Client\Model\InlineResponse200 getListOfShippingRatestUsingGET($seller_id)

Get the user's shipping rates

Use this resource to get a list of seller's shipping rates. <a href=\"../../sale/#shipping-rates\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | id of shipping rates owner

try {
    $result = $apiInstance->getListOfShippingRatestUsingGET($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfShippingRatestUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| id of shipping rates owner |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOfferShippingRatesGET

> \OpenAPI\Client\Model\OfferShippingRates getOfferShippingRatesGET($offer_id)

[BETA] Get shipping rates assigned to an offer

Use this resource to get the delivery methods and costs defined in the offer when there is no seller's shipping rates set attached to offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $result = $apiInstance->getOfferShippingRatesGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getOfferShippingRatesGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

[**\OpenAPI\Client\Model\OfferShippingRates**](../Model/OfferShippingRates.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSaleDeliverySettings

> \OpenAPI\Client\Model\DeliverySettingsDto getSaleDeliverySettings()

Get the user's delivery settings

Use this resource to get the delivery settings declared by the seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSaleDeliverySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DeliverySettingsDto**](../Model/DeliverySettingsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShippingRatesSetUsingGET

> \OpenAPI\Client\Model\ShippingRatesSet getShippingRatesSetUsingGET($id)

Get the details of a shipping rates set

Use this resource to get details of the given shipping rates set. <a href=\"../../sale/#shipping-rates\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of shipping rates set

try {
    $result = $apiInstance->getShippingRatesSetUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getShippingRatesSetUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyShippingRatesSetUsingPUT

> \OpenAPI\Client\Model\ShippingRatesSet modifyShippingRatesSetUsingPUT($id, $shipping_rates_set)

Edit a user's shipping rates set

Use this resource to edit a new seller's shipping rates set. <a href=\"../../sale/#shipping-rates\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of shipping rates set
$shipping_rates_set = new \OpenAPI\Client\Model\ShippingRatesSet(); // \OpenAPI\Client\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->modifyShippingRatesSetUsingPUT($id, $shipping_rates_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->modifyShippingRatesSetUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of shipping rates set |
 **shipping_rates_set** | [**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\OpenAPI\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putSaleDeliverySettings

> \OpenAPI\Client\Model\DeliverySettingsDto putSaleDeliverySettings()

Modify the user's delivery settings

Use this resource to modify the delivery settings declared by the seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->putSaleDeliverySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->putSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DeliverySettingsDto**](../Model/DeliverySettingsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

