[![Build Status](https://travis-ci.org/Zemistr/l10n.svg?branch=master)](https://travis-ci.org/Zemistr/l10n)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Zemistr/l10n/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Zemistr/l10n/?branch=master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/Zemistr/l10n/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Zemistr/l10n/?branch=master)
[![Packagist Total Downloads](https://img.shields.io/packagist/dt/zemistr/l10n.svg)](https://packagist.org/packages/zemistr/l10n)
[![License](https://img.shields.io/packagist/l/zemistr/l10n.svg)](http://opensource.org/licenses/mit-license.php)

# l10n
Localization, plurals and translator

## About
l10n is a package combining many languages from [ISO 639-1](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (112/185), all Plurals from [Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals) and simple translator.

## Packagist
l10n is available on [Packagist.org](https://packagist.org/packages/zemistr/l10n),
just add the dependency to your composer.json.

```javascript
{
  "require" : {
    "zemistr/l10n": "1.*"
  }
}
```

or run Composer command:
```php
php composer.phar require zemistr/l10n
```

## Usage without composer

```php
<?php
require('src/l10n.php');
```

## Basic translator usage with PluralRule

```php
<?php
// first we create a new instance of plural rule
$plural = new \l10n\Plural\PluralRule1();

// create new instance of Translator with selected plural rule
$translator = new \l10n\Translator\Translator($plural);

// add translations
//   $translator->setText($key, $text, $plural = 0);
$translator->setText('statistics.users', '%n% person'); // 0 or nothing for singular
$translator->setText('statistics.users', '%n% people', 1);

// get translations
//   $translator->translate($key, $n = 1, array $parameters = array());
//
// or for singular
//   $translator->translate($key, array $parameters = array());
echo $translator->translate('statistics.users', 0) . '<br>'; // 0 people
echo $translator->translate('statistics.users', 1) . '<br>'; // 1 person
echo $translator->translate('statistics.users', 50) . '<br>'; // 50 people
echo $translator->translate('statistics.users', 100) . '<br>'; // 100 people

// we can use %variables% in translations
// in default is available variable %n% for number $n (singular/plural number)

$translator->setText('user', 'I am %firstname% %lastname%');

echo $translator->translate('user', ['%firstname%' => 'John', '%lastname%' => 'Doe']); // I am John Doe
```

## Basic translator usage with Language

```php
<?php
// first we create a new instance of class based on IPlural
$language = new \l10n\Language\EnglishLanguage();

// create new instance of Translator with selected language
$translator = new \l10n\Translator\Translator($language);

// add translations
//   $translator->setText($key, $text, $plural = 0);
$translator->setText('statistics.users', '%n% person'); // 0 or nothing for singular
$translator->setText('statistics.users', '%n% people', 1);

// get translations
//   $translator->translate($key, $n = 1, array $parameters = array());
//
// or for singular
//   $translator->translate($key, array $parameters = array());
echo $translator->translate('statistics.users', 0) . '<br>'; // 0 people
echo $translator->translate('statistics.users', 1) . '<br>'; // 1 person
echo $translator->translate('statistics.users', 50) . '<br>'; // 50 people
echo $translator->translate('statistics.users', 100) . '<br>'; // 100 people

// we can use %variables% in translations
// in default is available variable %n% for number $n (singular/plural number)

$translator->setText('user', 'I am %firstname% %lastname%');

echo $translator->translate('user', ['%firstname%' => 'John', '%lastname%' => 'Doe']); // I am John Doe
```


-----

(c) Martin Zeman (Zemistr), 2015 (http://zemistr.eu)
