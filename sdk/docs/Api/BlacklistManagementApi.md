# OpenAPI\Client\BlacklistManagementApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doAddToBlackList**](BlacklistManagementApi.md#doAddToBlackList) | **POST** /sale/blacklisted-users | Add a users to the blacklist
[**doGetBlackListUsers**](BlacklistManagementApi.md#doGetBlackListUsers) | **GET** /sale/blacklisted-users | Get list of blacklisted users
[**doRemoveFromBlackList**](BlacklistManagementApi.md#doRemoveFromBlackList) | **DELETE** /sale/blacklisted-users/{excludedUserId} | Remove users from the blacklist



## doAddToBlackList

> \OpenAPI\Client\Model\BlackListResponse doAddToBlackList($blacklist_request)

Add a users to the blacklist

Use this resource to add new users to the blacklist on given account. At least one of id or login is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blacklist_request = new \OpenAPI\Client\Model\BlacklistRequest(); // \OpenAPI\Client\Model\BlacklistRequest | request

try {
    $result = $apiInstance->doAddToBlackList($blacklist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doAddToBlackList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blacklist_request** | [**\OpenAPI\Client\Model\BlacklistRequest**](../Model/BlacklistRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\BlackListResponse**](../Model/BlackListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## doGetBlackListUsers

> \OpenAPI\Client\Model\BlackListPagedResponse doGetBlackListUsers()

Get list of blacklisted users

Use this resource to get a list of blacklisted users created on given account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->doGetBlackListUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doGetBlackListUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BlackListPagedResponse**](../Model/BlackListPagedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## doRemoveFromBlackList

> doRemoveFromBlackList($excluded_user_id)

Remove users from the blacklist

Use this resource to remove users from the blacklist on given account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excluded_user_id = 56; // int | Remove users from the blacklist.

try {
    $apiInstance->doRemoveFromBlackList($excluded_user_id);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doRemoveFromBlackList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excluded_user_id** | **int**| Remove users from the blacklist. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

