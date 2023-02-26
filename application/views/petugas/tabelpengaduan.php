<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Pelapor</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($aduan as $ad){
                if($ad['status']=='0'){
                    $status='Menunggu';
                }else{
                    $status=$ad['status'];
                }
                echo ' <tr>
                <td>'.$no.'</td>
                <td>'.$ad['tgl_pengaduan'].'</td>
                <td>'.$ad['nama'].'</td>
                <td>'.$ad['isi_laporan'].'</td>
                <td>'.$status.'</td>
                <td><a href="'.base_url('petugas/detailaduan/').$ad['id_pengaduan'].'" class="btn btn-sm btn-primary">Ubah Status</a>&nbsp;<a href="'.base_url('petugas/tanggapan/').$ad['id_pengaduan'].'" class="btn btn-sm btn-success">Tanggapan</a></td>
            </tr>';
            $no++;
            }
            ?>
            </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Pelapor</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>