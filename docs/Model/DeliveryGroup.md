# # DeliveryGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addresses** | [**\OpenAPI\Client\Model\Addresses**](Addresses.md) |  | [optional]
**category** | [**\OpenAPI\Client\Model\DeliveryGroupCategory**](DeliveryGroupCategory.md) |  | [optional]
**delivery_time** | [**\OpenAPI\Client\Model\DeliveryGroupDeliveryTime**](DeliveryGroupDeliveryTime.md) |  | [optional]
**external_id** | **string** |  | [optional]
**group_id** | **string** | Identifier of delivery group used to perform splitting of shipments. | [optional]
**header** | **string** | Header text containing arbitrary information related to the delivery group. | [optional]
**items** | [**\OpenAPI\Client\Model\DeliveryGroupItem[]**](DeliveryGroupItem.md) | Cart items that belong to the delivery group. | [optional]
**pricing** | [**\OpenAPI\Client\Model\DeliveryGroupPricing**](DeliveryGroupPricing.md) |  | [optional]
**selection** | [**\OpenAPI\Client\Model\DeliveryGroupSelection**](DeliveryGroupSelection.md) |  | [optional]
**shipping** | [**\OpenAPI\Client\Model\DeliveryGroupShipping**](DeliveryGroupShipping.md) |  | [optional]
**tos_id** | **string** | Identifier of order created based on completed session. By default, orders are created asynchronously so the identifier might need to be re-fetched. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
