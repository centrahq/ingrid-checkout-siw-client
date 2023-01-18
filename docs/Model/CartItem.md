# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **string[]** | Attributes of Cart items. Often referred to as ‘tags’. Cart Item level attributes are specific to that particular item and can be set to adjust delivery scenarios in Ingrid Delivery Checkout. A typical scenario is disabling of one or many delivery options based on cart containing cart items with certain attributes. Ex. [“SendAsLetter”, “Prescription”, “Hazmat”]. | [optional]
**dimensions** | [**\OpenAPI\Client\Model\Dimensions**](Dimensions.md) |  | [optional]
**discount** | **int** | Non-negative discount for the given item. Can be used by the shipping rule engine to calculate the best shipping option. |
**image_url** | **string** | URL of the image of the given cart item. | [optional]
**name** | **string** | Product name or title. |
**out_of_stock** | **bool** | Flag indicating if the item is currently out of stock. | [optional]
**price** | **int** | Non-negative price of the item after the discount applied. Can be used by the shipping rule engine to calculate the best shipping option. |
**quantity** | **int** | Total number of the product item in the cart. |
**shipping_date** | [**\OpenAPI\Client\Model\ShippingDate**](ShippingDate.md) |  | [optional]
**site_external_id** | **string** | Site external ID can be used in case of marketplace configuration. If sent empty, top level site will be used. | [optional]
**sku** | **string** | Unique product identifier. |
**weight** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
