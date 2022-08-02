<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ماسح الرمز الشريطي ورمز الاستجابة السريع</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="style.css"/> --}}
  <script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@9.0.2/dist/dbr.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/barcode-detection@0.4.0/dist/barcode-detector.umd.js"></script>
  {{-- <script src="https://unpkg.com/eruda@2.4.1/eruda.js"></script> --}}
  {{-- <script>eruda.init();</script> --}}
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;500&display=swap');
*{
    padding: 0%;
    margin: 0%;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
}
:root{
    --yellow: #F3B541;
}
html{
    overflow-x: hidden;
}
html::-webkit-scrollbar{
    width:1.3rem;
}

html::-webkit-scrollbar-track{
   background: #eee;
}

html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}
body{
    font-family: 'Tajawal', sans-serif;
    line-height: 2rem;
    margin: 0px;
    padding: 0px;
    width: 100%;
    min-height: 100vh;
}

/* =============HEADER=============== */

header{
    width:100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:1rem 7%;
    background:#F3B541;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    position: fixed;
    top: 0; left: 0;
    z-index: 1000;

}

header .logo .img_logo{
    height: 5.5rem;
}
#title_logo{
    display: none;
}
header .nav_container a{
    font-size: 1rem;
    color:#145E71;
    margin-left: 3rem;
    /* font-weight: 400; */
    font-family: 'Tajawal', sans-serif;
}

header .nav_container a:hover{
    color:#99540C;
}
#menu{
    font-size: 2rem;
    color:#145E71;
    cursor: pointer;
    padding:.5rem 1rem;
    border:.1rem solid #145E71;
    border-radius: .5rem;
    display: none;
}
/* ==============HOME============ */


/* section{ */
    /* min-height: 100vh; */
    /* padding:0 7%;
    padding-top: 9rem; */
/* } */

.section_home {
    /* display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%; */
    background: url('banzin.jpg') no-repeat;
    /* background-size: 66%; */
    background-size: 67%;
    background-position: left;

    /* background-color: #F3B541; */
    margin-top: 15%;
    overflow: hidden;
    padding: 8.57rem 0rem 5rem 0rem;
}

/* #img_home{
    width: 100%;
    margin-top: 40px;
} */
/* .section_wrap2{
    width: 30%;
} */
.section_wrap1{

    width: 40%;
    /* height: 570px; */
    float: right;

    background-color: #fdfdfd;
    padding: 2.5rem;
    box-sizing: border-box;
    box-shadow: 0 16px 20px -6px rgb(199, 199, 199);
}
    .section_wrap1 p{
    color: rgb(110, 110, 110);
    }
    .section_wrap1 h3{
    color: #145E71;
    margin-bottom: .75rem;
    font-size: 1rem;
    }

/*============ scanner============ */

#heading{
    margin: 90px 0px 40px 0px;
    text-align: center;
    color: #145E71;
    font-size: 2rem;
}
#form_text{
    color: rgb(110, 110, 110);
}

#startButton, #closeButton{
    margin-left: 2rem;
    padding: .6rem 1rem;
    font-size: 1.16rem;
    cursor: pointer;
    border-radius: 27px;
    background-color:#F3B541;
    color: #145E71;
    cursor: pointer;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    /* text-align: center; */
    border: 3px solid  #F3B541;

 }
 #fileInput{
    display: none ;
    margin-left: 2rem;
    padding: .6rem .5rem;
    font-size: 1rem;
    border-radius: 20px;
    color: #145E71;
    cursor: pointer;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);

 }

/* ==================FORM=============== */

#btn2{

    padding: .7rem 2rem;
    /* width: 150px; */
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    background-color: #F3B541;
    text-align: center;
    font-size: 1.5rem;
    border-radius: 27px;
    border: 3px solid  #F3B541;
    color: #145E71;
    margin-top: 4rem;
    margin-bottom: 3rem;
    cursor: pointer;
}

form{
  text-align: center;
  align-items: center;
  margin: 60px 0px 40px 0px;
  /* width: 50%; */
    font-size: 1.5rem;
}
#result{
    width: auto;
    border-radius: 50px;
    border: 2px solid #145E71;
    font-size: 1rem ;
    /* margin: 10px auto; */
    background: transparent;
    color: #145E71;
    padding: .4rem;
    margin-bottom: 2.5rem;
}

/* =============FOOTER============== */

