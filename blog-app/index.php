<?php 
    $kategori1="Macera";
    $kategori2="Dram";
    $kategori4="Komedi";
    $kategori3="Korku";
    
    $film_baslik1 ="Paper Lives";
    $film_aciklama1 = " Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. 
    Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $yapim_tarihi1 = "Yapım Tarihi: 03.12.2021";
    $film_resim1="1.jpeg";
    $filmYorumSayisi1 = "Yorum: 55";
    $filmBegeniSayisi1 = "Beğeni: 85";
    $filmvizyon1 = "Vizyonda: Evet";


    
    $film_baslik2 ="Walking Dead";
    $film_aciklama2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde 
    insanlığa karşı duydukları umuda tutunur.";
    $yapim_tarihi2 = "Yapım Tarihi: 31.10.2010";
    $film_resim2="2.jpeg";
    $filmYorumSayisi2 = "Yorum: 236";
    $filmBegeniSayisi2 = "Beğeni: 1023";
    $filmvizyon2 = "Vizyonda: Hayır";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
   
   
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"> <?php echo $kategori1?></li>
                    <li class="list-group-item"> <?php echo $kategori2?></li>
                    <li class="list-group-item"> <?php echo $kategori3?></li>
                    <li class="list-group-item"> <?php echo $kategori4?></li>
                   
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo "<img class=\"img-fluid\" src=\"img/{$film_resim1}\">"?>
                            
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $film_baslik1?></h5>
                                <p class="card-text">
                                <?php echo $film_aciklama1?>
                                </p>
                                <div>
                                    <span class="badge bg-success"><?php echo $yapim_tarihi1 ?></span>
                                    <span class="badge bg-success"><?php echo $filmYorumSayisi1 ?></span>
                                    <span class="badge bg-success"><?php echo $filmBegeniSayisi1 ?></span>
                                    <span class="badge bg-success"><?php echo $filmvizyon1 ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo "<img class=\"img-fluid\" src=\"img/{$film_resim2}\"> " ?>
                           
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $film_baslik2?></h5>
                                <p class="card-text">
                                    <?php echo $film_aciklama2?>
                                </p>
                                <div>
                                    <span class="badge bg-success"><?php echo $yapim_tarihi2 ?></span>
                                    <span class="badge bg-success"><?php echo $filmYorumSayisi2 ?></span>
                                    <span class="badge bg-success"><?php echo $filmBegeniSayisi2 ?></span>
                                    <span class="badge bg-success"><?php echo $filmvizyon2 ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>