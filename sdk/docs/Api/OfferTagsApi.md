# OpenAPI\Client\OfferTagsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignTagToOfferPOST**](OfferTagsApi.md#assignTagToOfferPOST) | **POST** /sale/offers/{offerId}/tags | Assign tags to an offer
[**createTagPOST1**](OfferTagsApi.md#createTagPOST1) | **POST** /sale/offer-tags | Create a tag
[**deleteTagUsingDELETE**](OfferTagsApi.md#deleteTagUsingDELETE) | **DELETE** /sale/offer-tags/{tagId} | Delete a tag
[**listAssignedOfferTagsGET**](OfferTagsApi.md#listAssignedOfferTagsGET) | **GET** /sale/offers/{offerId}/tags | Get tags assigned to an offer
[**listSellerTagsGET1**](OfferTagsApi.md#listSellerTagsGET1) | **GET** /sale/offer-tags | Get the user&#39;s tags
[**updateTagPUT**](OfferTagsApi.md#updateTagPUT) | **PUT** /sale/offer-tags/{tagId} | Modify a tag



## assignTagToOfferPOST

> assignTagToOfferPOST($offer_id, $tag_ids_request)

Assign tags to an offer

Use this resource to assign a tag to offer. <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PrzypiszTagiDoOferty\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId
$tag_ids_request = new \OpenAPI\Client\Model\TagIdsRequest(); // \OpenAPI\Client\Model\TagIdsRequest | request

try {
    $apiInstance->assignTagToOfferPOST($offer_id, $tag_ids_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->assignTagToOfferPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |
 **tag_ids_request** | [**\OpenAPI\Client\Model\TagIdsRequest**](../Model/TagIdsRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTagPOST1

> \OpenAPI\Client\Model\TagId createTagPOST1($tag_request)

Create a tag

Use this resource to create a new tag. <a href=\"../../news/2018-09-24-tagi-zalaczniki/#DodajDoKonta\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest | request

try {
    $result = $apiInstance->createTagPOST1($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->createTagPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\TagId**](../Model/TagId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTagUsingDELETE

> deleteTagUsingDELETE($tag_id)

Delete a tag

Use this resource to delete the tag. <a href=\"../../news/2018-09-24-tagi-zalaczniki/#UsunTagZKonta\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | tagId

try {
    $apiInstance->deleteTagUsingDELETE($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->deleteTagUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| tagId |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*, application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAssignedOfferTagsGET

> \OpenAPI\Client\Model\TagListResponse listAssignedOfferTagsGET($offer_id)

Get tags assigned to an offer

Use this resource to get a list of tags assigned to offer. <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PobierzTagiZOferty\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | offerId

try {
    $result = $apiInstance->listAssignedOfferTagsGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listAssignedOfferTagsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| offerId |

### Return type

[**\OpenAPI\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSellerTagsGET1

> \OpenAPI\Client\Model\TagListResponse listSellerTagsGET1($user_id, $limit, $offset)

Get the user's tags

Use this resource to get a list of tags defined by the specified user (Defaults: limit = 1000, offset = 0). <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PobierzTagi\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | user.id
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->listSellerTagsGET1($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listSellerTagsGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| user.id |
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\OpenAPI\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTagPUT

> updateTagPUT($tag_id, $tag_request)

Modify a tag

Use this resource to update a tag. <a href=\"../../news/2018-09-24-tagi-zalaczniki/#ZmienNazwe\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | tagId
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest | request

try {
    $apiInstance->updateTagPUT($tag_id, $tag_request);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->updateTagPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| tagId |
 **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)| request |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

