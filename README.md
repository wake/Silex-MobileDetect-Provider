# Silex MobileDetect Service Provider

Silex 2 service provider (and trait) for awesome MobileDetect library.

## Install

Use [Composer](https://getcomposer.org/doc/00-intro.md)

```
composer require wake/Silex-MobileDetect-Provider
```

```
"require": {
  "wake/Silex-MobileDetect-Provider": "dev-master"
}
```

## Service

**．mobile_detect**: The mobile detect instance.

Example:

```
$app['mobile_detect']->isMobile ();
```

## Registering

```
$app->register (new Silex\Provider\MobileDetect ());
```

## Trait

Silex\Application\MobileDetect adds the following shortcuts:

**．Detect**: Detecting through MobileDetect.

Example:

```
$app->detect ('isMobile');
```

## 安裝

使用 [Composer](https://getcomposer.org/doc/00-intro.md)

```
composer require wake/Silex-MobileDetect-Provider
```

```
"require": {
  "wake/Silex-MobileDetect-Provider": "dev-master"
}
```

## 服務

**．mobile_detect**: MobileDetect 物件.

範例:

```
$app['mobile_detect']->isMobile ();
```

## 註冊

```
$app->register (new Silex\Provider\MobileDetect ());
```

## Trait

Silex\Application\MobileDetect 提供下列的快速呼叫:

**．detect**: 檢測.

範例:

```
$app->detect ('isMobile');
```
