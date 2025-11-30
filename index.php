<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Pilih Game</h2>

<div class="game-list" style="display:flex; flex-wrap:wrap; gap:20px;">
    <?php foreach($games as $g): ?>
        <a href="/topup/game/<?= $g['slug'] ?>" class="card" 
           style="width:200px; text-align:center; display:block;">
            <h3><?= $g['name'] ?></h3>
        </a>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
