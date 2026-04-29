# AWS PHP Webアプリ（ユーザー管理システム）

## 概要
AWS上に構築した、ユーザー登録・ログイン機能を持つWebアプリです。
EC2とRDSを利用し、インフラからアプリまで一貫して構築しました。

## 機能
- ユーザー登録
- ログイン / ログアウト
- ユーザー情報の編集
- ユーザー削除

## 使用技術
- AWS（EC2 / RDS）
- Nginx
- PHP
- MySQL

## インフラ構成
- EC2（Amazon Linux）
- RDS（MySQL）
- セキュリティグループでEC2 → RDSのみ接続許可

## 工夫した点
- パスワードをハッシュ化して保存（password_hash）
- セッション管理によるログイン状態の維持
- データベースとアプリケーションの分離

## 今後の改善
- UI改善
- Docker化
- AWS構成のコード化（Terraform）

## 学習メモ
GitHubへのpushとPull Requestの練習を行いました。

## コンフリクトテスト
AとBの変更を両方残す


##コンフリクトテスト
Git conflict practice: Aの変更

