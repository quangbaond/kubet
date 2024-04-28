<!doctype html>
<html ng-app="OBSMobileApp" class="ng-scope">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <title>KU Web</title>
    <base href="https://ku192.site/">
    <script src="/js/jquery-3.6.4.js"></script>
    <link href="style/mobile_main.css?v=AO7LBNiILlQ9KZnuWkNY56oeqADc37cFh3qJrPJMvsQ1" rel="stylesheet">
    <link href="style/mobile_form.css?v=bLvxTivS6U7LhuxpPIYIw9Iuk4-MTKwbNmErhtUjkFY1" rel="stylesheet">
    <link href="style/mobile_deposit.css?v=cdKlsyGgR0QN3lcP3B-zoIZ9vQQUL_2bHqmqxQDFgtQ1" rel="stylesheet">
</head>

<body ontouchstart="" block-ui="main" class="ng-scope block-ui block-ui-anim-fade bodyForm" aria-busy="false">
    <div class="bg_header ng-scope">
        <a class="btn_back" href="{{ route('rechargeMobile') }}"></a>
        <h1 class="bg_header_name left">QRcode</h1>
    </div>
    <div id="container_main" class="container_main">
        <div ng-controller="DepositNetBankCtrl as ctrl" class="ng-scope">
            <div>
                <div class="RMBbankT">Chọn ngân hàng thanh toán</div>
                <div class="RMBbank">
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1003.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <div></div>
                        <img class="ng-scope" src="/images/banks/icon_bank_1030.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope"><img class="ng-scope" src="/images/banks/icon_bank_1007.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope"><img class="ng-scope" src="/images/banks/icon_bank_1008.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1011.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1025.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1013.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1002.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope"><img class="ng-scope" src="/images/banks/icon_bank_1035.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1004.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1019.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope"><img class="ng-scope" src="/images/banks/icon_bank_1001.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1006.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1018.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1028.jpg">
                    </div>
                    <div class="RMBbank_list ng-scope">
                        <img class="ng-scope" src="/images/banks/icon_bank_1029.jpg">
                    </div>
                </div>
                <div class="form_button">
                    <input type="button" class="w100" id="buttonXacNhan" disabled value="Xác nhận"
                        onclick="xacNhanThanhToan()">
                </div>
            </div>
        </div>
    </div>
    <div class="ng-scope">
        <div class="footer" id="FooterTouchstartControll">
            <a href="https://ku192.site" class="footer_list btn_footer_home">
                <h5>Trang chủ</h5>
            </a>
            <a id="ServiceCenter" href="https://ku192.site/support" class="footer_list btn_footer_serv">
                <h5>Hỗ trợ</h5>
            </a>
            <a class="footer_list btn_footer_DW ng-scope active" onclick="showNapRut()">
                <h5 id="DepositCenterH5">Nạp rút tiền</h5>
            </a>
            <div id="menuNapRutTien" class="footer_DW_open off">
                <div>
                    <a class="btn_footer_transfer ng-scope  ">
                        <span id="PlatformTransferSpan">Chuyển quỹ</span>
                    </a>
                    <a href=https://ku192.site/recharge class="btn_footer_deposit ng-scope  ">
                        <div class="img_deposit" id="MemberDepositImage"></div>
                        <span id="MemberDepositSpan">Nạp tiền</span>
                    </a>
                    <a class="btn_footer_withdrawal ng-scope  " href=https://ku192.site/payment/withdraw>
                        <div class="img_withdrawal" id="MemberWithdrawalImage"></div>
                        <span id="MemberWithdrawalSpan">Rút tiền</span>
                    </a>
                </div>
            </div>
            <a href="https://ku192.site/transaction" class="footer_list btn_footer_tradeRec ng-scope">
                <h5>
                    Giao dịch
                </h5>
            </a>
            <a class="footer_list btn_footer_menu redC" href="https://ku192.site/profile">
                <h5 id="MemberCenterH5">Tôi</h5>
            </a>
        </div>
    </div>
</body>
<script>
    function showNapRut() {
        console.log('showNapRut:')
        let check = $('#menuNapRutTien.off')
        console.log(check)
        console.log(check.length)
        if (check.length) {
            $('#menuNapRutTien')[0].classList.remove('off')
            $('#menuNapRutTien')[0].classList.add('on')
        } else {
            console.log('rơi vào else')
            $('#menuNapRutTien')[0].classList.remove('on')
            $('#menuNapRutTien')[0].classList.add('off')
        }
    }

    $(".RMBbank_list").on("click", function(
        e
    ) { // See here, i have our selector set to "li", so this jQuery object will grab all li tags on the page
        $(this).addClass("on").siblings().removeClass("on");
        $('#buttonXacNhan').prop("disabled", false)

    })

    function xacNhanThanhToan() {
        window.location.href = "{{ route('createQrPayment') }}"
    }
</script>

</html>
