# Install
```composer require jhowbhz/package-apigratis```

# Hosts free
```https://apigratis.com.br/documentacoes```

# Project Myzap
```https://github.com/billbarsch/myzap```

```https://github.com/edupoli/MyZap2.0```

# Examples usage
```
use ApiGratis;

$data = ['apitoken' => '', 'session_name' => 'SUA SESSION NAME', 'session_key' => 'SUA SESSION KEY' ];
ApiGratis::WhatsAppService('start', $data);
```

```
use ApiGratis;

$data = ['session' => 'SUA SESSION NAME', 'session_key' => 'SUA SESSION KEY', 'number' => 'DESTINO', 'TEXTO A SER ENVIADO' ];
ApiGratis::WhatsAppService('sendText', $data);
```

# Package-apigratis
Uma maneira fácil de consumir serviços de API do site https://apigratis.com.br
