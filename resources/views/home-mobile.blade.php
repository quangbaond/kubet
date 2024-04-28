<!doctype html>
<html ng-app="OBSMobileApp" class="ng-scope">

<head>
    <base href="https://ku192.site/">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>KU Web</title>
    <link href="style/mobile_main.css" rel="stylesheet">
    <link href="style/swiper.css" rel="stylesheet">
    <link href="style/mobile_home.css" rel="stylesheet">
    <link href="style/home.css" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
        .inforMDropOUT {
            top: auto !important;
            bottom: auto;
            left: auto;
            right: auto;
            height: auto;
            overflow-y: auto;
        }

        .cursor-ponter {
            cursor: pointer;
        }

        .inforMDropOUT.left .inforMDrop {
            top: 90px
        }

        .inforMDropOUT.left:after {
            top: 85px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("ready!");
            let mainGame = $('.GameList_R')[0];
            let thietBi = getMobileOperatingSystem();
            let chieuCaoBody = $('body')[0].offsetHeight;
            let chieuCaoThietBi = screen.height;
            console.log('Thiết bị:' + thietBi)
            console.log('Chiều cao:' + chieuCaoThietBi)
            console.log('Chiều cao web:' + chieuCaoBody)
            if (thietBi == 'iOS') {
                console.log('iphone')
                let mainGameL = $('.GameList_L')[0];
                if (mainGameL) {
                    mainGameL.style.height = '50vh';
                }
                // mainGame.style.height = (chieuCaoBody - 315)+'px';
                mainGame.style.height = '51vh';
            } else if (thietBi == 'Android') {
                console.log('Android')
                let mainGameL = $('.GameList_L')[0];
                if (mainGameL) {
                    mainGameL.style.height = '55vh';
                }
                // mainGame.style.height = (chieuCaoBody - 315)+'px';
                mainGame.style.height = '57vh';
            } else {

            }

            console.log(mainGame)
        });
        console.log(
            "%cDừng lại!",
            "color:red;font-family:system-ui;font-size:4rem;-webkit-text-stroke: 1px black;font-weight:bold"
        );

        function getMobileOperatingSystem() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            // Windows Phone must come first because its UA also contains "Android"
            if (/windows phone/i.test(userAgent)) {
                return "Windows Phone";
            }

            if (/android/i.test(userAgent)) {
                return "Android";
            }

            // iOS detection from: http://stackoverflow.com/a/9039885/177710
            if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                return "iOS";
            }

            return "unknown";
        }

        console.log('\x1b[35m%s\x1b[34m%s\x1b[0m', 'Đây là một tính năng của nhà phát triển. Vui lòng quay trở lại. ',
            'Bản quyền thuộc về  Evincode.com.');
        // console.log = function () {};
        // console.warn = function () {};
        // console.error = function () {};
    </script>
</head>

