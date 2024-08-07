# Advanced Custom Fields: User Network #

This enhance [Advanced Custom Field](https://www.advancedcustomfields.com/pro/) plugin by adding a custom field.

This ACF field is a select2 field in order to list all network users.

## Compatibility

This ACF field type is compatible with:
* ACF 5.0.0 and up, that means the pro version.
* ACF 4 (not supported).

## Installation

### via Composer

1. Add a line to your repositories array: `{ "type": "git", "url": "https://github.com/BeAPI/acf-user-network" }`
2. Add a line to your require block: `"bea/acf-user-network": "dev-master"`
3. Run: `composer update`

### Manual

1. Copy the plugin folder into your plugins folder.
2. Activate the plugin via the plugins admin page.
3. Create a new field via ACF and select the User Network selector.

## Changelog

### 1.0.1 - 11 July 2024

* Fix: Update AJAX nonce handling for ACF 6.3.2 ([#5](https://github.com/BeAPI/acf-user-network/pull/5)) 
* Fix: JS error when initializing the field ([#3](https://github.com/BeAPI/acf-user-network/pull/3))

### 1.0.0 - 6 Sept 2017
* Initial release
