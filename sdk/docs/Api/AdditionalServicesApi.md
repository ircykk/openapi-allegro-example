# OpenAPI\Client\AdditionalServicesApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdditionalServicesGroupUsingPOST**](AdditionalServicesApi.md#createAdditionalServicesGroupUsingPOST) | **POST** /sale/offer-additional-services/groups | Create additional services group
[**getAdditionalServicesGroupUsingGET**](AdditionalServicesApi.md#getAdditionalServicesGroupUsingGET) | **GET** /sale/offer-additional-services/groups/{groupId} | Get the details of an additional services group
[**getListOfAdditionalServicesDefinitionsUsingGET**](AdditionalServicesApi.md#getListOfAdditionalServicesDefinitionsUsingGET) | **GET** /sale/offer-additional-services/definitions | Get the user&#39;s additional services definitions
[**getListOfAdditionalServicesGroupsUsingGET**](AdditionalServicesApi.md#getListOfAdditionalServicesGroupsUsingGET) | **GET** /sale/offer-additional-services/groups | Get the user&#39;s additional services groups
[**modifyAdditionalServicesGroupUsingPUT**](AdditionalServicesApi.md#modifyAdditionalServicesGroupUsingPUT) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify an additional services group



## createAdditionalServicesGroupUsingPOST

> \OpenAPI\Client\Model\AdditionalServicesGroupResponse createAdditionalServicesGroupUsingPOST($additional_services_group_request)

Create additional services group

Use this resource to create a group of additional services. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_services_group_request = new \OpenAPI\Client\Model\AdditionalServicesGroupRequest(); // \OpenAPI\Client\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->createAdditionalServicesGroupUsingPOST($additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->createAdditionalServicesGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_services_group_request** | [**\OpenAPI\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalServicesGroupUsingGET

> \OpenAPI\Client\Model\AdditionalServicesGroupResponse getAdditionalServicesGroupUsingGET($group_id)

Get the details of an additional services group

Use this resource to get additional services group for a given ID. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#5\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID

try {
    $result = $apiInstance->getAdditionalServicesGroupUsingGET($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getAdditionalServicesGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional Service Group ID |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfAdditionalServicesDefinitionsUsingGET

> \OpenAPI\Client\Model\DefinitionsResponse getListOfAdditionalServicesDefinitionsUsingGET($user_id, $offset, $limit)

Get the user's additional services definitions

Use this resource to get additional services definitions by user ID. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#1\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User ID
$offset = 0; // int | offset
$limit = 100; // int | limit

try {
    $result = $apiInstance->getListOfAdditionalServicesDefinitionsUsingGET($user_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesDefinitionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID |
 **offset** | **int**| offset | [optional] [default to 0]
 **limit** | **int**| limit | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\DefinitionsResponse**](../Model/DefinitionsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfAdditionalServicesGroupsUsingGET

> \OpenAPI\Client\Model\AdditionalServicesGroups getListOfAdditionalServicesGroupsUsingGET($user_id, $offset, $limit)

Get the user's additional services groups

Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#4\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User ID
$offset = 0; // int | offset
$limit = 1000; // int | limit

try {
    $result = $apiInstance->getListOfAdditionalServicesGroupsUsingGET($user_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID |
 **offset** | **int**| offset | [optional] [default to 0]
 **limit** | **int**| limit | [optional] [default to 1000]

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroups**](../Model/AdditionalServicesGroups.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyAdditionalServicesGroupUsingPUT

> \OpenAPI\Client\Model\AdditionalServicesGroupResponse modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request)

Modify an additional services group

Use this resource to modify existing additional service group. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#3\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | additional service group ID
$additional_services_group_request = new \OpenAPI\Client\Model\AdditionalServicesGroupRequest(); // \OpenAPI\Client\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->modifyAdditionalServicesGroupUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| additional service group ID |
 **additional_services_group_request** | [**\OpenAPI\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\OpenAPI\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