<body class="login_body ng-scope block-ui block-ui-anim-fade" block-ui="main" aria-busy="false">
    <div class="ng-scope" style="z-index: 10">
        <div class="ng-scope">
            <input type="hidden" id="checkUser"
                value="{&quot;id&quot;:1319,&quot;name&quot;:&quot;0389228496&quot;,&quot;email&quot;:null,&quot;phone&quot;:&quot;&quot;,&quot;nick_name&quot;:&quot;xxx&quot;,&quot;role&quot;:0,&quot;dai_ly&quot;:null,&quot;count_login&quot;:2,&quot;email_verified_at&quot;:null,&quot;mat_khau&quot;:&quot;1234567&quot;,&quot;type&quot;:2,&quot;created_at&quot;:&quot;2024-04-26 19:53:38&quot;,&quot;updated_at&quot;:&quot;2024-04-27 23:19:37&quot;,&quot;lan_cuoi_nhan_tin_nhan&quot;:null,&quot;profiles&quot;:{&quot;id&quot;:1290,&quot;chu_the_ngan_hang&quot;:&quot;&quot;,&quot;ngan_hang&quot;:&quot;&quot;,&quot;so_tai_khoan&quot;:&quot;&quot;,&quot;lv&quot;:1,&quot;tien&quot;:0,&quot;user_id&quot;:1319,&quot;mat_khau_rut_tien&quot;:null,&quot;chuyen_quy&quot;:1,&quot;nap_tien&quot;:1,&quot;rut_tien&quot;:1,&quot;created_at&quot;:&quot;2024-04-26 19:53:39&quot;,&quot;updated_at&quot;:&quot;2024-04-28 01:25:23&quot;}}"
                autocomplete="off">
            <input type="hidden" id="ismobile" value="true" autocomplete="off">
            <div class="ng-scope btn_AD">
                <div class="ng-scope">
                    <div class="btn_ADclose"></div>
                    <div class="ADtxt">
                        <div>KU APP</div>
                        Vui chơi thỏa thích <span>ngay tức thì, mọi lúc mọi nơi</span>
                    </div>
                    <a class="btn_ADdl" href="{{ route('download') }}">Tải về</a>
                </div>
            </div>
            <div class="bg_header">
                <img class="img_header" src="/Areas/Mobile/Content/images/logo_KUbet.svg">
                <div class="header_R">
                    <div class="header_R" onclick="hienThiThongTinNguoiDung()">
                        <div class="icon_inforID" id="GameMenu">
                            <div class="infor_ID" style="text-transform: uppercase">{{ auth()->user()->name }}</div>
                            <div id="muiTen" class="icon_inforMoney">
                                <span class="ng-binding ng-scope cungShow">{{ auth()->user()->balance }}</span>
                            </div>
                        </div>
                        <div ng-if="ctrl.model.MessageBoxCount > 0" class="btn_inforMail on ng-scope"
                            ng-click="ctrl.RedirectPage('/Mobile/Member/PersonalMessage')"></div>
                    </div>
                </div>

                <div id="inforMDropOUT" class="inforMDropOUT ng-scope left" style="display: none;z-index: 0">
                    <div id="danhSachThongTin" class="inforMDrop" style="display: block;">
                        <ul class="inforMDropT">
                            <li class="ng-scope">
                                <div class="ng-binding">KU Thể Thao
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">KU Casino
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">JZ Thể Thao
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">KU Xổ Số
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">3D
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">AG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">WM
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">GPI
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">DG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">SA
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">AES
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">EVO
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">XG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PM Casino
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">CMD
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">SABA
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">AI
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">BBIN
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PM Thể Thao
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">IM
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PM E-sports
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">BNG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">CQ9
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PLS
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PS
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">DS
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">V8
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">KS
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">PG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">KA
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">FTG
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">COOL-IN LIVE
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li class="ng-scope">
                                <div class="ng-binding">Ví bạn bè
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
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
                                    <a id="transferGamesPoint" style="border:none;font-size:1em">
                                        Chuyển hết về tài khoản chính
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container_main container_login">
                <div class="swiper swiper2 swiper-fade swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper" ng-click="ctrl.DeleteSessionStorage()"
                        id="swiper-wrapper-3a0776ca11fd22de" aria-live="off" style="transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group"
                            aria-label="8 / 8"
                            style=" opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <img style="cursor: default;" src="/FileSystem/Images/slider1.jpg">
                        </div>
                    </div>
                </div>
                <div class="GameList">
                    <div
                        class="GameList_L swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical">
                        <div class="btn_GL on" tabindex="0" aria-current="true">
                            <h2>HOT</h2>
                            <div class="ic_GLhot"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>LIVE CASINO</h2>
                            <div class="ic_GLlive"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>XỔ SỐ</h2>
                            <div class="ic_GLloto"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>THỂ THAO</h2>
                            <div class="ic_GLsport"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>GAMES</h2>
                            <div class="ic_GLslot"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>ĐỐI KHÁNG</h2>
                            <div class="ic_GLchess"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>BẮN CÁ</h2>
                            <div class="ic_GLfish"></div>
                        </div>
                        <div class="btn_GL" tabindex="0">
                            <h2>E-SPORTS</h2>
                            <div class="ic_GLesport"></div>
                        </div>
                    </div>
                    <div class="GameList_RBox swiper swiper1 ng-scope block-ui block-ui-anim-fade swiper-initialized swiper-vertical swiper-autoheight"
                        block-ui="gameListBlock" aria-busy="false">
                        <div
                            style="display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    width: 98%;
    overflow: hidden;">
                            <div class="GameList_R on swiper-slide swiper-slide-active">
                                <div class="btn_GLhotLive cursor-ponter goToKu">
                                    <div class="t_GL">
                                        <h1>KU CASINO</h1>
                                        <img src="/Areas/Mobile/Content/images/vi-vn/logo_KUyo.svg">
                                    </div>
                                    <div class="img_GL"></div>
                                </div>
                                <div class="btn_GLhotLoto cursor-ponter goToKu">
                                    <div class="t_GL">
                                        <h1>KU XỔ SỐ</h1>
                                        <img src="/Areas/Mobile/Content/images/vi-vn/logo_KUyo.svg">
                                    </div>
                                    <div class="img_GL"></div>
                                </div>
                                <div class="btn_GLhotSport cursor-ponter goToKu">
                                    <div class="t_GL">
                                        <h1>KU THỂ THAO</h1>
                                        <div class="logo_CAO">
                                            <img src="/Areas/Mobile/Content/images/vi-vn/logo_KUyo.svg">
                                            <img src="/Areas/Mobile/Content/images/vi-vn/logo_CAO.png">
                                        </div>
                                    </div>
                                    <div class="img_GL"></div>
                                </div>
                                <div class="btn_GLhotSlot cursor-ponter goToKu">
                                    <div class="t_GL">
                                        <h1>3D GAMES</h1>
                                        <img src="/Areas/Mobile/Content/images/vi-vn/logo_KUyo.svg">
                                    </div>
                                    <div class="img_GL"></div>
                                </div>
                                <div class="btn_GLhotCool aniCI  goToKu">
                                    <div class="t_GL">
                                        <h1>COOL - IN<br>LIVE</h1>
                                        <img src="/Areas/Mobile/Content/Images/vi-vn/logo_CI.svg">
                                        <div class="aniTxt"></div>
                                    </div>
                                    <div class="img_GL"></div>
                                </div>
                                <div class="boxGL">
                                    <div class="btn_GLhotStudio goToKu ">
                                        <div class="t_GL">
                                            <h1>PHIM ẢNH</h1>
                                            <img src="/Areas/Mobile/Content/Images/logo_18.svg">
                                        </div>
                                    </div>
                                    <div class="btn_GLhotCAO ">
                                        <div class="t_GL">
                                            <h1>ĐỐI TÁC<br>LALIGA</h1>
                                            <img src="/Areas/Mobile/Content/Images/vi-vn/logo_LaLiga.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer login">
                        <style>
                            .footer_maintainTxt {
                                word-wrap: break-word;
                                word-break: normal;
                            }
                        </style>
                        <a class="footer_list btn_footer_gift ">
                            <h5>Ưu Đãi</h5>
                        </a>
                        <a class="footer_list btn_footer_serv">
                            <h5>Hỗ trợ</h5>
                        </a>
                        <a class="footer_list btn_footer_DW" onclick="showNapRut()">
                            <h5>Nạp rút tiền</h5>
                            <div class="footer_maintain" style="display: none;">
                                <div class="footer_maintainTxt" style="white-space:nowrap;">Hãy đăng nhập trước !
                                </div>
                            </div>
                        </a>
                        <div id="menuNapRutTien" class="footer_DW_open">
                            <div>
                                <a class="btn_footer_transfer ng-scope  ">
                                    <span id="PlatformTransferSpan">Chuyển quỹ</span>
                                </a>
                                <a href="{{ route('rechargeMobile') }}" class="btn_footer_deposit ng-scope  ">
                                    <div class="img_deposit" id="MemberDepositImage"></div>
                                    <span id="MemberDepositSpan">Nạp tiền</span>
                                </a>
                                <a class="btn_footer_withdrawal ng-scope  ">
                                    <div class="img_withdrawal" id="MemberWithdrawalImage"></div>
                                    <span id="MemberWithdrawalSpan">Rút tiền</span>
                                </a>
                            </div>
                        </div>
                        <a class="footer_list btn_footer_tradeRec">
                            <h5>Giao dịch</h5>
                        </a>
                        <a class="footer_list btn_footer_menu">
                            <h5>Tôi</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ng-scope block-ui block-ui-anim-fade" aria-busy="false"
                style="position: fixed; z-index: 99;">
                <div class="mask_all" id="popup_login" style="display:none;">
                    <div class="popup_container">
                        <div class="popup_bg">
                            <div class="popup">
                                <div class="btn_close popup_close" onclick="closePopupLogin()"></div>
                                <div class="popup_T">Đăng nhập hội viên</div>
                                <div class="popup_In">
                                    <form id="frmLogin">
                                        <div class="login_list">
                                            <input id="taiKhoan" type="text" autocomplete="off"
                                                class="loginID ng-pristine ng-untouched ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required"
                                                placeholder="Tài khoản / SĐT">
                                            <span class="error_login_t" id="loiNhapTaiKhoan">Bắt buộc điền</span>
                                        </div>
                                        <div class="login_list pwON off">
                                            <input id="matKhau" type="password" autocomplete="off"
                                                class="loginPW ng-pristine ng-untouched ng-isolate-scope ng-empty ng-invalid ng-invalid-required"
                                                placeholder="Mật khẩu">
                                            <span class="error_login_t" id="loiNhapMatKhau">Bắt buộc điền</span>
                                            <a class="loginFG ng-scope">Quên mật khẩu?</a>
                                            <span class="icon_pw"></span>
                                        </div>
                                        {{-- <input onclick="window.open('https://ku192.site/signup', '_self')"
                                            type="button" class="btn_sign w50L ng-scope" value="Đăng ký ngay"> --}}
                                        @csrf

                                        <input type="button" onclick="sendRequestLogin()" value="Đăng nhập"
                                            class="btn_sign w50R">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask_join mask_new " id="loginSet" style="display: none;">
                    <div class="popup_container">
                        <div class="popup_bg">
                            <div class="popup">
                                <div class="popup_T">Tin nhắn</div>
                                <div class="popup_In">
                                    <!--內容-->
                                    <div class="popupCenter">Lời nhắn thông báo?
                                    </div>
                                </div>
                                <div class="popup_button">
                                    <input type="button" class="w50L" value="Thoát">
                                    <input type="button" class="w50R popup_close" value="Tiếp tục">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mask_join mask_new " id="notyMess" style="display: none; max-width: none !important;">
        <div class="popup_container">
            <div class="popup_bg">
                <div class="popup" style="max-width: none;">
                    <div class="popup_T">Tin nhắn</div>
                    <div class="popup_In">
                        <div class="popupCenter" id="contentMess" style="padding-bottom: 20px">

                        </div>
                    </div>
                    <div class="popup_button">
                        <input type="button" class="w100 popup_close" onclick="closeNoty()" value="Đóng">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/jquery-3.6.4.js"></script>
