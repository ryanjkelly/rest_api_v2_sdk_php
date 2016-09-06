# SwaggerClient-php
This is the next generation UltraCart REST API...

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Build date: 2016-09-06T12:28:36.259-04:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.ultracart.com](http://www.ultracart.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/UltraCart/rest_api_v2_sdk_php.git"
    }
  ],
  "require": {
    "UltraCart/rest_api_v2_sdk_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$parent_category_id = 56; // int | The parent category to retrieve items for.  Unspecified means all items on the account.  0 = root
$_limit = 100; // int | The maximum number of records to return on this one API call.
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See documentation for examples
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->itemItemsGet($parent_category_id, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://secure.ultracart.com/rest/admin/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**itemItemsGet**](docs/Api/ItemApi.md#itemitemsget) | **GET** /item/items | Retrieve items
*ItemApi* | [**itemItemsMerchantItemOidDelete**](docs/Api/ItemApi.md#itemitemsmerchantitemoiddelete) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
*ItemApi* | [**itemItemsMerchantItemOidGet**](docs/Api/ItemApi.md#itemitemsmerchantitemoidget) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
*ItemApi* | [**itemItemsMerchantItemOidPut**](docs/Api/ItemApi.md#itemitemsmerchantitemoidput) | **PUT** /item/items/{merchant_item_oid} | Update an item
*ItemApi* | [**itemItemsPost**](docs/Api/ItemApi.md#itemitemspost) | **POST** /item/items | Create an item
*ItemApi* | [**itemTempMultimediaPost**](docs/Api/ItemApi.md#itemtempmultimediapost) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.
*OauthApi* | [**oauthRevokePost**](docs/Api/OauthApi.md#oauthrevokepost) | **POST** /oauth/revoke | Revoke this OAuth application.
*OauthApi* | [**oauthTokenPost**](docs/Api/OauthApi.md#oauthtokenpost) | **POST** /oauth/token | Exchange authorization code for access token.
*WebhookApi* | [**webhookWebhooksGet**](docs/Api/WebhookApi.md#webhookwebhooksget) | **GET** /webhook/webhooks | Retrieve webhooks
*WebhookApi* | [**webhookWebhooksPost**](docs/Api/WebhookApi.md#webhookwebhookspost) | **POST** /webhook/webhooks | Add a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidDelete**](docs/Api/WebhookApi.md#webhookwebhookswebhookoiddelete) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidLogsGet**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidlogsget) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
*WebhookApi* | [**webhookWebhooksWebhookOidLogsRequestIdGet**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidlogsrequestidget) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
*WebhookApi* | [**webhookWebhooksWebhookOidPut**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidput) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidReflowEventNamePost**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidrefloweventnamepost) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
*WebhookApi* | [**webhookWebhooksWebhookOidSamplesGet**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidsamplesget) | **GET** /webhook/webhooks/{webhookOid}/samples | Retrieve a sample notification.
*WebhookApi* | [**webhookWebhooksWebhookOidValidatePost**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidvalidatepost) | **POST** /webhook/webhooks/{webhookOid}/validate | Send test message to an endpoint.


## Documentation For Models

 - [ApiUserApplicationProfile](docs/Model/ApiUserApplicationProfile.md)
 - [Distance](docs/Model/Distance.md)
 - [Error](docs/Model/Error.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [HTTPHeader](docs/Model/HTTPHeader.md)
 - [Item](docs/Model/Item.md)
 - [ItemAccounting](docs/Model/ItemAccounting.md)
 - [ItemAmember](docs/Model/ItemAmember.md)
 - [ItemAutoOrder](docs/Model/ItemAutoOrder.md)
 - [ItemAutoOrderStep](docs/Model/ItemAutoOrderStep.md)
 - [ItemAutoOrderStepArbitraryUnitCostSchedule](docs/Model/ItemAutoOrderStepArbitraryUnitCostSchedule.md)
 - [ItemAutoOrderStepGrandfatherPricing](docs/Model/ItemAutoOrderStepGrandfatherPricing.md)
 - [ItemCCBill](docs/Model/ItemCCBill.md)
 - [ItemChannelPartnerMapping](docs/Model/ItemChannelPartnerMapping.md)
 - [ItemChargeback](docs/Model/ItemChargeback.md)
 - [ItemChargebackAddendum](docs/Model/ItemChargebackAddendum.md)
 - [ItemChargebackAdjustmentRequest](docs/Model/ItemChargebackAdjustmentRequest.md)
 - [ItemCheckout](docs/Model/ItemCheckout.md)
 - [ItemContent](docs/Model/ItemContent.md)
 - [ItemContentAssignment](docs/Model/ItemContentAssignment.md)
 - [ItemContentAttribute](docs/Model/ItemContentAttribute.md)
 - [ItemContentMultimedia](docs/Model/ItemContentMultimedia.md)
 - [ItemContentMultimediaThumbnail](docs/Model/ItemContentMultimediaThumbnail.md)
 - [ItemDigitalDelivery](docs/Model/ItemDigitalDelivery.md)
 - [ItemDigitalItem](docs/Model/ItemDigitalItem.md)
 - [ItemEbay](docs/Model/ItemEbay.md)
 - [ItemEbayCategorySpecific](docs/Model/ItemEbayCategorySpecific.md)
 - [ItemEbayMarketListing](docs/Model/ItemEbayMarketListing.md)
 - [ItemEbayMarketPlaceAnalysis](docs/Model/ItemEbayMarketPlaceAnalysis.md)
 - [ItemEmailNotifications](docs/Model/ItemEmailNotifications.md)
 - [ItemEnrollment123](docs/Model/ItemEnrollment123.md)
 - [ItemGiftCertificate](docs/Model/ItemGiftCertificate.md)
 - [ItemGoogleProductSearch](docs/Model/ItemGoogleProductSearch.md)
 - [ItemIdentifiers](docs/Model/ItemIdentifiers.md)
 - [ItemInstantPaymentNotification](docs/Model/ItemInstantPaymentNotification.md)
 - [ItemInstantPaymentNotifications](docs/Model/ItemInstantPaymentNotifications.md)
 - [ItemInternal](docs/Model/ItemInternal.md)
 - [ItemKitComponent](docs/Model/ItemKitComponent.md)
 - [ItemKitDefinition](docs/Model/ItemKitDefinition.md)
 - [ItemOption](docs/Model/ItemOption.md)
 - [ItemOptionValue](docs/Model/ItemOptionValue.md)
 - [ItemOptionValueAdditionalItem](docs/Model/ItemOptionValueAdditionalItem.md)
 - [ItemOptionValueDigitalItem](docs/Model/ItemOptionValueDigitalItem.md)
 - [ItemPaymentProcessing](docs/Model/ItemPaymentProcessing.md)
 - [ItemPhysical](docs/Model/ItemPhysical.md)
 - [ItemPricing](docs/Model/ItemPricing.md)
 - [ItemPricingTier](docs/Model/ItemPricingTier.md)
 - [ItemPricingTierDiscount](docs/Model/ItemPricingTierDiscount.md)
 - [ItemPricingTierLimit](docs/Model/ItemPricingTierLimit.md)
 - [ItemRealtimePricing](docs/Model/ItemRealtimePricing.md)
 - [ItemRelated](docs/Model/ItemRelated.md)
 - [ItemRelatedItem](docs/Model/ItemRelatedItem.md)
 - [ItemReporting](docs/Model/ItemReporting.md)
 - [ItemResponse](docs/Model/ItemResponse.md)
 - [ItemRestriction](docs/Model/ItemRestriction.md)
 - [ItemRestrictionItem](docs/Model/ItemRestrictionItem.md)
 - [ItemRevguard](docs/Model/ItemRevguard.md)
 - [ItemReviews](docs/Model/ItemReviews.md)
 - [ItemSalesforce](docs/Model/ItemSalesforce.md)
 - [ItemShipping](docs/Model/ItemShipping.md)
 - [ItemShippingCase](docs/Model/ItemShippingCase.md)
 - [ItemShippingDestinationMarkup](docs/Model/ItemShippingDestinationMarkup.md)
 - [ItemShippingDestinationRestriction](docs/Model/ItemShippingDestinationRestriction.md)
 - [ItemShippingDistributionCenter](docs/Model/ItemShippingDistributionCenter.md)
 - [ItemShippingMethod](docs/Model/ItemShippingMethod.md)
 - [ItemShippingPackageRequirement](docs/Model/ItemShippingPackageRequirement.md)
 - [ItemTax](docs/Model/ItemTax.md)
 - [ItemTaxExemption](docs/Model/ItemTaxExemption.md)
 - [ItemThirdPartyEmailMarketing](docs/Model/ItemThirdPartyEmailMarketing.md)
 - [ItemVariantItem](docs/Model/ItemVariantItem.md)
 - [ItemVariation](docs/Model/ItemVariation.md)
 - [ItemVariationOption](docs/Model/ItemVariationOption.md)
 - [ItemWishlistMember](docs/Model/ItemWishlistMember.md)
 - [ItemsResponse](docs/Model/ItemsResponse.md)
 - [OauthRevokeSuccessResponse](docs/Model/OauthRevokeSuccessResponse.md)
 - [OauthTokenSuccessResponse](docs/Model/OauthTokenSuccessResponse.md)
 - [ResponseMetadata](docs/Model/ResponseMetadata.md)
 - [ResultSet](docs/Model/ResultSet.md)
 - [TempMultimedia](docs/Model/TempMultimedia.md)
 - [TempMultimediaResponse](docs/Model/TempMultimediaResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookEventCategory](docs/Model/WebhookEventCategory.md)
 - [WebhookEventSubscription](docs/Model/WebhookEventSubscription.md)
 - [WebhookLog](docs/Model/WebhookLog.md)
 - [WebhookLogResponse](docs/Model/WebhookLogResponse.md)
 - [WebhookLogSummariesResponse](docs/Model/WebhookLogSummariesResponse.md)
 - [WebhookLogSummary](docs/Model/WebhookLogSummary.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [WebhookSampleRequest](docs/Model/WebhookSampleRequest.md)
 - [WebhookSampleRequestResponse](docs/Model/WebhookSampleRequestResponse.md)
 - [WebhooksResponse](docs/Model/WebhooksResponse.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization


## ultraCartOauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://secure.ultracart.com/rest/oauth/authorize
- **Scopes**: 
 - **item_read**: Allows you to read item information.
 - **item_write**: Allows you to write item information.
 - **webhook_read**: Allows you to read webhook information.
 - **webhook_write**: Allows you to write webhook information.

## ultraCartSimpleApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-simple-key
- **Location**: HTTP header


## Author

support@ultracart.com


