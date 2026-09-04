<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($title ?? 'Fireside Serviços') ?></title>
<meta name="description" content="<?= htmlspecialchars($description ?? 'Soluções completas em prevenção e combate a incêndio.') ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($title ?? 'Fireside Serviços') ?>">
<meta property="og:description" content="<?= htmlspecialchars($description ?? '') ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage ?? '<?= ASSETS ?>/images/og-default.jpg') ?>">
<meta property="og:url" content="<?= htmlspecialchars($ogUrl ?? 'https://www.firesideservicos.com.br') ?>">
<meta property="og:type" content="website">

<!-- CSS -->
<link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?= ASSETS ?>css/style.css">

<!-- Favicons -->
<link rel="icon" type="image/png" sizes="32x32" href="<?= ASSETS ?>images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS ?>images/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="<?= ASSETS ?>images/favicon/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="<?= ASSETS ?>images/favicon/apple-touch-icon.png">