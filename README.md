# Package APIGratis 
[![latest stable version](https://poser.pugx.org/jhowbhz/package-apigratis/v/stable.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
[![license mit](https://poser.pugx.org/jhowbhz/package-apigratis/license.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
<a href="https://github.com/jhowbhz/package-apigratis/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/jhowbhz/package-apigratis"></a>
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/jhowbhz/package-apigratis/total">
<a href="https://github.com/jhowbhz/package-apigratis/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/jhowbhz/package-apigratis"></a>
<a href="https://github.com/jhowbhz/package-apigratis/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/jhowbhz/package-apigratis"></a>
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)

## Description
Com esse pacote é possível consumir as API's gratuitas do site https://apibrasil.com.br, de uma forma simples.

## Important notice
⚠️Versão beta tester, alguns ou mais recursos podem não funcionar perfeitamente, não utilize em ambiente de produção.

## Install
```composer require jhowbhz/package-apigratis```

### Status

| Up  | Services available            | Description       | Free    | Beta        | Stable   |
------|-------------------------------|-------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                | This service is possible send messages text, files and start multiples sessions free in WhatsApp.        |   ✅   | Developing                | Developing                    |
| ⌚ | CorreiosService                | This service is possible get CEP or Tracker packages with multiples informations service correios Brazil.      |   💰   | Loading                   | Loading                   |
| ⌚ | SinespService                  | This service is possible get multiples informations the vehicle and FIPE value, with simple plate of vehicle.       |   💰   | Loading                   | Loading                   |
| ⌚ | FipeService                    | This service get FIPE value the velhicle plate.       |   ✅   | Loading                   | Loading                   |
| ⌚ | TranslateService               | This service translate texts in multiples languages.      |   💰   | Loading                   | Loading                   |

## WhatsAppService - Examples usage
```php
use ApiBrasil\ApiGratis;

$data = [
  "server_host" => "https://whatsapp2.contrateumdev.com.br", //required
  "method" => "POST", //optional
  "apitoken" => "YOUR_TOKEN_API", //required
  "session_name" => "YOUR_SESSION_NAME", //required
  "session_key" => "YOUR_SESSION_KEY", //required
  "wh_status" => "", //optional
  "wh_message" => "", //optional
  "wh_connect" => "", //optional
  "wh_qrcode" => "", //optional
];

ApiGratis::WhatsAppService("start", $data);
```

```php
use ApiBrasil\ApiGratis;

$data = [
  "server_host" => "https://whatsapp2.contrateumdev.com.br", //required
  "method" => "POST", //optional
  "session" => "YOUR_SESSION_NAME", //required
  "session_key" => "YOUR_SESSION_KEY", //required
  "number" => "+55995360492", //required
  "text" => "IS MY FIRST TEXT SEND FROM APIBRASIL.COM.BR" //required
];

ApiGratis::WhatsAppService("sendText", $data);
```

## Partner project Myzap v2
https://github.com/billbarsch/myzap

https://github.com/edupoli/MyZap2.0

## Don't a plan APIBrasil?
Visit https://apibrasil.com.br/

<img style="background:white" src="https://apigratis.com.br/static/img/logo.png" />
