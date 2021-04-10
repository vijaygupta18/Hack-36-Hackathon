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