# time4vps sdk

I have implemented 45% of the methods from the documentation at https://billing.time4vps.com/userapi. I plan to implement all the available functions in the near future. Please support me with your interest if you find this package useful.

# Install:

`composer require i-kostiuk/time4vps-api `

- ##### laravel:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
```
- ##### php:
```php
use Time4Vps\Time4Vps;

require __DIR__ . "/vendor/autoload.php";

$client = new Time4Vps($username, $password);
```

# Available methods:


### User Details

Return registration details for my account
- documentation: https://billing.time4vps.com/userapi#user-details-1
- example: 
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$details = $client->getDetails();
```

---


### Update User Details

Update registration details under my account
- documentation: https://billing.time4vps.com/userapi#update-user-details-2
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$details = $client->setDetails([
        "type" => "typeValue",
        "companyname" => "companynameValue",
        "companyregistrationnumber" => "companyregistrationnumberValue",
        "vateu" => "vateuValue",
        "email" => "emailValue",
        "firstname" => "firstnameValue",
        "lastname" => "lastnameValue",
        "country" => "countryValue",
        "address1" => "address1Value",
        "city" => "cityValue",
        "state" => "stateValue",
        "postcode" => "postcodeValue",
        "phonenumber" => "phonenumberValue",
        "emarketing" => "emarketingValue"
    ]);
```

---


### List contacts

Return a list of contacts on this account
- documentation: https://billing.time4vps.com/userapi#list-contacts-9
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$contacts = $client->getContacts();
```

---



### Get contacts details

Return array with contact details
- documentation: https://billing.time4vps.com/userapi#get-contacts-details-12
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$contact = $client->getContactDetails($contact_id);
```

---



### List all portal notifications

Return a list of all portal notifications.
- documentation: https://billing.time4vps.com/userapi#list-all-portal-notifications-37
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$notifications = $client->getNotifications();
```

---



### List new portal notifications

Return only new portal notifications.
- documentation: https://billing.time4vps.com/userapi#list-new-portal-notifications-38
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$notifications = $client->getNotificationsNew();
```

---



### Acknowledge notification

Marks the notification as read
- documentation: https://billing.time4vps.com/userapi#acknowledge-notification-39
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$notification = $client->markNotificationsAsRead($notification_id);
```

---



### Account balance

Get current account balance(unpaid invoices total), account credit
- documentation: https://billing.time4vps.com/userapi#account-balance-4
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$balance = $client->getBalance();
```

---



### List Invoices

List all invoices under my account
- documentation: https://billing.time4vps.com/userapi#list-invoices-6
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$invoices = $client->getInvoices();
```

---



### Invoice Details

Get invoice details
- documentation: https://billing.time4vps.com/userapi#invoice-details-8
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$invoice = $client->getInvoice($invoice_id);
```

---




### Payment Methods

List available payment methods
- documentation: https://billing.time4vps.com/userapi#payment-methods-14
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$payments = $client->getPayments();
```

---



### Payment Methods Fees

List available payment methods with fees
- documentation: https://billing.time4vps.com/userapi#payment-methods-fees-15
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$payments = $client->getPaymentsFees();
```

---



### List services

List all services under your account
- documentation: https://billing.time4vps.com/userapi#list-services-17
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$services = $client->getServices();
```

---


### Service label

Show current service label
- documentation: https://billing.time4vps.com/userapi#service-label-27
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$service_label = $client->getServiceLabel($service_id);
```

---



### Change service label

Set new custom label to identify this service
- documentation: https://billing.time4vps.com/userapi#change-service-label-28
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$response = $client->setServiceLabel($service_id, $new_label);
```

---



### List product categories

Return a list of product categories.
- documentation: https://billing.time4vps.com/userapi#list-product-categories-21
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$categories = $client->getProductCategories();
```

---


### List products in category

Return a list of product available for purchase under requested category
- documentation: https://billing.time4vps.com/userapi#list-products-in-category-22
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$products = $client->getProductsInCategory($category_id);
```

---




### Get product configuration details

Return product details with form configuration, addons and subproducts if available.
- documentation: https://billing.time4vps.com/userapi#get-product-configuration-details-23
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$product = $client->getProductDetails($product_id);
```

---



### Get available VPS products

List all available virtual private server products
- documentation: https://billing.time4vps.com/userapi#get-available-vps-products-66
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$vps_products = $client->getAvailableVps();
```

---



### List DNS

Returns a list of all DNS
- documentation: https://billing.time4vps.com/userapi#list-dns-30
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$dns = $client->getDns();
```

---



### Get DNS details

Returns details of the DNS zone
- documentation: https://billing.time4vps.com/userapi#get-dns-details-32
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$dns = $client->getDnsDetails($service_id, $zone_id);
```

---



### List SSL Certificates

List all ssl services under your account
- documentation: https://billing.time4vps.com/userapi#list-ssl-certificates-41
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$certificates = $client->getCertificates();
```

---



### List All Servers

Lists all active servers. Results includes only the brief information about the server.
Call is synchronous - result returned immediately.

- documentation: https://billing.time4vps.com/userapi#list-all-servers-51
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$servers = $client->getServers();
```

---




### Server Details

Particular server details: configuration, installed OS, resource usage and etc.
Call is synchronous - result returned immediately.

- documentation: https://billing.time4vps.com/userapi#server-details-52
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$server = $client->getServerDetails($server_id);
```

---



### Available OS List

List of available OS templates for a server.
Call is synchronous - result returned immediately.

- documentation: https://billing.time4vps.com/userapi#available-os-list-62
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$server_os = $client->getServerAvailableOsList($server_id);
```

---



### Get additional IPs

List of additional IPs.
Call is synchronous - result returned immediately.

- documentation: https://billing.time4vps.com/userapi#get-additional-ips-63
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$server_ips = $client->getServerAdditionalIps($server_id);
```

---


### Get Usage History

Displays the bandwidth usage of a server.
Call is synchronous - result returned immediately.

- documentation: https://billing.time4vps.com/userapi#get-usage-history-65
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$history = $client->getServerUsageHistory($server_id);
```

---



### Get available init scripts

Script content is not included

- documentation: https://billing.time4vps.com/userapi#get-available-init-scripts-69
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$scripts = $client->getScripts();
```

---



### Get init script by ID

Script content is included

- documentation: https://billing.time4vps.com/userapi#get-init-script-by-id-70
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$script = $client->getScript($script_id);
```

---



### List VPN Servers

Returns all available (including servers in maintenance) VPN servers.

- documentation: https://billing.time4vps.com/userapi#list-vpn-servers-74
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$vpn_servers = $client->getVpnServers();
```

---



### List VPN Clients

- documentation: https://billing.time4vps.com/userapi#list-vpn-clients-75
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$vpn_clients = $client->getVpnClients();
```

---



### VPN login details

Returns oldest VPN plan login details, such as username, password, pre-shared key.

- documentation: https://billing.time4vps.com/userapi#vpn-login-details-77
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$vpn_login_details = $client->getVpnLoginDetails();
```

---



### Get Usage History

Displays the bandwidth usage of a VPN service.

- documentation: https://billing.time4vps.com/userapi#get-usage-history-8083
- example:
```php
use Time4Vps\Time4Vps;

$client = new Time4Vps($username, $password);
$vpn_usage_history = $client->getVpnUsageHistory($id);
```

---