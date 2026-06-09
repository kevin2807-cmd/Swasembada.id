<div class="header">
    <h1>Peta Ketahanan Pangan Indonesia</h1>
    <p>Klik provinsi untuk melihat detail (Halaman
        <?= $data['page']; ?>)
    </p>
</div>

<div class="container">
    <div class="stats">
        <div class="card">
            <p>Aman</p>
            <h2 class="green">19</h2>
        </div>
        <div class="card">
            <p>Waspada</p>
            <h2 class="yellow">10</h2>
        </div>
        <div class="card">
            <p>Rawan</p>
            <h2 class="red">9</h2>
        </div>
    </div>

    <div class="main">
        <div class="map">
            <h3>Peta Indonesia</h3>
            <img src="<?= BASEURL; ?>/assets/images/peta-indonesia.png">
        </div>

        <div class="provinsi">
            <h3>Daftar Provinsi</h3>
            <div class="provinsi-grid">
                <?php foreach ($data['wilayah'] as $item) : ?>
                <label class="prov <?= $item['status']; ?>" for="<?= $item['id']; ?>">
                    <?= $item['display']; ?>
                </label>
                <?php endforeach; ?>
            </div>

            <div class="next" style="margin-top: 20px;">
                <?php if ($data['prev_page']) : ?>
                <a href="<?= $data['prev_page']; ?>">← Halaman 1</a>
                <?php endif; ?>

                <?php if ($data['next_page']) : ?>
                <a href="<?= $data['next_page']; ?>">Halaman 2 →</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<input type="radio" name="p" id="close" checked>
<?php foreach ($data['wilayah'] as $item) : ?>
<input type="radio" name="p" id="<?= $item['id']; ?>">
<?php endforeach; ?>

<div class="detail">
    <label class="close" for="close">✕</label>

    <?php $i = 1; foreach ($data['wilayah'] as $item) : ?>
    <div class="content c<?= $i++; ?>">
        <h2>
            <?= $item['nama']; ?>
        </h2>
        <span class="badge <?= $item['status']; ?>">
            <?= ($item['status'] === 'aman') ? 'Aman' : (($item['status'] === 'was') ? 'Waspada' : 'Rawan'); ?>
        </span>
        <p>Skor:
            <?= $item['skor']; ?>
        </p>
        <p>Komoditas Utama:
            <?= $item['komoditas']; ?>
        </p>
    </div>
    <?php endforeach; ?>
</div>