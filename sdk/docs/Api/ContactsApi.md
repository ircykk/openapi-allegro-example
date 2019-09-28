# OpenAPI\Client\ContactsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContactUsingPOST**](ContactsApi.md#createContactUsingPOST) | **POST** /sale/offer-contacts | Create a new contact
[**getContactUsingGET**](ContactsApi.md#getContactUsingGET) | **GET** /sale/offer-contacts/{id} | Get contact details
[**getListOfContactsUsingGET**](ContactsApi.md#getListOfContactsUsingGET) | **GET** /sale/offer-contacts | Get the user&#39;s contacts
[**modifyContactUsingPUT**](ContactsApi.md#modifyContactUsingPUT) | **PUT** /sale/offer-contacts/{id} | Modify contact details



## createContactUsingPOST

> \OpenAPI\Client\Model\ContactResponse createContactUsingPOST($contact_request)

Create a new contact

Use this resource to create a new contact. <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#1\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \OpenAPI\Client\Model\ContactRequest(); // \OpenAPI\Client\Model\ContactRequest | New contact

try {
    $result = $apiInstance->createContactUsingPOST($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContactUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)| New contact |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactUsingGET

> \OpenAPI\Client\Model\ContactResponse getContactUsingGET($id)

Get contact details

Use this resource to get contact details. <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#3\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact id

try {
    $result = $apiInstance->getContactUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact id |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfContactsUsingGET

> \OpenAPI\Client\Model\ContactResponseList getListOfContactsUsingGET($seller_id)

Get the user's contacts

Use this resource to get details of many contacts. <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#4\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | id of contacts owner

try {
    $result = $apiInstance->getListOfContactsUsingGET($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getListOfContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| id of contacts owner |

### Return type

[**\OpenAPI\Client\Model\ContactResponseList**](../Model/ContactResponseList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyContactUsingPUT

> \OpenAPI\Client\Model\ContactResponse modifyContactUsingPUT($id, $contact_request)

Modify contact details

Use this resource to modify contact details. <a href=\"../../news/2018-01-17-news_zarzadzanie_kontaktami/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact id
$contact_request = new \OpenAPI\Client\Model\ContactRequest(); // \OpenAPI\Client\Model\ContactRequest | Contact

try {
    $result = $apiInstance->modifyContactUsingPUT($id, $contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->modifyContactUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact id |
 **contact_request** | [**\OpenAPI\Client\Model\ContactRequest**](../Model/ContactRequest.md)| Contact |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

