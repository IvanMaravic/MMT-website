<script>
  function toggleImage(imageId) {
    const imageElement = document.getElementById(imageId);
    if (imageElement.requestFullscreen) {
      imageElement.requestFullscreen();
    } else if (imageElement.msRequestFullscreen) {
      imageElement.msRequestFullscreen();
    } else if (imageElement.mozRequestFullScreen) {
      imageElement.mozRequestFullScreen();
    } else if (imageElement.webkitRequestFullscreen) {
      imageElement.webkitRequestFullscreen();
    }
  }

	function toggleTextInfoLM() {
		var additionalText = document.getElementById("infoLM-text");
		if (additionalText.style.display === "none") {
			additionalText.style.display = "block";
		} else {
			additionalText.style.display = "none";
		}
	}
	<style>
		#infoLM-text {
			display: none;
		}
	</style>


	function toggleTextInfoIM() {
		var additionalText = document.getElementById("infoIM-text");
		if (additionalText.style.display === "none") {
			additionalText.style.display = "block";
		} else {
			additionalText.style.display = "none";
		}
	}
	<style>
		#infoIM-text {
			display: none;
		}
	</style>
</script>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="">
    <title>Omiljeni sport</title>
</head>
<body>        
    <?php include ('izbornik.html'); ?>
    <h2>Nogomet</h2>
    <img src="Slike\Football gif.gif" height="120" width="120">
    <p>Pravila igre:</p>
    <ul>
      <li>Nogomet se igra između dvije momčadi od po jedanaest igrača.</li>
      <li>Cilj igre je postići više golova od protivnika tako da se lopta ubaci u protivničku mrežu.</li>
      <li>Svaki igrač osim vratar može koristiti samo svoje tijelo za dodavanje i primanje lopte, izuzev ruku i ruku.</li>
      <li>Utakmica se sastoji od dva poluvremena po 45 minuta, sa 15-minutnom stankom između.</li>
      <li>Ako se utakmica završi neriješeno, može se igrati produžetak ili izvoditi udarci s bijele točke za odlučivanje pobjednika.</li>
    </ul>
    <h5>Zanimljivosti:</h5>
    <ul>
      <li>Najveća pobjeda u povijesti nogometa dogodila se 2002. godine kada je Australija pobijedila Američku Samou 31-0 u kvalifikacijama za Svjetsko prvenstvo. </li>
      <li>Najskuplji nogometaš u povijesti je Neymar Jr., koji je 2017. godine prešao u Paris Saint-Germain za rekordnih 222 milijuna eura. </li>
      <li>Jedan od rijetkih sportova koji se igraju na gotovo svakom kontinentu, uključujući i Antarktiku gdje postoji mala liga. </li>
      <li>Nogometni klub Real Madrid najuspješniji je klub u povijesti Lige prvaka, s 13 osvojenih naslova.</li>
      <li>Najbrži gol u povijesti nogometa postignut je nakon samo 2 sekunde na ut
      <li>Najbrži gol u povijesti nogometa postignut je nakon samo 2 sekunde na utakmici između St. Mirrena i Dundee Uniteda u škotskoj Premier ligi 1994. godine.</li>
    </ul>
  <h5>Linkovi na nogometne stranice</h5>
  <ul>
    <li><a href="https://www.fifa.com/">FIFA</a> - službena stranica Svjetske nogometne federacije koja sadrži vijesti, statistike, pravila igre, i druge informacije o nogometu.</li>
    <li><a href="https://www.uefa.com/">UEFA</a> - službena stranica Europske nogometne federacije koja pruža informacije o europskim natjecanjima, vijestima, i drugim aspektima nogometa.</li>
    <li><a href="https://hns-cff.hr/">HNS</a> - službena stranica Hrvatskog nogometnog saveza koja sadrži informacije o natjecanjima u Hrvatskoj, reprezentaciji, i drugim aspektima hrvatskog nogometa.</li>
    <li><a href="https://www.goal.com/">Goal.com</a> - sportski portal koji se bavi nogometom i koji nudi vijesti, analize, i druge informacije o svjetskom nogometu.</li>
    <li><a href="https://www.transfermarkt.com/">Transfermarkt</a> - web stranica koja se bavi transferima nogometaša, statistikama, i drugim informacijama o igračima, klubovima, i ligama.</li>
  </ul>

  <!-- slika br.1 Luka --> 
  <img src="Slike\Luka.jpg" alt="Luka Malnar" width=90 height=200 onclick="toggleImage('slikaLuka')" id ="slikaLuka">


	<text onclick="toggleText()">Luka Malnar</text>
	<p id="additional-text">Mjesto rođenja: Našice<br>Datum rođenja: 26.4.2000.<br>Mjesto prebivališta: Našice.</p>

  <!-- slika br.2 Ivan --> 
  <img src="Slike\Ivan1.jpg" alt="Ivan Maravić" width=90 height=200 onclick="toggleImage('slikaIvan')" id ="slikaIvan">

	<text onclick="toggleText()">Ivan Maravić</text>
	<p id="additional-text1">Mjesto rođenja: Požega<br>Datum rođenja: 12.5.2000.<br>Mjesto prebivališta: Kutjevo.</p>


  <p>Krivulja Roberta Carlosa</p>
  <video width="320" height="240" controls>
    <source src="Videi\Roberto Carlos Free Kick Goal vs France 1997.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>

  <p>Gol Brune Petkovića protiv Brazila</p>
  <video width="320" height="240" controls>
    <source src="Videi\Bruno Petkovic Goal - Croatia vs Brazil 1-1.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video> 

  <p>Reakcije Ćosića na gol Perišiča u finalu:</p>
  <audio controls>
    <source src="Audio\REAKCIJA DRAGE ĆOSIĆA NA GOL OD PERIŠIĆA U FINALU!.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  <p>Gol Brune Petkovića vrijedan 17 svjetskih glasova:</p>
  <audio controls>
    <source src="Audio\Gol Brune Petkovića vrijedan 17 svjetskih glasova.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  
  </body>
</html>