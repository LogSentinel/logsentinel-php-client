# Swagger\Client\AuditlogcontrollerApi

All URIs are relative to *https://logsentinel.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logAuthActionUsingPOST**](AuditlogcontrollerApi.md#logAuthActionUsingPOST) | **POST** /api/log/{actorId}/auth/{authAction} | Log an authentication event with the option to pass actor public key and signature
[**logSimpleUsingPOST**](AuditlogcontrollerApi.md#logSimpleUsingPOST) | **POST** /api/log/simple | Log an event by providing just the body without any additional metadata. The body can be fully encrypted
[**logStandardActionUsingPOST**](AuditlogcontrollerApi.md#logStandardActionUsingPOST) | **POST** /api/log/{actorId}/{action}/{entityType}/{entityId} | Log an event by providing full details
[**logUsingPOST**](AuditlogcontrollerApi.md#logUsingPOST) | **POST** /api/log/{actorId}/{action} | Log an event by a given actor
[**searchUsingGET**](AuditlogcontrollerApi.md#searchUsingGET) | **GET** /api/search | Search logged entries
[**verifyUsingPOST**](AuditlogcontrollerApi.md#verifyUsingPOST) | **POST** /api/verify | Verify whether a given hash is present, indicating that the log is intact


# **logAuthActionUsingPOST**
> \Swagger\Client\Com\Logsentinel\Client\Model\LogResponse logAuthActionUsingPOST($actor_id, $auth_action, $details, $application_id, $user_id, $authorization, $signed_login_challenge, $user_public_key, $actor_display_name, $actor_role)

Log an authentication event with the option to pass actor public key and signature

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$auth_action = "auth_action_example"; // string | authAction
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$user_id = "user_id_example"; // string | userId
$authorization = "authorization_example"; // string | Authorization
$signed_login_challenge = "signed_login_challenge_example"; // string | Signed-Login-Challenge
$user_public_key = "user_public_key_example"; // string | User-Public-Key
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->logAuthActionUsingPOST($actor_id, $auth_action, $details, $application_id, $user_id, $authorization, $signed_login_challenge, $user_public_key, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->logAuthActionUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **string**| actorId |
 **auth_action** | **string**| authAction |
 **details** | **string**| details |
 **application_id** | **string**| Application-Id |
 **user_id** | **string**| userId | [optional]
 **authorization** | **string**| Authorization | [optional]
 **signed_login_challenge** | **string**| Signed-Login-Challenge | [optional]
 **user_public_key** | **string**| User-Public-Key | [optional]
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\LogResponse**](../Model/LogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logSimpleUsingPOST**
> \Swagger\Client\Com\Logsentinel\Client\Model\LogResponse logSimpleUsingPOST($details, $application_id, $authorization)

Log an event by providing just the body without any additional metadata. The body can be fully encrypted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $api_instance->logSimpleUsingPOST($details, $application_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->logSimpleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| details |
 **application_id** | **string**| Application-Id |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\LogResponse**](../Model/LogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logStandardActionUsingPOST**
> \Swagger\Client\Com\Logsentinel\Client\Model\LogResponse logStandardActionUsingPOST($actor_id, $action, $entity_type, $entity_id, $details, $application_id, $authorization, $actor_display_name, $actor_role)

Log an event by providing full details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$action = "action_example"; // string | action
$entity_type = "entity_type_example"; // string | entityType
$entity_id = "entity_id_example"; // string | entityId
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$authorization = "authorization_example"; // string | Authorization
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->logStandardActionUsingPOST($actor_id, $action, $entity_type, $entity_id, $details, $application_id, $authorization, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->logStandardActionUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **string**| actorId |
 **action** | **string**| action |
 **entity_type** | **string**| entityType |
 **entity_id** | **string**| entityId |
 **details** | **string**| details |
 **application_id** | **string**| Application-Id |
 **authorization** | **string**| Authorization | [optional]
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\LogResponse**](../Model/LogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logUsingPOST**
> \Swagger\Client\Com\Logsentinel\Client\Model\LogResponse logUsingPOST($actor_id, $action, $details, $application_id, $authorization, $actor_display_name, $actor_role)

Log an event by a given actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$action = "action_example"; // string | action
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$authorization = "authorization_example"; // string | Authorization
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->logUsingPOST($actor_id, $action, $details, $application_id, $authorization, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->logUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **string**| actorId |
 **action** | **string**| action |
 **details** | **string**| details |
 **application_id** | **string**| Application-Id |
 **authorization** | **string**| Authorization | [optional]
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\LogResponse**](../Model/LogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET**
> \Swagger\Client\Com\Logsentinel\Client\Model\AuditLogEntry[] searchUsingGET($query, $start_time, $end_time, $page, $page_size, $application_id, $authorization)

Search logged entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$query = "query_example"; // string | query
$start_time = 789; // int | startTime
$end_time = 789; // int | endTime
$page = 56; // int | page
$page_size = 56; // int | pageSize
$application_id = "application_id_example"; // string | Application-Id
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $api_instance->searchUsingGET($query, $start_time, $end_time, $page, $page_size, $application_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->searchUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| query |
 **start_time** | **int**| startTime |
 **end_time** | **int**| endTime |
 **page** | **int**| page |
 **page_size** | **int**| pageSize |
 **application_id** | **string**| Application-Id |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\AuditLogEntry[]**](../Model/AuditLogEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyUsingPOST**
> \Swagger\Client\Com\Logsentinel\Client\Model\Verification verifyUsingPOST($hash, $application_id, $authorization)

Verify whether a given hash is present, indicating that the log is intact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AuditlogcontrollerApi();
$hash = "hash_example"; // string | hash
$application_id = "application_id_example"; // string | Application-Id
$authorization = "authorization_example"; // string | Authorization

try {
    $result = $api_instance->verifyUsingPOST($hash, $application_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditlogcontrollerApi->verifyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| hash |
 **application_id** | **string**| Application-Id |
 **authorization** | **string**| Authorization | [optional]

### Return type

[**\Swagger\Client\Com\Logsentinel\Client\Model\Verification**](../Model/Verification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

