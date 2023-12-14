<?php 
    // tangkap request class_nilaiSantri.php
    require_once 'class_nilai.php';

    $ns1 = new NilaiSantri('Abil',100);
    $ns2 = new NilaiSantri('Badu',69);
    $ns3 = new NilaiSantri('Usro',85);
    $ns4 = new NilaiSantri('Jarwo',40);
    $ar_santri = [$ns1,$ns2,$ns3,$ns4];
?>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        $nomor = 1;
        foreach($ar_santri as $san){
            echo '<tr><td>'.$nomor.'</td><td>'.$san->nama.'</td>';
            echo '<td class="uhuy">'.$san->nilai.'</td><td class="uhuy">'.$san->gethasil().'</td></tr>';
            $nomor++;
        }

        ?>

        <style>
            table {
                background-color: whitesmoke;
            }

            th {
                background-color: darkgrey;
            }

            .uhuy {
                text-align: center;
            }
        </style>
    </tbody>
</table>
