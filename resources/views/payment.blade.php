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
                    <li class="btn_inpageMenu On"><a href="https://ku192.site/recharge-pc" class="t_yellow">Nạp
                            tiền</a><span></span></li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu  ">
                        <a class="t_yellow" href="https://ku192.site/payment/withdraw-pc">
                            Rút tiền
                        </a>
                        <span></span>
                    </li>
                    <li class="line ng-hide">
                        |
                    </li>
                    <li class="line">|</li>
                    <li class="btn_inpageMenu">
                        <a href="https://ku192.site/transaction-pc">
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
                <div class="ng-scope">
                    <table class="dataInput">
                        <tbody>
                            <tr>
                                <td class="leftTitle" style="height:135px;">
                                    <div class="midTitle">
                                        <img src="/Content/Images/vi-vn/Graph/icon_payWay.png">
                                        <span>Bước 1</span>
                                    </div>
                                </td>
                                <td class="depositWayR">
                                    <div class="depositMenuDrop depositATM">
                                        Chuyển tại ATM
                                        <img src="/Content/Images/vi-vn/Graph/icon_arrowPay.png">
                                        <ul class="deposit_menu">
                                            <li>
                                                <img src="/Content/Images/vi-vn/Graph/triangle.png">
                                            </li>
                                            <li class="ng-scope lineTwo">
                                                Thanh toán trực tuyến
                                            </li>
                                            <li class="ng-scope selected">
                                                Chuyển tại ATM
                                            </li>
                                            <li class="ng-scope">
                                                Ngân hàng điện tử
                                            </li>
                                            <li class="ng-scope">
                                                QRcode
                                            </li>
                                            <li class="pay_maintain ng-scope">
                                                Chuyển tại quầy
                                            </li>
                                            <li class="ng-scope">
                                                MoMo
                                            </li>
                                            <li class="pay_maintain ng-scope">
                                                Viettel money
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="deposit_Back" onclick="goToPath('/recharge-pc')">
                                        <img src="/Content/Images/vi-vn/Graph/icon_arrowL.png">
                                        Trở về
                                    </div>
                                    <div class="deposit_way">
                                        <div class="ng-scope payWayATM payWayCNNHT On">
                                            Chuyển khoản cùng hệ thống
                                            <img src="/Content/Images/vi-vn/Graph/btn_netBank.svg">
                                            <div class="icon_payWayOn ng-scope"
                                                ng-if="ctrl.model.UITransferAtATMSelected == 2"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="ng-scope">
                        <table cellpadding="0" cellspacing="0" class="dataInput">
                            <tbody>
                                <tr>
                                    <td class="leftTitle" style="height: 150px;">
                                        <div class="midTitle">
                                            <img src="/Content/Images/vi-vn/Graph/icon_dataInput.png">
                                            <span>Bước 2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="deposit ATM">
                                            <li>
                                                <span class="depositT">Ngân hàng :</span>
                                                <select id="selectBank"
                                                    class="inputMin ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched">
                                                    <option value="" class="">Chọn ngân hàng muốn nạp
                                                    </option>
                                                    <option label="Techcombank"
                                                        value="{&quot;id&quot;:2,&quot;ten_ngan_hang&quot;:&quot;Ng\u00e2n H\u00e0ng Th\u01b0\u01a1ng M\u1ea1i C\u1ed5 Ph\u1ea7n \u00c1 Ch\u00e2u&quot;,&quot;ten_tieng_anh&quot;:&quot;ACB&quot;,&quot;so_tai_khoan&quot;:&quot;37547407&quot;,&quot;chu_the&quot;:&quot;Doan Ta Quyen&quot;,&quot;trang_thai&quot;:1,&quot;hinh_anh&quot;:null,&quot;created_at&quot;:&quot;2023-04-02 14:47:21&quot;,&quot;updated_at&quot;:&quot;2024-01-01 21:19:17&quot;}">
                                                        Techcombank</option>
                                                    {{-- <option label="OCB"
                                                        value="{&quot;id&quot;:4,&quot;ten_ngan_hang&quot;:&quot;Ng\u00e2n h\u00e0ng TMCP Ph\u01b0\u01a1ng \u0110\u00f4ng&quot;,&quot;ten_tieng_anh&quot;:&quot;OCB&quot;,&quot;so_tai_khoan&quot;:&quot;0161100008089005&quot;,&quot;chu_the&quot;:&quot;NGO THI BAC&quot;,&quot;trang_thai&quot;:1,&quot;hinh_anh&quot;:null,&quot;created_at&quot;:&quot;2023-04-01 10:02:18&quot;,&quot;updated_at&quot;:&quot;2024-01-01 21:20:17&quot;}">
                                                        OCB</option>
                                                    <option label="BIDV"
                                                        value="{&quot;id&quot;:5,&quot;ten_ngan_hang&quot;:&quot;Ng\u00e2n h\u00e0ng \u0110\u1ea7u t\u01b0 v\u00e0 Ph\u00e1t tri\u1ec3n Vi\u1ec7t Nam&quot;,&quot;ten_tieng_anh&quot;:&quot;BIDV&quot;,&quot;so_tai_khoan&quot;:&quot;51210000996942&quot;,&quot;chu_the&quot;:&quot;NGO THI THU&quot;,&quot;trang_thai&quot;:1,&quot;hinh_anh&quot;:null,&quot;created_at&quot;:&quot;2023-04-02 14:47:45&quot;,&quot;updated_at&quot;:&quot;2024-01-01 21:19:33&quot;}">
                                                        BIDV</option> --}}
                                                </select>
                                                <input type="hidden" id="nganHangNap">
                                            </li>
                                            <li>
                                                <span class="depositT">Tên tài khoản :</span>
                                                <div class="blueW ng-binding ng-scope" id="chu_tai_khoan"></div>
                                            </li>
                                            <li>
                                                <span class="depositT">Số tài khoản :</span>
                                                <div class="blueW ng-binding ng-scope" id="so_tai_khoan">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="depositHint"><span>*</span>Chỉ sử dụng cho nạp tiền lần
                                                    này.</div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="dataInput">
                            <tbody>
                                <tr>
                                    <td class="leftTitle" style="height: 185px;">
                                        <div class="midTitle">
                                            <img src="/Content/Images/vi-vn/Graph/icon_dataInput.png">
                                            <span>Bước 3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="allBank">

                                            <li class="btnBank btnBank02 fancybox ng-scope">
                                                <img src="/Content/Images/vi-vn/Graph/icon_add.png">
                                                Thêm tài khoản
                                            </li>
                                            <li class="btnBank btnBank02 fancybox ng-scope">
                                                <img src="/Content/Images/vi-vn/Graph/icon_add.png">
                                                Thêm tài khoản
                                            </li>
                                            <li class="btnBank btnBank02 fancybox ng-scope">
                                                <img src="/Content/Images/vi-vn/Graph/icon_add.png">
                                                Thêm tài khoản
                                            </li>
                                        </ul>
                                        <ul class="deposit depositStep">
                                            <form action="{{ route('createQr') }}" method="POST">
                                                @csrf
                                                <li>
                                                    <span class="depositT">Số điểm nạp :</span>
                                                    <input type="text" id="netbank2" name="so_tien"
                                                        autocomplete="off" placeholder="100 ~ 100000" required=""
                                                        class="ng-pristine ng-untouched ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-maxlength">
                                                    <div class="depositMoney">Thực tế : <span class="ng-binding"
                                                            id="tienThucTe"></span> VNĐ
                                                    </div>
                                                </li>
                                                <li>
                                                    <input type="submit" id="xacNhanNap"
                                                        class="confirmSent fancybox" value="Xác nhận"
                                                        disabled="disabled">
                                                </li>
                                            </form>

                                        </ul>
                                        <div class="formPopup_prompt ng-hide" id="amountHint">
                                            <img src="/Content/Images/Graph/icon_prompt.png"
                                                style="margin-bottom:-3px;margin-right:5px">
                                            <span style="color: red" class="ng-binding ng-scope"> ~ điểm</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="dataInput">
                            <tbody>
                                <tr>
                                    <td class="leftTitle" style="height: 110px;">
                                        <div class="midTitle">
                                            <img src="/Content/Images/vi-vn/Graph/icon_dataHint.png">
                                            <span>Chú ý</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rightHint">
                                            <ul>
                                                <li>Nạp tiền khác họ tên đăng ký sẽ bị hoàn trả.</li>
                                                <li>Bắt buộc chuyển tiền theo tài khoản ngân hàng đã chỉ định, nếu
                                                    chuyển qua tài khoản
                                                    cũ sẽ không nhận được, chúng tôi sẽ không chịu trách nhiệm.
                                                </li>
                                                <li>Chuyển khoản khác hệ thống vui lòng chọn <span
                                                        class="redW">chuyển khoản nhanh.</span></li>
                                                <li class="ng-scope">Để
                                                    tăng tốc độ cộng điểm, <span class="redW">vui lòng đến mục lịch
                                                        sử giao dịch tải biên lai lên.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        console.log("ready!");
                        // $('#xacNhanNap').on('click', function() {
                        //     console.log('Xác nhận nạp')

                        //     // let nganHangNap = $('#nganHangNap').val();
                        //     let soTienNap = $('#netbank2').val();
                        //     // let soTaiKhoan = $('#so_tai_khoan').text();
                        //     let params = {
                        //         so_tien: soTienNap,
                        //         trang_thai: 1,
                        //         loai: 1,
                        //     }
                        //     console.log('Thông tin giao dịch')
                        //     console.log(params)
                        //     axios.post('/create-qr', params)
                        //         .then(function(response) {
                        //             console.log('thêm giao dịch trả về')
                        //             console.log(response);
                        //             // if (response.data.rc == 0) {
                        //             //     localStorage.setItem("soTaiKhoanRut", soTaiKhoan);
                        //             //     localStorage.setItem("soTienRut", soTienNap);
                        //             //     localStorage.setItem("nganHangRut", nganHangNap);
                        //             //     window.open('/payment/view-qr-pc?type=bank', '_blank')
                        //             // } else {}
                        //         })
                        //         .catch(function(error) {
                        //             console.log(error);
                        //         });


                        // })
                        $('#netbank2').on('input', function() {
                            console.log('Nhập số điểm nạp')
                            let giaTri = $('#netbank2').val();
                            let res = giaTri.replace(/\D/g, "")
                            console.log(parseInt(res))
                            if (res && res != NaN && res.length) {
                                console.log('case 1')
                                let thucTe = parseInt(res) * 1000;
                                console.log('Thực ế:')
                                console.log(thucTe)
                                $('#tienThucTe')[0].innerHTML = thucTe.toLocaleString("de-DE");
                                $('#netbank2').val(res);
                                $('#xacNhanNap').removeAttr("disabled");
                            } else {
                                console.log('case 2')
                                $('#netbank2').val();
                                $('#xacNhanNap').attr("disabled", "disabled");
                            }
                        })
                        $('#selectBank').on('change', function() {
                            if (this.value) {
                                console.log(this.value)
                                // let data = JSON.parse(this.value)
                                let data = {
                                    "id": 2,
                                    "ten_tieng_anh": "TCB",
                                    "so_tai_khoan": "19037098036018",
                                    "chu_the": "NGUYEN THI BICH HUE",
                                    "trang_thai": 1,
                                    "hinh_anh": null,
                                }
                                $('#so_tai_khoan')[0].innerHTML = data.so_tai_khoan
                                $('#chu_tai_khoan')[0].innerHTML = data.chu_the
                                $('#nganHangNap').val(data.ten_tieng_anh)
                                $('#buttonXacNhan').prop("disabled", false)
                            } else {
                                console.log('Không chọn ngân hàng')
                                $('#so_tai_khoan')[0].innerHTML = ''
                                $('#chu_tai_khoan')[0].innerHTML = ''
                                $('#buttonXacNhan').prop("disabled", true)
                            }
                        });

                    });

                    function goToPath(path) {
                        console.log('goToPath:' + path)
                        if (path) {
                            window.open(path, '_self')
                        }
                    }
                </script>

            </div>
        </div>
    </div>
</body>
<script>
    // $('#xacNhanNap').on('click', function() {
    //     console.log('Xác nhận nạp')
    //     $("#xacNhanNap").attr("disabled", true);
    //     setTimeout(() => {
    //         $("#xacNhanNap").attr("disabled", false);
    //     }, 1000)
    // })
</script>

</html>
