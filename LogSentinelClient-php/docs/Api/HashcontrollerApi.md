# Swagger\Client\HashcontrollerApi

All URIs are relative to *https://logsentinel.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHashableContentForAuthActionUsingPOST**](HashcontrollerApi.md#getHashableContentForAuthActionUsingPOST) | **POST** /api/getHashableContent/{actorId}/auth/{authAction} | Get the hash of a request for auth actions
[**getHashableContentForStandardActionUsingPOST**](HashcontrollerApi.md#getHashableContentForStandardActionUsingPOST) | **POST** /api/getHashableContent/{actorId}/{action}/{entityType}/{entityId} | Get the hash of a request for standard actions
[**getHashableContentSimpleUsingPOST**](HashcontrollerApi.md#getHashableContentSimpleUsingPOST) | **POST** /api/getHashableContent | Get the hash of a request without any additional metadata (including encrypted request bodies)
[**getHashableContentUsingPOST**](HashcontrollerApi.md#getHashableContentUsingPOST) | **POST** /api/getHashableContent/{actorId}/{action} | Get the hash of a request for simple (minimial metadata) actions


# **getHashableContentForAuthActionUsingPOST**
> string getHashableContentForAuthActionUsingPOST($actor_id, $auth_action, $details, $application_id, $user_id, $signed_login_challenge, $user_public_key, $actor_display_name, $actor_role)

Get the hash of a request for auth actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HashcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$auth_action = "auth_action_example"; // string | authAction
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$user_id = "user_id_example"; // string | userId
$signed_login_challenge = "signed_login_challenge_example"; // string | Signed-Login-Challenge
$user_public_key = "user_public_key_example"; // string | User-Public-Key
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->getHashableContentForAuthActionUsingPOST($actor_id, $auth_action, $details, $application_id, $user_id, $signed_login_challenge, $user_public_key, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HashcontrollerApi->getHashableContentForAuthActionUsingPOST: ', $e->getMessage(), PHP_EOL;
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
 **signed_login_challenge** | **string**| Signed-Login-Challenge | [optional]
 **user_public_key** | **string**| User-Public-Key | [optional]
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHashableContentForStandardActionUsingPOST**
> string getHashableContentForStandardActionUsingPOST($actor_id, $action, $entity_type, $entity_id, $details, $application_id, $actor_display_name, $actor_role)

Get the hash of a request for standard actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HashcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$action = "action_example"; // string | action
$entity_type = "entity_type_example"; // string | entityType
$entity_id = "entity_id_example"; // string | entityId
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->getHashableContentForStandardActionUsingPOST($actor_id, $action, $entity_type, $entity_id, $details, $application_id, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HashcontrollerApi->getHashableContentForStandardActionUsingPOST: ', $e->getMessage(), PHP_EOL;
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
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHashableContentSimpleUsingPOST**
> string getHashableContentSimpleUsingPOST($details, $application_id)

Get the hash of a request without any additional metadata (including encrypted request bodies)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HashcontrollerApi();
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id

try {
    $result = $api_instance->getHashableContentSimpleUsingPOST($details, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HashcontrollerApi->getHashableContentSimpleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **details** | **string**| details |
 **application_id** | **string**| Application-Id |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHashableContentUsingPOST**
> string getHashableContentUsingPOST($actor_id, $action, $details, $application_id, $actor_display_name, $actor_role)

Get the hash of a request for simple (minimial metadata) actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HashcontrollerApi();
$actor_id = "actor_id_example"; // string | actorId
$action = "action_example"; // string | action
$details = "details_example"; // string | details
$application_id = "application_id_example"; // string | Application-Id
$actor_display_name = "actor_display_name_example"; // string | actorDisplayName
$actor_role = "actor_role_example"; // string | actorRole

try {
    $result = $api_instance->getHashableContentUsingPOST($actor_id, $action, $details, $application_id, $actor_display_name, $actor_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HashcontrollerApi->getHashableContentUsingPOST: ', $e->getMessage(), PHP_EOL;
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
 **actor_display_name** | **string**| actorDisplayName | [optional]
 **actor_role** | **string**| actorRole | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, */*
 - **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

