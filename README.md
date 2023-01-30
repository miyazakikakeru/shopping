# Shopping サイト

ログイン機能・商品絞り込みを学びたく、ショッピングサイトを制作しました。

---
## 実施可能な機能
- ログイン機能
- 商品登録　削除　
- ユーザー登録　削除　
- 管理者登録　削除　　
- ユーザーの購入履歴
- 名前　パスワードの変更　
- 商品の絞り込み検索　
- 商品の購入

---
## 起動方法
docker compose up -d を入力
- Nginx
- PHP 8.1.0
- MySQL
- Redis

が起動しているか確認して下さい。
### 初期データ投入方法
~~~sh
docker compose exec php-fpm php artisan migrate
~~~
- create_users_table
- create_admin_table
- create_product_table
- create_user_archive

が起動しているか確認して下さい。

~~~sh
docker compose exec php-fpm php artisan db:seed 
~~~
- adminTableSeeder
- usersTableSeeder
- productTableSeeder

が起動しているか確認して下さい。

### ログイン方法

```
ユーザ画面URL: http://localhost:8080
ログイン
メールアドレス: test_user@exmaple.com
パスワード: password
```
```
管理者画面URL: http://localhost:8080/admin
ログイン
管理者ID: 1003
パスワード: password
```

## 制作期間
- 制作期間：２ヶ月程度
- 作成人数：２人

