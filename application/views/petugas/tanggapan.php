<?php

validation_errors();
if($detailaduan[0]['status']=='0'){
    $status='menunggu';
}else{
    $status=$detailaduan[0]['status'];
}

echo '
<div class="card">
  <img src="'.base_url('img/').$detailaduan[0]['foto'].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Laporan dari:'.$detailaduan[0]['nama'].'</h5>
    <p class="card-text">'.$detailaduan[0]['isi_laporan'].'</p>
    <p class="card-text">Status:'.$status.'</p> </div>' ;
    foreach($tanggapan as $tgp){
        echo '
        <div class="card-footer">
        <p>'.$tgp['tgl_tanggapan'].'</p>
        <p>'.$tgp['tanggapan'].'</p>
        </div>';
    
    }
    echo '<div class="card-footer">
    <form action="'.base_url('petugas/tambahtanggapan/').$detailaduan[0]['id_pengaduan'].'" method="POST">
    <div class="form-floating">
    <textarea class="form-control" id="tanggapan" name="tanggapan" required></textarea>
    <label for="tanggapan">Tanggapan Petugas</label>
    <button type="submit" class="btn btn-sm btn-primary mt-3 float-end">kirim</button>
    </div>
    </form>
    </div>';
   
    echo '
</div>';
?>