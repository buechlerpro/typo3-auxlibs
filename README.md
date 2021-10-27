# TYPO3-Auxlibs

[![Continuous integration status](https://github.com/buepro/typo3-auxlibs/workflows/CI/badge.svg)](https://github.com/buepro/typo3-auxlibs/actions?query=workflow%3ACI)
[![Latest Version](https://badgen.net/packagist/v/buepro/typo3-auxlibs)](https://packagist.org/packages/buepro/typo3-auxlibs)

---

This TYPO3 extension provides 3rd party libraries to be used in non-composer mode.

Currently the following libraries are available:

| Library | Version |
| --- | --- |
| hashids/hashids | 4.1.0 |
| erusev/parsedown | 1.7.4 |
| rlanvin/php-rrule | 2.3.0 |


## Libraries

### Hashids

[Hashids](http://hashids.org/php) is small PHP library to generate YouTube-like ids from numbers.
Use it when you don't want to expose your database ids to the user.

Example:

```php
$hashids = new \Hashids\Hashids;
$handle = $hashids->encode(5, 5, 5);
```

### Parsedown

[Parsedown](https://github.com/erusev/parsedown) transforms text with
[markdown syntax](https://daringfireball.net/projects/markdown/) to html.

Example:

```php
$parsedown = new \Parsedown;
$htmlText = $parsedown->text($markdownText);
```

#### ViewHelper

A ViewHelper is available and can be used as following:

```xhtml
<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
      xmlns:auxlibs="http://typo3.org/ns/Buepro/Auxlibs/ViewHelpers"
      data-namespace-typo3-fluid="true">

<!--Inline mode-->
{auxlibs:parsedown(text: textWithMarkedownSyntax)}
{task.description -> auxlibs:parsedown()}

<!--Tag mode-->
<auxlibs:parsedown text="{task.description}" />
<auxlibs:parsedown>{task.description}</auxlibs:parsedown>

</html>
```

The ViewHelper has the following properties:

Property | Description | Type | Default
---|---|---|---
nl2br | If set maintains line breaks | bool | false

### PHP RRule

[RRule](https://github.com/rlanvin/php-rrule) is a lightweight and fast implementation of recurrence rules for PHP (RRULE from RFC 5545), to easily calculate
recurring/repeating dates and events (such as in a calendar).

Example:

```php
$rrule = new RRule('RRULE:FREQ=DAILY;UNTIL=19971224T000000Z;WKST=SU;BYDAY=MO,WE,FR;BYMONTH=1');
foreach ($rrule as $occurrence) {
    echo $occurrence->format('r'),"\n";
}
```

With [RSet](https://github.com/rlanvin/php-rrule/wiki/RSet) even more complex rules can be defined:

```php
$rset = new RSet(
    "DTSTART;TZID=America/New_York:19970901T090000
    RRULE:FREQ=DAILY;COUNT=3
    EXRULE:FREQ=DAILY;INTERVAL=2;COUNT=1
    EXDATE;TZID=America/New_York:19970903T090000
    RDATE;TZID=America/New_York:19970904T090000"
);
```

## Usage

The libraries are automatically loaded in a middleware. In case a library needs to be available at an earlier stage it
might be loaded with an include statement. The include statement for the library `hashids` would look as following:

```php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
@include 'phar://'
    . ExtensionManagementUtility::extPath('auxlibs')
    . 'Libraries/hashids-hashids.phar/vendor/autoload.php';
```

