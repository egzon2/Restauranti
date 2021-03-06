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
            <p><strong>"Kur puna juaj flet vet??, mos e nd??rprisni"- Henry J. Kaiser"</p>
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
	<p><br>Ambienti - elegant, me stil t?? lart??. Shum?? tavolina n?? natyr?? n?? nj?? oborr t?? bukur n?? natyr??,
     me disa tavolina brenda. Tabelat me hap??sir?? mjaft t?? larg??t ndermjet vete.
    Ushqimi - shum?? shum?? i mir??. Shije e shk??lqyeshme, prezantime t?? shk??lqyera. I p??lqej ushqimet e peshkut, vi??it dhe qengjit, 
    p??rndryshe nj?? vakt shum?? shum?? i mir??. 
    Sh??rbimi - i k??ndsh??m, miq??sor, mjaft efikas.
    Un?? e rekomandoj shum?? k??t?? vend n??se jeni n?? humor p??r dark?? shum?? t?? mir??<br><br><br></p><hr>
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
                    <p>N?? nj?? tenxhere me 3 lug?? vaj ulliri kaurdisim mishin e qingjit t?? sp??rkatur me krip??. E kaurdisim nga t?? gjitha an??t dhe m?? pas e shuajm?? me ver?? t?? bardh??.Sapo alkooli i ver??s t?? avulloj?? shtojm?? nj?? qep?? t?? grir?? im??t, karrot??n t?? prer?? n?? kubik?? t?? vegj??l dhe domaten t?? grir?? n?? rende.I trazojm?? mir?? p??rb??r??sit i rregullojm?? me pak sheqer, krip?? dhe piper dhe m?? pas shtojm?? buljon me koncentrat pule. Ulim temperatur??n e sob??s dhe e lem?? gatimin t?? ziej?? p??r rreth 40 minuta n?? temperatur?? t?? ul??t.</p>
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
                    <p>Mishin e pul??s priteni n?? kube. N?? vaj t?? nxehur shtoni qep??n e grir?? im??t, f??rgojeni pak, shtoni mishin dhe p??rzieni, shtoni edhe er??zat. Nga fundi shtoni ajk??n p??r zierje dhe djathin mozzarella t?? grir?? n?? rende, djathin gorgonzola dhe djathin trapista. T?? gjitha bashkoni. N?? pjat?? sh??rbeni mishin, nd??rsa si shtojc?? mund t?? jet?? cilado sallat?? qoft?? apo patate t?? f??rguara.</p>
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
                    <p><b>P??rb??r??sit:</b> litra uj??, 1 lug?? ??aji xhenxhefil t?? grir??, 1 kastravec, i q??ruar dhe prer?? holl??, 1 limon, i prer?? holl??, gjethe mente.  
                        <br><b>P??rgaditja:</b>  P??rzieni t?? gjith?? p??rb??r??sit n?? nj?? brok?? t?? madhe dhe i lini p??rb??r??sit t?? treten gjat?? gjith?? nat??s. Konsumojeni t?? gjith?? ujin n?? broke gjat?? gjith?? dit??s s?? nes??rme. T?? nj??jt??n gj?? b??ni ??do dit??.
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
                    <p><b>P??rb??r??sit:</b> 400gr gjiz?? pa yndyr??, 500gr spinaq, dy patate t?? ziera, krip?? dhe piper.<br><b>P??rgaditja:</b> Zieni spinaqin n?? pak uj??, shtrydheni dhe grijeni. Bashkojeni me patatet e ziera dhe gjiz??n, duke i hedhur piper dhe pak krip??. P??rzierjen e p??rftuar vendoseni n?? nj?? tav?? t?? mbuluar me let??r furre dhe futeni t?? piqet p??r rreth 40-45 minuta n?? furr?? me 200 grad??.</br></p>
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
                    <p><b>P??rb??r??sit:</b> 60 gr th??rrime buke,60 ml qum??sht,400 gr mish i gir?? vi??i,1 vez??,30 gr djath?? ka??kavall,Pak arr??myshk,1 lug?? gjelle majdanoz,1 lug?? gjelle nenexhik,Vaj,Krip??,Piperi zi.<br><b>P??rgaditja:</b> Shtoni th??rrimet e buk??s n?? nj?? tas mesatar s??bashku me qum??shtin dhe l??rini p??r 10 minuta, derisa buka t?? p??rthith?? gjith?? qum??shtin. M?? pas shtoni n?? t?? mishin e vi??it. Hidhni vez??n, djathin e grir??, arr??myshkun, majdanozin dhe nenexhikun e cop??tuar. Sp??rkatini me pak krip?? dhe piper t?? zi dhe p??rziejini mir?? t?? gjith?? p??rb??r??sit q?? t?? p??rftoni nj?? mas?? homogjene. M?? pas merrni nga masa e p??rgatitur dhe formoni qoftet n?? form??n q?? d??shironi. Vendosni nj?? tigan me vaj dhe renditni qoftet n?? t??. Skuqini p??r disa minuta nga t?? dyja an??t dhe renditini n?? nj?? pjat?? p??r servirje.</br></p>
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
                    <p><b>P??rb??r??sit:</b> 4 vez??, 2 portokall, 200 gram arra, gjys??m lug?? ??aji sod?? buke, 100 gram ??okollat?? gatimi ,200 ml ajk?? qum??shti<br><b>P??rgaditja:</b> S?? pari, q??rojini, grijini dhe hidhini portokajt n?? nj?? en?? t?? vog??l. Ziejini p??r gjysm?? ore derisa t?? zbuten. Shtojini n?? blender s?? bashku me vez??t, arrat dhe sod??n e buk??s .Hidheni p??rzierjen n?? nj?? form?? keku dhe vendoseni n?? furr??. Piqeni n?? temperatur??n 200 grad?? Celcius p??r 20 minuta. Nd??rkoh??, shkrijeni ??okollat??n dhe ajk??n e qum??shtit p??r disa minuta. Nxirreni kekun nga furra dhe hidheni p??rzierjen me ??okollat?? mbi t??.</br></p>
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
                    <p><b>P??rb??r??sit:</b>
                        1 pako peta t?? gatshme
                        500g kungull i verdh??
                        300ml qum??sht
                        3 vez??
                        50g gjalp??
                        krip??
                        piper i zi
                    </br><b>P??rgaditja:</b>
                        Grijm?? kungullin n?? rende dhe e ziejm?? n?? nj?? tenxhere me uj?? me krip??. Pasi ka zier??, e kullojm?? dhe e p??rziejm?? me vez??t, qum??shtin dhe gjysm??n e sasis?? s?? gjalpit. N?? nj?? tav?? drejtk??ndore shtrojm?? nj?? let??r furre pastaj fillojm?? t?? shtrojm?? pet??t nga tre duke i sp??rkatur nd??rmjet tyre me gjalp?? t?? shkrir??. N?? ??do tre pet?? hedhim nga masa e kungullit dhe k??shtu vazhdojm?? deri n?? fund
                        Pet??t e fundit i sp??rkasim me gjalp?? t?? shkrir?? dhe e pjekim n?? furr?? t?? nxehur m?? par?? me 200 grad?? derisa t?? marr?? ngjyr?? t?? kuq??rremt??.</br></p>
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
                    <p><b>P??rb??r??sit:</b>

200 gram?? k??rpudha,

100 gram?? oriz,

 1 karot?? e madhe,

 2 tufa qep?? t?? reja,

 flet?? majdanozi,

 vaj,

 krip??,

 piper.

</br><b>P??rgaditja:</b>

N?? vaj f??rgoni qep??n e grir?? pastaj shtoni karot??n e grir??.

Kur t?? f??rgohet, shtoni shampinjon??t e grir?? dhe orizin t?? cilin m?? par?? e keni lar??, pastaj qitni pak uj?? dhe zieni n?? zjarr t?? ngadalsh??m.

Kur orizi t?? fryhet pak, shtoni krip??n dhe piperin, pastaj qiteni n?? gjyve?? dhe shtoni flet??t e grira t?? majdanozit.

Shtoni edhe pak uj?? dhe futeni n?? furr?? q?? t?? piqet n?? 200 grad?? Celsius rreth 30 minuta.</br></p>
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
            <p class="text-right">Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; Rr. Luan Haradinaj, Prishtin?? 10000
 <br>email: restaurant@gmail.com<br>phone: +383 44 123 456</p>
            </div>
	</div>
    </div>
</section>
<!--end of main page map section-->

<?php
require "footer.php";
?>