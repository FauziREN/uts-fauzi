<?php include 'components/header.php'; ?>

<div class="container mt-6">
    <h2 class="text-center">Daftar Mahasiswa</h2>
    <hr>
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mahasiswa = [
                    "Alan Clark",
                    "Bruce William Carpenter",
                    "Catherine Yoshawirja",
                    "Dina Eldelina Pow",
                    "Eva Berliana Rosway",
                    "Kirk David Evans",
                    "Lenny Patricia",
                    "Nigel Brett Eaton",
                    "Roselyne Gosjen Tirtadji",
                    "Sylvia Zen Weston",
                    "Theresia Lidwina",
                    "Vincent Sebastian Vaz",
                    "Wilfred Schultz",
                    "Yvonne Shirley Fogarty",
                    "Zein Swetlana Andreyevna"
                ];

                $prodi = "Teknik Informatika";
                $nimAwal = 54627631;
                sort($mahasiswa);
                $no = 1; 
                foreach ($mahasiswa as $nama) {
                    $nim = $nimAwal;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$nim</td>";
                    echo "<td>$nama</td>";
                    echo "<td>$prodi</td>";
                    echo "</tr>";
                  
                    $nimAwal++;
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'components/footer.php'; ?>