#footer{
    /* position: fixed; */
    /* bottom: 0px; */
    background: #282727;
    /* height: 80px; */
    width: 100%;
    min-height: auto;
    align-items: center;
    /* padding: 0.8rem 8%; */
    padding-top: 2rem;
}
.footer__container{
    display: flex;
    justify-content: center;
   /* flex-direction: row; */
    flex-wrap: wrap;
    /* display: flex;
    flex-direction: row;
    margin-top: 29px;
    justify-content: space-around; */
}


.footer .footer__container .box{
    margin:2rem;
    flex:1 1 2rem;
}

.footer .footer__container .box img{
    height:6rem;
}

.footer .footer__container .box p{
    font-size: 1rem;
    color:rgb(221, 199, 199);
    padding: .6rem 0;
}

.footer .footer__container .box p i{
    /* padding-right: .8rem; */
    color:var(--yellow);
    margin-left: 1rem;
}
.footer .footer__container .box h4{
    font-size: 1rem;
    color:var(--yellow);
    padding:1rem 0;
}
.footer .footer__container .box .fab{
    /* height:5rem;
    width:5rem; */
    line-height: 4.8rem;
    text-align: center;

    border-radius: 50%;
    font-size: 2rem;
    color: #F3B541;
    margin-left: 1.5rem;
}

.footer .footer__container .box .footer_list a:hover{

    color: #F3B541;
}
.footer .footer__container .box  .fab:hover{

    color: #145E71;
}
.footer_list{
    list-style: none;
    font-size: 1rem;


}
.footer_item{
    padding: 0.6rem 0;
}


.footer_link{
    text-decoration: none;
    color: rgb(221, 199, 199);
}

#add{
    color: #F3B541;
    font-size: 0.8rem;
}
.copy_right{
    font-size: 0.8rem;
    text-align: center;
    margin: 2rem 3rem 0rem 3rem;
    font-weight: lighter;
    letter-spacing: .1rem;
    color: rgb(192, 187, 187);
    border-top: .1rem solid rgba(255,255,255,.7);
    padding: 1rem 1rem;
    color: #eee;
}


/* ======end footer======== */


/* ==========scroll=========== */

#scroll-top{
    position: fixed;
    bottom:3.9rem; right: 1rem;
    z-index: 100;
    height:4rem;
    width:4rem;
    line-height: 4rem;
    font-size: 2rem;
    text-align: center;
    color:var(--yellow);
    border:.1rem solid #F3B541;
    border-radius: .7rem;
    background:#eee;
}
/* ======================= MEDIA QUERIES=================== */

@media screen and (max-width: 480px) {

}


/* @media only screen and (min-width: 480px) and (max-width: 513px)  { */
/* .section_home{
    background: url(banzin.jpg) no-repeat left;
    background-size: 66%; */
    /* background-color: #F3B541; */
   /* margin-top: 50px;
    overflow: hidden;
    padding: 100px 0; */

/* }
} */
/* ================MEDIA QUERY mobile==================== */


