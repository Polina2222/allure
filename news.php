<?php
                function printResult($result_set) {
                  while (($row  =  $result_set->fetch_assoc()) !=false) {
        
                      echo("                      
                      <div class='card mb-4 shadow-sm'>
                      <div class='card-header d-flex flex-wrap  justify-content-between align-items-center'>
                        <p class=''>".$row['putdate']."</p>
                        <a href='news.php'>".$row['nickname']."</a>
                      </div>
                      <div class='card-body d-flex flex-wrap justify-content-between align-items-center'>
                        <img src='img/news/".$row['id_news'].".jpg' border='0' width='100%' height='188'  alt='img' >
                        <div class='list-unstyled mt-3 mb-4'>
                          <h4 class='my-0 mb-2 font-weight-bold'>".$row['heading']."</h4>
                          <p class='mb-3'>".mb_substr($row['story'], 0, 241)."....</p>
                        </div>
                        <button type='button' class='btn btn-lg btn-block btn-outline-primary'>Подробнее</button>
                      </div>
                    </div>                                    
                      "); 
                      
                  }
                }

        