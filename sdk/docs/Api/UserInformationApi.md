# OpenAPI\Client\UserInformationApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserRatingsUsingGET**](UserInformationApi.md#getUserRatingsUsingGET) | **GET** /sale/user-ratings | Get the user&#39;s ratings



## getUserRatingsUsingGET

> \OpenAPI\Client\Model\UserRatingListResponse getUserRatingsUsingGET($user_id, $recommended, $offset, $limit)

Get the user's ratings

Use this resource to receive your sales score. <a href=\"../../news/2017-10-09-news_informacje_o_ocenach/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Filter by user id, you are allowed to get your ratings only
$recommended = 'recommended_example'; // string | Filter by recommended
$offset = 0; // int | Offset
$limit = 20; // int | Limit

try {
    $result = $apiInstance->getUserRatingsUsingGET($user_id, $recommended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->getUserRatingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Filter by user id, you are allowed to get your ratings only |
 **recommended** | **string**| Filter by recommended | [optional]
 **offset** | **int**| Offset | [optional] [default to 0]
 **limit** | **int**| Limit | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\UserRatingListResponse**](../Model/UserRatingListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

