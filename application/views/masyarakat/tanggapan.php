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
    echo '
</div>';
?>