@media screen and (max-width:788px){


/* ==============header============ */
    #menu{
        display: block;
        font-size: 1rem;

        padding:.6rem .5rem;
        border:.1rem solid #145E71;

    }

    header{
        padding:1rem 2%;
    }

    header .nav_container{
        position: absolute;
        top:100%;
        left:0;
        width:100%;
        background: #F3B541;
        text-align: center;
        padding:1rem 0;
        border-top: .1rem solid #F3B541;
        transform: scaleY(0);
        transform-origin: top;
        opacity: 0;
    }

    header .nav_container.nav-toggle{
        transform: scaleY(1);
        opacity: 1;
    }

    header .nav_container a{
        display: block;
        padding:.3rem 0;
        margin:1rem 0;
        font-size: 1rem;
        color: #145E71;
    }
    header .logo .img_logo{
        height: 3rem;
    }

    #title_logo{
        display: contents ;
        font-size: 1rem;
        color:#145E71;
        /* margin-left: 3rem; */

        font-family: 'Tajawal', sans-serif;

    }
    /* ==========home============ */

    .section_home {
        line-height: 1rem;
        background-size: 67%;
        background-position: left;
        margin-top: 10%;
        padding: 2.57rem 0rem 5rem 0rem;
    }
    .section_wrap1 {

    margin-top: 2rem;
    padding: 1rem;
    }
    .section_wrap1 p{
    font-size: 0.8rem;
    }
    .section_wrap1 h3{
        font-size: .7rem;

        }

        /* =========scanner============= */

  #heading{
    margin: 0rem 0rem 2.5rem 0rem;
    font-size: 1.2rem;
        }

        .btn_scanner {
            margin-top: 0rem;
            margin-right: 2rem;
             margin-bottom: 2rem;
        }

        .btn_scanner a{
    font-size:.9rem;
    padding: .3rem .8rem;
        }
        .scanner_video{
            width: 90%;

        }
        /* =================form=========== */

    form{
        font-size: 1.2rem;
    }
    #form_text {
        padding: 0rem 2rem;
        font-size: 1rem;
    }
    #btn2 {
        padding: 0.3rem 0.8rem;
        font-size: .9rem;
    }

    /* ==========footer========= */
    .footer .footer__container .box{

        flex: none;
    }
    .footer .footer__container .box .fab{
        font-size:1.5rem;
    }
    /* ============scroler========== */

    #scroll-top{
        position: fixed;
        bottom:5.9rem; right: 1rem;
        z-index: 100;
        height:3.5rem;
        width:3.5rem;
        line-height: 4rem;
        font-size: 1.5rem;
        text-align: center;
        color:var(--yellow);
        border:.1rem solid rgba(0,0,0,.1);
        border-radius: .7rem;
        background:#eee;
    }
}
</style>
</head>
<body dir="rtl">

    <!-- -=============HEADER================= -->


    <!-- header section starts  -->

<header id="header">

    <a class="logo" href=""><img class="img_logo" src="{{URL::asset('./logo.png')}}" alt="profile Pic" >
    </a>
    <p id="title_logo">شركة توزيع المنتجات النفطية</p>
  <div id="menu" class="fas fa-bars"></div>

  <nav class="nav_container">
      <a href="#home2" class="nav_link">الصفحة الرئيسية</a>
      <a href="#scanner_id" class="nav_link">الماسح الضوئي</a>
      <a href="#" class="nav_link">أتصل بنا</a>
      <a href="#" class="nav_link">تسجيل دخول</a>
      <a href="#" class="nav_link">تسجيل خروج</a>

  </nav>

</header>

<!-- header section ends -->


<!-- ===============START Section HOME=================== -->
    <!-- <main class="main_container"> -->


        <!-- =========HOME ============= -->
        <section class="section_home" id="home2">
            <div class="section_wrap1">
                <h3>ماسح الرمز الشريطي ورمز الاستجابة السريع</h3>
                <p>يساعدك موقع الماسح الضوئي على تعبئة الوقود بطريقة امنة. يمكنك مشاهدة الفديو على يسار الصفحة لمعرفة كيفية استخدام الماسح الضوئي  </p>
                <!-- <br> -->
              </div>
        <!-- <div class="section_wrap2">
                <img src="scanner.jpg" alt="" id="img_home">
        </div> -->
      </section>

      <!-- ====END SECTION HOME -->

  <center>
    <div class="home">
    <div id="status">جاري التهيئة...</div>
     <h2 id="heading">الماسح الضوئي للبطاقة الوقودية</h2>
    <button id="startButton">البدء الان</button>
    <input id="fileInput" />

  </div>
  </center>
  <div class="scanner" id="scanner_id" style="display:none;">
    <select id="cameraSelect"></select>
    <button id="closeButton">اغلق</button>
    <svg class="overlay fullscreen"></svg>
    <video class="camera fullscreen" muted autoplay="autoplay" playsinline="playsinline" webkit-playsinline></video>
  </div>

  <form action="{{route('coupons.store')}}" method="post">
    @csrf

    <input type="text" name="scan2" id="result" value="">
    <p id="form_text">بعد أتمام عملية الماسح الضوئي يرجى الضغط على الزر المبين أدناه</p>
    <button type="submit" id="btn2" name="sub">أضغط هنا</button><br><br>

</form>


