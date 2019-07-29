HRA Front End

Paymatrix API for Corporate HRA Consolidation

-	SSO: Single Sign On Feature
-	Adding property 
-	Rent payment 
-	Rent Collection
-	Rent Receipts
-	Rental Agreement 
-	Dashboard for Admin/User/Super admin
-   TDS deduction and appropriate submission of Form 16/16a"


Use Cases:


Property Addition:

a. Add property details: This allows you to add property details with corresponding details of landlord and Rental-document.

   Usage: POST Request to "http://127.0.0.1:8000/api/create"
   
Diaplay Property:

a. Display Property Details :This displays the property details created by the user.

    Usage: GET request to "http:127.0.0.1:8000/api/getproperty/id"

b. Display Landlord Details :This displays the landlord details created by the user.

    Usage: GET request to "http:127.0.0.1:8000/api/landproperty/id"

c. Display Document Details :This displays the document details created by the user.

    Usage: GET request to "http:127.0.0.1:8000/api/getdocuments/landlord_id/property_id"

Update Property:

a. Edit Property Details: This allows you to edit the property details created by the user if he wishes to modify.
    
    Usage: PUT request to "http:127.0.0.1:8000/api/updateproperty/property_id"
    
b.Edit Landlord Details: This allows you to edit the Landlord details created by the user if he wishes to modify.
    
    Usage: PUT request to "http:127.0.0.1:8000/api/updatelandlord/property_id"
    
c.Edit Agreement Details: This allows you to edit the agreement details created by the user if he wishes to modify.
    
    Usage: PUT request to "http:127.0.0.1:8000/api/updateagreement/landlord_id/property_id"
    
Payment Details:

a.Get Previous Transaction Details:  This gets the amounts to be paid in total.
    
    Usage: GET request to "http://127.0.0.1:8000/api/gettransaction/property_id"


b. Add transaction details: This allows you to add transaction details to redirect to Payment.

   Usage: POST Request to "http://127.0.0.1:8000/posttransaction"


Display Transactions:

a. Get Transactions of User: displays the transactions made by the user

    Usage: POST Request to "http://127.0.0.1:8000/getalltransaction"


Admin Usecase:

a. Display Receipts: Displays all the Receipts of a particular period of time

    Usage: POST Request to "http://127.0.0.1:8000/getreceipts"

b. Display Reports:Displays the Reports of a financial year of particular Employee 

    Usage: POST Request to "http://127.0.0.1:8000/pdfgenerate"

c. Display Agreements:Displays all the agreements made between tenants and landlords in a period of time.

    Usage: POST Request to "http://127.0.0.1:8000/getagreements"

Login/Signup:

a.Login:Send Details forAuthentication

    Usage: POST Request to "http://127.0.0.1:8000/login"

b.Signup: Store Users Registered Details

    Usage: POST Request to "http://127.0.0.1:8000/signup"


