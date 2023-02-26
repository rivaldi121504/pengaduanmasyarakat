<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @media print{
            html,body{
                width: 210mm;
                height:297mm;
            }
        }
    </style>
    <title>Cetak Laporan</title>
</head>
<body>
    <h1 style="text-align:center;">Cetak Laporan</h1>
    <table id="example" border="1px" cellspacing="0px" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Pelapor</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                
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
            </tr>';
            $no++;
            }
            ?>
            </tbody>

    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function(){
            window.print();
        });
    </script>
</body>
</html>