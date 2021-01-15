# Qookies PHP Client

`Qookies.php` is a lightweight utility library to interact with the Qookies plugin from PHP.

## Installation

### Manual Install
To install the utility, upload `/Qodio/` to your web-server. With a manual install you'll have to manage autoloading of classes yourself.

## Usage

The `Qookies` plugin uses four categories for cookies: 
- `strict` for strictly necessary cookies
- `preferences` for user preference and UX cookies
- `statistics` for statistics and analytics cookies
- `marketing` for targeting and advertising cookies

To check the consent status of a browser window, simply call the appropriate function
on the Qookies class.

### Basic example
The following example shows how to perform conditional logic or includes if a user has given consent to 
marketing cookies:
```php
<?php

use Qodio\Qookies;

if (Qookies::marketing()) {
    echo 'User has consented to marketing cookies';
}
``` 
  

