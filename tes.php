<?php

$koneksi = mysqli_connect("localhost","root","","melaundry");
$name = "select firstname from data_user where email ='hasanrama120@gmail.com' ";
$hasilname = mysqli_query($koneksi,$name);


session_start();
while ($row = $hasilname->fetch_assoc()){
  echo ($_SESSION["hasil"]);
}
 
 ?>

              

        <div class="row1">
          <div class="coll-1-of-3">
            <div class="card1">
              <div class="card__side card__side--front-1">
         <img src="voucher winter.png" style="width:337px ;" alt="">
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <img src="voucher winter back.png" style="width:337px ;" alt="">
                <div class="card__cta">
                  <div class="card__price-box">
                  <FORM NAME="WordForm">  
                    <INPUT TYPE=TEXT NAME="WordBox" id="wordbox" class="form-control" ><br>
                    <a onClick="PickRandomWord(document.WordForm);" id="button11">SHOW</a>
                  </FORM>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
  
          <div class="coll-1-of-3">
            <div class="card1">
              <div class="card__side card__side--front-2">
                
         <img src="newyear front.png" style="width:338px ;" alt="">
              </div>
              <div class="card__side card__side--back card__side--back-2">
              <img src="newyear back.png" style="width:341px ;" alt="">
                <div class="card__cta">
                  <div class="card__price-box">
                  <FORM NAME="WordForm1">  
                    <INPUT TYPE=TEXT NAME="WordBox" id="wordbox" class="form-control" ><br>
                    <a onClick="PickRandomWord(document.WordForm1);" id="button11">SHOW</a>
                  </FORM>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="coll-1-of-3">
            <div class="card1">
              <div class="card__side card__side--front-3">
              <img src="motherday front.png" style="width:338px ;" alt="">
                </div>
              <div class="card__side card__side--back card__side--back-3">
              <img src="motherday back.png" style="width:343px ;" alt="">
               
                <div class="card__cta">
                <div class="card__price-box">
                  <FORM NAME="WordForm2">  
                    <INPUT TYPE=TEXT NAME="WordBox" id="wordbox" class="form-control" ><br>
                    <a onClick="PickRandomWord(document.WordForm2);" id="button11">SHOW</a>
                  </FORM>
                    
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   