<!doctype html>
<html ng-app="OBSMobileApp" class="ng-scope">

<head>
    <title>KU Web</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <base href="https://ku192.site/">
    <link href="style/mobile_main.css" rel="stylesheet">
    <link href="style/mobile_form.css" rel="stylesheet">
    <link href="style/mobile_deposit.css" rel="stylesheet">
    <style>
        .keyIn {
            font-size: 1.35em !important;
            font-weight: bold;
            height: 48px;
            line-height: 48px;
            padding-right: 25px;
            color: black;
        }
    </style>
</head>

<body ontouchstart="" block-ui="main" class="ng-scope block-ui block-ui-anim-fade bodyForm" aria-busy="false">
    <div class="bg_header ng-scope bg_headerID">
        <a class="btn_back" href="https://ku192.site/recharge"></a>
        <h1 class="bg_header_name left">QRcode</h1>
        <div class="header_R">
            <div class="icon_inforID" id="GameMenu">
                <div class="icon_inforMoney">
                    <span class="ng-binding ng-scope">0</span>
                    <span id="signout" class="btn_inforOut "></span>
                </div>
            </div>
        </div>
    </div>
    <div id="container_main" class="container_main">
        <div class="ng-scope">
            <div ng-show="ctrl.model.TabRecord == 2 &amp;&amp; ctrl.ConfirmOpenBankList == false" class="">
                <div class="deposit_subList marginTop">
                    <div class="ng-scope btn_subList at">
                        <div class="btn_subList_img">
                            <img src="/Areas/Mobile/Content/Images/vi-vn/btn_qrN.svg">
                        </div>
                        <div class="btn_subList_T">QRpay</div>
                    </div>
                </div>
                <div>
                    <form method="post" name="form" form-validation-setting="false" as-name="ctrl"
                        class="ng-pristine ng-valid" novalidate="novalidate"
                        action="{{ route('selectBankMobilePost') }}">
                        @csrf
                        <div class="form">
                            <ul>
                                <li>
                                    <div class="form_T">Số điểm nạp</div>
                                    <div class="form_In">
                                        <input oninput="nhapSoTien()" onclick="showKeyBoard()" id="soTienNap"
                                            type="number" name="so_tien"
                                            class="w100 keyboard ng-pristine ng-valid ng-binding ng-scope ng-empty ng-touched on"
                                            placeholder="100 ~ 100000" style="outline: none; color: black;"></input>
                                    </div>
                                </li>
                                <li class="form_Reality">
                                    <div class="form_T">Thực tế</div>
                                    <div class="form_In">
                                        <div class="ng-binding" id="tienThucTe">0</div>
                                        <div>VNĐ</div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li class="keySetting">
                                    <div id="numericKeyboard"
                                        class="InitialDepositAmount_109_1 ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"
                                        max-length="10" style="display: none;">
                                        <table ng-show="usepoint==='false'" class="numInputArea "
                                            style="display: table;">
                                            <tbody>
                                                <tr>
                                                    <td class="typeNum PopupNum number1" onclick="pressKey('1')"></td>
                                                    <td class="typeNum PopupNum number2" onclick="pressKey('2')"></td>
                                                    <td class="typeNum PopupNum number3" onclick="pressKey('3')"></td>
                                                    <td class="typeNum PopupNum number4" onclick="pressKey('4')"></td>
                                                    <td class="typeNum PopupNum number5" onclick="pressKey('5')"></td>
                                                    <td class="typeNum PopupNum numClear" onclick="delPhone()"></td>
                                                </tr>
                                                <tr>
                                                    <td class="typeNum PopupNum number6" onclick="pressKey('6')"></td>
                                                    <td class="typeNum PopupNum number7" onclick="pressKey('7')"></td>
                                                    <td class="typeNum PopupNum number8" onclick="pressKey('8')"></td>
                                                    <td class="typeNum PopupNum number9" onclick="pressKey('9')"></td>
                                                    <td colspan="2" class="typeNum PopupNum number0"
                                                        onclick="pressKey('0')"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                            <div class="form_button">
                                <input type="submit" id="buttonXacNhan" disabled
                                    class="confirmSent confirmSentM fancybox w100" value="Xác nhận">
                            </div>
                        </div>
                    </form>
                    <div class="precautions">
                        <div class="precautions_tab">
                            <img src="/Areas/Mobile/Content/Images/icon_maintain.svg">Chú ý
                        </div>
                        <div class="precautions_msg">
                            <div class="precautions_list">
                                <span class="precautions_listL">1.</span>
                                <span class="precautions_listR">Nạp tiền khác họ tên đăng ký sẽ bị hoàn trả.</span>
                            </div>
                            <div class="precautions_list">
                                <span class="precautions_listL">2.</span>
                                <span class="precautions_listR">Vui lòng không chọn người nhận chịu phí.</span>
                            </div>
                            <div class="precautions_list ng-scope"
                                ng-if="ctrl.model.TransactionRecordUploadSettingResult.IsOpen">
                                <span class="precautions_listL">3.</span>
                                <span class="precautions_listR">Để tăng tốc độ cộng điểm, <span class="t_red">vui
                                        lòng đến mục lịch sử giao dịch tải biên lai lên.</span></span>
                            </div>
                        </div>
                    </div>
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

