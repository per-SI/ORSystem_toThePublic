


## 概要
#### 発注・入替システム
 
 　接客やその他作業の傍ら、発注やレイアウト変更のサポートをするシステムです。
  
 　発注でも入替でも、アナログな状態（または旧システム）からこのシステムへの移行するために、効率的・直感的に操作できるような設計をしました。
  
 　発注書を作成し、発注書毎に商品の発注ができるシステムで、発注数によるランキング機能もあります。このためランキングを参考に、レイアウト変更をすることができます。
  
 　入替に関しては、事前のレイアウト変更とそのチェックができるよう、一時保存機能・一時保存呼出機能も備えています。こうすることで、手を離さないといけない時にも中断ができます。
  
 　レスポンシブ対応◎
 　
#### 参考動画

   <img width="100" height="180" alt="ORS-gif1" src="https://user-images.githubusercontent.com/78603215/112641396-b3025080-8e85-11eb-8570-6d3f5c74a00f.gif">     <img width="100" height="180" alt="ORS-gif2" src="https://user-images.githubusercontent.com/78603215/112641423-ba295e80-8e85-11eb-9cda-cbb97c3b8372.gif">     <img width="100" height="180" alt="ORS_gif3" src="https://user-images.githubusercontent.com/78603215/112641439-be557c00-8e85-11eb-856a-dc664060dd12.gif">


## 機能一覧
- ログイン（laravel/ui）
- アイテム登録・削除（同期、非同期）
- ドラッグアンドドロップ（js）
- タッチデバイス用ドラッグアンドドロップ（js）
- 一時保存、復元、保存（js, 非同期）
- カレンダー、祝日表示（js, Google Calendar API）
- 発注、発注書表示、期間選択しての発注ランキング（js, 非同期）
- 新規ショップ作成、発注・入替フレームの追加・削除（php,js）
- 発注入替フレームのレイアウト調整（php,js）
- ローディング中アニメーション（CSS, js）

## 使用技術
- PHP 7.4.11
- Laravel 8.27.0
- MySQL(MariaDB)
- JavaScript（ajaxにはaxios）
- HTML5
- CSS3
- Bootstrap5
- AWS
  - VPC
  - EC2(t2.micro)
  - RDS(MySQL)
  - Elastic IP
- Apache
- Google Calendar API

## AWS構成図
<img width="600" height="500" alt="AWS-Diagram" src="https://user-images.githubusercontent.com/78603215/112346882-bb358100-8d09-11eb-8083-904aba89cd51.png">
