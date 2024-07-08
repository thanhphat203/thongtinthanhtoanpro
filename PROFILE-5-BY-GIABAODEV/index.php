<?php require_once('anti-ddos.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giabao Dev</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Josefin+Sans:wght@700&family=Quantico&family=Righteous&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  </head>
  <body onclick="audio.play()" onload="VanDat()">
    <div class="stars-oo">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </div>
  <center>
      <div id="header">
        <div id="bg_header">
          <img class="bg-img" src="https://i.pinimg.com/originals/ad/22/2d/ad222d4e1a9469c6369d3dd974c2ca79.gif">
        </div>
        <div id="in-bg">
          <div class="VanDatAvatar">
            <img class="circle-avt" src="./img/avt.jpg">
          </div>
          <div class="VanDatName">
            <h1 class="font-dark light">Lê Nguyễn Thành Phát <img src="./img/tick-blue.png" width="17" height="17">
              <p class="username">@ThanhPhat-Dev</p>
            </h1>
          </div>
          <div id="social-media">
            <div class="icon-social">
              <a href="">
                <img class="fa facebook" title="Facebook cá nhân" src="./img/facebook.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa github" title="Xem dự án của tôi" src="./img/github.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa youtube" title="Đăng kí kênh youtube của tôi!" src="./img/youtube.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa telegram" title="Support ở đây" src="./img/telegram.png" width="19" height="19">
              </a>
            </div>
          </div>
          <hr class="hr-style">
          <div id="payments">
            <h2 class="title">THÔNG TIN THANH TOÁN</h2>
            <div class="banking">
              <img class="img-bank" src="./img/mbbank.png" width="53" height="53">
              <span class="stk" onclick="copyText('14678999999999');stk()">14678999999999 <p class="muted">LE NGUYEN THANH PHAT</p>
              </span>
            </div>
            <div class="banking">
              <img class="img-bank" src="./img/momo.jpg" width="53" height="53">
              <span class="stk" onclick="copyText('0899331022');stk()">0899331022 <p class="muted">LE NGUYEN THANH PHAT</p>
              </span>
            </div>
          </div>
        </div>
      </div>
      <img id="kbn" src="./img/cute.gif" alt="Anime Girl">
      <footer>
        <p class="muted-copyright">Design by <a class="xanh-link" title="dat dz" href="https://facebook.com/Thanh.Phat.203/">THANHPHAT DEV</a></p>
        <p class="muted-copyright">&copy Copyright - All rights reserved</p>
      </footer>
      </div>
    </center>
    <script src="./assets/js/index.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<!-- notify -->
</script>
    <script>
      function VanDat() {
        Swal.fire({
  imageUrl: 'https://i.imgur.com/YHzxT85.gif',
  imageWidth: 200,
  imageHeight: 200,
  imageTitle: 'ThanhPhat Dev'
})
    }
    </script>

<!-- click tha tim -->

    <script type='text/javascript'> ! function (e, t, a) { function n() { c( ".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}" ), o(), r() } function r() { for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999"); requestAnimationFrame(r) } function o() { var t = "function" == typeof e.onclick && e.onclick; e.onclick = function (e) { t && t(), i(e) } } function i(e) { var a = t.createElement("div"); a.className = "heart", d.push({ el: a, x: e.clientX - 5, y: e.clientY - 5, scale: 1, alpha: 1, color: s() }), t.body.appendChild(a) } function c(e) { var a = t.createElement("style"); a.type = "text/css"; try { a.appendChild(t.createTextNode(e)) } catch (t) { a.styleSheet.cssText = e } t.getElementsByTagName("head")[0].appendChild(a) } function s() { return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")" } var d = []; e.requestAnimationFrame = function () { return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) { setTimeout(e, 1e3 / 60) } }(), n() }(window, document); </script>

<!--
    <script>
      // day la nhac nen 
      var audio = new Audio('https://files.catbox.moe/jev9vr.mp3');
      audio.oncanplaythrough = function() {
        audio.play();
      }
      audio.loop = true;
      audio.onended = function() {
        audio.play();
      }
    </script>
-->
<script type='text/javascript'>
      //<![CDATA[
        // loading
        $(".siben").delay(5000).fadeOut("fast");
        // open link
        function openlink(url) {
          window.open(url, "_blank").focus();
        }
        </script>
  </body>
</html>
<script>              
    function VietKhanhStart() {
                       audio.play();
                             }
                                   const VietKhanh_List = [
                                    "//files.catbox.moe/p2y2x6.mp3", // thôi thì em hãy về

                                    "//files.catbox.moe/luj77v.mp3", // nào cưới

                                    "//files.catbox.moe/i3cv4q.mp3", // và chỉ mong trong con tym

                                    "//files.catbox.moe/wx8l9n.mp3", //gió

                                    "//files.catbox.moe/gvvchw.mp3", // fly away
                                         ];
                                         //Random music
                                         let index = Math.floor(Math.random() * VietKhanh_List.length);
                                         const audio = new Audio(VietKhanh_List[index]);
                                         function VietKhanhAudio() {
                                           audio.play();
                                           }
                                           document.addEventListener("click", VietKhanhAudio);
                                           audio.addEventListener("ended", function() {
                                             index = (index + 1) % VietKhanh_List.length;
                                               audio.src = VietKhanh_List[index];
                                                 audio.play();
                                                 });
</script>
          </body>
                <script>//<![CDATA[
                      const disabledKeys = ["c", "C", "x", "J", "u", "I"];
                      const showAlert = e => {
                        e.preventDefault();
                        return alert("F12 CÁI CON CẶC !");
                      }
                      document.addEventListener("contextmenu", e => {
                        showAlert(e);
                      });
                      document.addEventListener("keydown", e => {
                        // calling showAlert() function, if the pressed key matched to disabled keys
                        if((e.ctrlKey && disabledKeys.includes(e.key)) || e.key === "F12") {
                          showAlert(e);
                        }
                      });
                      window.addEventListener("load",function(){
                        try {
                          !function t(n) {
                            1 === ("" + n / n).length && 0 !== n || function() {}.constructor("debugger")(), t(++n)
                          }(0)
                        } catch (n) {
                          setTimeout(t, 100)
                        }
                      });
                //]]></script>