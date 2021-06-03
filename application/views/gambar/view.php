<br>
        <div class="jumbotron" style="text-align: center;">
            <h1 class="display-4">Riwayat Pengiriman Barang</h1>
            <hr class="my-3">
        </div>
        <h2 class="text-center"><a href="<?php echo base_url("index.php/gambar/tambah"); ?>">Tambah Gambar</a></h2><br><br>
        <table class="table table-borderless text-center">
        <tr>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Nama File</th>
            <th>Ukuran File</th>
            <th>Tipe File</th>
        </tr>
        <?php
        if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
        foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
            echo "<tr>";
            echo "<td><img src='".base_url("assets/images/".$data->nama_file)."' width='100' height='100'></td>";
            echo "<td>".$data->deskripsi."</td>";
            echo "<td>".$data->nama_file."</td>";
            echo "<td>".$data->ukuran_file." kB</td>";
            echo "<td>".$data->tipe_file."</td>";
            echo "</tr>";
        }
        }else{ // Jika data tidak ada
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        }
        ?>
    </table>

</br>