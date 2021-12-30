## Description
Uma forma simples de consumir serviços de API grátis do site: https://apigratis.com.br
<br />
⚠️Versão beta tester, alguns ou mais recursos podem não funcionar perfeitamente, não utilize em ambiente de produção.

## Install
```composer require jhowbhz/package-apigratis```

## Examples usage
```
use ApiBrasil\ApiGratis;

$data = [
  "server_host" => "", //required
  "method" => "POST", //optional
  "apitoken" => "", //required
  "session_name" => "YOUR SESSION NAME", //required
  "session_key" => "YOUR SESSION KEY", //required
  "wh_status" => "", //optional
  "wh_message" => "", //optional
  "wh_connect" => "", //optional
  "wh_qrcode" => "", //optional
];

ApiGratis::WhatsAppService("start", $data);
```

```
use ApiBrasil\ApiGratis;

$data = [
  "server_host" => "", //required
  "method" => "POST", //optional
  "session" => "YOUR SESSION NAME", //required
  "session_key" => "YOUR SESSION KEY", //required
  "number" => "+55000000000", //required
  "TEXT SEND FRO APIBRASIL.COM.BR" //required
];

ApiGratis::WhatsAppService("sendText", $data);
```
## Hosts Myzap v2 free
https://apigratis.com.br/documentacoes

## Project Myzap v2
```https://github.com/billbarsch/myzap```

```https://github.com/edupoli/MyZap2.0```

