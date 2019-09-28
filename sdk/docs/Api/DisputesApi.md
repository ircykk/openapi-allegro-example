# OpenAPI\Client\DisputesApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMessageToDisputeUsingPOST**](DisputesApi.md#addMessageToDisputeUsingPOST) | **POST** /sale/disputes/{disputeId}/messages | Add a message to a dispute
[**createAnAttachmentUsingPOST**](DisputesApi.md#createAnAttachmentUsingPOST) | **POST** /sale/dispute-attachments | Create an attachment declaration
[**getAttachmentUsingGET**](DisputesApi.md#getAttachmentUsingGET) | **GET** /sale/dispute-attachments/{attachmentId} | Get an attachment
[**getDisputeUsingGET**](DisputesApi.md#getDisputeUsingGET) | **GET** /sale/disputes/{disputeId} | Get a single dispute
[**getListOfDisputesUsingGET**](DisputesApi.md#getListOfDisputesUsingGET) | **GET** /sale/disputes | Get the user&#39;s disputes
[**getMessagesFromDisputeUsingGET**](DisputesApi.md#getMessagesFromDisputeUsingGET) | **GET** /sale/disputes/{disputeId}/messages | Get the messages within a dispute
[**uploadDisputeAttachmentUsingPUT**](DisputesApi.md#uploadDisputeAttachmentUsingPUT) | **PUT** /sale/dispute-attachments/{attachmentId} | Upload a dispute message attachment



## addMessageToDisputeUsingPOST

> \OpenAPI\Client\Model\DisputeMessage addMessageToDisputeUsingPOST($dispute_id, $message_request)

Add a message to a dispute

Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. <a href=\"../../news/2018-09-18-dyskusje/#PostMessage\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute
$message_request = new \OpenAPI\Client\Model\MessageRequest(); // \OpenAPI\Client\Model\MessageRequest | Message request

try {
    $result = $apiInstance->addMessageToDisputeUsingPOST($dispute_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->addMessageToDisputeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |
 **message_request** | [**\OpenAPI\Client\Model\MessageRequest**](../Model/MessageRequest.md)| Message request |

### Return type

[**\OpenAPI\Client\Model\DisputeMessage**](../Model/DisputeMessage.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAnAttachmentUsingPOST

> \OpenAPI\Client\Model\DisputeAttachmentId createAnAttachmentUsingPOST($attachment_declaration)

Create an attachment declaration

Use this resource to post an attachment declaration. <a href=\"../../news/2018-09-18-dyskusje/#PostAttach\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_declaration = new \OpenAPI\Client\Model\AttachmentDeclaration(); // \OpenAPI\Client\Model\AttachmentDeclaration | A detailed declaration of a file to be uploaded

try {
    $result = $apiInstance->createAnAttachmentUsingPOST($attachment_declaration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->createAnAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_declaration** | [**\OpenAPI\Client\Model\AttachmentDeclaration**](../Model/AttachmentDeclaration.md)| A detailed declaration of a file to be uploaded |

### Return type

[**\OpenAPI\Client\Model\DisputeAttachmentId**](../Model/DisputeAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttachmentUsingGET

> \SplFileObject getAttachmentUsingGET($attachment_id)

Get an attachment

Use this resource to get an attachment. <a href=\"../../news/2018-09-18-dyskusje/#GetAttach\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | Id of the attachment resource

try {
    $result = $apiInstance->getAttachmentUsingGET($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getAttachmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| Id of the attachment resource |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDisputeUsingGET

> \OpenAPI\Client\Model\Dispute getDisputeUsingGET($dispute_id)

Get a single dispute

Use this resource to get a single dispute. <a href=\"../../news/2018-09-18-dyskusje/#GetOne\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute

try {
    $result = $apiInstance->getDisputeUsingGET($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |

### Return type

[**\OpenAPI\Client\Model\Dispute**](../Model/Dispute.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getListOfDisputesUsingGET

> \OpenAPI\Client\Model\DisputeListResponse getListOfDisputesUsingGET($checkout_form_id)

Get the user's disputes

Use this resource to get the list of your disputes. <a href=\"../../news/2018-09-18-dyskusje/#GetAll\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_form_id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | CheckoutForm id

try {
    $result = $apiInstance->getListOfDisputesUsingGET($checkout_form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getListOfDisputesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_form_id** | [**string**](../Model/.md)| CheckoutForm id | [optional]

### Return type

[**\OpenAPI\Client\Model\DisputeListResponse**](../Model/DisputeListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMessagesFromDisputeUsingGET

> \OpenAPI\Client\Model\DisputeMessageList getMessagesFromDisputeUsingGET($dispute_id)

Get the messages within a dispute

Use this resource to get the list of messages within dispute. <a href=\"../../news/2018-09-18-dyskusje/#GetMessage\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = 'dispute_id_example'; // string | Id of the dispute

try {
    $result = $apiInstance->getMessagesFromDisputeUsingGET($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getMessagesFromDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Id of the dispute |

### Return type

[**\OpenAPI\Client\Model\DisputeMessageList**](../Model/DisputeMessageList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadDisputeAttachmentUsingPUT

> uploadDisputeAttachmentUsingPUT($attachment_id, $body)

Upload a dispute message attachment

Upload a dispute message attachment.  This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments*  **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The attachment ID
$body = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->uploadDisputeAttachmentUsingPUT($attachment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->uploadDisputeAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| The attachment ID |
 **body** | **\SplFileObject****\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: image/png, image/gif, image/bmp, image/tiff, image/jpeg, application/pdf
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

