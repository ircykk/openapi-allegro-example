# OpenAPI\Client\UsersOfferInformationApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferEvents**](UsersOfferInformationApi.md#getOfferEvents) | **GET** /sale/offer-events | [BETA] Get events about the seller&#39;s offers
[**getOfferUsingGET**](UsersOfferInformationApi.md#getOfferUsingGET) | **GET** /sale/offers/{offerId} | Get all fields of the particular offer
[**searchOffersUsingGET**](UsersOfferInformationApi.md#searchOffersUsingGET) | **GET** /sale/offers | Get seller&#39;s offers



## getOfferEvents

> \OpenAPI\Client\Model\SellerOfferEventsResponse getOfferEvents($from, $limit, $type)

[BETA] Get events about the seller's offers

Use this endpoint to get events concerning changes in the authorized seller's offers.  At present we support the following events:   - OFFER_ACTIVATED - offer is visible on site and available for purchase, occurs when offer status changes from ACTIVATING to ACTIVE.   - OFFER_CHANGED - occurs when offer's fields has been changed e.g. description or photos.   - OFFER_ENDED - offer is no longer available for purchase, occurs when offer status changes from ACTIVE to ENDED.   - OFFER_STOCK_CHANGED - stock in an offer was changed either via purchase or by seller.   - OFFER_PRICE_CHANGED - occurs when price in an offer was changed.   - OFFER_ARCHIVED - offer is no longer available on listing and has been archived.  Returned events may occur by actions made via browser or API. The resource allows you to get events concerning active offers and offers scheduled for activation (status ACTIVE and ACTIVATING). Returned events do not concern offers in INACTIVE and ENDED status. Please note that one change may result in more than one event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = MTEzMjQzODU3NA; // string | The ID of the last seen event. Events that occured after the given event will be returned.
$limit = 100; // int | The number of events that will be returned in the response.
$type = 'type_example'; // string | The type of events that will be returned in the response. All types of events are returned by default.

try {
    $result = $apiInstance->getOfferEvents($from, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| The ID of the last seen event. Events that occured after the given event will be returned. | [optional]
 **limit** | **int**| The number of events that will be returned in the response. | [optional] [default to 100]
 **type** | **string**| The type of events that will be returned in the response. All types of events are returned by default. | [optional]

### Return type

[**\OpenAPI\Client\Model\SellerOfferEventsResponse**](../Model/SellerOfferEventsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOfferUsingGET

> \OpenAPI\Client\Model\Offer getOfferUsingGET($offer_id)

Get all fields of the particular offer

Use this resource to retrieve all fields of the particular offer. <a href=\"../../sale/#similar-offer\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $result = $apiInstance->getOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

[**\OpenAPI\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchOffersUsingGET

> \OpenAPI\Client\Model\OffersSearchResultDto searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $sort, $limit, $offset)

Get seller's offers

Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.
$name = 'name_example'; // string | The text to search in the offer title.
$selling_mode_price_amount_gte = 9.99; // float | The lower threshold of price.
$selling_mode_price_amount_lte = 125.99; // float | The upper threshold of price.
$publication_status = array('publication_status_example'); // string[] | The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
$selling_mode_format = array('selling_mode_format_example'); // string[] | The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
$external_id = array('external_id_example'); // string[] | The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
$delivery_shipping_rates_id = 'delivery_shipping_rates_id_example'; // string | The ID of shipping rates. Returns offers with given shipping rates ID.
$sort = 'sort_example'; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.
$limit = 20; // int | The maximum number of offers returned in the response.
$offset = 56; // int | Index of the first returned offer from all search results.

try {
    $result = $apiInstance->searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->searchOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. | [optional]
 **name** | **string**| The text to search in the offer title. | [optional]
 **selling_mode_price_amount_gte** | **float**| The lower threshold of price. | [optional]
 **selling_mode_price_amount_lte** | **float**| The upper threshold of price. | [optional]
 **publication_status** | [**string[]**](../Model/string.md)| The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: &#x60;publication.status&#x3D;INACTIVE&amp;publication.status&#x3D;ACTIVE&#x60; - returns offers with status &#x60;INACTIVE&#x60; or &#x60;ACTIVE&#x60;. | [optional]
 **selling_mode_format** | [**string[]**](../Model/string.md)| The offer&#39;s selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: &#x60;sellingMode.format&#x3D;BUY_NOW&amp;sellingMode.format&#x3D;ADVERTISEMENT&#x60; - returns offers with with format &#x60;BUY_NOW&#x60; or &#x60;ADVERTISEMENT&#x60;. | [optional]
 **external_id** | [**string[]**](../Model/string.md)| The ID from the client&#39;s external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: &#x60;external.id&#x3D;1233&amp;external.id&#x3D;1234&#x60; - returns offers with ID &#x60;1233&#x60; or &#x60;1234&#x60;. Single ID length shouldn&#39;t exceed 100 characters. | [optional]
 **delivery_shipping_rates_id** | [**string**](../Model/.md)| The ID of shipping rates. Returns offers with given shipping rates ID. | [optional]
 **sort** | **string**| The results&#39; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#39;t provide the sort parameter, the list is sorted by offer creation time, descending. | [optional]
 **limit** | **int**| The maximum number of offers returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned offer from all search results. | [optional]

### Return type

[**\OpenAPI\Client\Model\OffersSearchResultDto**](../Model/OffersSearchResultDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

