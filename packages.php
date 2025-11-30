<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2><?= $game['name'] ?> Packages</h2>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
    <?php foreach($packages as $p): ?>
        <div class="card" style="width:240px;">
            <h3><?= $p['title'] ?></h3>
            <p><?= $p['amount'] ?></p>
            <p><b>Rp <?= number_format($p['price'],0,",",".") ?></b></p>
            <a href="/topup/buy/<?= $p['id'] ?>" class="btn">Top-Up</a>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
