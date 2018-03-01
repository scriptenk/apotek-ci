
<div class="jumbotron text-center">
  <h2>DAFTAR OBAT</h2>
</div>

<div class="container" style="margin-bottom: 50px;">
  <?= $message; ?>
  <table class="table table-bordered table-striped" id="example1">
    <tr>
      <th>Kode Obat</th>
      <th>Nama</th>
      <th>Bentuk</th>
      <th>Konsumen</th>
      <th>Harga</th>
      <td></td>
    </tr>
    <?php foreach($obat as $item): ?>
    <tr>
      <td><?= $item->kode_obat; ?></td>
      <td><?= $item->nama; ?></td>
      <td><?= $item->bentuk; ?></td>
      <td><?= $item->konsumen; ?></td>
      <td><?= 'Rp '. number_format($item->harga, 0, ',', '.'); ?></td>
      <td>
        <a href="<?= site_url('admin/obat/daftar/'.$item->kode_obat);?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> | 
        <a data-toggle="modal" href="#<?= $item->kode_obat; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
        <div id="<?= $item->kode_obat?>" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Obat</h4>
              </div>
              <div class="modal-body">
                <h5>Hapus obat :&nbsp;<?= $item->nama; ?></h5>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn btn-danger" href="<?= site_url('admin/obat/hapus/'.$item->kode_obat);?>">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
</div>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>