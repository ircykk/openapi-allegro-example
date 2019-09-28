# OpenAPI\Client\OrderManagementApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderShipmentsUsingPOST**](OrderManagementApi.md#createOrderShipmentsUsingPOST) | **POST** /order/checkout-forms/{id}/shipments | [BETA] Add a parcel tracking number
[**findMapping**](OrderManagementApi.md#findMapping) | **GET** /order/line-item-id-mappings | Get mapping for line item id
[**getListOfOrdersUsingGET**](OrderManagementApi.md#getListOfOrdersUsingGET) | **GET** /order/checkout-forms | Get the user&#39;s orders
[**getOrderEventsStatisticsUsingGET**](OrderManagementApi.md#getOrderEventsStatisticsUsingGET) | **GET** /order/event-stats | Get order events statistics
[**getOrderEventsUsingGET**](OrderManagementApi.md#getOrderEventsUsingGET) | **GET** /order/events | Get order events
[**getOrderShipmentsUsingGET**](OrderManagementApi.md#getOrderShipmentsUsingGET) | **GET** /order/checkout-forms/{id}/shipments | [BETA] Get a list of parcel tracking numbers
[**getOrdersDetailsUsingGET**](OrderManagementApi.md#getOrdersDetailsUsingGET) | **GET** /order/checkout-forms/{id} | Get an order&#39;s details



## createOrderShipmentsUsingPOST

> \OpenAPI\Client\Model\CheckoutFormAddWaybillCreated createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request)

[BETA] Add a parcel tracking number

Add a parcel tracking number (shipment) to given order line items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier
$checkout_form_add_waybill_request = new \OpenAPI\Client\Model\CheckoutFormAddWaybillRequest(); // \OpenAPI\Client\Model\CheckoutFormAddWaybillRequest | request

try {
    $result = $apiInstance->createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->createOrderShipmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier |
 **checkout_form_add_waybill_request** | [**\OpenAPI\Client\Model\CheckoutFormAddWaybillRequest**](../Model/CheckoutFormAddWaybillRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\CheckoutFormAddWaybillCreated**](../Model/CheckoutFormAddWaybillCreated.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.beta.v1+json
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findMapping

> \OpenAPI\Client\Model\LineItemIdMappings findMapping($line_item_id, $deal_id)

Get mapping for line item id

Allows mapping identifiers from dealId to lineItemId and vice-versa. One of defined query parameters has to be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | line item id
$deal_id = 'deal_id_example'; // string | dealId

try {
    $result = $apiInstance->findMapping($line_item_id, $deal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->findMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | [**string**](../Model/.md)| line item id | [optional]
 **deal_id** | **string**| dealId | [optional]

### Return type

[**\OpenAPI\Client\Model\LineItemIdMappings**](../Model/LineItemIdMappings.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfOrdersUsingGET

> \OpenAPI\Client\Model\CheckoutForms getListOfOrdersUsingGET($offset, $limit, $status, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id)

Get the user's orders

Use this resource to get an order list. <a href=\"/orders/#03\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Index of first returned checkout-form from all search results.
$limit = 56; // int | Maximum number of checkout-forms in response (acceptable values: from 0 to 100, default is 100).
$status = 'status_example'; // string | Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.   * `ALL`: return all checkout-forms
$line_items_bought_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The upper bound of date time range from which checkout forms will be taken.
$line_items_bought_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The lower bound of date time range from which checkout forms will be taken.
$payment_id = 'payment_id_example'; // string | Find checkout-forms having specified payment id.
$surcharges_id = 'surcharges_id_example'; // string | Find checkout-forms having specified surcharge id.

try {
    $result = $apiInstance->getListOfOrdersUsingGET($offset, $limit, $status, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getListOfOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned checkout-form from all search results. | [optional]
 **limit** | **int**| Maximum number of checkout-forms in response (acceptable values: from 0 to 100, default is 100). | [optional]
 **status** | **string**| Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing.   * &#x60;ALL&#x60;: return all checkout-forms | [optional]
 **line_items_bought_at_lte** | **\DateTime**| The upper bound of date time range from which checkout forms will be taken. | [optional]
 **line_items_bought_at_gte** | **\DateTime**| The lower bound of date time range from which checkout forms will be taken. | [optional]
 **payment_id** | **string**| Find checkout-forms having specified payment id. | [optional]
 **surcharges_id** | **string**| Find checkout-forms having specified surcharge id. | [optional]

### Return type

[**\OpenAPI\Client\Model\CheckoutForms**](../Model/CheckoutForms.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderEventsStatisticsUsingGET

> \OpenAPI\Client\Model\OrderEventStats getOrderEventsStatisticsUsingGET()

Get order events statistics

Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. <a href=\"/orders/#02\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrderEventsStatisticsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsStatisticsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrderEventStats**](../Model/OrderEventStats.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderEventsUsingGET

> \OpenAPI\Client\Model\OrderEventsList getOrderEventsUsingGET($from, $type, $limit)

Get order events

Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. <a href=\"/orders/#02\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | You can use the event ID to retrieve subsequent chunks of events
$type = array('type_example'); // string[] | Specify array of event types for filtering. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
$limit = 100; // int | Limit in the range of 1-1000

try {
    $result = $apiInstance->getOrderEventsUsingGET($from, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| You can use the event ID to retrieve subsequent chunks of events | [optional]
 **type** | [**string[]**](../Model/string.md)| Specify array of event types for filtering. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing. | [optional]
 **limit** | **int**| Limit in the range of 1-1000 | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\OrderEventsList**](../Model/OrderEventsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderShipmentsUsingGET

> \OpenAPI\Client\Model\CheckoutFormOrderWaybillResponse getOrderShipmentsUsingGET($id)

[BETA] Get a list of parcel tracking numbers

Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier

try {
    $result = $apiInstance->getOrderShipmentsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier |

### Return type

[**\OpenAPI\Client\Model\CheckoutFormOrderWaybillResponse**](../Model/CheckoutFormOrderWaybillResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrdersDetailsUsingGET

> \OpenAPI\Client\Model\CheckoutForm getOrdersDetailsUsingGET($id)

Get an order's details

Use this resource to get an order details. <a href=\"/orders/#04\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Checkout Form id

try {
    $result = $apiInstance->getOrdersDetailsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Checkout Form id |

### Return type

[**\OpenAPI\Client\Model\CheckoutForm**](../Model/CheckoutForm.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

