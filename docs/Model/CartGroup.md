# # CartGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_item_sku_list** | **string[]** | Deprecated: use contents instead. List of cart item SKUs (unique product identifiers) that belong to the given group. SKUs in the list must match the ones provided on cart items [deprecated]. | [optional]
**consolidatable** | **bool** | Indicates, that the group could be consolidated (merged into single group with other consolidatable groups). | [optional]
**contents** | [**\OpenAPI\Client\Model\GroupContent[]**](GroupContent.md) |  |
**group_id** | **string** | Unique identifier of group passed when doing split of shipments. |
**header** | **string** | Header text containing arbitrary information related to the group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
