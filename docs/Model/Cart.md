# # Cart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **string[]** | Attributes of the Cart. Cart level attributes are specific to the cart or for the full cart contents. Ingrid Delivery Checkout can set varied delivery scenarios based on such attributes. Ex. [“PRIO”, “AB-testID”]. | [optional]
**cart_id** | **string** | Unique cart id for the customers cart on the merchant side. |
**groups** | [**\OpenAPI\Client\Model\CartGroup[]**](CartGroup.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\CartItem[]**](CartItem.md) | Information about the individual order items. This can be used by the shipping rule engine to calculate the best shipping option. |
**pre_order** | **bool** | Indicated if the order can be shipped earliest on the provided shipping date. | [optional]
**shipping_date** | [**\OpenAPI\Client\Model\ShippingDate**](ShippingDate.md) |  | [optional]
**total_discount** | **int** | Total non-negative discount amount in cents. Example &#x60;2000&#x60; is &#x60;20.00&#x60;. |
**total_value** | **int** | Total non-negative cart value in cents after discounts applying. Example &#x60;20000&#x60; represents &#x60;200.00&#x60;. |
**vouchers** | **string[]** | Vouchers that can be used in price/filter rules. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
