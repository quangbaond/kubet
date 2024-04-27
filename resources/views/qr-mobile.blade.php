<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="browsermode" content="application">
    <title>KUBET - Thương hiệu Casino chuyên nghiệp số 1 Châu Á với [LaLiga-CA Osasuna là đối tác chính thức] cùng các
        trò chơi giải trí (Thể Thao, Casino, E-Sports, Xổ Số)!</title>
    <meta charset="utf-8">
    <!--Css-->
    <script src="https://ku192.site/js/jquery-3.6.4.js"></script>
    <link href="https://ku192.site/Areas/Mobile/Content/Css/vi-vn/main.css" rel="stylesheet">
    <link href="https://ku192.site/Areas/Mobile/Content/Css/vi-vn/deposit.css" rel="stylesheet">
</head>

<body class="QRbody">
    <div id="QRpay" class="QRpay">
        <div>
            <div class="QRpay_code">
                <div class="QRpay_codeT QRpay_vnd" style="flex-wrap: wrap">
                    <div><span class="t_blue" id="soTienRut">{{ number_format($soTien) }}</span>VND</div>
                    <div id="time" class="QRpay_time">07:42</div>
                    <div id="FinalTime" class="t_blue" style="font-size: 17px;font-weight: bold;margin-left: -10px">
                    </div>
                </div>
                <div id="QRImage" class="QRpay_codeB">
                    <div class="QRpay_img QRred" style="padding:12px;border: 2px solid red;">
                        <input type="hidden" name="typePay" value="bank">
                        <img id="QRImageMode" src="{{ $imgQr }}" />
                    </div>
                    <input type="hidden" name="nganHangCk" value="TCB">
                    <input type="hidden" name="stkCk" value="1709198388">
                    <div class="QRpay_num t_red">Nội dung bắt buộc：<span class="t_blue"
                            id="noiDungChuyenKhoan">{{ auth()->user()->username }}</span></div>
                </div>
            </div>
            <div id="QRText" class="QRpay_note">Mã QR chỉ cung cấp cho nạp tiền lần này. Vui lòng không chuyển vào
                tài khoản
                MoMo.
            </div>
            <div id="QRBrokenText" class="QRpay_note" style="display:none;">Mã QR đã hết hạn, vui lòng thực hiện lại
                giao
                dịch.
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {


            let soTienRut = localStorage.getItem("soTienRut");
            if (soTienRut) {
                console.log('Số tiền rút:')
                let tien = parseInt(soTienRut).toLocaleString();
                console.log(tien)
                // $('#soTienRut')[0].innerHTML = tien + '.000';
            } else {
                // $('#soTienRut')[0].innerHTML = 0;
            }
            var t = setInterval(TimedExpire, 1000);
            var totalTime = Number('900');
            var checkTime = 0;
            if (totalTime <= 0) {
                time.style.display = "none";
                time.innerHTML = "";
                QRImage.style.display = "none";
                QRBrokenImage.style.display = "";
                QRText.style.display = "none";
                QRBrokenText.style.display = "";
                QRpay.className += " off";
            }

            function HtmldeCode(s) {
                var div = document.createElement('div');
                div.innerHTML = s;
                return div.innerText || div.textContent;
            }

            function TimedExpire() {
                totalTime--;
                checkTime++;
                time.innerHTML = HtmldeCode(((Math.floor(totalTime / 60) > 9) ? "" : "0") + Math.floor(totalTime /
                    60) + '：' + ((Math.floor(totalTime % 60) > 9) ? "" : "0") + Math.floor(totalTime % 60));
                if (checkTime == 30) {
                    checkTime = 0;
                }
                if (totalTime <= 0) {
                    clearInterval(t);
                    time.style.display = "none";
                    time.innerHTML = "";
                    QRImage.style.display = "none";
                    QRBrokenImage.style.display = "";
                    QRText.style.display = "none";
                    QRBrokenText.style.display = "";
                    QRpay.className += " off";
                }
            }
        });
    </script>

</body>
<div id="eruda" style="all: initial;"></div>
<div class="__chobitsu-hide__" style="all: initial;"></div>

</html>
