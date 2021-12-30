# Description
Uma maneira simples de consumir serviços de API do site: https://apigratis.com.br
<br />
⚠️Versão beta tester, alguns ou mais recursos podem não funcionar perfeitamente, não utilize em ambiente de produção.

## Install
```composer require jhowbhz/package-apigratis```

## Examples usage
```
use ApiBrasil\ApiGratis;

$data = [
  'server_host' => '',
  'apitoken' => '',
  'session_name' => 'YOUR SESSION NAME',
  'session_key' => 'YOUR SESSION KEY',
  'wh_status' => 'https://webhook.site',
  'wh_message' => 'https://webhook.site',
  'wh_connect' => 'https://webhook.site',
  'wh_qrcode' => 'https://webhook.site',
];

ApiGratis::WhatsAppService('start', $data);
```

```
use ApiBrasil\ApiGratis;

$data = [
  'server_host' => '',
  'session' => 'YOUR SESSION NAME',
  'session_key' => 'YOUR SESSION KEY', 
  'number' => '+55000000000', 
  'TEXT SEND FRO APIBRASIL.COM.BR' 
];

ApiGratis::WhatsAppService('sendText', $data);
```
## Hosts Myzap v2 free
https://apigratis.com.br/documentacoes

## Project Myzap v2
```https://github.com/billbarsch/myzap```

```https://github.com/edupoli/MyZap2.0```

