# OpenAPI\Client\ImagesAndAttachmentsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferAttachmentUsingPOST**](ImagesAndAttachmentsApi.md#createOfferAttachmentUsingPOST) | **POST** /sale/offer-attachments | Create an offer attachment
[**uploadOfferAttachmentUsingPUT**](ImagesAndAttachmentsApi.md#uploadOfferAttachmentUsingPUT) | **PUT** /sale/offer-attachments/{attachmentId} | Upload an offer attachment
[**uploadOfferImageUsingPOST**](ImagesAndAttachmentsApi.md#uploadOfferImageUsingPOST) | **POST** /sale/images | Upload an offer image



## createOfferAttachmentUsingPOST

> \OpenAPI\Client\Model\OfferAttachment createOfferAttachmentUsingPOST($offer_attachment_request)

Create an offer attachment

You can upload PDF attachments to your offers. We will present them under the offer description in the Additional information section. You can upload up to 7 attachments – one per item from the list:   * \\- Guide (MANUAL)   * \\- Special offer terms (SPECIAL_OFFER_RULES)   * \\- Competition terms (COMPETITION_RULES)   * \\- Book excerpt (BOOK_EXCERPT)   * \\- Manual (USER_MANUAL)   * \\- Installation manual (INSTALLATION_INSTRUCTIONS)   * \\- Game manual (GAME_INSTRUCTIONS)  Uploading attachments flow:   1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),   2. Use the upload URL to submit the PDF file (*PUT /sale/offer-attachments/{attachmentId}*),   3. Add the attachment to the offer (*PUT /sale/offers/{offerId}*).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_attachment_request = new \OpenAPI\Client\Model\OfferAttachmentRequest(); // \OpenAPI\Client\Model\OfferAttachmentRequest | offer attachment

try {
    $result = $apiInstance->createOfferAttachmentUsingPOST($offer_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->createOfferAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_attachment_request** | [**\OpenAPI\Client\Model\OfferAttachmentRequest**](../Model/OfferAttachmentRequest.md)| offer attachment |

### Return type

[**\OpenAPI\Client\Model\OfferAttachment**](../Model/OfferAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadOfferAttachmentUsingPUT

> uploadOfferAttachmentUsingPUT($attachment_id, $body)

Upload an offer attachment

Upload an offer attachment.  This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*  **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/offer-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The ID of the attachment.
$body = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->uploadOfferAttachmentUsingPUT($attachment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->uploadOfferAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| The ID of the attachment. |
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/pdf
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadOfferImageUsingPOST

> \OpenAPI\Client\Model\OfferImageUploadResponse uploadOfferImageUsingPOST($offer_image_link_upload_request)

Upload an offer image

Upload image to our servers.  More information about rules for photos in an offer's gallery and description you will find <a href=\"https://allegro.pl/dla-sprzedajacych/nowe-zasady-dla-zdjec-w-galerii-i-w-opisie-YLlAAa2oXf7\" target=\"_blank\">here</a>.  You can choose from two upload options:   * \\- provide a link and we will download an image for you   * \\- send an image as binary data  **Important!** Remember to use dedicated domain for upload, i.e.   * \\- https://upload.allegro.pl for Production   * \\- https://upload.allegro.pl.allegrosandbox.pl for Sandbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_image_link_upload_request = new \OpenAPI\Client\Model\OfferImageLinkUploadRequest(); // \OpenAPI\Client\Model\OfferImageLinkUploadRequest | 

try {
    $result = $apiInstance->uploadOfferImageUsingPOST($offer_image_link_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->uploadOfferImageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_image_link_upload_request** | [**\OpenAPI\Client\Model\OfferImageLinkUploadRequest**](../Model/OfferImageLinkUploadRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\OfferImageUploadResponse**](../Model/OfferImageUploadResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json, image/jpeg, image/png, image/gif
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