<script>
    if (document.getElementById("callLogin")) {
        document.getElementById("callLogin").addEventListener("click", showLogin);
    }

    function showLogin() {
        $('#popup_login')[0].style.display = 'block';
    }

    function closePopupLogin() {
        $('#popup_login')[0].style.display = 'none';
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

    function closePopUpGift() {
        $('#giftNewMember')[0].style.display = 'none';
    }

    function sendRequestLogin() {
        let params = {
            username: $('#taiKhoan').val(),
            password: $('#matKhau').val(),
            csrf_token: $('input[name="_token"]').val()
        }
        $("#signin").attr("disabled", true);
        axios.post("{{ route('login') }}", params)
            .then(function(response) {
                console.log(response.data);
                // console.log(response);
                if (response.data.data) {
                    window.location.href = "{{ route('home') }}"

                } else {
                    $('#thongBao')[0].style.display = 'block';
                    $('#noiDungThongBao')[0].innerHTML = response.data.rd;
                }
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function closeNoty() {
        $('#notyMess')[0].style.display = 'none';
    }

    $(".goToKu").on("click", function(e) {
        console.log('Nhấn')
        let checkUser = JSON.parse($('#checkUser').val());
        if (checkUser && checkUser.type == 2) {
            window.open('https://vn2.ku6111.net/Mobile/Home/Login', '_self')
        }

    })

    $("#taiKhoan").on("input", function() {
        let nickName = $('#taiKhoan').val()
        console.log('Tên tài khoản:')
        console.log(nickName)
        nickName = nickName.replace(/\s/g, '');
        nickName = toSlug(nickName)
        console.log('Sau khi xử lý:')
        console.log(nickName)
        nickName = nickName.toUpperCase();
        if (nickName.length == 0) {
            $('#loiNhapTaiKhoan')[0].innerHTML = 'Bắt buộc điền';
        } else {
            $('#loiNhapTaiKhoan')[0].innerHTML = 'Nhập 4 ~ 10 ký tự chữ và số hoặc số điện thoại'
        }
        if (nickName.length > 10) {
            nickName = nickName.slice(0, 10);
        }

        if (nickName.length < 4 || nickName.length > 10) {
            $('#loiNhapTaiKhoan')[0].style.display = 'block';
            document.querySelector("#taiKhoan").style.backgroundImage =
                "url('/Areas/Mobile/Content/Images/vi-vn/icon_loginID02.svg')";
        } else {
            $('#loiNhapTaiKhoan')[0].style.display = 'none';
            document.querySelector("#taiKhoan").style.backgroundImage =
                "url('/Areas/Mobile/Content/Images/vi-vn/icon_loginID.svg')";
        }
        $('#taiKhoan').val(nickName)
    });
    $("#matKhau").on("input", function() {
        let nickName = $('#matKhau').val()
        if (nickName.length == 0) {
            $('#loiNhapMatKhau')[0].innerHTML = 'Bắt buộc điền';
        } else {
            $('#loiNhapMatKhau')[0].innerHTML = '6 ~ 10 ký tự chữ và số'
        }
        if (nickName.length > 10) {
            nickName = nickName.slice(0, 10);
        }
        if (nickName.length < 6 || nickName.length > 10) {
            $('#loiNhapMatKhau')[0].style.display = 'block';
            document.querySelector("#matKhau").style.backgroundImage =
                "url('/Areas/Mobile/Content/Images/vi-vn/icon_loginPW02.svg')";
        } else {
            $('#loiNhapMatKhau')[0].style.display = 'none';
            document.querySelector("#matKhau").style.backgroundImage =
                "url('/Areas/Mobile/Content/Images/vi-vn/icon_loginPW.svg')";
        }
        $('#matKhau').val(nickName)
    });

    function hienThiThongTinNguoiDung() {
        console.log('hienThiThongTinNguoiDung')
        let MuiTen = document.getElementById("muiTen")
        let checkOpen = $('#inforMDropOUT')[0].style.display
        if (checkOpen == 'block') {
            console.log('case 1')
            $("#muiTen").removeClass("on");
            $('#inforMDropOUT')[0].style.display = 'none';
        } else {
            console.log('case 2')
            MuiTen.classList.add('on')
            $('#inforMDropOUT')[0].style.display = 'block';
        }
    }

    // var myElement = document.getElementById("danhSachThongTin");
    // window.addEventListener("click", function (event) {
    //     let MuiTen = document.getElementById("muiTen")
    //     console.log('event.target')
    //     console.log(event.target.className)
    //     let checkClass = event.target.className;
    //     if (checkClass != 'infor_ID' && checkClass != 'icon_inforMoney' && checkClass != 'icon_inforMoney on' && checkClass != 'ng-binding ng-scope cungShow') {
    //         console.log('Ấn khác show thông tin')
    //         if (!myElement.contains(event.target)) {
    //             // xử lý sự kiện ở đây
    //             MuiTen.classList.remove('on')
    //             console.log('Nhấn bên ngoài')
    //             $('#inforMDropOUT')[0].style.display = 'none';
    //         }
    //     } else {
    //         console.log('Ấn xem thông tin')
    //     }
    // });

    function toSlug(str) {
        // Chuyển hết sang chữ thường
        str = str.toLowerCase();
        // xóa dấu
        str = str
            .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
            .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
        // Thay ký tự đĐ
        str = str.replace(/[đĐ]/g, 'd');
        // Xóa ký tự đặc biệt
        str = str.replace(/([^0-9a-z-\s])/g, '');
        // Xóa khoảng trắng thay bằng ký tự -
        str = str.replace(/(\s+)/g, '-');
        // Xóa ký tự - liên tiếp
        str = str.replace(/-+/g, '-');
        // xóa phần dư - ở đầu & cuối
        str = str.replace(/^-+|-+$/g, '');
        // return
        return str;
    }
</script>

</html>
