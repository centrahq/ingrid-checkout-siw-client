# # UpdateSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart** | [**\OpenAPI\Client\Model\Cart**](Cart.md) |  | [optional]
**checkout_session_id** | **string** | Checkout session id. |
**external_id** | **string** |  | [optional]
**locales** | **string[]** | List of locales to load the shipping selector widget in, in order of preference (first supported one will be used). | [optional]
**meta** | **array<string,string>** | Generic key/value object that is used for supplying complementing information. | [optional]
**prefill_delivery_address** | [**\OpenAPI\Client\Model\DeliveryAddress**](DeliveryAddress.md) |  | [optional]
**purchase_country** | **string** | The country of the purchase. | [optional]
**purchase_currency** | **string** | The currency of the purchase. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
