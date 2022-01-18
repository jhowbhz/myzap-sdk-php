# Package APIGratis 
[![latest stable version](https://poser.pugx.org/jhowbhz/package-apigratis/v/stable.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
[![license mit](https://poser.pugx.org/jhowbhz/package-apigratis/license.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
<a href="https://github.com/jhowbhz/package-apigratis/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/jhowbhz/package-apigratis"></a>
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/jhowbhz/package-apigratis/total">
<a href="https://github.com/jhowbhz/package-apigratis/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/jhowbhz/package-apigratis"></a>
<a href="https://github.com/jhowbhz/package-apigratis/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/jhowbhz/package-apigratis"></a>
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)

## Description
With this package it is possible to consume the free API's from the website https://apibrasil.com.br, in a simple way.

## Important notice
⚠️Beta tester version, some or more features may not work perfectly, do not use in production environment.

## Install
```composer require jhowbhz/package-apigratis```

### Status

| Up  | Services available            | Description       | Free    | Beta        | Stable   |
------|-------------------------------|-------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                | This service is possible send messages text, files, free in WhatsApp.        |   ✅   | OK                | Testing                    |
| ⌚ | CorreiosService                | This service is possible get CEP or Tracker packages, correios Brazil.      |   💰   | Loading                   | Loading                   |
| ⌚ | SinespService                  | This service is possible get multiples informations the vehicle.       |   💰   | Loading                   | Loading                   |
| ⌚ | FipeService                    | This service get FIPE value the velhicle plate.       |   ✅   | Loading                   | Loading                   |
| ⌚ | TranslateService               | This service translate texts in multiples languages.      |   💰   | Loading                   | Loading                   |

## WhatsAppService - Examples usage

#### Start new session
```php
use ApiGratis\ApiBrasil;

$start = ApiBrasil::WhatsAppService("start", [
    "server_host" => "https://whatsapp2.contrateumdev.com.br",
    "apitoken" => "YOUR_API_TOKEN",
    "session" => "YOUR_SESSION_NAME",
    "sessionkey" => "YOUR_SESSION_KEY",
    "wh_status" => "", //optional
    "wh_message" => "", //optional
    "wh_connect" => "", //optional
    "wh_qrcode" => "", //optional
]);

echo $start;
```

#### Get new QRCODE
```php 

use ApiGratis\ApiBrasil;

$qrcode = ApiBrasil::WhatsAppService("getQrCode?session=YOUR_SESSION_NAME&sessionkey=YOUR_SESSION_KEY", [
    "server_host" => "https://whatsapp2.contrateumdev.com.br",
    "method" => "GET",
])

header("content-type: image/png");
echo $qrcode;

```

#### Send messages text
```php
use ApiGratis\ApiBrasil;

$sendText = ApiBrasil::WhatsAppService("sendText", [
  "server_host" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "session_key" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
  "text" => "IS MY FIRST TEXT SEND FROM APIBRASIL.COM.BR"
]);

echo $sendText;
```

#### Partner project Myzap v2
https://github.com/edupoli/MyZap2.0<br/>
https://github.com/billbarsch/myzap

#### Don't a plan APIBrasil?
Visit https://apibrasil.com.br/

<img style="background:white" src="https://apigratis.com.br/static/img/logo.png" />
