<?php
require "header.php";
?>
<style>
    .header{
        background-image: url(img/a1.jpg);
    }
    .box-container{
	display:flex;
	justify-content:space-between;
    
}

.services{
	height:600px;
	background-color:#ffffff;
	padding: 2% 10% 0px 10%;
}
.services-text p:nth-child(1){
	font-family: calibri;
	font-weight:bold;
	color:#1d1c1c;
	font-size:30px;
	line-height:0px;
}
.services-text p:nth-child(2){
	font-family:calibri;
	font-weight: bold;
	color:#3e3d3d;
	font-size: 15px;
	line-height: 5px;
    
}
.services-text p:nth-child(3){font-family:calibri;
color:#7e7d7d;
font-size:25px;}

.services-text{
	width: 500px;
	margin:50px 0px;
}
.box-container{
	display:flex;
	justify-content:space-between;
}
.main_title h4{
	text-transform: uppercase;
	font-weight: bold;
	font-size: 35px;
	color:#f4f4f4;
	margin-bottom: 60px;
}
.main_title h4:after{
	content: "";
	width: 45px;
	height: 1px;
	background-color: #fff;
	display: block;
    margin: 0 auto;
    margin-top: 10px;
}
.column-3{
	width: 25%;
	padding: 0 15px;
	float: left;
}
.box{
	position: relative;
	float: left;
	width: 100%;
	height: 500px;
	margin: 100px;

	overflow-y: scroll;
	overflow-x: hidden;
}
.box:hover .box__content{
	height: 100%;
	overflow: visible;
    
}
.box__thumb{
	float: left;
	height: 100%;
	width: 100%;
}
.box__thumb img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}
.box__content{
	position: absolute;
	bottom: 0;
	left: 0;
	background-color: #fff;
	padding: 22px 20px;
	height: 74px;
	overflow: hidden;
	-webkit-transition: all .3s cubic-bezier(.3,0,.2,1);
  	transition: all .3s cubic-bezier(.3,0,.2,1);
}
.box__content h4{
	float: left;
	clear: both;
	width: 100%;
	font-size: 14px;
	font-weight: bold;
	text-transform: uppercase;
	color: #202020;
	margin-bottom: 6px;
}
.box__content span{
	clear: both;
	width: 100%;
	float: left;
	color: #afafaf;
	text-transform: uppercase;
	font-size: 12px;
	margin-bottom: 22px;
}
.box__content p{
	font-family: 'Open Sans', sans-serif;
	float: left;
	width: 100%;
	clear: both;
	font-size: 13px;
	line-height: 1.45em;
	color: #777777;
}

.btn-group-lg>.btn, .btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
    margin-top: 20px;
}
.header p{
    text-align: center;
    font-size: 20px;
    color: black;
    background: white;
    font-family:'Courier New', Courier, monospace;
    margin-top: 250px;
    background-color: rgba(245, 150, 40, 0.2);
}

</style>
<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
            <p><strong>"Kur puna juaj flet vetë, mos e ndërprisni"- Henry J. Kaiser"</p>
    </div>
</header>


<!--about us section-->

<section id="aboutus">
 <div class="container">
   <h3 class="text-center"><br><br>Ushqimet dhe embelsirat</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/15.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/21.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/22.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>
<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Histori te juaja</h4>
	<p><br>Ambienti - elegant, me stil të lartë. Shumë tavolina në natyrë në një oborr të bukur në natyrë,
     me disa tavolina brenda. Tabelat me hapësirë mjaft të largët ndermjet vete.
    Ushqimi - shumë shumë i mirë. Shije e shkëlqyeshme, prezantime të shkëlqyera. I pëlqej ushqimet e peshkut, viçit dhe qengjit, 
    përndryshe një vakt shumë shumë i mirë. 
    Shërbimi - i këndshëm, miqësor, mjaft efikas.
    Unë e rekomandoj shumë këtë vend nëse jeni në humor për darkë shumë të mirë<br><br><br></p><hr>
	</div>
     </div>
    </div>
</section>
<!--end of about us section-->


 <!--<div class="header2"> 
</div>-->

