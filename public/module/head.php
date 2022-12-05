<meta charset="UTF-8">

<!-- TDK -->
<title><?= $TITLE; ?></title>
<meta name="description" content="<?= $DESCRIPTION; ?>">

<!-- JavaScript -->
<?php
$dir_js = __dir__ . '/..' . $ASSETS_JS . 'application.js';
$parm_js = $IS_ASSETS_ADD_PARMA
  ? (file_exists($dir_js) ? '?v=' . filemtime($dir_js) : '')
  : '';
?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="<?= $ASSETS_JS . 'application.js' . $parm_js; ?>" defer></script>

<!-- CSS -->
<?php
$dir_css = __dir__ . '/..' . $ASSETS_CSS . 'style.css';
$parm_css = $IS_ASSETS_ADD_PARMA
  ? (file_exists($dir_css) ? '?v=' . filemtime($dir_css) : '')
  : '';
?>
<link rel="stylesheet" href="<?= $ASSETS_CSS . 'style.css' . $parm_css; ?>">

<!-- Favicon -->
<link rel="icon" href="<?= $ASSETS_IMG . '_common/favicon/favicon.ico'; ?>" sizes="any">
<link rel="icon" href="<?= $ASSETS_IMG . '_common/favicon/favicon.svg'; ?>" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?= $ASSETS_IMG . '_common/favicon/apple-touch-icon.png'; ?>">
<link rel="manifest" href="<?= $ASSETS_IMG . '_common/favicon/manifest.webmanifest'; ?>">

<!-- Other -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- OGP -->
<meta property="og:title" content="<?= $TITLE; ?>">
<meta property="og:description" content="<?= $DESCRIPTION; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta property="og:image" content="<?= (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $ASSETS_IMG . '_common/ogp.png'; ?>">
<meta property="og:site_name" content="<?= $SITE_NAME; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?= $OG_TWITTER_ID; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="fb:app_id" content="<?= $OG_FACEBOOK_ID; ?>">