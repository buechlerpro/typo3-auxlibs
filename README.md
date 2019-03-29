# TYPO3-Auxlibs

[![Build Status](https://badgen.net/travis/buepro/typo3-auxlibs/master)](https://travis-ci.org/buepro/typo3-auxlibs)
[![Latest Version](https://badgen.net/packagist/v/buepro/typo3-auxlibs)](https://github.com/buepro/typo3-auxlibs/releases)

---

This TYPO3 extension provides 3rd party libraries to be used in non-composer mode.

Currently the following libraries are available:

| Library | Version |
| --- | --- |
| hashids/hashids | 4.0.0 |


## Libraries

### Hashids

[Hashids](http://hashids.org/php) is small PHP library to generate YouTube-like ids from numbers. 
Use it when you don't want to expose your database ids to the user.

Example:

```php
$hashids = new \Hashids\Hashids;
$handle = $hashids->encode(5, 5, 5);
```

## Usage

The libraries are automatically loaded in the context of TCA configuration. In case a library needs to be available 
at an earlier stage it might be loaded with an include statement. The include statement for the library `hashids` 
would look as following:

```php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
@include 'phar://'
    . ExtensionManagementUtility::extPath('auxlibs')
    . 'Libraries/hashids-hashids.phar/vendor/autoload.php';
```

