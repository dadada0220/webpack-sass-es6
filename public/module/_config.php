<?php

// TDK
$SITE_NAME = 'サイト名';
$SITE_DESCRIPTION = 'サイトの説明文がここには入ります。';

// サイトタイトル
$TITLE = !isset($page_name) || empty($page_name)
  ? $SITE_NAME
  : $page_name . ' | ' . $SITE_NAME;

// ディスクリプション（各ページで定義する）
$DESCRIPTION = !isset($page_description) || empty($page_description)
  ? $SITE_DESCRIPTION
  : $page_description;

// rootディレクトリ
// ・ドメイン直下の場合 → '/';
// ・ドメイン直下からフォルダを挟む場合 → '/dir/';
$ROOT_DIR = '/';
function home_url($path = '') {
  global $ROOT_DIR;
  return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $ROOT_DIR . $path;
}

// パス
$ASSETS = home_url() . 'assets/';
$ASSETS_IMG = $ASSETS . 'img/';
$ASSETS_CSS = $ASSETS . 'css/';
$ASSETS_JS = $ASSETS . 'js/';

// 【キャッシュ対策】CSS, JSにパラメータを付ける
// （filemtime関数でファイルの更新日時をパラメータとして付与している）
$IS_ASSETS_ADD_PARMA = true;

// OGP関連
$OG_TWITTER_ID = '@';
$OG_FACEBOOK_ID = '';
