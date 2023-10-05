<h2>Ubah Data Tamu</h2>
<hr>
<?php
$nktp = mysqli_query($config, "select * from tamu where noktp='$_GET[id]'");
$data = mysqli_fetch_assoc($nktp);
?>
<form method="post">
    <div class="form-group">
        <label>No KTP</label>
        <input type="number" class="form-control" name="noktp" readonly value="<?php echo $data['noktp']?>">
    </div>
    <div class="form-group">
        <label>No Handphone</label>
        <input type="number" class="form-control" name="nohp" value="<?php echo $data['nohp']?>">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nm" value="<?php echo $data['nama']?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" rows="3" name="alm"><?php echo $data['alamat']?></textarea>
    </div>
    <button class="btn btn-primary w-100" name="ubahdata">UPDATE DATA</button>
</form>                       
<?php
if (isset($_POST['ubahdata'])) {

$sql=mysqli_query($config,"update tamu set nohp='$_POST[nohp]',nama='$_POST[nm]',
alamat='$_POST[alm]' WHERE noktp='$_GET[id]'");

echo "<script>alert('Data berhasil di update');</script>";
echo "<script>location='index.php?halaman=datatamu';</script>";
}
?>