<?php
// ================================================================================================================================
class HTTPX
{
    private static $cookieFile = 'cookie.txt';
    private static $proxy = null;
    private static $proxyAuth = null;

    public static function setProxy($proxy, $proxyAuth = null): void
    {
        self::$proxy = $proxy;
        self::$proxyAuth = $proxyAuth;
    }

    public static function send($url, $method = 'GET', $data = null, $headers = []): string
    {
        $ch = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_COOKIEFILE => getcwd() . '/' . self::$cookieFile,
            CURLOPT_COOKIEJAR => getcwd() . '/' . self::$cookieFile,
        ];

        if (self::$proxy) {
            $options[CURLOPT_PROXY] = self::$proxy;
            if (self::$proxyAuth) {
                $options[CURLOPT_PROXYUSERPWD] = self::$proxyAuth;
            }
        }

        if (in_array($method, ['POST', 'PUT', 'PATCH'])) {
            if (is_array($data)) {
                $options[CURLOPT_POSTFIELDS] = http_build_query($data);
            } else {
                $options[CURLOPT_POSTFIELDS] = $data;
            }
        }

        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception('Client Error - »' . curl_error($ch));
        }

        curl_close($ch);
        return $response;
    }
}
// ============================================================================================================================
?> 