<!-- =============start footer============= -->

    <footer class="footer" id="footer">

      <div class="footer__container">

          <div class="box">
              <img src="logo.png" alt="" >
              <p>شــركة توزيــع المنتجات النفطية <br> هيــأة توزيــع بغــداد</p>
          </div>

          <div class="box">
              <h4>أتــصل بنا</h4>
              <p> <i class="fas fa-phone"></i> +9640077000000 </p>
              <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
              <p> <i class="fas fa-map-marker-alt"></i> بغداد- مصفى الدورة </p>
              <p> <i class="fas fa-map-marker-alt"></i> بغداد- الكيلاني </p>
          </div>



          <div class="box">
            <h4> روابط سريعة</h4>
            <ul class="footer_list">
                <li class="footer_item"><a href="#" class="footer_link">الصفحة الرئيسية</a></li>
                <li class="footer_item"><a href="#" class="footer_link">الماسح الضوئي</a></li>
                <li class="footer_item"><a href="#" class="footer_link">تسجيل حساب</a></li>


            </ul>
        </div>


        <div class="box">
          <h4> مواقع التواصل الاجتماعي</h4>
          <a href="#" class="fab fa-youtube"></a>
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
      </div>
      </div>

      <div class="copy_right">
         <p><span id="add">شركة توزيع المنتجات النفطية. </span>جميع الحقوق محفوظة &copy; 2022</p>
      </div>
      <!-- <h1 class="credit"> created by <span>mr. web designer</span> | all rights reserved! </h1> -->

    </footer>
<!-- =============== end FOOTER============== -->

      <!-- scroll top  -->
      <a href="#home2" class="fas fa-arrow-up" id="scroll-top"></a>
  <script>

var barcodeDetector;
var decoding = false;
var localStream;
var interval;
var scannerContainer = document.querySelector(".scanner");
var home = document.querySelector(".home");
var header = document.querySelector("header");
var home2 = document.querySelector("#home2");
var footer = document.querySelector("#footer");
var form = document.querySelector("form");
var startButton = document.querySelector("#startButton");
startButton.onclick = function() {
  scannerContainer.style.display = "";
  home.style.display = "none";
  header.style.display = "none";
  home2.style.display = "none";
  footer.style.display = "none";
  form.style.display = "none";
  loadDevicesAndPlay();
}
var fileInput = document.querySelector("#fileInput")
fileInput.onchange = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();

  reader.onload = function(e){
    var img = document.getElementById("selectedImg");
    img.src = e.target.result;
    img.onload = async function() {
      var detectedCodes = await barcodeDetector.detect(img);
      var json = JSON.stringify(detectedCodes, null, 2);
      console.log(json);
      alert(json);
    }
  };

  reader.onerror = function () {
    console.warn('oops, something went wrong.');
  };

	reader.readAsDataURL(file);
}

var closeButton = document.querySelector("#closeButton");
closeButton.onclick = function() {
  stop();
  scannerContainer.style.display = "none";
  home.style.display = "";
  header.style.display = "";
  home2.style.display = "";
  footer.style.display = "";
  form.style.display = "";
}
document.getElementsByClassName("camera")[0].addEventListener('loadeddata',onPlayed, false);
document.getElementById("cameraSelect").onchange = onCameraChanged;
initBarcodeDetector();

// this is afunction
async function initBarcodeDetector(){
  var barcodeDetectorUsable = false;
  if ('BarcodeDetector' in window) {
    let formats = await window.BarcodeDetector.getSupportedFormats();
    if (formats.length > 0) {
      barcodeDetectorUsable = true;
    }
  }

  if (barcodeDetectorUsable === true) {
    alert('Barcode Detector supported!');
  }else{
    alert('Barcode Detector is not supported by this browser, using the Dynamsoft Barcode Reader polyfill.');


    // license
    BarcodeDetectorPolyfill.setLicense("DLS2eyJoYW5kc2hha2VDb2RlIjoiMjAwMDAxLTE2NDk4Mjk3OTI2MzUiLCJvcmdhbml6YXRpb25JRCI6IjIwMDAwMSIsInNlc3Npb25QYXNzd29yZCI6IndTcGR6Vm05WDJrcEQ5YUoifQ==");
    let reader = await BarcodeDetectorPolyfill.init();
    console.log(reader); // You can modify the runtime settings of the reader instance.
    window.BarcodeDetector = BarcodeDetectorPolyfill;
  }

  barcodeDetector = new window.BarcodeDetector();

  document.getElementById("status").innerHTML = "";
}

