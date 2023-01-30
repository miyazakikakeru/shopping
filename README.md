# Shopping サイト

ログイン機能・商品絞り込みを学びたくて、ショッピングサイトを作りました。

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
が起動しているか確認してください。

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

## 制作日数
２ヶ月程度