<section id="receta">
<div class="services">
            <!--text-->
        <div class="services-text ">
            <p>Recetat</p>
        </div>
        <div class="box-container">
        
        </div>
        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/24.jpg" alt="Makarona me mish">
                </div>
                <div class="box__content">
                    <h4>Makarona me mish</h4>
                    <span>Receta</span>
                    <p>Në një tenxhere me 3 lugë vaj ulliri kaurdisim mishin e qingjit të spërkatur me kripë. E kaurdisim nga të gjitha anët dhe më pas e shuajmë me verë të bardhë.Sapo alkooli i verës të avullojë shtojmë një qepë të grirë imët, karrotën të prerë në kubikë të vegjël dhe domaten të grirë në rende.I trazojmë mirë përbërësit i rregullojmë me pak sheqer, kripë dhe piper dhe më pas shtojmë buljon me koncentrat pule. Ulim temperaturën e sobës dhe e lemë gatimin të ziejë për rreth 40 minuta në temperaturë të ulët.</p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/24.jpg" alt="Mish pule">
                </div>
                <div class="box__content">
                    <h4>Mish pule</h4>
                    <span>Receta</span>
                    <p>Mishin e pulës priteni në kube. Në vaj të nxehur shtoni qepën e grirë imët, fërgojeni pak, shtoni mishin dhe përzieni, shtoni edhe erëzat. Nga fundi shtoni ajkën për zierje dhe djathin mozzarella të grirë në rende, djathin gorgonzola dhe djathin trapista. Të gjitha bashkoni. Në pjatë shërbeni mishin, ndërsa si shtojcë mund të jetë cilado sallatë qoftë apo patate të fërguara.</p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/23.jpg" alt="Caj xhenxhifili">
                </div>
                <div class="box__content">
                    <h4>Caj xhenxhifili</h4>
                    <span>Receta</span>
                    <p><b>Përbërësit:</b> litra ujë, 1 lugë çaji xhenxhefil të grirë, 1 kastravec, i qëruar dhe prerë hollë, 1 limon, i prerë hollë, gjethe mente.  
                        <br><b>Përgaditja:</b>  Përzieni të gjithë përbërësit në një brokë të madhe dhe i lini përbërësit të treten gjatë gjithë natës. Konsumojeni të gjithë ujin në broke gjatë gjithë ditës së nesërme. Të njëjtën gjë bëni çdo ditë.
                    </br></p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/4.jpg" alt="Byrek me Spinaq">
                </div>
                <div class="box__content">
                    <h4>Byrek me Spinaq</h4>
                    <span>Receta</span>
                    <p><b>Përbërësit:</b> 400gr gjizë pa yndyrë, 500gr spinaq, dy patate të ziera, kripë dhe piper.<br><b>Përgaditja:</b> Zieni spinaqin në pak ujë, shtrydheni dhe grijeni. Bashkojeni me patatet e ziera dhe gjizën, duke i hedhur piper dhe pak kripë. Përzierjen e përftuar vendoseni në një tavë të mbuluar me letër furre dhe futeni të piqet për rreth 40-45 minuta në furrë me 200 gradë.</br></p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/4.jpg" alt="Qofte">
                </div>
                <div class="box__content">
                    <h4>Qofte</h4>
                    <span>Receta</span>
                    <p><b>Përbërësit:</b> 60 gr thërrime buke,60 ml qumësht,400 gr mish i girë viçi,1 vezë,30 gr djathë kaçkavall,Pak arrëmyshk,1 lugë gjelle majdanoz,1 lugë gjelle nenexhik,Vaj,Kripë,Piperi zi.<br><b>Përgaditja:</b> Shtoni thërrimet e bukës në një tas mesatar sëbashku me qumështin dhe lërini për 10 minuta, derisa buka të përthithë gjithë qumështin. Më pas shtoni në të mishin e viçit. Hidhni vezën, djathin e grirë, arrëmyshkun, majdanozin dhe nenexhikun e copëtuar. Spërkatini me pak kripë dhe piper të zi dhe përziejini mirë të gjithë përbërësit që të përftoni një masë homogjene. Më pas merrni nga masa e përgatitur dhe formoni qoftet në formën që dëshironi. Vendosni një tigan me vaj dhe renditni qoftet në të. Skuqini për disa minuta nga të dyja anët dhe renditini në një pjatë për servirje.</br></p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/4.jpg" alt="Kek pa miell dhe sheqer">
                </div>
                <div class="box__content">
                    <h4>Kek pa miell dhe sheqer</h4>
                    <span>Receta</span>
                    <p><b>Përbërësit:</b> 4 vezë, 2 portokall, 200 gram arra, gjysëm lugë çaji sodë buke, 100 gram çokollatë gatimi ,200 ml ajkë qumështi<br><b>Përgaditja:</b> Së pari, qërojini, grijini dhe hidhini portokajt në një enë të vogël. Ziejini për gjysmë ore derisa të zbuten. Shtojini në blender së bashku me vezët, arrat dhe sodën e bukës .Hidheni përzierjen në një formë keku dhe vendoseni në furrë. Piqeni në temperaturën 200 gradë Celcius për 20 minuta. Ndërkohë, shkrijeni çokollatën dhe ajkën e qumështit për disa minuta. Nxirreni kekun nga furra dhe hidheni përzierjen me çokollatë mbi të.</br></p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/4.jpg" alt="Byrek me kryp">
                </div>
                <div class="box__content">
                    <h4>Byrek me kryp</h4>
                    <span>Receta</span>
                    <p><b>Përbërësit:</b>
                        1 pako peta të gatshme
                        500g kungull i verdhë
                        300ml qumësht
                        3 vezë
                        50g gjalpë
                        kripë
                        piper i zi
                    </br><b>Përgaditja:</b>
                        Grijmë kungullin në rende dhe e ziejmë në një tenxhere me ujë me kripë. Pasi ka zierë, e kullojmë dhe e përziejmë me vezët, qumështin dhe gjysmën e sasisë së gjalpit. Në një tavë drejtkëndore shtrojmë një letër furre pastaj fillojmë të shtrojmë petët nga tre duke i spërkatur ndërmjet tyre me gjalpë të shkrirë. Në çdo tre petë hedhim nga masa e kungullit dhe kështu vazhdojmë deri në fund
                        Petët e fundit i spërkasim me gjalpë të shkrirë dhe e pjekim në furrë të nxehur më parë me 200 gradë derisa të marrë ngjyrë të kuqërremtë.</br></p>
                </div>
            </div>
        </div>

        <div class="column-3 column-mob-10">
            <div class="box">
                <div class="box__thumb">
                    <img src="img/4.jpg" alt="Rizoto">
                </div>
                <div class="box__content">
                    <h4>Rizoto</h4>
                    <span>Rizoto</span>
                    <p><b>Përbërësit:</b>

