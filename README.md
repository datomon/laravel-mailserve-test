## 關於

    (1)此 Laravel 套件是用來在本機快速測試 Laravel 專案的 Mail Server 資訊是否設定正確
    (2)未使用 Redis 及 Laravel 的 Queue

## 版本

    Laravel >= 5.5

## 用法

(1) 安裝套件

    composer require datomon/laravel-mailserve-test

(2) 在 .env 檔中，修改 Mail Server 的資訊

    MAIL_DRIVER=smtp
    MAIL_HOST=Mail Server 的主機位置
    MAIL_PORT=port號 (常見的有 25、465、587)
    MAIL_USERNAME=Mail Server 的帳號
    MAIL_PASSWORD=密碼
    MAIL_ENCRYPTION=加密方式 (常見的有 ssl、tls，而若用不加密的 25 port 則填 null 即可)
    MAIL_FROM_ADDRESS=寄件人的E-mail
    MAIL_FROM_NAME=寄件人的名稱

以 Google 信箱的範例如下

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=你的 gmail 帳號
    MAIL_PASSWORD=你的 gmail 帳號之登入密碼
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=abc123@gmail.com
    MAIL_FROM_NAME=ABC

- 要使用 gmail，需打開「允許低安全性應用程式」，請至 https://www.google.com/settings/security/lesssecureapps  
- 有些 Mail Server 會限制寄件人E-mail 必須與帳號相同，請特別注意各廠商的規定

(3) 寄出測試信

    $ php artisan mailserve:send 收件人E-mail 標題 信件內容

    例如：
    $ php artisan mailserve:send example@gmail.com 測試標題 這是測試文字

## License

[MIT license](https://opensource.org/licenses/MIT).
