<!doctype html>
<html ng-app="OBSMobileApp" class="ng-scope">

<head>
    <base href="https://ku192.site/">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link href="style/mobile_main.css" rel="stylesheet">
    <link href="style/mobile_form.css" rel="stylesheet">
    <link href="style/mobile_deposit.css" rel="stylesheet">
    <style>
        .inforMDropOUT {
            z-index: 1;
        }
    </style>
</head>

<body block-ui="main" class="ng-scope block-ui bodyForm" style="position: fixed; overflow: hidden; top: 0px;">

    <div class="bg_header ng-scope">
        <a class="btn_back" href="https://ku192.site"></a>
        <h1 class="bg_header_name left">KHU NẠP TIỀN</h1>
        <div class="header_R">
            <div class="icon_inforID" style="cursor: pointer; z-index: 999" onclick="showInfoUser()" id="GameMenu">
                <div class="icon_inforMoney">
                    <span>0</span>
                    <span id="signout" class="btn_inforIn"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="inforMDropOUT" class="inforMDropOUT ng-scope" style="display: none;">
        <div class="inforMDrop" style="display: block;">
            <ul class="inforMDropT">
                <li class="ng-scope">
                    <div class="ng-binding">KU Thể Thao</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">KU Casino</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">JZ Thể Thao</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">KU Xổ Số
                    </div>
                    <div class="ng-scope">
                        <span class="ng-binding">2</span>
                        <span class="returnP ng-scope" disabled="disabled">Chuyển về</span>
                    </div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">3D</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">AG</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">BBIN</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">WM</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">GPI</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">DG</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">SA</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">AES</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>
                <li class="ng-scope">
                    <div class="ng-binding">CMD</div>
                    <div class="ng-scope"><span class="ng-binding">0</span></div>
                </li>

            </ul>
            <ul class="inforMDropB">
                <li>
                    <div class="t_yellow">Tổng số điểm</div>
                    <div class="t_yellow ng-binding">2
                    </div>
                </li>
                <li class="ng-scope">
                    <div class="t_purple ng-binding">Quà tặng miễn phí</div>
                    <div style="color:#cb83ff" class="ng-binding ng-scope">0
                    </div>
                </li>
                <li class="btn_backAll">
                    <span class="ng-scope">
                        <a>
                            Chuyển hết về tài khoản chính
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div id="container_main" class="container_main" style="position: fixed; overflow: hidden; top: 0px;">
        <div class="ng-scope">
            <div class="ng-scope block-ui block-ui-anim-fade" aria-busy="false">
                <div class="marginTop ng-scope">
                    <div class="deposit_list ng-scope off" tabrecord="1">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_online.svg">
                        <h3>
                            Thanh toán trực tuyến<br>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <span class="ng-binding ng-scope">100~100000</span>
                        </h3>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list ng-scope " onclick="goToPath('{{ route('paymentMobile') }}')">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_qrCode.svg">
                        <h3>
                            QRcode<br>
                            <span class="ng-binding ng-scope">100~100000</span>
                        </h3>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list ng-scope  " onclick="goToPath('{{ route('paymentMobile') }}')">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_atm.svg">
                        <h3>
                            Chuyển tại ATM<br>
                            <span class="ng-binding ng-scope">100~100000</span>
                        </h3>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list ng-scope  " onclick="goToPath('{{ route('paymentMobile') }}')">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_netBank.svg">
                        <h3>
                            Ngân hàng điện tử<br>
                            <span class="ng-binding ng-scope">100~100000</span>
                        </h3>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list ng-scope  " onclick=onclick="goToPath('{{ route('paymentMobile') }}')">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_webBank.svg">
                        <h3>Chuyển tại quầy</h3><br>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list ng-scope  " onclick="goToPath('{{ route('paymentMobile') }}')">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_momo.svg">
                        <h3>
                            MoMo<br>
                            <span class="ng-binding ng-scope">100~10000</span>
                        </h3>
                        <a class="ng-scope"></a>
                    </div>
                    <div class="deposit_list off ng-scope  off">
                        <img src="/Areas/Mobile/Content/Images/vi-vn/icon_viettelpay.svg">
                        <h3>
                            Viettel money<br>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <span class="ng-binding ng-scope">100~10000</span>
                        </h3>
                        <div class="payMaintain">
                            <div class="pmTxt">Bảo trì</div>
                        </div>
                        <a class="ng-scope"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ng-scope">
        <div class="footer" style="z-index: 9999;">
            <a class="footer_list btn_footer_home" href="https://ku192.site">
                <h5>Trang chủ</h5>
            </a>
            <a href="https://ku192.site/support" class="footer_list btn_footer_serv">
                <h5>Hỗ trợ</h5>
            </a>
            <a class="footer_list btn_footer_DW ng-scope active" onclick="showNapRut()">
                <h5 id="DepositCenterH5">Nạp rút tiền</h5>
            </a>
            <!--        Mở nạp tiền dùng class on-->
            <div id="menuNapRutTien" class="footer_DW_open off">
                <div>
                    <a class="btn_footer_transfer ng-scope  ">
                        <span id="PlatformTransferSpan">Chuyển quỹ</span>
                    </a>
                    <a href="{{ route('rechargeMobile') }}" class="btn_footer_deposit ng-scope  ">
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
            <a href="https://ku192.site/profile" class="footer_list btn_footer_menu redC">
                <h5 id="MemberCenterH5">Tôi</h5>
            </a>
        </div>
    </div>
</body>
<script src="/js/jquery-3.6.4.js"></script>
<script>
    function showInfoUser() {
        let styleNow = $('#inforMDropOUT')[0].style.display;
        if (styleNow == 'block') {
            $('.icon_inforMoney')[0].classList.remove('on')
        } else {
            $('.icon_inforMoney')[0].classList.add('on')
        }
        $('#inforMDropOUT')[0].style.display = styleNow == 'none' ? 'block' : 'none';
    }

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

    function goToPath(path) {
        window.location.href = path;
    }
</script>

</html>
