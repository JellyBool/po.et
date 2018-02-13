# Po.et PHP Composer Package

## Usage

> Refer fronst before you start: https://docs.frost.po.et/docs/getting-started

### Install
```
composer require jellybool/po.et
```

### Methods

**1.createWork** 
```php
// You can get your apiToken from here: https://frost.po.et/token
$poet = new \JellyBool\Poet\Client($apiToken);

$work = $poet->createWork([
    'name' => 'PHP Poet',
    'datePublished' => '2018-02-12T16:39:46+00:00',
    'dateCreated' => '2018-02-12T14:39:46+00:00',
    'author' => 'JellyBool',
    'tags' => 'php',
    'content' => 'Po.et PHP Integrations'
]);
```
It returns an `array` contains `workId`:
```php
['workId' => '5e11b417b01f0db810d81f7a8f3cbdd13c9b876512a9f26dbd7d380573c700d0']
```


**2.getWork**
```php
$poet = new \JellyBool\Poet\Client($apiToken);

$work = $poet->getWork($workId);
```
It returns an `array` contains `work` details :
```php
[
  'name' => "PHP Poet"
  'datePublished' => "2018-02-12T16:39:46+00:00"
  'dateCreated' => "2018-02-12T14:39:46+00:00"
  'author' => "JellyBool"
  'tags' => "php"
  'content' => "Po.et PHP Integrations"
];
```

**3.getAllWorks**

```php
$poet = new \JellyBool\Poet\Client($apiToken);

$work = $poet->getAllWorks();
```

It returns a collection of each `work` details `array` :

```php
[
    [
      'name' => "PHP Poet"
      'datePublished' => "2018-02-12T16:39:46+00:00"
      'dateCreated' => "2018-02-12T14:39:46+00:00"
      'author' => "JellyBool"
      'tags' => "php"
      'content' => "Po.et PHP Integrations"
    ],
    [
      'name' => "PHP Poet 2"
      'datePublished' => "2018-02-12T17:39:46+00:00"
      'dateCreated' => "2018-02-12T15:39:46+00:00"
      'author' => "JellyBool"
      'tags' => "po.et"
      'content' => "Po.et interactions with PHP"
    ],
];
```