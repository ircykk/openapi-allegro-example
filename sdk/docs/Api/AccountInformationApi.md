# OpenAPI\Client\AccountInformationApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAdditionalEmailUsingPOST**](AccountInformationApi.md#addAdditionalEmailUsingPOST) | **POST** /account/additional-emails/ | Add a new additional email address to user&#39;s account
[**deleteAdditionalEmailUsingDELETE**](AccountInformationApi.md#deleteAdditionalEmailUsingDELETE) | **DELETE** /account/additional-emails/{emailId} | Delete an additional email address
[**getAdditionalEmailUsingGET**](AccountInformationApi.md#getAdditionalEmailUsingGET) | **GET** /account/additional-emails/{emailId} | Get information about a particular additional email
[**getListOfAdditionalEmailsUsingGET**](AccountInformationApi.md#getListOfAdditionalEmailsUsingGET) | **GET** /account/additional-emails/ | Get user&#39;s additional emails



## addAdditionalEmailUsingPOST

> \OpenAPI\Client\Model\AdditionalEmail addAdditionalEmailUsingPOST($additional_email_request)

Add a new additional email address to user's account

Use this resource to add a new additional email address to account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_email_request = new \OpenAPI\Client\Model\AdditionalEmailRequest(); // \OpenAPI\Client\Model\AdditionalEmailRequest | request

try {
    $result = $apiInstance->addAdditionalEmailUsingPOST($additional_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->addAdditionalEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_email_request** | [**\OpenAPI\Client\Model\AdditionalEmailRequest**](../Model/AdditionalEmailRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAdditionalEmailUsingDELETE

> deleteAdditionalEmailUsingDELETE($email_id)

Delete an additional email address

Use this resource to delete one of additional emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email to be deleted

try {
    $apiInstance->deleteAdditionalEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->deleteAdditionalEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email to be deleted |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalEmailUsingGET

> \OpenAPI\Client\Model\AdditionalEmail getAdditionalEmailUsingGET($email_id)

Get information about a particular additional email

Use this resource to retrieve a single additional email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email

try {
    $result = $apiInstance->getAdditionalEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->getAdditionalEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email |

### Return type

[**\OpenAPI\Client\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfAdditionalEmailsUsingGET

> \OpenAPI\Client\Model\AdditionalEmailsResponse getListOfAdditionalEmailsUsingGET()

Get user's additional emails

Use this resource to get a list of all additional email addresses assigned to account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfAdditionalEmailsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationApi->getListOfAdditionalEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AdditionalEmailsResponse**](../Model/AdditionalEmailsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

