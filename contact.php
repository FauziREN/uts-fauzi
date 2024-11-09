<?php include 'components/header.php'?>

   <div class="container mt-6"></div>
    
            <h3>Berikan Feedback atau Pertanyaan Anda</h3>
        <form action="" method="POST">
            <div class="row">
               
                <div class="col-12 mb-3">
                    <label for="name" class="form-label">Anonim Pengguna:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Anonim Anda" required>
                </div>

                <div class="col-12 mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
               
                <div class="col-12 mb-3">
                    <label for="message" class="form-label">Pesan Anda:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan atau pertanyaan Anda" required></textarea>
                </div>
                
                <div class="col-12 mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Kirim Feedback</button>
                </div>
                
<?php include 'components/footer.php'?>   