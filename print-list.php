<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ALLURE</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" media="print" href="print.css" >
 

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
      table
      {
        display:grid;
        justify-content: center;
        font-size: 24px;
        background-color: lightgray;
        margin-bottom: 35px;

  }
  TD, TH {
      padding: 3px; /* Поля вокруг содержимого таблицы */
      border: 1px solid black; /* Параметры рамки */
  }
@media print {body{ font-size: 16px;
          color: #000;}
      img{ display: none !important;}
      .footer-column{display: none;}
      .navbar{ display: none;}
      .my-footer{ display: none;}
      ul{
         display: none;
         }
     
      table{
        background-color: white;
      }  } /* print styles go here */ 
      
</style>
 
</head>
  


<body>

 <!-- Fixed navbar -->
 <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="128px"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Главная</a></li>
        <li><a href="services.html">Наши специалисты</a></li>
        <li><a href="sales.html">Акции</a></li>
        <li class="active"><a href="price.html">Прайс-лист</a></li>
        <li><a href="lk.html">Личный кабинет</a></li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>

<div id="blue">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2">
        <h4>Уважаемые клиенты!</h4>
        <p>Ознакомьтесь, пожалуйста, с нашим прайс-листом.<br></p>
        <h6>*Данная стоимость не является итоговой</h6>
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>
<!-- blue wrap -->


    
          
          
            
      <?php

      
      $link = mysqli_connect('std-mysql', 'std_1005', 'polinapolina', 'std_1005') 
          or die("Ошибка " . mysqli_error($link)); 
          
      $query ="SELECT * FROM prices";
      
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
      if($result)
      {
          $rows = mysqli_num_rows($result); // количество полученных строк
          
          echo "<table><tr><th>№</th><th>Наименование услуги</th><th>Стоимость</th></tr>";
          for ($i = 0 ; $i < $rows ; ++$i)
          {
              $row = mysqli_fetch_row($result);
              echo "<tr>";
                  for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
              echo "</tr>";
          }
          echo "</table>";
          
          // очищаем результат
          mysqli_free_result($result);
      }
      
      mysqli_close($link);
      ?>

   
 


  <!-- Footer -->


  <div id="my-footer">

    <footer class="main-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-sm-6">
            <div class="footer-column">

            
              <p>Cалон ALLURE <br> в Москве</p>
              <div class="social-footer">
                <nav class="soc">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                  </ul>
                </nav>
              </div>

            </div>
          </div>

        

          <div class="col-lg-3 col-sm-6">
            <div class="footer-column">

              <p><i class="fa fa-location-arrow"></i> г. Москва, ул. Арбат, 22с1 </p>
              <p><i class="fa fa-clock-o"></i> Время работы: ежедневно: <br>10:00 - 22:00</p>
              <p><span class="footer-phone"><i class="fa fa-mobile"></i> +7 (495) 555-55-55</span></p>

            </div>
          </div>

          <div class="col-lg-4 col-sm-6">
            <div class="footer-column">

              <div class="map">
                <script  async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sqSnwqdlxYOehASwwyeusqXQ2yCYTtv_&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
              </div>

            </div>
          </div>

        </div>
      </div>
    </footer>

  </div>




<div class="top" title="Наверх"><i class="fa fa-angle-double-up"></i></div>

<link rel="stylesheet" href="css/main.min.css">
<script src="js/scripts.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
