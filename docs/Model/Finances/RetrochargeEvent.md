# # RetrochargeEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrocharge_event_type** | **string** | The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal | [optional]
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**base_tax** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**shipping_tax** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**marketplace_name** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional]
**retrocharge_tax_withheld_list** | [**\Evers\SellingPartnerApi\Model\Finances\TaxWithheldComponent[]**](TaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)