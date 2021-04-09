<div class="vh-100 vw-100 black d-flex flex-column align-items-start justify-content-center">
  <div class="container">
    <a href="<?=BASEURL;?>/ternak" class="btn btn-outline-light mb-3">Kembali</a>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?=$data['ternak']['nama_ternak'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?=$data['ternak']['jumlah'];?> Ekor</h6>
        <p class="card-text">Rp.<?=$data['ternak']['modal'];?>.00</p>
      </div>
    </div>
  </div>
</div>
