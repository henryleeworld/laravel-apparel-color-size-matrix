# Laravel 11 服飾顏色尺寸表

服飾最大的特色就是產品的多樣性，一件設計師的作品，可能用了不同顏色、尺寸，變成不同的 SKU，這樣的目的主要是提高消費者的可選擇性。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 註冊後，可以經由 `/login` 來進行登入。
- 登入後，可以經由 `/products/{商品編號}` 來進行服飾顏色尺寸表瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/b00WWRO.png)
> 尺寸會因布料彈性、水洗處理、測量起訖點等因素，與實際衣服尺寸略有誤差
