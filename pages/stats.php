<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Stats</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2853/2853896.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/stats.css">

  </head>
</head>
<body>
<?php include_once("../components/nav.html"); ?>
  <br><br><br><br>
  <div class="main_heading">
    <h1>COVID-19</h1>
  </div>
  <div class="card-holder">
    <div class="card info">
        <h1>
          Covid-19
        </h1>
        <p>
          COVID-19 results from SARS-CoV-2, which belongs to a broad group of viruses known as coronaviruses.1 A virus is a submicroscopic infectious agent that replicates only inside the living cells of an organism. They can infect humans and animals, depending on the type of virus. Coronaviruses in humans are common and usually cause symptoms similar to those of the common cold.
        </p>
        <p>
          Symptoms of COVID-19 typically take 5-8 days to appear in an infected individual, but can take up to 14 days, and might initially display similarly to the common cold or flu but then become more severe. They can be vague and non-specific, but can include:        
        </p>
    </div>
    <div class="card info">
      <h1>
        Symptoms
      </h1>
        <ul>
          <li>fever</li>
            <li>tiredness</li>
            <li>cough</li>
            <li>difficulty breathing</li>
            <li>pneumonia in both lungs</li>
            <p style="text-align:center;">Some may Experience</p>
            <li>aches and pains</li>
            <li>nasal congestion</li>
            <li>runny nose</li>
            <li>sore throat</li>
            <li>gastrointestinal symptoms, such as diarrhea2,3</li>
            <li>diminished sense of smell or taste</li>
            <li>purplish sores on the feet and sometimes on the hands, in children</li>
        </ul>

    </div>
</div>
  <iframe id='fr'src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="500px"></iframe>
  


  <p id="demo"></p>
  <div class="container">

      <div id="form-main">

          <div id="form-div">

              <form class="montform" method="post"  name="myform">
                  
                  <h2 style="color: #10baee;">Covid-19 Stats</h2>


                  <p class="name">

                      <input name="country" type="text" class="feedback-input" required placeholder="Enter Country Name"
                          id="country" />
                  </p>

                  <p class="text">
                      <textarea name="stats1" class="feedback-input"  id="stats1" placeholder="Confirmed:??"></textarea>
                      <textarea name="stats2" class="feedback-input"  id="stats2" placeholder="Recovered:??"></textarea>
                      <textarea name="stats4" class="feedback-input"  id="stats4" placeholder="Deaths:??"></textarea>
                  </p>
                 
                      <input type="button" class="button-blue" id="mybtn" value="Show Stats" onClick="getData()"></input>
                  
              </form>
          </div>
      </div>
  </div>

</body>
</script>


</html>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="../js/nav.js"></script>
<script src="../js/stats.js"></script>
