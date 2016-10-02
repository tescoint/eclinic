<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Carrera solidaria por el Alzheimer</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/gsdk-base.css" rel="stylesheet" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <div class="image-container set-full-height" style="background-image: url('images/wizard.jpg')">

      <!--   Big container   -->
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="wizard-container">
              <div class="card wizard-card ct-wizard-orange" id="wizard">

                <div class="wizard-header">
                  <h1>
                    <b>Perfecto!</b> <br>
                    <small>Contamos contigo, <?php echo $_POST['inputName'];?> </small>
                  </h1>
                </div>

                <br>

                <h3>Información para almacenar en BBDD</h3>

                <?php
                    if (isset($_POST['inputName'])) {
                      echo "Nombre: ".$_POST['inputName']."<br>";
                    }
                    if (isset($_POST['inputSurname'])) {
                      echo "Apellido: ".$_POST['inputSurname']."<br>";
                    }
                    if (isset($_POST['inputEmail'])) {
                      echo "e-Mail: ".$_POST['inputEmail']."<br>";
                    }
                    if (isset($_POST['inputCity'])) {
                      echo "Ciudad: ".$_POST['inputCity']."<br>";
                    }
                    if (isset($_POST['inputProvince'])) {
                      echo "Provincia: ".$_POST['inputProvince']."<br>";
                    }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
