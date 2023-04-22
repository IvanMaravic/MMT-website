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

  function toggleTextInfo(text_id) {
		var additionalText = document.getElementById(text_id);
		if (additionalText.style.display === "none") {
			additionalText.style.display = "block";
		} else {
			additionalText.style.display = "none";
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
    <link rel="stylesheet" href="index.css">
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
      <li>Najbrži gol u povijesti nogometa postignut je nakon samo 2 sekunde na utakmici između St. Mirrena i Dundee Uniteda u škotskoj Premier ligi 1994. godine.</li>
    </ul>

  <h4>Najbolji golovi u povjesti nogometa</h4>
  <div class="video-parent">
    <div class="video-container">
      <video width="320" height="240" controls>
        <source src="Videi\Roberto Carlos Free Kick Goal vs France 1997.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <figcaption>Krivulja Roberta Carlosa</figcaption>
    </div>

    <div class="video-container">
      <video width="320" height="240" controls>
        <source src="Videi\Bruno Petkovic Goal - Croatia vs Brazil 1-1.mp4" type="video/mp4"> 
        Your browser does not support the video tag.
      </video>
      <figcaption>Gol Brune Petkovića protiv Brazila</figcaption>
    </div>

    <div class="video-container">   
      <video width="320" height="240" controls>
        <source src="Videi\Zlatan Ibrahimovic's famous 30-yard bicycle kick vs England.mp4" type="video/mp4">
      </video>
      <figcaption>Gol Zlatana Ibrahimovica gol protiv Engleske</figcaption>
    </div>
  </div>

  <h4>Zanimljivi audio zapisi</h4>
  <div class="audio-container">
    <figure>
      <audio controls>
        <source src="Audio\REAKCIJA DRAGE ĆOSIĆA NA GOL OD PERIŠIĆA U FINALU!.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
      <figcaption>Reakcije Ćosića na gol Perišiča u finalu:</figcaption>
    </figure>
      
    <figure>
      <audio controls>
        <source src="Audio\Gol Brune Petkovića vrijedan 17 svjetskih glasova.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
      <figcaption>Gol Brune Petkovića vrijedan 17 svjetskih glasova:</figcaption>
    </figure>
  </div>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th class="rank">Poz</th>
          <th class="team">Klub</th>
          <th class="played">Odigr.</th>
          <th class="wins">Pobj.</th>
          <th class="draws">Neriješ.</th>
          <th class="losses">Por.</th>
          <th class="goals-for">Gol+</th>
          <th class="goals-against">Gol-</th>
          <th class="goal-diff">Gol razlika</th>
          <th class="points">Bodovi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>
            <img src="Slike\ikonice\dinamo.jpg">
            <a href="https://gnkdinamo.hr/  ">Dinamo Zagreb</a>
          </td>
          <td>30</td>
          <td>23</td>
          <td>3</td>
          <td>4</td>
          <td>68</td>
          <td>23</td>
          <td>+45</td>
          <td>72</td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <img src="Slike\ikonice\osijek.jpg">
            <a href="https://nk-osijek.hr/">Osijek</a>
          </td>
          <td>30</td>
          <td>17</td>
          <td>7</td>
          <td>6</td>
          <td>56</td>
          <td>30</td>
          <td>+26</td>
          <td>58</td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <img src="Slike\ikonice\gorica.jpg">
            <a href="https://www.hnk-gorica.hr/">Gorica</a>
          </td>
          <td>30</td>
          <td>15</td>
          <td>9</td>
          <td>6</td>
          <td>49</td>
          <td>26</td>
          <td>+23</td>
          <td>54</td>
        </tr>
        <tr>
          <td>4</td>
          <td>
            <img src="Slike\ikonice\hajduk.jpg">
            <a href="https://hajduk.hr/">Hajduk Split</a>
          </td>
          <td>30</td>
          <td>14</td>
          <td>9</td>
          <td>7</td>
          <td>42</td>
          <td>30</td>
          <td>+12</td>
          <td>51</td>
        </tr>
        <tr>
          <td>5</td>
          <td>
            <img src="Slike\ikonice\rijeka.jpg">
            <a href="https://nk-rijeka.hr/">Rijeka</a>
          </td>
          <td>30</td>
          <td>13</td>
          <td>7</td>
          <td>10</td>
          <td>42</td>
          <td>32</td>
          <td>+10</td>
          <td>46</td>
        </tr>
        <tr>
          <td>6</td>
          <td>
            <img src="Slike\ikonice\slaven belupo.jpg">
            <a href="https://nk-slaven-belupo.hr/">Slaven Belupo</a>
          </td>
          <td>30</td>
          <td>11</td>
          <td>10</td>
          <td>9</td>
          <td>36</td>
          <td>32</td>
          <td>+4</td>
          <td>43</td>
        </tr>
        <tr>
          <td>7</td>
          <td>
            <img src="Slike\ikonice\istra.jpg">
            <a href="https://nkistra.com/">Istra 1961</a>
          </td>
          <td>30</td>
          <td>10</td>
          <td>6</td>
          <td>14</td>
          <td>35</td>
          <td>46</td>
          <td>-11</td>
          <td>36</td>
        </tr>
        <tr>
          <td>8</td>
          <td>
            <img src="Slike\ikonice\sibenik.jpg">
            <a href="https://www.hnk-sibenik.hr/">Šibenik</a>
          </td>
          <td>30</td>
          <td>8</td>
          <td>6</td>
          <td>16</td>
          <td>31</td>
          <td>52</td>
          <td>-21</td>
          <td>30</td>
        </tr>
        <tr>
          <td>9</td>
          <td>
            <img src="Slike\ikonice\varazdin.jpg">
            <a href="https://www.nk-varazdin.hr/news/">Varaždin</a>
          </td>
          <td>30</td>
          <td>6</td>
          <td>10</td>
          <td>14</td>
          <td>30</td>
          <td>46</td>
          <td>-16</td>
          <td>28</td>
        </tr>
        <tr>
          <td>10</td>
          <td>
            <img src="Slike\ikonice\lokomotiva.jpg">
            <a href="https://nklokomotiva.hr/">Lokomotiva Zagreb</a>
          </td>
          <td>30</td>
          <td>6</td>
          <td>10</td>
          <td>14</td>
          <td>26</td>
          <td>43</td>
          <td>-17</td>
          <td>28</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p class="update">Last update: 22.4.2023.</p>

  <div class="profile-container">
  <!-- slika br.1 Luka --> 
  <div class="profile-centered">
    <img src="Slike/Luka.jpg" alt="Luka Malnar" width="55" height="110" onclick="toggleImage('slikaLuka')" id="slikaLuka">
    <span onclick="toggleTextInfo('infoLM-text')">Luka Malnar</span>
    <p id="infoLM-text">Mjesto rođenja: <a href="https://nasice.hr/">Našice</a><br>Datum rođenja: 26.4.2000.<br>Mjesto prebivališta: <a href="https://nasice.hr/">Našice</a><br>Fakultet: <a href="https://www.ferit.unios.hr/">FERIT</a>.<br>Bavim li se ja ovim sportom?<a href="Slike/Martin.bmp" target="_blank"> Pronađi me </a></p>
  </div>

  <!-- slika br.2 Ivan --> 
  <div class="profile-centered">
    <img src="Slike/Ivan1.jpg" alt="Ivan Maravić" width="65" height="110" onclick="toggleImage('slikaIvan')" id ="slikaIvan">
    <span onclick="toggleTextInfo('infoIM-text')">Ivan Maravić</span>
    <p id="infoIM-text">Mjesto rođenja: <a href="https://www.pozega.hr/">Požega</a><br>Datum rođenja: 12.5.2000.<br>Mjesto prebivališta: <a href="https://www.kutjevo.hr/">Kutjevo</a><br>Fakultet: <a href="https://www.ferit.unios.hr/">FERIT</a>
    <br>Bavim li se ja ovim sportom ili ga samo volim: Da.</p>
  </div>
</div>

<h5>Linkovi na nogometne stranice</h5>
  <ul>
    <li><a href="https://www.fifa.com/">FIFA</a> - službena stranica Svjetske nogometne federacije koja sadrži vijesti, statistike, pravila igre, i druge informacije o nogometu.</li>
    <li><a href="https://www.uefa.com/">UEFA</a> - službena stranica Europske nogometne federacije koja pruža informacije o europskim natjecanjima, vijestima, i drugim aspektima nogometa.</li>
    <li><a href="https://hns-cff.hr/">HNS</a> - službena stranica Hrvatskog nogometnog saveza koja sadrži informacije o natjecanjima u Hrvatskoj, reprezentaciji, i drugim aspektima hrvatskog nogometa.</li>
    <li><a href="https://www.goal.com/">Goal.com</a> - sportski portal koji se bavi nogometom i koji nudi vijesti, analize, i druge informacije o svjetskom nogometu.</li>
    <li><a href="https://www.transfermarkt.com/">Transfermarkt</a> - web stranica koja se bavi transferima nogometaša, statistikama, i drugim informacijama o igračima, klubovima, i ligama.</li>
  </ul>

<?php include ('footer.html'); ?>

</body>
</html>