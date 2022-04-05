<?php
    /*  NIM : 202410103065
        NAMA : R. FASICH AULIA PRATAMA IMAN
    */
    $title = 'ini judul';
    $content = 'konten dari judul diatas';
    $asset = array("image\berita1.png", "https://akcdn.detik.net.id/community/media/visual/2019/08/14/b7a3a680-6d15-4a4d-93ad-bf041225d9ca.jpeg?w=700&q=90", "https://awsimages.detik.net.id/visual/2018/08/09/1953bc04-32c6-4cd1-b7dc-0cff1b16a8e7_169.jpeg?w=715&q=90", "image\berita4.png", "https://img.antaranews.com/cache/800x533/2022/04/05/webinar-Indonesia-Data-and-Economic-Conference-IDE-Katadata-2022-dengan-tema-lHow-Will-Metaverse-Change-The-World.jpg.webp");
    $judul = array("Komnas HAM Apresiasi Polisi Jerat Bupati Langkat Tersangka Kerangkeng Manusia", "RUU TPKS Sedang Tidak Baik-baik Saja, Pasal Perkosaan Terancam Hilang", "Arab Naikkan Harga Minyak di Mei, ke Asia Rekor Tertinggi!", "Harga BBM Naik, Peru Kewalahan Hadapi Gelombang Protes", "Metaverse bakal berdampak signifikan ke semua aspek perekonomian");
    $desc = array("Jakarta - Komnas HAM mengapresiasi Polda Sumut terkait penetapan tersangka terhadap Bupati Langkat nonaktif Terbit Rencana Perangin Angin di kasus kerangkeng manusia. Komnas HAM menilai langkah tersebut sudah tepat.", "Jakarta - Pemerintah berpandangan tindak pidana pemerkosaan tidak diatur dalam RUU Tindak Pidana Kekerasan Seksual (TPKS), melainkan diatur di RKUHP. Pembahasan RUU harapan banyak orang ini menuai kritik.", "Jakarta, CNBC Indonesia - Arab Saudi, pengekspor minyak utama dunia, menaikkan harga minyak mentah untuk semua wilayah, dengan harga ke Asia mencapai level tertinggi sepanjang masa.", "Jakarta, CNBC Indonesia - Pemerintah Peru mulai 5 April 2022 memberlakukan jam malam di Ibu Kota, Lima guna meredam aksi massa yang melakukan protes. Gelombang demonstrasi terjadi karena kenaikan harga bahan bakar dan pupuk di negara itu yang disebabkan gejolak geopolitik perang Rusia-Ukraina.", "Jakarta (ANTARA) - Penggunaan platform metaverse atau aktivitas virtual dengan pengalaman seperti di dunia nyata dinilai bakal berdampak signifikan ke semua aspek perekonomian pada masa mendatang, sehingga akan semakin banyak perusahaan yang berkecimpung di dalamnya.");
    $link = array("https://news.detik.com/berita/d-6018232/komnas-ham-apresiasi-polisi-jerat-bupati-langkat-tersangka-kerangkeng-manusia", "https://news.detik.com/berita/d-6018037/ruu-tpks-sedang-tidak-baik-baik-saja-pasal-perkosaan-terancam-hilang", "https://www.cnbcindonesia.com/news/20220405193030-4-329091/arab-naikkan-harga-minyak-di-mei-ke-asia-rekor-tertinggi", "https://www.cnbcindonesia.com/news/20220405193030-4-329091/arab-naikkan-harga-minyak-di-mei-ke-asia-rekor-tertinggi", "https://www.antaranews.com/berita/2803733/metaverse-bakal-berdampak-signifikan-ke-semua-aspek-perekonomian?utm_source=antaranews&utm_medium=desktop&utm_campaign=terkini")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="p-2 mb-2 bg-secondary text-white text-center">
        <h1>Berita Harian menit.com</h1>
        <p>R. FASICH AULIA PRATAMA IMAN - 202410103065 - PWEB IF C</p>
    </div>
    <div class="my-5">
        <?php for ($number = 0; $number <= 4; $number++):?>
            <div class="card mb-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1 offset-2 mt-1">
                            <img src="<?php echo $asset[$number];?>" style="width:220%; height:125px">
                        </div>
                        <div class="col-md-6 offset-1">
                            <h3 style = "margin-left : 10px"><a href="<?php echo $link[$number];?>" style="color:black"><?php echo $judul[$number];?></a></h3>
                            <p style = "margin-left : 10px" ><?php echo $desc[$number];?>
                            <a href="<?php echo $link[$number];?>">Selengkapnya...</a></p>
                        </div>
                    </div>
                    <div class = "row"> 
                        <div class ="col-md-5 offset-4">
                            <p style ="margin-left : 10px; ">5 April 2022</p>
                        </div> 
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>