<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="card">
    <h2>Checkout - <?= $package['title'] ?></h2>

    <form method="post">
        <label>ID / UID / Nickname:</label>
        <input type="text" name="player_id" required
            style="width:100%;padding:10px;margin:10px 0;border-radius:8px;border:1px solid #ffc2d9;" />

        <button class="btn">Buat Transaksi</button>
    </form>
</div>

<?= $this->endSection() ?>
