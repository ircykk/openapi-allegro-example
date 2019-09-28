# OpenAPI\Client\PublicUserInformationApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSummaryUsingGET**](PublicUserInformationApi.md#getUserSummaryUsingGET) | **GET** /users/{userId}/ratings-summary | Get any user&#39;s ratings summary



## getUserSummaryUsingGET

> \OpenAPI\Client\Model\UserRatingSummaryResponse getUserSummaryUsingGET($user_id)

Get any user's ratings summary

Use this resource to receive feedback statistics. <a href=\"../../news/2017-10-09-news_informacje_o_ocenach/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PublicUserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 41846511; // string | The ID of the user.

try {
    $result = $apiInstance->getUserSummaryUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicUserInformationApi->getUserSummaryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user. |

### Return type

[**\OpenAPI\Client\Model\UserRatingSummaryResponse**](../Model/UserRatingSummaryResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

