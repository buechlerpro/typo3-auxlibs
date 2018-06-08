# TYPO3-Auxlibs

This is a TYPO3 extension providing 3rd party libraries.

## PHP-libraries

### Hashids 3.0.0

**Hashids** is small PHP library to generate YouTube-like ids from numbers. 
Use it when you don't want to expose your database ids to the user: [http://hashids.org/php](http://hashids.org/php)

#### Usage ####

```php
$hashids = new \Hashids\Hashids;
$handle = $hashids->encode(5, 5, 5);
```