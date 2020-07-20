# Bagisto Pickup

This extension allows your customers to collect their orders from your physical store.

## Requirements
- [Bagisto](https://github.com/bagisto/bagisto)

## Installation

### Install with composer
1. Run the following command
```php
composer require digibytes/pickup
```
2. Go to https://<your-site>/admin/configuration/sales/carriers.
3. Make sure that **Picking up at the store** is active and press save.

### Install with package folder
1. Unzip all the files to **packages/Digibytes/Pickup**.
2. Open config/app.php and add **Digibytes\Pickup\Providers\PickupServiceProvider::class**.
3. Go to https://<your-site>/admin/configuration/sales/carriers.
4. Make sure that **Picking up at the store** is active and press save.

Your customers are now able to select the new shipping method.
