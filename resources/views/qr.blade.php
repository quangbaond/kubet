<!DOCTYPE html>
<html>

<head>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <base href="https://ku192.site/">
    <script src="/js/jquery-3.6.4.js"></script>
    <title>KUBET - Thương hiệu Casino chuyên nghiệp số 1 Châu Á với [LaLiga-CA Osasuna là đối tác chính thức] cùng các
        trò chơi giải trí (Thể Thao, Casino, E-Sports, Xổ Số)!</title>
    <meta charset="utf-8" />
    <link href="/Areas/Mobile/Content/Css/vi-vn/main.css?20210825" rel="stylesheet" />
    <link href="/Areas/Mobile/Content/Css/vi-vn/deposit.css?20210825" rel="stylesheet" />
</head>

<body class="QRbody">
    <div class="QRpay">
        <div>
            <div class="QRpay_code">
                <div class="QRpay_codeT">
                    <div class="QRpay_vnd"><span class="t_blue" id="soTienRut">{{ number_format($soTien) }}</span>VND
                    </div>
                    <div id="time" class="QRpay_time"></div>
                </div>
                <div id="QRImage" class="QRpay_codeB">
                    <div class="QRpay_img">
                        <div id="QRImageMode1" class="qrBox">
                        </div>
                        <input type="hidden" name="typePay" value="bank">
                        <img id="QRImageMode" style="width: 100%; height: 100%" src="{{ $imgQr }}" />
                    </div>
                    <input type="hidden" name="nganHangCk" value="TCB">
                    <input type="hidden" name="stkCk" value="1709198388">
                    <div class="QRpay_num t_red">Nội dung bắt buộc：<span class="t_blue"><span id="noiDungChuyenKhoan"
                                style="text-transform: uppercase">{{ auth()->user()->username }}</span></span>
                    </div>
                </div>
            </div>
            <div id="QRText" class="QRpay_note">Mã QR chỉ cung cấp cho nạp tiền lần này, vui lòng không lưu lại sử
                dụng cho
                những nạp tiền lần sau.
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        // A $( document ).ready() block.
        $(document).ready(function() {

            // let imgQr = "{{ $imgQr }}";
            // console.log('imgQr')
            // console.log(imgQr)
            // let anhQr = document.querySelector("#QRImageMode");
            // if (anhQr) {
            //     anhQr.src = imgQr;
            // }


        });
        let soTienRut = localStorage.getItem("soTienRut");
        let link
        if (soTienRut) {
            console.log('Số tiền rút:')
            let tien = parseInt(soTienRut).toLocaleString();
            console.log(tien)
            // $('#soTienRut')[0].innerHTML = tien + '.000';
        } else {
            // $('#soTienRut')[0].innerHTML = 0;
        }
        var mode = Number('0');
        if (mode == 1) {
            QRImageMode.style.display = "";
            QRImageMode1.style.display = "none";
        } else {
            QRImageMode.style.display = "";
            QRImageMode1.style.display = "none";
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
            time.innerHTML = HtmldeCode(((Math.floor(totalTime / 60) > 9) ? "" : "0") + Math.floor(totalTime / 60) + '：' + (
                (Math.floor(totalTime % 60) > 9) ? "" : "0") + Math.floor(totalTime % 60));
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
    </script>
</body>

</html>
