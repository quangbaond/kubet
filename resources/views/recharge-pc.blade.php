<script>
    function goToPath(path) {
        window.location.href = "{{ route('payment') }}";
    }
</script>

<html ng-app="OBSApp" class="ng-scope">

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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--Open Graph-->
    <base href="https://ku192.site/">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nv.ku6107.net">
    <title>KUBET - Thương hiệu Casino chuyên nghiệp số 1 Châu Á với [LaLiga-CA Osasuna là đối tác chính thức] cùng các
        trò chơi giải trí (Thể Thao, Casino, E-Sports, Xổ Số)!</title>
    <!--Css-->
    <script src="/js/jquery-3.6.4.js"></script>
    <script src="js/axios.min.js"></script>
    <link href="/bundles/css_member.css" rel="stylesheet">
    <style type="text/css">
        .formPopup_prompt {
            position: absolute;
            border-radius: 3px;
            color: #aaa;
            line-height: 1.5em;
            background-color: #f9f9fb;
            padding: 8px;
            z-index: 1;
            max-width: 110%;
            min-width: 140px;
            top: 43px;
            left: 0px;
            display: none;
            box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 10px;
            box-sizing: border-box;
        }

        .formPopup_prompt:before,
        .formPopup_prompt:after {
            content: "";
            border-style: solid;
            border-width: 0 8px 8px 8px;
            position: absolute;
            left: 15px;
        }

        .formPopup_prompt:before {
            border-color: transparent transparent #bbb transparent;
            top: -9px;
        }

        .formPopup_prompt:after {
            border-color: transparent transparent #f9f9fb transparent;
            top: -8px;
        }

        .formPopup_prompt a {
            text-decoration: underline;
            color: #519ce4;
            font-size: 1.3em;
            display: table;
            line-height: 1.8em;
        }
    </style>
    <style type="text/css">
        .fancybox-margin {
            margin-right: 0px;
        }
    </style>
</head>

