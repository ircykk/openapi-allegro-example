# OpenAPI\Client\OfferVariantsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateVariantSet**](OfferVariantsApi.md#createOrUpdateVariantSet) | **PUT** /sale/offer-variants/{setId} | [BETA] Create or update variant set
[**deleteVariantSet**](OfferVariantsApi.md#deleteVariantSet) | **DELETE** /sale/offer-variants/{setId} | [BETA] Delete a variant set
[**getVariantSet**](OfferVariantsApi.md#getVariantSet) | **GET** /sale/offer-variants/{setId} | [BETA] Get a variant set
[**getVariantSets**](OfferVariantsApi.md#getVariantSets) | **GET** /sale/offer-variants | [BETA] Get the user&#39;s variant sets



## createOrUpdateVariantSet

> createOrUpdateVariantSet($set_id, $variant_set)

[BETA] Create or update variant set

[BETA] Use this resource to create or update variant set.   A valid variant set must consist of three required elements:  - name:    - it can't be blank and must not be longer than 50 characters  - parameters:    - it should contain parameter identifiers used for offer grouping    - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted    - it must contain at least one element (up to 2)  - offers:    - it must contain at least 2 offers (500 at most)    - `colorPattern` value must be set for every offer if `color/pattern` parameter is used    - `colorPattern` value can't be blank and must not be longer than 50 characters    - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.    - offers having the same image should have identical `colorPattern` value    Let's assume we have 4 offers:    - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21    - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21    - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21    - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21    You can build a variant set by grouping offers using combination of available parameters:    - variant set with offer parameter only    ```      {        \"name\": \"t-shirt\",        \"offers\": [          {            \"id\": \"2\"          },          {            \"id\": \"3\"          }        ],        \"parameters\": [          { \"id\": \"21\" }        ]      }    ```    - variant set with `color/pattern` parameter only    ```      {        \"name\": \"t-shirt\",        \"offers\": [          {            \"id\": \"2\",            \"colorPattern\": \"red\"          },          {            \"id\": \"4\",            \"colorPattern\": \"blue\"          }        ],        \"parameters\": [          {\"id\": \"color/pattern\"}        ]      }    ```    - variant set with offer and `color/pattern` parameters    ```      {        \"name\": \"t-shirt\",        \"offers\": [          {            \"id\": \"2\",            \"colorPattern\": \"red\"          },          {            \"id\": \"3\",            \"colorPattern\": \"red\"          },          {            \"id\": \"4\",            \"colorPattern\": \"blue\"          },          {            \"id\": \"5\",            \"colorPattern\": \"blue\"          }        ],        \"parameters\": [          {\"id\": \"color/pattern\"},          {\"id\": \"21\"}        ]      }    ```      More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje),    more information about variant sets API can be found <a href=\"../../news/2018-07-09-wielowariantowosc/#03\" target=\"_blank\">here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | Variant set id
$variant_set = new \OpenAPI\Client\Model\VariantSet(); // \OpenAPI\Client\Model\VariantSet | 

try {
    $apiInstance->createOrUpdateVariantSet($set_id, $variant_set);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->createOrUpdateVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **string**| Variant set id |
 **variant_set** | [**\OpenAPI\Client\Model\VariantSet**](../Model/VariantSet.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.beta.v1+json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteVariantSet

> deleteVariantSet($set_id)

[BETA] Delete a variant set

[BETA] Use this resource to delete variant set by id. Offers included in variant set will not be stopped or modified by this operation. <a href=\"../../news/2018-07-09-wielowariantowosc/#05\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | Variant set id

try {
    $apiInstance->deleteVariantSet($set_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->deleteVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **string**| Variant set id |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getVariantSet

> \OpenAPI\Client\Model\VariantSet getVariantSet($set_id)

[BETA] Get a variant set

[BETA] Use this resource to get variant set by set id. <a href=\"../../news/2018-07-09-wielowariantowosc/#04\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 'set_id_example'; // string | setId

try {
    $result = $apiInstance->getVariantSet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **string**| setId |

### Return type

[**\OpenAPI\Client\Model\VariantSet**](../Model/VariantSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getVariantSets

> \OpenAPI\Client\Model\VariantSets getVariantSets($user_id, $offset, $limit, $query)

[BETA] Get the user's variant sets

[BETA] Use this resource to get created variant sets. The returned variant sets are ordered by name. <a href=\"../../news/2018-07-09-wielowariantowosc/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Filter by user id, you are allowed to get your variant sets only.
$offset = 0; // int | Index of first returned variant set.
$limit = 10; // int | Maximum number of returned variant sets.
$query = 'query_example'; // string | Filter variant sets by name or offer id.

try {
    $result = $apiInstance->getVariantSets($user_id, $offset, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Filter by user id, you are allowed to get your variant sets only. |
 **offset** | **int**| Index of first returned variant set. | [optional] [default to 0]
 **limit** | **int**| Maximum number of returned variant sets. | [optional] [default to 10]
 **query** | **string**| Filter variant sets by name or offer id. | [optional]

### Return type

[**\OpenAPI\Client\Model\VariantSets**](../Model/VariantSets.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

