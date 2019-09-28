# # OfferEventEndedOfferAllOfPublication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ended_by** | **string** | Indicates the reason for ending the offer:  - &#x60;USER&#x60; - offer ended by the seller.  - &#x60;ADMIN&#x60; - offer ended by an admin.  - &#x60;EXPIRATION&#x60; - offer ended because all available items had been sold out or offer duration had expired (valid for    offers with specified duration).  - &#x60;ERROR&#x60; - offer ended due to internal problem with offer publication. The publication command responded with    success status, but further processing failed.  - &#x60;UNKNOWN&#x60; - in rare cases the reason might be unknown. | 
**ended_at** | [**\DateTime**](\DateTime.md) | Offer publication ending date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format in UTC - &#x60;yyyy-MM-ddTHH:mm:ssZ&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


