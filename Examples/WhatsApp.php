<?phphttps://github.com/jhowbhz/package-apigratis/tree/stable/Examples

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

use ApiGratis\ApiBrasil;

class Example
{

    // start new instance    
    static function start()
    {
        return ApiBrasil::WhatsAppService("start", [
            "serverhost" => "https://whatsapp2.contrateumdev.com.br", //required
            "method" => "POST", //optional
            "apitoken" => "YOUR_API_TOKEN", //required
            "session" => "YOUR_SESSION_NAME", //required
            "sessionkey" => "YOUR_SESSION_KEY", //required
            "wh_status" => "", //optional
            "wh_message" => "", //optional
            "wh_connect" => "", //optional
            "wh_qrcode" => "", //optional
        ]);
    }

    // get qrcode    
    static function qrcode()
    {
        return ApiBrasil::WhatsAppService("getQrCode", [
            "serverhost" => "https://whatsapp2.contrateumdev.com.br", //required
            "serverhost" => $server->host,
            "sessionkey" => $session->session_key,
            "session" => $session->session_name,
            "method" => "GET",
            "method" => "GET", //required
        ]);

    }

}

//$start = Example::start();
//$qrcode = Example::qrcode();
