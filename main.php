<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'TayaBau TopUp' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <h1 class="logo">TayaBau<span>TopUp</span></h1>

        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>

                <?php if(!session('isLoggedIn')): ?>
                    <li><a href="/auth/login">Masuk</a></li>
                    <li><a href="/auth/register">Daftar</a></li>
                <?php else: ?>
                    <?php if(session('role') == 'admin'): ?>
                        <li><a href="/admin">Admin</a></li>
                    <?php else: ?>
                        <li><a href="/topup">TopUp</a></li>
                    <?php endif; ?>

                    <li><a href="/auth/logout" class="btn-logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

<main class="content">
    <?= $this->renderSection('content') ?>
</main>

<footer class="footer">
    <p>© <?= date('Y') ?> TayaBau TopUp — Semua Hak Dilindungi</p>
</footer>

</body>
</html>
