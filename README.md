
# PHP HTTP Request Utility with Proxy Support

This repository contains a simple PHP utility class for making HTTP requests with cURL. The `HTTPX` class provides basic support for various HTTP methods (GET, POST, PUT, PATCH, DELETE), and allows setting a proxy with optional authentication.


## Features

- HTTP Requests: Send HTTP requests with various methods (`GET`, `POST`, `PUT`, `PATCH`, `DELETE`).
- Proxy Support: Set a proxy for requests, including support for `HTTP` or `SOCKS5` proxies with optional authentication.
- Cookie Management: Uses a cookie jar for managing cookies across requests.


### Installation
Clone this repository to your local environment.
    
    $ git clone https://github.com/DevXAni/HTTPX.git

# Usage
#### 1. Including the Class
--------
```php
require_once 'HttpX.php';
$SendRequest = new HttpX();
```
-------
#### 2. Setting a Proxy (optional):
--------
```php
$SendRequest::setProxy('http://proxyserver:8080', 'user:password');
```
-------
#### 3. Sending an HTTP Request::
--------
```php
$response = $SendRequest::send('https://example.com', 'GET')->body;
```

# Examples
### POST Syntax

```php
$headers = [
  'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
  'accept-language: en-US,en;q=0.8',
  'content-type: application/x-www-form-urlencoded',
  'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_6) AppleWebKit/603.3 (KHTML, like Gecko) Chrome/48.0.3698.118 Safari/600',
];
$url = 'https://example.com/';
$data = 'example';
$SendRequest::send($url, "POST", $data, $headers)->body;
```
### GET Syntax

```php
$headers = [
  'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
  'accept-language: en-US,en;q=0.8',
  'content-type: application/x-www-form-urlencoded',
  'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_6) AppleWebKit/603.3 (KHTML, like Gecko) Chrome/48.0.3698.118 Safari/600',
];
$url = 'https://example.com/';
$SendRequest::send($url, "GET",headers: $headers)->body;
```

## Contributing

Contributions to enhance the features or fix bugs are welcome. Feel free to open pull requests or issues for suggestions, improvements, or questions.

## License

This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License. Feel free to use and modify the code as needed.

--------
## Authors

- [@DevXAni](https://www.github.com/DevXAni)


## 🔗 Links
[![telegram](https://img.shields.io/badge/Telegram-2CA5E0?style=flat-squeare&logo=telegram&logoColor=white)](https://t.me/OriginalAni)