<script src="/js/jquery-3.6.4.js"></script>
<script src="js/axios.min.js"></script>
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

    function pressKey(key) {
        $('#soTienNap')[0].classList.add('keyIn')
        console.log('pressKey:' + key)
        let phoneNumber = $('#soTienNap').val();
        let str = phoneNumber.toString();
        let tien = str += key;
        $('#soTienNap').val(tien);
        checkXacNhan(tien)
        let soTienRut = parseInt(tien).toLocaleString() + '.000'
        $('#tienThucTe')[0].innerHTML = soTienRut;

    }

    function nhapSoTien() {
        $('#soTienNap')[0].classList.add('keyIn')
        let tien = $('#soTienNap').val();
        checkXacNhan(tien)
        if (tien) {
            let soTienRut = parseInt(tien).toLocaleString() + '.000'
            $('#tienThucTe')[0].innerHTML = soTienRut;
        } else {
            $('#tienThucTe')[0].innerHTML = 0;
            $('#soTienNap')[0].classList.remove('keyIn')
        }
    }

    function checkXacNhan(tien) {
        console.log('Check Xác nhận')
        console.log(tien)
        if (tien >= 100 && tien <= 100000) {
            $('#buttonXacNhan').prop("disabled", false)
        } else {
            $('#buttonXacNhan').prop("disabled", true)
        }
    }

    function delPhone() {
        console.log('delPhone')
        let phoneNumber = $('#soTienNap').val();
        let str = phoneNumber.toString();
        $('#soTienNap').val(str.slice(0, -1))
        let tien = $('#soTienNap').val();
        checkXacNhan(tien)
        if (tien) {
            let soTienRut = parseInt(tien).toLocaleString() + '.000'
            $('#tienThucTe')[0].innerHTML = soTienRut;
        } else {
            $('#tienThucTe')[0].innerHTML = 0;
            $('#soTienNap')[0].classList.remove('keyIn')
        }

    }

    function xacNhanRutTien() {
        let params = {
            so_tien: $('#soTienNap').val(),
            phuong_thuc: 'Qr-Code',
            trang_thai: 1,
            loai: 1,
        }
        console.log('Thông tin giao dịch')
        console.log(params)
        axios.post('/transaction/creat', params)
            .then(function(response) {
                console.log('thêm giao dịch trả về')
                console.log(response);
                if (response.data.rc == 0) {
                    $('#numericKeyboard')[0].style.display = 'none';
                    let soTienRut = $('#soTienNap').val();
                    localStorage.setItem("soTienRut", soTienRut);
                    window.open('/payment/select-bank', '_self')
                } else {}
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function showKeyBoard() {
        console.log('showKeyBoard')
        if ($('#soTienNap')) {
            var checkElement = $('#soTienNap')[0];
            checkElement.classList.add('on', 'keyIn');
            $('#numericKeyboard')[0].style.display = 'block';
        }
    }
</script>

</html>
