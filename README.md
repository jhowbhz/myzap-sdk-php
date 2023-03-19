# Esse pacote só poderá ser usado com o MYZAP

Caso queira utilizar o apibrasil.com.br
- Atualize

https://github.com/APIBrasil/apigratis-sdk-php
# Package APIGratis 🚀

![APIGratis Banner](https://i.imgur.com/u6hYLsU.png)

[![latest stable version](https://poser.pugx.org/jhowbhz/myzap-sdk-php/v/stable.svg)](https://packagist.org/packages/jhowbhz/myzap-sdk-php)
[![license mit](https://poser.pugx.org/jhowbhz/myzap-sdk-php/license.svg)](https://packagist.org/packages/jhowbhz/myzap-sdk-php)
<a href="https://github.com/jhowbhz/myzap-sdk-php/issues" target="_blank"><img alt="GitHub issues" src="https://img.shields.io/github/issues/jhowbhz/myzap-sdk-php"></a>
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/jhowbhz/myzap-sdk-php/total">
<a href="https://github.com/jhowbhz/myzap-sdk-php/network" target="_blank"><img alt="GitHub forks" src="https://img.shields.io/github/forks/jhowbhz/myzap-sdk-php"></a>
<a href="https://github.com/jhowbhz/myzap-sdk-php/stargazers" target="_blank"><img alt="GitHub stars" src="https://img.shields.io/github/stars/jhowbhz/myzap-sdk-php"></a>
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)

## Description
> With this package it is possible to consume the free API's from the website <a href="https://apibrasil.com.br" target="_blank"> APIGratis </a> , in a simple way.

## Important notice
> ⚠️<strong>Beta tester version</strong>, some or more features may not work perfectly, do not use in production environment.

## Our online channels

[![Telegram Group](https://img.shields.io/badge/Telegram-Group-32AFED?logo=telegram)](https://t.me/apigratisoficial)
[![WhatsApp Group](https://img.shields.io/badge/WhatsApp-Group-25D366?logo=whatsapp)](https://chat.whatsapp.com/KsxrUGIPWvUBYAjI1ogaGs)
[![YouTube](https://img.shields.io/youtube/channel/subscribers/UC-_mG5VU7maEKt5rUj8tSbQ?label=YouTube)](https://www.youtube.com/channel/UC-_mG5VU7maEKt5rUj8tSbQ)


## Install package with composer
```composer require jhowbhz/myzap-sdk-php```

## Status developing

| Up  | Services available            | Description       | Free    | Beta        | Stable   |
------|-------------------------------|-------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                | Free in WhatsApp API.        |   ✅   | OK                | OK                    |

## WhatsAppService - Examples usage

### Start new session
    
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
### Get new QRCODE
    
```php
use ApiGratis\ApiBrasil;

$qrcode = ApiBrasil::WhatsAppService("getQrCode?session=YOUR_SESSION_NAME&sessionkey=YOUR_SESSION_KEY", [
    "serverhost" => "https://whatsapp2.contrateumdev.com.br",
    "method" => "GET",
])

header("content-type: image/png");

echo $qrcode;
```

### 💰 Get all chats ⭐new

```php
use ApiGratis\ApiBrasil;

$allchats = ApiBrasil::WhatsAppService("getAllChat", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $allchats;
```

### 💰 Get all for number ⭐new


```php
use ApiGratis\ApiBrasil;

$getmessagesnumber = ApiBrasil::WhatsAppService("getMessagesChat", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "55995360492",
]);

echo $getmessagesnumber;
```

### 💰 Get infos host device ⭐new

```php
use ApiGratis\ApiBrasil;

$gethostdevice = ApiBrasil::WhatsAppService("getHostDevice", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $gethostdevice;
```

### Send text to number
    
```php
use ApiGratis\ApiBrasil;

$sendText = ApiBrasil::WhatsAppService("sendText", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "55995360492",
  "text" => "IS MY FIRST TEXT SEND FROM APIBRASIL.COM.BR"
]);

echo $sendText;
```
### Send images and files remote path ⭐new

```php
use ApiGratis\ApiBrasil;

$sendfile = ApiBrasil::WhatsAppService("sendFile", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
  "number" => "55995360492",
  "fileName" => "FILE_NAME"
  "path" => "https://www.euax.com.br/wp-content/uploads/2019/10/Teste.png"
  "caption" => "FILE_CAPTION"
]);

echo $sendfile;
```

### Send images and files base64 ⭐new

```php
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

### Send audio ⭐new

```php
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

### 💰 Send buttons ⭐new

```php
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

### Get all groups ⭐new

```php
use ApiGratis\ApiBrasil;

$groups = ApiBrasil::WhatsAppService("getAllGroups", [
  "serverhost" => "https://whatsapp2.contrateumdev.com.br",
  "session" => "YOUR_SESSION_NAME",
  "sessionkey" => "YOUR_SESSION_KEY",
]);

echo $groups;
```

## Partner project Myzap v2
https://github.com/edupoli/MyZap2.0<br/>
https://github.com/billbarsch/myzap

### Service free powered by
<a href="https://apibrasil.com.br" target="_blank"> APIBrasil </a>
