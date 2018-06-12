# Swagger\Client\DefaultApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**data25Weather1Get**](DefaultApi.md#data25Weather1Get) | **GET** /data/2.5/weather1 | 


# **data25Weather1Get**
> \Swagger\Client\Model\Model0 data25Weather1Get($q, $appid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | 
$appid = "appid_example"; // string | 

try {
    $result = $apiInstance->data25Weather1Get($q, $appid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->data25Weather1Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **appid** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Model0**](../Model/Model0.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

