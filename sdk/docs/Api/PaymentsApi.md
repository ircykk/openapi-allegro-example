# OpenAPI\Client\PaymentsApi

All URIs are relative to *https://api.allegro.pl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentIdMapping**](PaymentsApi.md#getPaymentIdMapping) | **GET** /payments/payment-id-mappings | Mapping of payment identifiers
[**getPaymentsOperationHistory**](PaymentsApi.md#getPaymentsOperationHistory) | **GET** /payments/payment-operations | Payment operations history
[**paymentsRefundsGet**](PaymentsApi.md#paymentsRefundsGet) | **GET** /payments/refunds | Get a list of refunded payments
[**paymentsRefundsPost**](PaymentsApi.md#paymentsRefundsPost) | **POST** /payments/refunds | Initiate a refund of a payment



## getPaymentIdMapping

> \OpenAPI\Client\Model\PaymentIdMapping getPaymentIdMapping($payment_id, $transaction_id)

Mapping of payment identifiers

Use this endpoint to get payment identifiers compatible with RestAPI and WebAPI. Querying is allowed only by paymentId or transactionId. Identifiers are returned for payments created in last 3 months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | 
$transaction_id = 'transaction_id_example'; // string | 

try {
    $result = $apiInstance->getPaymentIdMapping($payment_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentIdMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | [**string**](../Model/.md)|  | [optional]
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentIdMapping**](../Model/PaymentIdMapping.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentsOperationHistory

> \OpenAPI\Client\Model\PaymentOperations getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $limit, $offset)

Payment operations history

Use this endpoint to get the list of the seller's payment operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_type = 'AVAILABLE'; // string | Type of the wallet: * AVAILABLE - operations available for payout * WAITING - operations temporarily suspended for payout
$wallet_payment_operator = 'wallet_payment_operator_example'; // string | Payment operator: * PAYU - operations processed by PAYU operator * P24 - operations processed by PRZELEWY24 operator
$payment_id = 'payment_id_example'; // string | The payment ID.
$participant_login = 'participant_login_example'; // string | Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
$occurred_at_gte = 2019-05-08T09:45:818Z; // \DateTime | The minimum date and time of operation occurrence in ISO 8601 format.
$occurred_at_lte = 2019-05-08T09:45:818Z; // \DateTime | The maximum date and time of operation occurrence in ISO 8601 format.
$group = array('group_example'); // string[] | Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.

try {
    $result = $apiInstance->getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsOperationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_type** | **string**| Type of the wallet: * AVAILABLE - operations available for payout * WAITING - operations temporarily suspended for payout | [optional] [default to &#39;AVAILABLE&#39;]
 **wallet_payment_operator** | **string**| Payment operator: * PAYU - operations processed by PAYU operator * P24 - operations processed by PRZELEWY24 operator | [optional]
 **payment_id** | [**string**](../Model/.md)| The payment ID. | [optional]
 **participant_login** | **string**| Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer. | [optional]
 **occurred_at_gte** | **\DateTime**| The minimum date and time of operation occurrence in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| The maximum date and time of operation occurrence in ISO 8601 format. | [optional]
 **group** | [**string[]**](../Model/string.md)| Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION | [optional]
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\PaymentOperations**](../Model/PaymentOperations.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## paymentsRefundsGet

> object paymentsRefundsGet($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status)

Get a list of refunded payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.
$id = 'id_example'; // string | ID of the refund.
$payment_id = 'payment_id_example'; // string | ID of the payment.
$occurred_at_gte = 2019-05-08T09:45:818Z; // \DateTime | Minimum date and time when the refund occurred provided in ISO 8601 format.
$occurred_at_lte = 2019-05-08T09:45:818Z; // \DateTime | Maximum date and time when the refund occurred provided in ISO 8601 format.
$status = array('status_example'); // string[] | Current status of payment refund.

try {
    $result = $apiInstance->paymentsRefundsGet($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsRefundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]
 **id** | [**string**](../Model/.md)| ID of the refund. | [optional]
 **payment_id** | [**string**](../Model/.md)| ID of the payment. | [optional]
 **occurred_at_gte** | **\DateTime**| Minimum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| Maximum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **status** | [**string[]**](../Model/string.md)| Current status of payment refund. | [optional]

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## paymentsRefundsPost

> \OpenAPI\Client\Model\RefundDetails paymentsRefundsPost($initialize_refund)

Initiate a refund of a payment

Use this endpoint to initiate a refund of a payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$initialize_refund = new \OpenAPI\Client\Model\InitializeRefund(); // \OpenAPI\Client\Model\InitializeRefund | 

try {
    $result = $apiInstance->paymentsRefundsPost($initialize_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsRefundsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **initialize_refund** | [**\OpenAPI\Client\Model\InitializeRefund**](../Model/InitializeRefund.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RefundDetails**](../Model/RefundDetails.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: application/vnd.allegro.public.v1+json
- **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

