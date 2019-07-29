

**API NAME:Create Property**

This operation allow you to create a property

**Description:**

Using this API user can create a property. To do this operation, user need to check token validation..etc

**Request**

| Method | URL |
| --- | --- |
| POST | /create |

| Type | Params | Values |
| --- | --- | --- |
| HEAD | Authorization | StringAlphanumeric(this we can add later) |
| POST | prop\_name | StringAlpha numeric and spaces. User will identify the property with the given value |
| POST | rent\_amount | FloatRent amount per month for the property |
| :: | :: | :: |

**Request/Response**

| Status | Request/Response |
| --- | --- |
| 200 | Request:{        &quot;Property\_name&quot;: &quot;fgh&quot;,        &quot;Security\_deposit\_amount&quot;: &quot;1200&quot;,        &quot;Rent\_amount&quot;: &quot;18000&quot;,        &quot;Maintenance\_amount&quot;: &quot;14000&quot;,        &quot;Rent\_due\_date&quot;: &quot;11&quot;,        &quot;Maintenance\_due\_date&quot;: &quot;22&quot;,        &quot;Staying\_since&quot;: &quot;11/1/11&quot;,        &quot;deposit&quot;: &quot;Yes&quot;,        &quot;property\_image&quot;: &quot;file1.pdf&quot;,        &quot;Door\_number&quot;: &quot;1&quot;,        &quot;Society&quot;: &quot;tuv&quot;,        &quot;Area&quot;: &quot;wxy&quot;,        &quot;City&quot;: &quot;abc&quot;,        &quot;State&quot;: &quot;pqr&quot;,        &quot;Pin&quot;: &quot;500032&quot;,        &quot;plus\_code&quot;: &quot;3133&quot;,        &quot;created\_by&quot;: &quot;xyz&quot;,        &quot;updated\_by&quot;: &quot;abc&quot;,        &quot;Landlord\_name&quot;: &quot;def&quot;,        &quot;Account\_holder\_name&quot;: &quot;abc&quot;,        &quot;Bank\_name&quot;: &quot;pqr&quot;,        &quot;IFSC&quot;: &quot;PUNB123&quot;,        &quot;Account\_number&quot;: &quot;123456&quot;,        &quot;Landlord\_city&quot;: &quot;pqr&quot;,        &quot;Landlord\_state&quot;: &quot;abc&quot;,        &quot;Landlord\_PAN\_number&quot;: &quot;xyz&quot;,        &quot;pan\_doc&quot;: &quot;file2.pdf&quot;,        &quot;landlord\_plus\_code&quot;: &quot;3122&quot;,        &quot;startdate\_agreement&quot;: &quot;11/1/11&quot;,        &quot;enddate\_agreement&quot;: &quot;18/1/11&quot;,        &quot;rent\_agreement&quot;: &quot;file1.pdf&quot;} Response:{&quot;Status&quot;:&quot;SUCCESS&quot;,&quot;code:&quot;200&quot;,&quot;message&quot;:&quot;Property created successfully&quot;,&quot;data&quot;: {&quot;Property\_name&quot;: &quot;fgh&quot;,        &quot;Security\_deposit\_amount&quot;: &quot;1200&quot;,        &quot;Rent\_amount&quot;: &quot;18000&quot;,        &quot;Maintenance\_amount&quot;: &quot;14000&quot;,        &quot;Rent\_due\_date&quot;: &quot;11&quot;,        &quot;Maintenance\_due\_date&quot;: &quot;22&quot;,        &quot;Staying\_since&quot;: &quot;11/1/11&quot;,        &quot;deposit&quot;: &quot;Yes&quot;,        &quot;property\_image&quot;: &quot;file1.pdf&quot;,        &quot;Door\_number&quot;: &quot;1&quot;,        &quot;Society&quot;: &quot;tuv&quot;,        &quot;Area&quot;: &quot;wxy&quot;,        &quot;City&quot;: &quot;abc&quot;,        &quot;State&quot;: &quot;pqr&quot;,        &quot;Pin&quot;: &quot;500032&quot;,        &quot;plus\_code&quot;: &quot;3133&quot;,        &quot;created\_by&quot;: &quot;xyz&quot;,        &quot;updated\_by&quot;: &quot;abc&quot;,        &quot;Landlord\_name&quot;: &quot;def&quot;,        &quot;Account\_holder\_name&quot;: &quot;abc&quot;,        &quot;Bank\_name&quot;: &quot;pqr&quot;,        &quot;IFSC&quot;: &quot;PUNB123&quot;,        &quot;Account\_number&quot;: &quot;123456&quot;,        &quot;Landlord\_city&quot;: &quot;pqr&quot;,        &quot;Landlord\_state&quot;: &quot;abc&quot;,        &quot;Landlord\_PAN\_number&quot;: &quot;xyz&quot;,        &quot;pan\_doc&quot;: &quot;file2.pdf&quot;,        &quot;landlord\_plus\_code&quot;: &quot;3122&quot;,        &quot;startdate\_agreement&quot;: &quot;11/1/11&quot;,        &quot;enddate\_agreement&quot;: &quot;18/1/11&quot;,        &quot;rent\_agreement&quot;: &quot;file1.pdf&quot;}  |
|   |   |

