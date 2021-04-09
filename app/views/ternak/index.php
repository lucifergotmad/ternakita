<div class="vh-100 vw-100 black d-flex flex-column align-items-start justify-content-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash();?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning py-2 px-3 mb-5 tambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Hewan Ternak
        </button>
        <h3 class="text-white mb-3">Daftar Ternak</h3>
        <ul class="list-group">
          <?php foreach ($data['ternak'] as $ternak): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center"><?=$ternak['nama_ternak'];?> - <?=$ternak['jumlah'];?> ekor
            <div class="wrapper">
              <a href="<?=BASEURL;?>/ternak/detail/<?=$ternak['id'];?>" class="btn btn-primary btn-sm">Detail</a>
              <a href="<?=BASEURL;?>/ternak/hapus/<?=$ternak['id'];?>" onclick="return confirm('Yakin mau menghapus data ini?');" class="btn btn-danger btn-sm">Hapus</a>
              <a href="<?=BASEURL;?>/ternak/update/<?=$ternak['id'];?>" class="btn btn-warning btn-sm tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?=$ternak['id']?>">Ubah</a>
          </div>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Hewan Ternak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL;?>/ternak/tambah" method="POST">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama Hewan</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="modal">Modal</label>
            <input type="number" class="form-control" id="modal" name="modal" autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
      </div>
    </div>
  </div>
</div>