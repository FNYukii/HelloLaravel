# Hello Laravel

## 概要
Laravel 9に入門してみた。データベースのCRUDを簡単に試すアプリ。

## 使用技術
- PHP 8.1.8
- Composer 2.3.10
- Laravel 9.22.1
- MySQL 8.0.30

## 環境構築
1. PHP・Laravel・MySQLを利用できる環境を用意する

2. MySQLにデータベースを作成する
    ```
    $ mysql -u root -p
    Enter password:
    mysql> create database HelloLaravel;
    ```

3. `/.env`ファイルを編集する
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=HelloLaravel # 作成したデータベース名
    DB_USERNAME=root
    DB_PASSWORD=secret # 設定したパスワード
    ```

    ```
    $ php artisan cache:clear
    ```

4. Migrationを実行し、必要なテーブルを作成する
    ```
    $ php artisan migrate
    ```

5. テストデータを入れたいならSeedingを実行する(任意)
    ```
    $ php artisan db:seed
    ```