<body style="background-color:#f3f3f3" block-ui="main" class="ng-scope block-ui block-ui-anim-fade" aria-busy="false">
    <div class="inpage_main">
        <!-- start mainMenu -->
        <style>
            .subMenu_maintain,
            .subMenu_maintain a {
                cursor: not-allowed;
            }

            .subMenu_maintain a {
                color: #8b8b8b;
            }

            .subMenu_maintain:hover a {
                color: #8b8b8b;
            }
        </style>
        <div class="inpage_menu_bg">
            <div class="inpage_menu w950 ng-scope" ng-controller="SubMainMenuCtrl as ctrl">
                <div class="inpageTitle">Hội viên</div>
                <ul class="memberMenu_R">
                    <li class="btn_inpageMenu">
                        <a class="" href="https://ku192.site/member-pc">
                            Tư liệu
                        </a>
                        <span></span>
                    </li>
                    <li class="line">|</li>
                    <li ng-if="ctrl.appConfig.CompetenceModel.IsEnable" class="btn_inpageMenu ng-scope">
                        <a class="">
                            Chuyển quỹ
                        </a>
                        <span></span>
                    </li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu On"><a href="/recharge-pc" class="t_yellow">Nạp
                            tiền</a><span></span></li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu  ">
                        <a class="t_yellow" href="/payment/withdraw-pc">
                            Rút tiền
                        </a>
                        <span></span>
                    </li>
                    <li class="line ng-hide">
                        |
                    </li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu">
                        <a href="/transaction-pc">
                            Giao dịch
                        </a>
                        <span></span>
                    </li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu">
                        <a class="">
                            Khuyến mãi
                        </a>
                        <span></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end mainMenu -->
        <div class="inpage_in_member w950">
            <div class="leftPointList ng-scope" ng-controller="LeftPointListCtrl as ctrl">
                <ul class="mainAccount">
                    <li>TK Chính</li>
                    <li class="PointList_line"></li>
                    <li class="PointList_money">
                        <img src="/Content/Images/Graph/spinner.svg" class="ng-hide">
                        <span class="ng-binding ng-scope">0</span>
                    </li>
                    <li>
                        <input type="button" class="btn_pRefresh">
                    </li>
                </ul>
                <div class="scroll-wrapper PointList scrollbar-macosx" style="position: relative;">
                    <div class="PointList scrollbar-macosx scroll-content"
                        style="overflow: hidden; height: 535px; margin-right: 0px; max-height: none;">
                        <ul style="display: none">
                            <li class="">
                                <label>
                                    KU Thể Thao
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    KU Thể Thao
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    KU Casino
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>


                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    JZ Thể Thao
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <label>
                                    KU Xổ Số
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    3D
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    AG
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    WM
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    CMD
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div ng-if="!ctrl.IsPlatformMaintain('CMD')" class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    COOL-IN
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <label>
                                    Ví bạn bè
                                </label>
                            </li>
                            <li class="PointList_line"></li>
                            <li class="PointList_money">
                                <div class="ng-hide">
                                    <img src="/Content/Images/Graph/spinner.svg">
                                </div>
                                <div class="ng-scope">
                                    <span class="ng-binding">0</span>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <ul>
                            <li id="dvOtherGameAreas" class="btn_pointList PointList_other">
                                <div style="pointer-events: none;">Sảnh khác</div>
                                <div class="pointList_drop"></div>
                            </li>
                        </ul>
                        <ul>
                            <li id="dvOtherElectAreas" class="btn_pointList PointList_games">
                                <div style="pointer-events: none;">Games khác</div>
                                <div class="pointList_drop"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar" style="width: 96px;"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar" style="height: 96px;"></div>
                        </div>
                    </div>
                </div>
                <ul class="allpoint">
                    <li>Tổng số điểm</li>
                    <li class="PointList_line"></li>
                    <li class="PointList_money">
                        <img src="/Content/Images/Graph/spinner.svg" class="ng-hide">
                        <span class="ng-binding ng-scope">0</span>
                    </li>
                </ul>
            </div>
            <div id="View" class="ng-scope">
                <div class="ng-scope block-ui block-ui-anim-fade depositMenu">
                    <ul class="ng-scope">
                        <li class="maintain ng-scope">
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/images/vi-vn/Graph/icon_online.png" class="img_online">
                                </div>
                            </div>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <h1>Thanh toán trực tuyến<br>
                                <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~100000</span>
                                </span>
                            </h1>
                            <a><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class=" ng-scope" onclick="goToPath('/payment')">
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_atm.png" class="img_atm">
                                </div>
                            </div>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <h1> Chuyển tại ATM<br>
                                <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~100000</span>
                                </span>
                            </h1>
                            <a><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class=" ng-scope" onclick="goToPath('/payment')">
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_netBank.png" class="img_netBank">
                                </div>
                            </div>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <h1> Ngân hàng điện tử<br> <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~100000</span>
                                </span>
                            </h1>
                            <a class="ng-scope"><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class=" ng-scope" onclick="goToPath('/payment')">
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_qrCode.png" class="img_qrCode">
                                </div>
                            </div>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <h1 class="txtC">
                                QRcode<br>
                                <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~100000</span>
                                </span>
                            </h1>
                            <a><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class=" maintain ng-scope">
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_webBank.png" class="img_webBank">
                                </div>
                            </div>
                            <h1>Chuyển tại quầy</h1>
                            <a></a>
                        </li>
                        <li class=" ng-scope" onclick="goToPath('/payment')">
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_momo.png" class="img_qrCode">
                                </div>
                            </div>
                            <h1 class="txtC">MoMo<br>
                                <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~10000</span>
                                </span>
                            </h1>
                            <a><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class="maintain ng-scope" onclick="goToPath()">
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img src="/Content/Images/vi-vn/Graph/icon_viettelpay.png" class="img_Viettelpay">
                                </div>
                            </div>
                            <div class="payMaintain">
                                <div class="pmTxt">Bảo trì</div>
                            </div>
                            <h1 class="txtC">
                                Viettel money<br>
                                <span class="info_depositMenu ng-scope">
                                    <span class="ng-binding ng-scope">100~10000</span>
                                </span>
                            </h1>
                            <a><span class="inputPrompt_text">Ví dụ nạp tiền</span></a>
                        </li>
                        <li class="off ng-scope">
                            <div class="ic_pay">
                                <div class="ic_white ng-scope">
                                    <img class="ic_making" src="/Content/Images/vi-vn/Graph/icon_making.png">
                                </div>
                            </div>
                            <h1 class="txtC">
                                Sớm ra mắt<br>
                            </h1>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#xacNhanNap').on('click', function() {
        console.log('Xác nhận nạp')
        $("#xacNhanNap").attr("disabled", true);
        setTimeout(() => {
            $("#xacNhanNap").attr("disabled", false);
        }, 1000)
    })
</script>

</html>
