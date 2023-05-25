<?php

/**
 * TDK
 */
$SITE_NAME = 'サイト名';
$SITE_DESCRIPTION = 'サイトの説明文がここには入ります。';

/**
 * サイトタイトル
 * （各ページでタイトルを定義していたら、`タイトル | $SITE_NAME`の形式にする）
 */
$META['title'] = !isset($PAGE_DATA['title']) || empty($PAGE_DATA['title'])
  ? $SITE_NAME
  : $PAGE_DATA['title'] . ' | ' . $SITE_NAME;

/**
 * ディスクリプション
 * （各ページでディスクリプションを定義していたら、そっちをdescriptionに適用させる）
 */
$META['description'] = !isset($PAGE_DATA['description']) || empty($PAGE_DATA['description'])
  ? $SITE_DESCRIPTION
  : $PAGE_DATA['description'];

/**
 * rootディレクトリ
 * ・ドメイン直下の場合 → '/';
 * ・ドメイン直下からフォルダを挟む場合 → '/dir/'; のように定義する
 */
$ROOT_DIR = '/';

/**
 * ホームディレクトリのURLを取得
 * （WPのhome_url()と同じ使い方）
 */
function home_url($path = '') {
  global $ROOT_DIR;
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $ROOT_DIR . $path;
  return $url;
}

/**
 * パスを定義
 */
$ASSETS = home_url('assets/');
$ASSETS_IMG = $ASSETS . 'img/';
$ASSETS_CSS = $ASSETS . 'css/';
$ASSETS_JS = $ASSETS . 'js/';

/**
 * 【キャッシュ対策】CSS, JSにパラメータを動的に付与する
 * （filemtime関数でファイルの更新日時を取得してパラメータにしている）
 */
$ADD_ASSETS_PARMA = true;

/**
 * OGP関連
 */
$OG_TWITTER_ID = '@';
$OG_FACEBOOK_ID = '';
