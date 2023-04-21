<script>
  function toggleImageSize(img) {
    if (img.style.width === '100%') {
      img.style.width = '35%';
    } else {
      img.style.width = '100%';
    }
  }
</script>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="lukinDrugiIzbor.css">

    <title>Tenis</title>
</head>

<body>        
    <?php include ('izbornik.html'); ?>

    <h2>Tenis</h2>
    <img src="Slike\Tennis gif.gif" height="120" width="120">

    <h5>Pravila igre:</h5>
    <ul>
        <li>Tenis se igra između dva ili četiri igrača koji udaraju lopticu preko mreže na protivničku stranu terena.</li>
        <li>Svaki poen se započinje servisom, a igrači serviraju naizmjence.</li>
        <li>Loptica se mora udariti preko mreže i pasti unutar terena suparnika.</li>
        <li>Igrač koji ne uspije udariti lopticu u teren suparnika, gubi poen.</li>
        <li>Bodovi se računaju u sustavu 15, 30, 40, a pobjednik seta je onaj tko prvi osvoji 6 gemova s minimalno dva gemova razlike.</li>
        <li>Ako je rezultat 6:6, igra se tie-break, gdje igrači osvajaju poene do 7, s minimalnom razlikom od 2 boda.</li>
    </ul>
    <h5>Zanimljivosti:</h5>
    <ul>
        <li>Rekord za najbrži servis u muškoj konkurenciji drži Samuel Groth iz Australije, koji je u svibnju 2012. servirao brzinom od 263 km/h. </li>
        <li>U ženskoj konkurenciji, rekord za najbrži servis drži Sabine Lisicki iz Njemačke, koja je u Wimbledonu 2014. servirala brzinom od 211 km/h.</li>
        <li>Najduži teniski meč u povijesti odigrali su John Isner i Nicolas Mahut na Wimbledonu 2010. godine. Meč je trajao 11 sati i 5 minuta, a Isner je na kraju pobijedio 70-68 u petom setu. </li>
        <li>Najviši teniski teren na svijetu nalazi se na nadmorskoj visini od 3.962 metra u gradu La Paz u Boliviji. </li>
    </ul>

    <h4>Najpoznatiji Hrvatski tenisači</h4>
    <div class="image-container">
      <figure>
        <img src="Slike\Marin Cilic.png" alt="Marin Cilic" onclick="toggleImageSize(this)">
        <figcaption><a href="https://hr.wikipedia.org/wiki/Marin_%C4%8Cili%C4%87" style="color: black;">Marin Čilić</a></figcaption>
      </figure>
      <figure>
        <img src="Slike\Goran Ivanisevic.webp" alt="Goran Ivanisevic" onclick="toggleImageSize(this)">
        <figcaption><a href="https://hr.wikipedia.org/wiki/Goran_Ivani%C5%A1evi%C4%87" style="color: black;">Goran Ivanisevic</a></figcaption>
      </figure>
      <figure>
        <img src="Slike\Nikola Pilić.jpg" alt="Nikola Pilić" onclick="toggleImageSize(this)">
        <figcaption><a href="https://hr.wikipedia.org/wiki/Nikola_Pili%C4%87" style="color: black;">Nikola Pilić</a></figcaption>
      </figure>
	  </div>

    <video width="320" height="240" controls>
      <source src="Videi\Mansour Bahrami trick underarm serve Wimbledon 2019.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <figcaption>Mansour Bahrami underarm serve at Wimbledon 2019</figcaption>
    <p>Poznat po teniskim trikovima i zabavnom stilu igre</p>

    <p></p>
    <h5>Poveznice na vanjske stranice o tenisu</h5>
    <ul>
      <li><a href="https://www.itftennis.com/">Međunarodna teniska federacija (ITF)</a>- službena organizacija koja upravlja međunarodnim teniskim turnirima</li>
      <li><a href="https://www.atptour.com/">ATP Tour</a> - Službena stranica muškog profesionalnog tenisa</li>
      <li><a href="https://hts.hr/">Hrvatski teniski savez (HTS)</a> - Službena organizacija koja upravlja teniskim turnirima u Hrvatskoj</li>
      <li><a href="https://www.daviscup.com/">Davis Cup</a> - Međunarodno ekipno natjecanje u muškom tenisu</li>
    </ul>

    <?php include ('footer.html'); ?>



</body>
</html>