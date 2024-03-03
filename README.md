# web-app-tutorial

## What
同じコンテナですが仮想的に`/app`をフロントエンド、`/api`をバックエンドサーバーだと改定してフロントとAPIの接続の理解の雰囲気を掴むための簡易的なチュートリアルです。

## How
localマシンでDockerエンジンが起動している前提（Docker Desktopなど）で以下コマンド実行で起動します。
```
docker compose up -d
```
フロントエンドアプリ  
http://localhost/app

バックエンドAPI  
http://localhost/api