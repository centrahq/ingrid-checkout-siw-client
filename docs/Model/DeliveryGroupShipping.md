# # DeliveryGroupShipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addons** | [**\OpenAPI\Client\Model\CarrierAddon[]**](CarrierAddon.md) | Shipping products addons that are enabled by default. Can be configured in the Merchant Admin tool. | [optional]
**carrier** | **string** | Name of the shipping company. | [optional]
**carrier_product_id** | **string** | Identifier of chosen carrier product, can be used for merchant-specific shipping methods mappings. If external method identifier is defined on carrier product, its value is passed in this field. Otherwise, shipping method from carrier product is passed. | [optional]
**delivery_addons** | [**\OpenAPI\Client\Model\DeliveryGroupDeliveryAddon[]**](DeliveryGroupDeliveryAddon.md) | Selected delivery addons. | [optional]
**delivery_type** | **string** | Type of delivery (pickup, instore, mailbox, delivery). | [optional]
**meta** | **array<string,string>** | Carrier specific metadata related to the shipping option, for example addons. | [optional]
**product** | **string** | Name of the shipping product. | [optional]
**supports** | [**\OpenAPI\Client\Model\Supports**](Supports.md) |  | [optional]
**warehouse** | [**\OpenAPI\Client\Model\DeliveryGroupWarehouse**](DeliveryGroupWarehouse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
