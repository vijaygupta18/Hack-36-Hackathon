<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PandemiCure</title>
  <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2853/2853896.svg" type="image/x-icon">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/loader.css">
  <link rel="stylesheet" href="./styles/modal.css">
  <style>
  
  </style>

  </script>
</head>

<body onload="stop()">

  

  <span id="loader">
    <p>l</p>
    <p>o</p>
    <p>a</p>
    <p>d</p>
    <p>i</p>
    <p>n</p>
    <p>g</p>
  </span>
 

  <?php include_once("./components/nav.html"); ?>
  <br><br><br><br>

  <div class="animatediv">
    <img id="coronagif" src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
  </div>
  <div class="log">
    <a class="login-trigger" href="#" style="font-size: large;" data-target="#login" data-toggle="modal">I'm
      Infected</a>

    <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-body">
            <button data-dismiss="modal" class="close">&times;</button>
            <h2>Qurantine Me!!</h2>
            <form action="form.php" method="post">
              <input type="text" name="email" class="username form-control" id="email" placeholder="Enter Your Email" />
              <span class="error">
                <?php echo $emailError;?>
              </span>
              <input type="text" name="name" class="username form-control" id="name" placeholder="Enter Your Name" />
              <span class="error">
                <?php echo $nameErr;?>
              </span>
              <input type="tel" name="mobile" class="username form-control" id="mobile"
                placeholder="Enter Your Mobile Number" />
              <span class="error">
                <?php echo $mobileError;?>
              </span>
              <input type="text" name="adress" class="username form-control" placeholder="Enter Your Full address" />
              <input type="number" name="duration" class="username form-control"
                placeholder="Number of days of being Infected" />
              <label for="Gender" style="float: left;">Gender: </label>
              <input type="radio" name="gender" id="male" value="male">
              <label for="male">Male </label>
              <input type="radio" name="gender" id="female" value="female">
              <label for="female">Female </label>
              <input type="radio" name="gender" id="others" value="others">
              <label for="others">Others </label>

              <input type="text" name="City" class="username form-control" id="city" placeholder="City" />
              <input type="text" name="State" class="username form-control" id="state" placeholder="State" />
              <input type="tel" name="Pincode" class="username form-control" id="pin" placeholder="PinCode" />
              <!-- <input type="password" name="password" class="password form-control" placeholder="password"/> -->
            </form>
            <div class="text-center">

              <a href="#myModal" class="trigger-btn" data-toggle="modal">Submit</a>
            </div>

            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
              <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                  <div class="modal-header justify-content-center">
                    <div class="icon-box">
                      <i class="material-icons">&#xE876;</i>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body text-center">
                    <h4>Thank You!</h4>
                    <div>Your details have been saved successfully.</div>
                    <div>Our Team will contact you shortly</div>
                    <button class="btn btn-success"><a href="./pages/stats.php"><span
                          style="font-size: medium; color: white;">Know More about Covid-19</span></a> <i
                        class="material-icons">&#xE5C8;</i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</body>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
  function stop() {
    document.getElementById("loader").style.display = "none";
  }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>