function loadDevicesAndPlay(){
  var constraints = {video: true, audio: false};
  navigator.mediaDevices.getUserMedia(constraints).then(stream => {
      localStream = stream;
      var cameraselect = document.getElementById("cameraSelect");
      cameraselect.innerHTML="";
      navigator.mediaDevices.enumerateDevices().then(function(devices) {
          var count = 0;
          var cameraDevices = [];
          var defaultIndex = 0;
          for (var i=0;i<devices.length;i++){
              var device = devices[i];
              if (device.kind == 'videoinput'){
                  cameraDevices.push(device);
                  var label = device.label || `Camera ${count++}`;
                  cameraselect.add(new Option(label,device.deviceId));
                  if (label.toLowerCase().indexOf("back") != -1) {
                    defaultIndex = cameraDevices.length - 1;
                  }
              }
          }

          if (cameraDevices.length>0) {
            cameraselect.selectedIndex = defaultIndex;
            play(cameraDevices[defaultIndex].deviceId);
          }else{
            alert("No camera detected.");
          }
      });

  });
}

function play(deviceId, HDUnsupported) {
  stop();
  var constraints = {};

  if (!!deviceId){
      constraints = {
          video: {deviceId: deviceId},
          audio: false
      }
  }else{
      constraints = {
          video: true,
          audio: false
      }
  }

  navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
      localStream = stream;
      var camera = document.getElementsByClassName("camera")[0];
      // Attach local stream to video element
      camera.srcObject = stream;

  }).catch(function(err) {
      console.error('getUserMediaError', err, err.stack);
      alert(err.message);
  });
}

function stop(){
  clearInterval(interval);
  try{
      if (localStream){
          localStream.getTracks().forEach(track => track.stop());
      }
  } catch (e){
      alert(e.message);
  }
}

function onCameraChanged(){
  var cameraselect = document.getElementById("cameraSelect");
  var deviceId = cameraselect.selectedOptions[0].value;
  play(deviceId);
}

function onPlayed() {
  updateSVGViewBoxBasedOnVideoSize();
  startDecoding();
}

function updateSVGViewBoxBasedOnVideoSize(){
  var camera = document.getElementsByClassName("camera")[0];
  var svg = document.getElementsByTagName("svg")[0];
  svg.setAttribute("viewBox","0 0 "+camera.videoWidth+" "+camera.videoHeight);
}

function startDecoding(){
  clearInterval(interval);
  //1000/25=40
  interval = setInterval(decode, 40);
}

async function decode(){
  if (decoding === false) {
    // console.log("decoding");
    var video = document.getElementsByClassName("camera")[0];
    decoding = true;
    var barcodes = await barcodeDetector.detect(video);
    decoding = false;
    console.log(barcodes);
    drawOverlay(barcodes);
  }
}

function drawOverlay(barcodes){
  var svg = document.getElementsByTagName("svg")[0];
  svg.innerHTML = "";
  for (var i=0;i<barcodes.length;i++) {
    var barcode = barcodes[i];
    // console.log(barcode);
    var lr = {};
    lr.x1 = barcode.cornerPoints[0].x;
    lr.x2 = barcode.cornerPoints[1].x;
    lr.x3 = barcode.cornerPoints[2].x;
    lr.x4 = barcode.cornerPoints[3].x;
    lr.y1 = barcode.cornerPoints[0].y;
    lr.y2 = barcode.cornerPoints[1].y;
    lr.y3 = barcode.cornerPoints[2].y;
    lr.y4 = barcode.cornerPoints[3].y;
    var points = getPointsData(lr);
    var polygon = document.createElementNS("http://www.w3.org/2000/svg","polygon");
    polygon.setAttribute("points",points);
    polygon.setAttribute("class","barcode-polygon");
    var text = document.createElementNS("http://www.w3.org/2000/svg","text");
    var v369 = text.innerHTML = barcode.rawValue;
    text.setAttribute("x",lr.x1);
    text.setAttribute("y",lr.y1);
    text.setAttribute("fill","red");
    text.setAttribute("fontSize","20");
    svg.append(polygon);
    svg.append(text);
  //  out all the demesion of the barcode
   console.log("the barcode", text );
//  undiefind
   var x = text.value;
   console.log("the result is", x);
  //v369 is the text value
   console.log("this is the value of barcode", v369);
   var result = document.getElementById("result").value=v369;
  }
}

function getPointsData(lr){
  var pointsData = lr.x1+","+lr.y1 + " ";
  pointsData = pointsData+ lr.x2+","+lr.y2 + " ";
  pointsData = pointsData+ lr.x3+","+lr.y3 + " ";
  pointsData = pointsData+ lr.x4+","+lr.y4;
  return pointsData;
}

  </script>
</body>
</html>
