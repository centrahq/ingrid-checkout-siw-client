# Ingrid Delivery Checkout v2 [OpenAPIClient-php]

Delivery Checkout provides almost unlimited flexibility in selecting delivery options while securing that the process is as convenient and as fast as it physically can. ⚡

### [Documentation](https://developer.ingrid.com/delivery_checkout/)
Command to generate API client
```
$ openapi-generator-cli generate \
            -i https://api.ingrid.com/v1/delivery_checkout/_/swagger.json \
            -g php \
            -o siw
```

By default `openapi-generator-cli` generates OpenAPI client for the latest version of Guzzle. To prevent it use older version of `openapi-generator-cli`:

```
nvm use 18
npm install @openapitools/openapi-generator-cli -g
openapi-generator-cli version-manager set 5.2.1
openapi-generator-cli generate \
            -i https://api.ingrid.com/v1/delivery_checkout/_/swagger.json \
            -g php \
            -o siw
```            


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Installation

```php
composer require centrahq/ingrid-checkout-siw-client
```

## API Endpoints

All URIs are relative to *http://localhost/v1/delivery_checkout*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**deliveryCheckoutCompleteSession**](docs/Api/DefaultApi.md#deliverycheckoutcompletesession) | **POST** /session.complete | When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user.
*DefaultApi* | [**deliveryCheckoutCreateSession**](docs/Api/DefaultApi.md#deliverycheckoutcreatesession) | **POST** /session.create | To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information.
*DefaultApi* | [**deliveryCheckoutGetSession**](docs/Api/DefaultApi.md#deliverycheckoutgetsession) | **GET** /session.get | Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit. It can contain obsolete data. To get the session with the freshest data, use /session.pull endpoint.
*DefaultApi* | [**deliveryCheckoutListSessionsSummaries**](docs/Api/DefaultApi.md#deliverycheckoutlistsessionssummaries) | **GET** /sessions_summaries.list | Allows the merchant to get shipping data (session IDs and result fields) associated with tos ID.
*DefaultApi* | [**deliveryCheckoutPullSession**](docs/Api/DefaultApi.md#deliverycheckoutpullsession) | **GET** /session.pull | Pulls a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit. Session will be refreshed if its in active state and if configuration has changed or delivery promise expires.
*DefaultApi* | [**deliveryCheckoutUpdateSession**](docs/Api/DefaultApi.md#deliverycheckoutupdatesession) | **POST** /session.update | Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case.

## Models

- [AdditionalInfo](docs/Model/AdditionalInfo.md)
- [Address](docs/Model/Address.md)
- [Addresses](docs/Model/Addresses.md)
- [Any](docs/Model/Any.md)
- [BillingAddress](docs/Model/BillingAddress.md)
- [CarrierAddon](docs/Model/CarrierAddon.md)
- [Cart](docs/Model/Cart.md)
- [CartGroup](docs/Model/CartGroup.md)
- [CartItem](docs/Model/CartItem.md)
- [CompleteSessionRequest](docs/Model/CompleteSessionRequest.md)
- [CompleteSessionResponse](docs/Model/CompleteSessionResponse.md)
- [Coordinates](docs/Model/Coordinates.md)
- [CreateSessionRequest](docs/Model/CreateSessionRequest.md)
- [CreateSessionResponse](docs/Model/CreateSessionResponse.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [DateTimeRange](docs/Model/DateTimeRange.md)
- [DeliveryAddress](docs/Model/DeliveryAddress.md)
- [DeliveryGroup](docs/Model/DeliveryGroup.md)
- [DeliveryGroupCategory](docs/Model/DeliveryGroupCategory.md)
- [DeliveryGroupDeliveryAddon](docs/Model/DeliveryGroupDeliveryAddon.md)
- [DeliveryGroupDeliveryTime](docs/Model/DeliveryGroupDeliveryTime.md)
- [DeliveryGroupDeliveryTimeRange](docs/Model/DeliveryGroupDeliveryTimeRange.md)
- [DeliveryGroupItem](docs/Model/DeliveryGroupItem.md)
- [DeliveryGroupPricing](docs/Model/DeliveryGroupPricing.md)
- [DeliveryGroupSelection](docs/Model/DeliveryGroupSelection.md)
- [DeliveryGroupShipping](docs/Model/DeliveryGroupShipping.md)
- [DeliveryGroupWarehouse](docs/Model/DeliveryGroupWarehouse.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Distance](docs/Model/Distance.md)
- [DistanceSpec](docs/Model/DistanceSpec.md)
- [Error](docs/Model/Error.md)
- [ErrorDetails](docs/Model/ErrorDetails.md)
- [GetSessionResponse](docs/Model/GetSessionResponse.md)
- [GroupContent](docs/Model/GroupContent.md)
- [LegLocation](docs/Model/LegLocation.md)
- [LegLocationLocationType](docs/Model/LegLocationLocationType.md)
- [ListSessionsSummariesResponse](docs/Model/ListSessionsSummariesResponse.md)
- [OperationalHours](docs/Model/OperationalHours.md)
- [PickupLocation](docs/Model/PickupLocation.md)
- [PickupLocationType](docs/Model/PickupLocationType.md)
- [PriceComponent](docs/Model/PriceComponent.md)
- [PriceComponentType](docs/Model/PriceComponentType.md)
- [Route](docs/Model/Route.md)
- [SearchAddress](docs/Model/SearchAddress.md)
- [Section](docs/Model/Section.md)
- [SectionColumnItem](docs/Model/SectionColumnItem.md)
- [SectionItem](docs/Model/SectionItem.md)
- [Session](docs/Model/Session.md)
- [SessionSessionStatus](docs/Model/SessionSessionStatus.md)
- [SessionSummary](docs/Model/SessionSummary.md)
- [ShippingDate](docs/Model/ShippingDate.md)
- [ShippingDateTag](docs/Model/ShippingDateTag.md)
- [ShippingLeg](docs/Model/ShippingLeg.md)
- [Supports](docs/Model/Supports.md)
- [Tag](docs/Model/Tag.md)
- [UpdateSessionRequest](docs/Model/UpdateSessionRequest.md)
- [UpdateSessionResponse](docs/Model/UpdateSessionResponse.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
