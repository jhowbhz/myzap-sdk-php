# Package APIGratis 🚀


![APIGratis Banner](https://i.imgur.com/u6hYLsU.png)

[![latest stable version](https://poser.pugx.org/jhowbhz/package-apigratis/v/stable.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
[![license mit](https://poser.pugx.org/jhowbhz/package-apigratis/license.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
<a href="https://github.com/jhowbhz/package-apigratis/issues" target="_blank"><img alt="GitHub issues" src="https://img.shields.io/github/issues/jhowbhz/package-apigratis"></a>
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/jhowbhz/package-apigratis/total">
<a href="https://github.com/jhowbhz/package-apigratis/network" target="_blank"><img alt="GitHub forks" src="https://img.shields.io/github/forks/jhowbhz/package-apigratis"></a>
<a href="https://github.com/jhowbhz/package-apigratis/stargazers" target="_blank"><img alt="GitHub stars" src="https://img.shields.io/github/stars/jhowbhz/package-apigratis"></a>
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)

## Description
> With this package it is possible to consume the free API's from the website <a href="https://apibrasil.com.br" target="_blank"> APIGratis </a> , in a simple way.

## Important notice
> ⚠️<strong>Beta tester version</strong>, some or more features may not work perfectly, do not use in production environment.

## Our online channels

[![WhatsApp Group](https://img.shields.io/badge/WhatsApp-Group-25D366?logo=whatsapp)](https://chat.whatsapp.com/KsxrUGIPWvUBYAjI1ogaGs)
[![YouTube](https://img.shields.io/youtube/channel/subscribers/UC-_mG5VU7maEKt5rUj8tSbQ?label=YouTube)](https://www.youtube.com/channel/UC-_mG5VU7maEKt5rUj8tSbQ)


## Install package with composer
```composer require jhowbhz/package-apigratis```

## Status developing

| Up  | Services available            | Description       | Free    | Beta        | Stable   |
------|-------------------------------|-------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                | Free in WhatsApp API.        |   ✅   | OK                | OK                    |
| ⌚ | CorreiosService                | API CEP or Tracker packages, correios Brazil.      |   💰   | Loading                   | Loading                   |
| ⌚ | SinespService                  | API Plate get infos vehicle.       |   💰   | Loading                   | Loading                   |
| ⌚ | FipeService                    | FIPE value the velhicle plate.       |   ✅   | Loading                   | Loading                   |
| ⌚ | TranslateService               | Translate texts in multiples languages.      |   💰   | Loading                   | Loading                   |

## WhatsAppService - Examples usage

<details>
<summary> Start new session</summary>
    
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

</details>

<details>
<summary> Get new QRCODE</summary>
    
```php
use ApiGratis\ApiBrasil;

$qrcode = ApiBrasil::WhatsAppService("getQrCode?session=YOUR_SESSION_NAME&sessionkey=YOUR_SESSION_KEY", [
    "server_host" => "https://whatsapp2.contrateumdev.com.br",
    "method" => "GET",
])

header("content-type: image/png");

echo $qrcode;
```
    
</details>

<details>
<summary> Send text to number</summary>
    
```php
use ApiGratis\ApiBrasil;

$sendText = ApiBrasil::WhatsAppService("sendText", [
  "server_host" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
  "text" => "IS MY FIRST TEXT SEND FROM APIBRASIL.COM.BR"
]);

echo $sendText;
```

</details>

<details>
<summary> Send images and files remote path ⭐new</summary>

```php
use ApiGratis\ApiBrasil;

$sendfile = ApiBrasil::WhatsAppService("sendFile", [
  "server_host" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
  "fileName" => "FILE_NAME"
  "path" => "https://www.euax.com.br/wp-content/uploads/2019/10/Teste.png"
  "caption" => "FILE_CAPTION"
]);

echo $sendfile;
```

</details>

<details>
<summary> Send images and files base64 ⭐new</summary>

```php
use ApiGratis\ApiBrasil;

$sendfile64 = ApiBrasil::WhatsAppService("sendFile64", [
  "server_host" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
  "fileName" => "FILE_NAME"
  "path" => "data:application/pdf;base64,....."
  "caption" => "FILE_CAPTION"
]);

echo $sendfile64;
```

</details>

## Partner project Myzap v2
https://github.com/edupoli/MyZap2.0<br/>
https://github.com/billbarsch/myzap

### Service powered by
<a href="https://apibrasil.com.br" target="_blank"> APIBrasil </a>