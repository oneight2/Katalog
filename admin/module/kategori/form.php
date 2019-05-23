<?php
$id_kategori = isset($_GET["id_kategori"]) ? $_GET["id_kategori"] : false;
$kategori = "";
$status = "";
$button = "Tambah";
if($id_kategori){
$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
$row = mysqli_fetch_assoc($queryKategori);
$kategori = $row["kategori"];
$status = $row["status"];
$button = "Ubah";
}
?>
<div class="container-fluid">
  <div class="card shadow mb-4 mt-10">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
    </div>
    <div class="card-body">
      <form action="<?php echo BASE_URL."module/kategori/action.php?id_kategori=$id_kategori"; ?>" method="post">
        <div class="form-group row">
          <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Jenis Jaket">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <label class="col-form-legend col-sm-2">Status</label>
            <div class="col-sm-10">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="on" <?php if($status == "on"){ echo "checked = 'true'"; } ?>>
                  On
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="off" <?php if($status == "off"){ echo "checked = 'true'"; } ?>>
                  Off
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="button" value="<?= $button; ?>"><?= $button; ?></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>