<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="card mx-auto mt-3 p-2" style="width: 600px;">
        <div class="card-header bg-success-subtle text-emphasis-success">
        <h1><?php echo "Data Diri Saya"; ?></h1>
        </div>
        <div class="card-body">
        <?php
        $nama = "Arjuna Mahavira";
        $tempatkuliah = "Universitas Negeri Semarang";
        $jurusankuliah = "Teknik Informatika";
        $studi = "Studi Independen MSIB batch 5 di GITS.id";
        $citacita = "Masuk Surga";
        ?>
    
        <p>Nama: <?php echo $nama; ?></p>
        <p>Pempat kuliah: <?php echo $tempatkuliah; ?></p>
        <p>Jurusan kuliah: <?php echo $jurusankuliah; ?></p>
        <p>Kegiatan saat ini: <?php echo $studi; ?></p>
        <p>Cita-cita: <?php echo $citacita; ?></p>
        </div>
    </div>
  </body>
</html>