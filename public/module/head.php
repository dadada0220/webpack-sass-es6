<meta charset="UTF-8">

<!-- TDK -->
<title><?php echo $META['title']; ?></title>
<meta name="description" content="<?php echo $META['description']; ?>">

<!-- JavaScript -->
<?php
$dir_js = __dir__ . '/..' . $ASSETS_JS . 'application.js';
$parm_js = $ADD_ASSETS_PARMA
  ? (file_exists($dir_js) ? '?v=' . filemtime($dir_js) : '')
  : '';
?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="<?php echo $ASSETS_JS . 'application.js' . $parm_js; ?>" defer></script>

<!-- CSS -->
<?php
$dir_css = __dir__ . '/..' . $ASSETS_CSS . 'style.css';
$parm_css = $ADD_ASSETS_PARMA
  ? (file_exists($dir_css) ? '?v=' . filemtime($dir_css) : '')
  : '';
?>
<link rel="stylesheet" href="<?php echo $ASSETS_CSS . 'style.css' . $parm_css; ?>">

<!-- Favicon -->
<link rel="icon" href="<?php echo $ASSETS_IMG . '_common/favicon/favicon.ico'; ?>" sizes="any">
<link rel="icon" href="<?php echo $ASSETS_IMG . '_common/favicon/favicon.svg'; ?>" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?php echo $ASSETS_IMG . '_common/favicon/apple-touch-icon.png'; ?>">

<!-- Other -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- OGP -->
<meta property="og:title" content="<?php echo $META['title']; ?>">
<meta property="og:description" content="<?php echo $META['description']; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta property="og:image" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $ASSETS_IMG . '_common/ogp.png'; ?>">
<meta property="og:site_name" content="<?php echo $SITE_NAME; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo $OG_TWITTER_ID; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="fb:app_id" content="<?php echo $OG_FACEBOOK_ID; ?>">