200 gramë kërpudha,

100 gramë oriz,

 1 karotë e madhe,

 2 tufa qepë të reja,

 fletë majdanozi,

 vaj,

 kripë,

 piper.

</br><b>Përgaditja:</b>

Në vaj fërgoni qepën e grirë pastaj shtoni karotën e grirë.

Kur të fërgohet, shtoni shampinjonët e grirë dhe orizin të cilin më parë e keni larë, pastaj qitni pak ujë dhe zieni në zjarr të ngadalshëm.

Kur orizi të fryhet pak, shtoni kripën dhe piperin, pastaj qiteni në gjyveç dhe shtoni fletët e grira të majdanozit.

Shtoni edhe pak ujë dhe futeni në furrë që të piqet në 200 gradë Celsius rreth 30 minuta.</br></p>
                </div>
            </div>
        </div>

<!----gallery -->
<!--
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/9.jpg" class="img-fluid">
              <img src="img/2.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/3.jpg" class="img-fluid">
              <img src="img/4.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/5.jpg" class="img-fluid">
               <img src="img/6.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/7.jpg" class="img-fluid">
               <img src="img/8.jpg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>-->

<!----end of gallery--> 

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<!--<div class="header2">
</div>-->

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Contact</h3><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d93888.93078909654!2d21.158347!3d42.660739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c97e5834932545a!2sNEWBORN!5e0!3m2!1sen!2sgr!4v1618852300117!5m2!1sen!2sgr" width="1110" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>            
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>         
<?php

if(isset($_POST['check_schedule'])){     
require 'includes/dbh.inc.php';           
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }       
   //close connection
   mysqli_close($conn);
}
?>                
                </div><br>
            </div>
            <div class="col">
            <h4 class="text-right"><strong>Contact</strong></h4>
            <p class="text-right">Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; Rr. Luan Haradinaj, Prishtinë 10000
 <br>email: restaurant@gmail.com<br>phone: +383 44 123 456</p>
            </div>
	</div>
    </div>
</section>
<!--end of main page map section-->

<?php
require "footer.php";
?>