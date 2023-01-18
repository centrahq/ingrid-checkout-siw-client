# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart** | [**\OpenAPI\Client\Model\Cart**](Cart.md) |  | [optional]
**checkout_session_id** | **string** | Identifier of the session. Generated when session is created. Used for updating, fetching and completing the session. | [optional]
**delivery_groups** | [**\OpenAPI\Client\Model\DeliveryGroup[]**](DeliveryGroup.md) | Delivery groups contain information about session results. Information about order, selection and price can be found here. If split shipment is disabled, delivery groups contain only one entry. | [optional]
**experiment_id** | **string** | Identifier of an A/B testing experiment, which is related to the session. If the session is not related to any A/B testing experiment, this field is empty. | [optional]
**status** | [**\OpenAPI\Client\Model\SessionSessionStatus**](SessionSessionStatus.md) |  | [optional]
**updated_at** | **string** | Datetime indicating when the session was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
