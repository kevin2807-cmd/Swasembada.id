<section class="hero">
  <h1>Harga<span> Komoditas</span><br>Pangan</h1>
  <p>Informasi Harga Komoditas Pangan per 30 April 2026</p>
</section>

<div class="container">
    <div class="legend">
      <div class="legend-item"><div class="legend-color" style="background:var(--jawa)"></div> Jawa</div>
      <div class="legend-item"><div class="legend-color" style="background:var(--sumatra)"></div> Sumatra</div>
      <div class="legend-item"><div class="legend-color" style="background:var(--sulawesi)"></div> Sulawesi</div>
    </div>

    <h2>Grafik Perbandingan Harga Per Komoditas</h2>
    <div class="charts-grid">
      <?php $no = 1; foreach ($data['statistik'] as $item) : ?>
      <div class="chart-wrap">
        <div class="chart-title"><?= $no++; ?>. <?= $item['nama']; ?></div>
        <div class="chart">
          <div class="bar-group">
            <div class="bar bar-jawa" style="height:calc(<?= $item['jawa']; ?> / <?= $item['max']; ?> * 100%)">
              <span class="bar-value"><?= $item['jawa_lbl']; ?></span>
            </div>
            <div class="bar-label">Jawa</div>
          </div>
          <div class="bar-group">
            <div class="bar bar-sumatra" style="height:calc(<?= $item['sumatra']; ?> / <?= $item['max']; ?> * 100%)">
              <span class="bar-value"><?= $item['sumatra_lbl']; ?></span>
            </div>
            <div class="bar-label">Sumatra</div>
          </div>
          <div class="bar-group">
            <div class="bar bar-sulawesi" style="height:calc(<?= $item['sulawesi']; ?> / <?= $item['max']; ?> * 100%)">
              <span class="bar-value"><?= $item['sulawesi_lbl']; ?></span>
            </div>
            <div class="bar-label">Sulawesi</div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h2>Data Tabel Lengkap 30 April 2026</h2>
    <div class="card">
      <table>
        <thead>
          <tr>
            <th>Komoditas</th>
            <th>Jawa</th>
            <th>Sumatra</th>
            <th>Sulawesi</th>
            <th>Satuan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['statistik'] as $item) : ?>
          <tr>
            <td><?= $item['nama']; ?></td>
            <td><?= $item['jawa_rp']; ?></td>
            <td><?= $item['sumatra_rp']; ?></td>
            <td><?= $item['sulawesi_rp']; ?></td>
            <td><?= $item['satuan']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <p class="footer" style="text-align: center; margin-top: 30px; font-size: 0.8rem; color: #666;">
      Sumber: SISKAPERBAPO Jatim, PIHPS BI. Dashboard . Data 30 April 2026.
    </p>
</div>