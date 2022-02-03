# Package APIGratis 🚀


![APIGratis Banner](https://i.imgur.com/uGwboXm.png)

[![latest stable version](https://poser.pugx.org/jhowbhz/package-apigratis/v/stable.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
[![license mit](https://poser.pugx.org/jhowbhz/package-apigratis/license.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
<a href="https://github.com/jhowbhz/package-apigratis/issues" target="_blank"><img alt="GitHub issues" src="https://img.shields.io/github/issues/jhowbhz/package-apigratis"></a>
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/jhowbhz/package-apigratis/total">
<a href="https://github.com/jhowbhz/package-apigratis/network" target="_blank"><img alt="GitHub forks" src="https://img.shields.io/github/forks/jhowbhz/package-apigratis"></a>
<a href="https://github.com/jhowbhz/package-apigratis/stargazers" target="_blank"><img alt="GitHub stars" src="https://img.shields.io/github/stars/jhowbhz/package-apigratis"></a>
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)

## Description
> With this package it is possible to consume the free API's from the website <a href="https://apigratis.com.br" target="_blank"> APIGratis </a>, in a simple way.

## Our online channels

[![Telegram Group](https://img.shields.io/badge/Telegram-Group-32AFED?logo=telegram)](https://t.me/apigratisoficial)
[![WhatsApp Group](https://img.shields.io/badge/WhatsApp-Group-25D366?logo=whatsapp)](https://chat.whatsapp.com/KsxrUGIPWvUBYAjI1ogaGs)
[![YouTube](https://img.shields.io/youtube/channel/subscribers/UC-_mG5VU7maEKt5rUj8tSbQ?label=YouTube)](https://www.youtube.com/channel/UC-_mG5VU7maEKt5rUj8tSbQ)

## Status developing

| Up  | Services available            | Description       | Free    | Beta        | Stable   |
------|-------------------------------|-------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                | Free in WhatsApp API.        |   ✅   | OK                | OK                    |
| ⌚ | CorreiosService                | API CEP or Tracker packages, correios Brazil.      |   💰   | Loading                   | Loading                   |
| ⌚ | SinespService                  | API Plate get infos vehicle.       |   💰   | Loading                   | Loading                   |
| ⌚ | FipeService                    | FIPE value the velhicle plate.       |   ✅   | Loading                   | Loading                   |
| ⌚ | TranslateService               | Translate texts in multiples languages.      |   💰   | Loading                   | Loading                   |

## Install package with composer
```composer require jhowbhz/package-apigratis```

## WhatsAppService - Examples usage

<details>
<summary> Start new session</summary>
    
```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$start = ApiBrasil::WhatsAppService("start", [
    "serverhost" => "https://whatsapp2.contrateumdev.com.br",
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
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$qrcode = ApiBrasil::WhatsAppService("qrcode", [
    "serverhost" => "https://whatsapp2.contrateumdev.com.br",
    "method" => "GET",
])

header("content-type: image/png");

echo $qrcode;
```
    
</details>

<details>
<summary> 💰 Get all chats ⭐new</summary>
    
```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$allchats = ApiBrasil::WhatsAppService("getAllChats", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $allchats;
```

</details>

<details>
<summary> 💰 Get all chats for number ⭐new</summary>
    
```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$getmessagesnumber = ApiBrasil::WhatsAppService("getMessagesChat", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
]);

echo $getmessagesnumber;
```

</details>

<details>
<summary> 💰 Get infos host device ⭐new </summary>

```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$gethostdevice = ApiBrasil::WhatsAppService("getHostDevice", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $gethostdevice;
```
</details>

<details>
<summary> Send text to number</summary>
    
```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$sendText = ApiBrasil::WhatsAppService("sendText", [
    "serverhost" => "https://whatsapp-v2.apibrasil.com.br",
    "session" => "teste",
    "sessionkey" => "YOUR_SESSION_KEY",
    "number" => "553195360492",
    "text" => "IS MY FIRST TEXT SEND FROM https://apigratis.com.br"
]);

echo $sendText;
```

</details>

<details>
<summary> Send images and files remote path ⭐new</summary>

```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$sendfile = ApiBrasil::WhatsAppService("sendFile", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
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
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$sendfile64 = ApiBrasil::WhatsAppService("sendFile64", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
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

<details>
<summary> Send audio ⭐new</summary>

```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$sendaudio = ApiBrasil::WhatsAppService("sendAudio", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "+55995360492",
  "path" => "https://tuningmania.com.br/autosom/mp3/Sine%20sweep%20%2020%20kHz%20~%2020%20Hz.mp3"
]);

echo $sendaudio;
```
</details>

<details>
<summary> 💰 Send buttons ⭐new</summary>

```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$buttons = ApiBrasil::WhatsAppService("sendbutton", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "text" => "Teste de Envio de Mensagem com botoes",
  "title" => "Botões",
  "footer" => "Aqui vai o texto do rodapé da mensagem",
  "buttons" => [
        [
            "buttonId":"btn_sim", //get value in webhook
            "body" => ["displayText":"SIM" ]
        ],
        [
            "buttonId":"btn_nao", //get value in webhook
            "body" => ["displayText":"NÃO" ]
        ],
    ]
]);

echo $buttons;
```

</details>

<details>
<summary> Get all groups ⭐new</summary>

```php
require_once('vendor/autoload.php');
use ApiGratis\ApiBrasil;

$groups = ApiBrasil::WhatsAppService("getAllGroups", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $groups;
```
</details>

## Look and download this package in version JavaScript

https://www.npmjs.com/package/apigratis

## Partner project Myzap v2
https://github.com/edupoli/MyZap2.0<br/>
https://github.com/billbarsch/myzap

### Service free powered by
<a href="https://apigratis.com.br" target="_blank"> APIBrasil </a>
