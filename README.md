# Package APIGratis 

[![latest stable version](https://poser.pugx.org/jhowbhz/package-apigratis/v/stable.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)
[![license mit](https://poser.pugx.org/jhowbhz/package-apigratis/license.svg)](https://packagist.org/packages/jhowbhz/package-apigratis)

## Description
Com esse pacote é possível consumir as API's gratuitas do site https://apibrasil.com.br, de uma forma simples.

## Important notice
⚠️Versão beta tester, alguns ou mais recursos podem não funcionar perfeitamente, não utilize em ambiente de produção.

### Status

| Up  | Services available                   | Free    | Status in dev             | Stable in production      |
------|--------------------------------------|---------| ------------------------- | ------------------------- |
| ✅ | WhatsAppService                       |   ✅   | Developing                | Developing                |
| ⌚ | CorreiosService                       |   💰   | Loading                   | Loading                   |
| ⌚ | SinespService                         |   💰   | Loading                   | Loading                   |
| ⌚ | FipeService                           |   ✅   | Loading                   | Loading                   |
| ⌚ | TranslateService                      |   💰   | Loading                   | Loading                   |

## Instructions
```composer require jhowbhz/package-apigratis```

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
  "IS MY FIRST TEXT SEND FROM APIBRASIL.COM.BR" //required
];

ApiGratis::WhatsAppService("sendText", $data);
```

## Partner project Myzap v2
https://github.com/billbarsch/myzap

https://github.com/edupoli/MyZap2.0

## Don't a plan APIBrasil?
Visit https://apibrasil.com.br/

<img style="background:white" src="https://apigratis.com.br/static/img/logo.png" />
