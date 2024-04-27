<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="OBSApp">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KUBET - Thương hiệu Casino chuy&#234;n nghiệp số 1 Ch&#226;u &#193; với [LaLiga-CA Osasuna l&#224; đối
        t&#225;c
        ch&#237;nh thức] c&#249;ng c&#225;c tr&#242; chơi giải tr&#237; (Thể Thao, Casino, E-Sports, Xổ Số)!</title>
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="bundles/css_main.css" rel="stylesheet" />
    <link href="Content/Css/btmRunImg.css" rel="stylesheet" />
    <link href="Content/Css/vi-vn/animation.css" rel="stylesheet" />
    <link rel="stylesheet" href="disk/slidercaptcha.min.css">
    <script src="js/jquery-3.6.4.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/axios.min.js"></script>
    <style>
        li:hover .menuSubList {
            display: block;
        }

        .Sevli:hover .customerServDiv {
            display: block;
        }
    </style>
</head>

<body>
    <a href="https://www.mykubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.kubetkubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.kubetnav.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.te7.com.tw/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.ex589.com/home/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.casino5168.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.ex5888.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <div class="toper">
        <div class="toperM">
            {{-- <div id="showbox" class="topTime">27-04 14:04</div> --}}
            <div class="topCtrl">
                <span>|</span>
                <a class="btn_setFavor" title="Thêm yêu thích"></a>
            </div>
            @if (!auth()->check())
                <div style="display: flex" class="loginArea">
                    <a class="btn_addMember fancybox" onclick="showRegister(1)" id="RegisterImmediate">Đăng ký 1212</a>
                    <a class="btn_login fancybox" onclick="showLogin(1)" id="loginbutton">Đăng nhập</a>
                </div>
            @else
                <div class="memberArea" style="display:flex;">
                    <ul>
                        <li class="level1"><span>Đồng</span>
                        </li>
                        <li class="memberAC" id="UserMenu"><span></span>{{ auth()->user()->username }}<span
                                class="memberNick"><span></span></span>
                        </li>
                        <li style="position: relative;" id="GameMenu">
                            <div class="btn_memberPMenu">
                                <a>$ <span> 0</span></a>
                                <span class="memberPArrow"></span>
                            </div>
                            <div class="memberPMenu">
                                <div class="memberPMenuArrow"></div>
                                <div class="memberPMenuT">
                                    <div class="editview">
                                        <ul ng-repeat="group in groupgames track by group.GroupID">
                                            <li class="pMenuN">123</li>
                                            <li>
                                                <span class="pMenuT">กระเป๋าเงิน<br>เชิญเพื่อน</span>
                                                <span class="pMenuT"></span>
                                                <span class="pMenuP"></span>
                                                <span class="pMenuP">
                                                    <img src="/Content/Images/Graph/spinner.svg">
                                                </span>
                                                <span class="pMenuP maintainP">Đang bảo trì</span>
                                                <a class="btn_pMenu">Chuyển về</a>
                                                <a class="btn_pMenu" style="cursor: pointer;">
                                                    <img class="img_spinner" src="/Content/Images/Graph/spinner.svg">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="memberPMenuB">
                                    <div>
                                        <span class="pMenuT"></span>
                                        <span class="pMenuP"></span>
                                        <span class="pMenuP allP"></span>
                                        <span class="pMenuP">
                                            <img src="/Content/Images/Graph/spinner.svg">
                                        </span>
                                        <span class="pMenuP" style="color:#cb83ff;"></span>
                                    </div>
                                    <a class="returnMainP">
                                        Chuyển hết về tài khoản chính
                                    </a>
                                    <a id="clickTransferGamesPointToMain" class="returnMainP" style="cursor: pointer;">
                                        <img src="/Content/Images/Graph/spinner.svg">
                                    </a>
                                    <a class="returnMainP off" style="cursor: not-allowed;">
                                        Chuyển hết về tài khoản chính<span class="returnMainOff">Đang bảo trì</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="memberFlow ">
                                <span class="btn_RoundTextX">Chuyển quỹ</span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText">Xin lỗi, chức năng chuyển khoản đang bảo trì！</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/recharge-pc" target="_blank" class="link">
                                <span class="btn_RoundTextY">Nạp tiền</span>
                            </a>
                            <a class="memberFlow tempClosed">
                                <span class="btn_RoundTextY">Nạp tiền</span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" onclick="showFormNhapThongTinNganHang()" class="link memberFlow">
                                <span class="btn_RoundTextZ">Rút tiền</span>
                            </a>
                            <a class="memberFlow tempClosed">
                                <span class="btn_RoundTextZ">Rút tiền</span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="memberCtrl" href="/member-pc"
                                onclick="window.open(this.href, '_blank', 'width=950,height=700'); return false;">
                                <span class="btn_member"></span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText">Hội viên</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="memberCtrl">
                                <span class="btn_personalMsg"></span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText">Tin nhắn cá nhân</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="signout" class="memberCtrl">
                                <span class="btn_signout"></span>
                                <div class="RoundText_prompt">
                                    <div class="RT_promptText">Đăng xuất</div>
                                </div>
                            </a>
                            {{-- <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token"
                                    value="01zWlh7JJIrTV9nGNkq1LdS5q7azo7gOSoMnWNMn">
                            </form> --}}
                        </li>
                    </ul>
                </div>
            @endif

            <div class="popUp" id="announcement">
                <div class="popUp_title">
                    <span ng-bind="ctrl.model.ImportantNewsItem.NewsTitle"></span>
                </div>
                <div class="popUp_in">
                    <div class="popUp_ann">
                        <span class="set-word-break-block"
                            bind-html-compile="ctrl.model.ImportantNewsItem.NewsContent"></span>
                    </div>
                </div>
            </div>
        </div>
        <div ng-controller="PointsControlCenterCtrl as ctrl" style="display: none;">
            <span ng-bind="ctrl.isPointsChange.IsTotalBalanceLoading"></span>
        </div>
    </div>
    <!-- start mainMenu -->
    <div id="MainMenu">
        <div class="menuArea">
            <div class="mainMenu">
                <div class="logo" onclick="location.href = 'index.html'">
                    <img alt="KU CASINO" src="Content/Images/vi-vn/Graph/logo_KUbet.png" />
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a class="menuA ">
                                <img class="iconActivity" src="Content/Images/Graph/icon_fire.gif" />
                                KU siêu HOT
                            </a>
                            <div class="menuSubList">
                                <div class="bg_menuShadow"></div>
                                <div class="subList subHot">
                                    <div class="subListDiv ">
                                        <div class="txt_maintain hot_maintain" id="NBBSport_hot_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="KU THỂ THAO" src="Content/Images/Graph/logo_KUNBB.png"
                                                    class="ic_logo" />
                                                <img alt="KU THỂ THAO" src="Content/Images/Graph/logo_CAO.png" />
                                            </div>
                                            <span class="listName">KU THỂ THAO</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain hot_maintain" id="BB_LiveGame_hot_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="KU CASINO" src="Content/Images/Graph/logo_KUCasino.png"
                                                    class="ic_logo" />
                                            </div>
                                            <span class="listName">KU CASINO</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain hot_maintain" id="BB_Ball_hot_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="KU XỔ SỐ" src="Content/Images/Graph/logo_KU.png"
                                                    class="ic_logo" />
                                            </div>
                                            <span class="listName">KU XỔ SỐ</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain hot_maintain" id="DDD_hot_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="3D GAMES" src="Content/Images/Graph/logo_KU.png"
                                                    class="ic_logo" />
                                            </div>
                                            <span class="listName">3D GAMES</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA ">
                                THỂ THAO
                            </a>
                            <div class="menuSubList">
                                <div class="bg_menuShadow"></div>
                                <div class="subList subListTwo">
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="NBBSport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="KU THỂ THAO" src="Content/Images/Graph/logo_KUCasino.png"
                                                    class="ic_logo" />
                                                <img alt="KU THỂ THAO" src="Content/Images/Graph/logo_CAO.png" />
                                            </div>
                                            <span class="listName">KU THỂ THAO</span>
                                        </div>
                                        <div class="icon_hot">
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="TS_Sport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="JZ THỂ THAO" src="Content/Images/Graph/logo_JZ.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">JZ THỂ THAO</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="OneBookSport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="SABA" src="Content/Images/Graph/logo_OneBook.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">SABA</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="CMDSport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="CMD" src="Content/Images/Graph/logo_CMD.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">CMD</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="AISport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="AI" src="Content/Images/Graph/logo_AI.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">AI</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="AGSport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="AG" src="Content/Images/Graph/logo_AG.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">AG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="NewBBINBall_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="BBIN" src="Content/Images/Graph/logo_BBIN.png"
                                                    class="ic_logo" />
                                            </div>
                                            <span class="listName">BBIN</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="OBSport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened2 topSports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo">
                                                <img alt="PM" src="Content/Images/Graph/logo_OBsport.png"
                                                    class="" />
                                            </div>
                                            <span class="listName">PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA ">
                                LIVE CASINO
                            </a>
                            <div class="menuSubList" style="width: auto;">
                                <div class="bg_menuShadow"></div>
                                <div class="subList subListTwo">
                                    <div class="subListDiv topLive_AES subListT ">
                                        <div class="txt_maintain live_maintain" id="AESLive_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="AES"
                                                    src="Content/Images/Graph/logo_AES.png" class="" /></div>
                                            <span class="listName">AES</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_KU " id="BB_LiveGame_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="BB_LiveGame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="KU CASINO"
                                                    src="Content/Images/Graph/logo_KUCasino.png" class="ic_logo" />
                                            </div>
                                            <span class="listName">KU CASINO</span>
                                        </div>
                                        <div class="icon_activity">
                                            <img src="Content/Images/vi-vn/Graph/icon_tableAnchor.png">
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_WM subListB " id="WM_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="WM_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="WM"
                                                    src="Content/Images/Graph/logo_WM.png" class="" /></div>
                                            <span class="listName">WM</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_SA subListT " id="SA_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="SA_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="SA"
                                                    src="Content/Images/Graph/logo_SA.png" class="" /></div>
                                            <span class="listName">SA</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_XG subListB " id="XG_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="XGLive_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="XG"
                                                    src="Content/Images/Graph/logo_XG.png" class="" /></div>
                                            <span class="listName">XG</span>
                                        </div>
                                        <div class="icon_new">
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_AG " id="AGIN_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="AGIN_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="AG"
                                                    src="Content/Images/Graph/logo_AG.png" class="" /></div>
                                            <span class="listName">AG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_DG subListB " id="DG_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="DGLiveGame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="DG"
                                                    src="Content/Images/Graph/logo_DG.png" class="" /></div>
                                            <span class="listName">DG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_EVO subListT " id="EVO_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="EVOLive_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="EVO"
                                                    src="Content/Images/Graph/logo_EVO.png" class="" /></div>
                                            <span class="listName">EVO</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv topLive_GPI subListB " id="GPI_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="GPI_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="GPI"
                                                    src="Content/Images/Graph/logo_GPI.png" class="" /></div>
                                            <span class="listName">GPI</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv OBLive " id="OBLive_personal_maintain">
                                        <div class="txt_maintain live_maintain" id="OBLive_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topLive"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="PM"
                                                    src="Content/Images/Graph/logo_OBlive.png" class="" /></div>
                                            <span class="listName">PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA menuA">
                                GAMES
                            </a>
                            <div class="menuSubList" style="width: auto;">
                                <div class="bg_menuShadow"></div>
                                <div class="subList subListTwo">
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="KAEgame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="KA"
                                                    src="Content/Images/Graph/logo_KA.png" class="" /></div>
                                            <span class="listName">KA</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="BNG_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="BNG"
                                                    src="Content/Images/Graph/logo_bng.png" class="" /></div>
                                            <span class="listName">BNG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="DDD_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="3D"
                                                    src="Content/Images/Graph/logo_KU.png" class="ic_logo" /></div>
                                            <span class="listName">3D</span>
                                        </div>
                                        <div class="icon_hot">
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="PGEgame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="PG"
                                                    src="Content/Images/Graph/logo_PG.png" class="" /></div>
                                            <span class="listName">PG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="PLS_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="PLS"
                                                    src="Content/Images/Graph/logo_playson.png" class="" />
                                            </div>
                                            <span class="listName">PLS</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="PS_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="PS"
                                                    src="Content/Images/Graph/logo_PS.png" class="" /></div>
                                            <span class="listName">PS</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="FTGEgame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="FTG"
                                                    src="Content/Images/Graph/logo_FTG.png" class="" /></div>
                                            <span class="listName">FTG</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="CQNineEgame_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="CQ9"
                                                    src="Content/Images/Graph/logo_cq9.html" class="" /></div>
                                            <span class="listName">CQ9</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain" id="DS_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="DS"
                                                    src="Content/Images/Graph/logo_DS.png" class="" /></div>
                                            <span class="listName">DS</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv notice">
                                        <div class="DarkenedFive topGame"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img
                                                    src="Content/Images/Graph/logo_noticeGame.png" />
                                            </div>
                                            <span class="listName">SẮP RA MẮT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA ">
                                XỔ SỐ
                            </a>
                            <div class="menuSubList" style="width: auto;">
                                <div class="bg_menuShadow"></div>
                                <div class="subList">
                                    <div class="subListDiv " id="NewBBIN_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="NewBBINLottery_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topLoto"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="BBIN"
                                                    src="Content/Images/Graph/logo_BBIN.png" class="" /></div>
                                            <span class="listName">BBIN</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="BB_Ball_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="BB_Ball_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topLoto"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="KU XỔ SỐ"
                                                    src="Content/Images/Graph/logo_KUCasino.png" class="ic_logo" />
                                            </div>
                                            <span class="listName">KU XỔ SỐ</span>
                                        </div>
                                        <div class="icon_hot">
                                        </div>
                                    </div>
                                    <div class="subListDiv notice">
                                        <div class="Darkened3 topLoto"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img
                                                    src="Content/Images/Graph/logo_noticeLoto.png" />
                                            </div>
                                            <span class="listName">SẮP RA MẮT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA ">
                                E-SPORTS
                            </a>
                            <div class="menuSubList">
                                <div class="bg_menuShadow"></div>
                                <div class="subList">
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="OneBookESport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topESports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="SABA"
                                                    src="Content/Images/Graph/logo_OneBook.png" /></div>
                                            <span class="listName">SABA</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="IMESport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topESports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="IM"
                                                    src="Content/Images/Graph/logo_IM.png" />
                                            </div>
                                            <span class="listName">IM</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="OBESport_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topESports"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="PM"
                                                    src="Content/Images/Graph/logo_OBesports.png" />
                                            </div>
                                            <span class="listName">PM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA ">
                                BẮN C&#193;
                            </a>
                            <div class="menuSubList" style="width: auto;">
                                <div class="bg_menuShadow"></div>
                                <div class="subList">
                                    <div class="subListDiv " id="KA_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="KAFishing_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="KA"
                                                    src="Content/Images/Graph/logo_KA.png" class="" /></div>
                                            <span class="listName">KA</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="CQNine_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="CQNineFishing_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="CQ9"
                                                    src="Content/Images/Graph/logo_CQ9.png" class="" /></div>
                                            <span class="listName">CQ9</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="KS_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="KSFishing_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="KS"
                                                    src="Content/Images/Graph/logo_KS_EN.png" class="" /></div>
                                            <span class="listName">KS</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="DS_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="DSFishing_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="DS"
                                                    src="Content/Images/Graph/logo_DS.png" class="" /></div>
                                            <span class="listName">DS</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="DDD_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="DDDSharkLegend_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="3D"
                                                    src="Content/Images/Graph/logo_KU.png" class="ic_logo" /></div>
                                            <span class="listName">3D</span>
                                        </div>
                                        <div class="icon_hot">
                                        </div>
                                    </div>
                                    <div class="subListDiv " id="LC_loto_maintain">
                                        <div class="txt_maintain loto_maintain" id="LCFishing_txt_maintain">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="DarkenedSix topFish"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="V8"
                                                    src="Content/Images/Graph/logo_V8.png" class="" /></div>
                                            <span class="listName">V8</span>
                                        </div>
                                        <div class="icon_new">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA menuA">
                                ĐỐI KH&#193;NG
                            </a>
                            <div class="menuSubList" style="width: auto;">
                                <div class="bg_menuShadow"></div>
                                <div class="subList">
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="LC_txt_maintain"
                                            style="display:none">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topChess">
                                            <div class="subListBg topChess_LC">
                                            </div>
                                        </div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="V8"
                                                    src="Content/Images/vi-vn/Graph/logo_V8.png" class="" />
                                            </div>
                                            <span class="listName">V8</span>
                                        </div>
                                    </div>
                                    <div class="subListDiv ">
                                        <div class="txt_maintain sport_maintain" id="DDDChessGame_txt_maintain"
                                            style="display:none">
                                            <p class="icon_arrowB">
                                            </p>
                                        </div>
                                        <div class="Darkened3 topChess">
                                            <div class="subListBg topChess_DDD">
                                            </div>
                                        </div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img alt="3D"
                                                    src="Content/Images/vi-vn/Graph/logo_KU.png" class="ic_logo" />
                                            </div>
                                            <span class="listName">3D</span>
                                        </div>
                                        <div class="icon_hot">
                                        </div>
                                    </div>
                                    <div class="subListDiv notice">
                                        <div class="Darkened3 topChess"></div>
                                        <div class="listLogo">
                                            <div class="img_logo"><img
                                                    src="Content/Images/Graph/logo_noticeChess.png" />
                                            </div>
                                            <span class="listName">SẮP RA MẮT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a class="menuA_colorO">ƯU ĐÃI</a>
                        </li>
                        <li>
                            <span>|</span>
                        </li>
                        <li>
                            <a href="{{ route('download') }}" class="menuA" open-window="/Home/PhoneApp"
                                op-title="Tải APP" op-height="600" op-width="800">
                                <div class="icon_phone"></div>
                                Tải APP
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                .obErrorHint {
                    position: absolute;
                    color: #f00;
                    font-size: 13px;
                    line-height: 20px;
                    bottom: -20px;
                    right: 0;
                    white-space: nowrap;
                }

                .popListBottom .obErrorHint {
                    width: 251px;
                }
            </style>
        </div>
    </div>
    <!-- end mainMenu -->
    <div class="mainCfArea">
        <div class="mainCfArea">
            <div class="DB_tab25">
                <div class="DB_menuWrap">
                    <ul class="DB_menuSet">
                        <li><img src="FileSystem/Images/56e743190c884eb494e1685cccce15fe.jpg" alt="" /></li>
                        <li><img src="FileSystem/Images/34c16d1e5beb4eafbc6e5f3dbfa97b09.jpg" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="runMsgArea">
            <div class="runMsg">
                <div class="runMsgTitle">
                    <div class="icon_runMsg"></div>
                    <span><a class="" style="cursor:pointer">Thông báo</a></span>|
                </div>
                <div id="marqueeBar" class="marquee">
                    <marquee><b>Kể từ ngày 23/06/2023, khi nạp tiền qua cổng game kubet sẽ được
                            khuyến mại 30%.</b></marquee>
                </div>
                <div class="jackpotAll">
                    <div class="jackpotBox">
                        <div class="jackpotBAC">
                            <img src="Content/Images/vi-vn/Graph/jackBac.png">
                            <div id="jackpotNum01" class="jackpotNum">
                                <span></span>
                            </div>
                        </div>
                        <div class="jackpotCD">
                            <img src="Content/Images/vi-vn/Graph/jackCD.png">
                            <div id="jackpotNum02" class="jackpotNum">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="jackpotGif">
                        <img src="Content/Images/vi-vn/Graph/jackBac.gif">
                        <img src="Content/Images/vi-vn/Graph/jackCD.gif">
                    </div>
                    <div class="btn_jackpot" id="btn_jackpotBAC">
                    </div>
                    <div class="btn_jackpot" id="btn_jackpotBAC">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="divNotify"></div>
    <div id="mainArea" ng-class="{'depositArea' : false}">
        <div id="indexMenu">
            <style>
                .gameTypeList .txt_maintain p {
                    max-width: none;
                }
            </style>
            <div class="mainArea" ng-controller="HomeIndexCtrl as ctrl">
                <div class="gameType">
                    <div class="gameTypeList liveGame">
                        <div class="exterior">
                            <div class="icon_liveGame"></div>
                            <h5>ĐỐI TÁC LALIGA</h5>
                        </div>
                        <div class="in">
                            <div class="liveGame_in">
                                <div class="LG01_people"></div>
                                <span class="LG_text01">SPAIN PRIMERA LALIGA</span>
                                <span class="LG_text02">TOP 5 GIẢI ĐẤU HÀNG ĐẦU CHÂU ÂU<br />ĐỐI TÁC CHÍNH THỨC DUY
                                    NHẤT TẠI CHÂU Á</span>
                                <div class="btn_LG_playGame">Vào xem</div>
                            </div>
                        </div>
                    </div>
                    <div class="gameTypeList sportsLive">
                        <div style="text-decoration: none">
                            <div class="exterior">
                                <div class="icon_sportsLive"></div>
                                <h5>COOL-IN LIVE</h5>
                            </div>
                            <div class="in">
                                <div class="sportsLive_in">
                                    <div class="SL01">
                                        <div class="SL_bg"></div>
                                    </div>
                                    <span class="SL_text01">Sự kiện</span><span class="SL_text02">thể thao đặc
                                        sắc</span><span class="SL_text03">MC nữ gợi cảm</span>
                                    <div class="btn_SL_playGame">Vào xem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gameTypeList freeMovie">
                        <a style="text-decoration:none">
                            <div class="exterior">
                                <div class="icon_freeMovie"></div>
                                <h5>Phim Ảnh</h5>
                            </div>
                            <div class="in">
                                <div class="freeMovie_in">
                                    <div class="FM02_blurry"></div>
                                    <span class="FM_text01">Phim Ảnh</span>
                                    <span class="FM_text02">Xem mọi lúc </span>
                                    <div class="btn_FM_playGame">Vào xem</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="gameTypeList outtake">
                        <div style="text-decoration: none">
                            <div class="exterior">
                                <div class="icon_outtake"></div>
                                <h5>Hậu trường hoạt động</h5>
                            </div>
                            <div class="in">
                                <div class="outtake_in">
                                    <div class="outtake_people"></div>
                                    <span class="outtake_text">Hậu trường hoạt động</span>
                                    <div class="btn_outtake">Vào xem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end mainArea -->
    <div class="btmMenu">
        <div class="btmMenuM">
            <ul>
                <li>
                    <a>Giới thiệu</a>
                </li>
                <li>|</li>
                <li>
                    <a>Trợ giúp</a>
                </li>
                <li>|</li>
                <li>
                    <a>Điều khoản</a>
                </li>
                <li>|</li>
                <li>
                    <a>Hỗ trợ</a>
                </li>
                <li>|</li>
                <li>
                    <a>Link dự bị</a>
                </li>
                <li>|</li>
                <li class="phone_t">
                    Gọi điện hỗ trợ：
                    <span>+63279082890</span>
                </li>
            </ul>
            <div class="rightSwitch on">
                <div>Sơ đồ trang mạng<span>|</span></div>
                <div class="rightArrow"></div>
            </div>
        </div>
    </div>
    <div class="btmGuild" style="display: block;">
        <div class="guildM">
            <div class="leftGuidList" ng-controller="MainMenuCtrl as ctrl" ng-cloak>
                <div class="guilList">
                    <div class="guilListT">
                        THỂ THAO
                        <div class="guilListImg">
                            <div class="icon_btmSports"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>KU</a>
                        </li>
                        <li>
                            <a>JZ</a>
                        </li>
                        <li>
                            <a>CMD</a>
                        </li>
                        <li>
                            <a>AG</a>
                        </li>
                        <li>
                            <a>BBIN</a>
                        </li>
                        <li>
                            <a>SABA</a>
                        </li>
                        <li>
                            <a>AI</a>
                        </li>
                        <li>
                            <a>PM</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        CASINO
                        <div class="guilListImg">
                            <div class="icon_btmReal"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>KU</a>
                        </li>
                        <li>
                            <a>AG</a>
                        </li>
                        <li>
                            <a>WM</a>
                        </li>
                        <li>
                            <a>GPI</a>
                        </li>
                        <li>
                            <a>DG</a>
                        </li>
                        <li>
                            <a>SA</a>
                        </li>
                        <li>
                            <a>AES</a>
                        </li>
                        <li>
                            <a>EVO</a>
                        </li>
                        <li>
                            <a>XG</a>
                        </li>
                        <li>
                            <a>PM</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        GAMES
                        <div class="guilListImg">
                            <div class="icon_btmElect"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>3D</a>
                        </li>
                        <li>
                            <a>BNG</a>
                        </li>
                        <li>
                            <a>CQ9</a>
                        </li>
                        <li>
                            <a>PLS</a>
                        </li>
                        <li>
                            <a>DS</a>
                        </li>
                        <li>
                            <a>PS</a>
                        </li>
                        <li>
                            <a>PG</a>
                        </li>
                        <li>
                            <a>KA</a>
                        </li>
                        <li>
                            <a>FTG</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        XỔ SỐ
                        <div class="guilListImg">
                            <div class="icon_btmLotto"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>KU</a>
                        </li>
                        <li>
                            <a>BBIN</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        E-SPORTS
                        <div class="guilListImg">
                            <div class="icon_btmEsports"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>IM</a>
                        </li>
                        <li>
                            <a>SABA</a>
                        </li>
                        <li>
                            <a>PM</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        BẮN CÁ
                        <div class="guilListImg">
                            <div class="icon_btmFish"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>3D</a>
                        </li>
                        <li>
                            <a>CQ9</a>
                        </li>
                        <li>
                            <a>DS</a>
                        </li>
                        <li>
                            <a>KS</a>
                        </li>
                        <li>
                            <a>KA</a>
                        </li>
                        <li>
                            <a>V8</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        ĐỐI KHÁNG
                        <div class="guilListImg">
                            <div class="icon_btmBBO"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>3D</a>
                        </li>
                        <li>
                            <a>V8</a>
                        </li>
                    </ul>
                </div>
                <div class="guilList">
                    <div class="guilListT">
                        Giới thiệu
                        <div class="guilListImg">
                            <div class="icon_btmHelp"></div>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a>Trợ giúp</a>
                        </li>
                        <li>
                            <a class="fancybox">Khiếu nại</a>
                        </li>
                        <li>
                            <a>Hỗ trợ</a>
                        </li>
                        <li>
                            <a>Thông báo</a>
                        </li>
                        <li>
                            <a>Giới thiệu</a>
                        </li>
                        <li>
                            <a>Tinh thần doanh nghiệp</a>
                        </li>
                        <li>
                            <a>Giới thiệu sảnh KU</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="rightMobile">
                <img class="qr_phoneApp" width="110"
                    src="data:image/png;base64, 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SO+A54CEK4BTJiFhjvHmGC8hISEhIWGO8RISEhISEhISEhLmGC8hISEhISEh4QrglElIJCO9A54DEq4ATpmEhDnGm2O8hISEhISEOcZLSEhISEhISEhImGO8hISEhISEhIQrgFMmIZGM9A54Dki4AjhlEhLmGG+O8RISEhISEuYYLyEhISEhISEhIWGO8RISEhISEhISrgBOmYREMtI74Dkg4QrglElImGO8OcZLSEhISEiYY7yEhISEhISEhISEOcZLSEhISEhISLgCOGUSEslI74DngIQrgFMmIWGO8eYYLyEhISEhYY7xEhISEhISEhISEuYYLyEhISEhISHhCuCUSUgkI70DngMSrgBOmYSEOcabY7yEhISEhIQ5xktISEhISEhISEiYY7yEhISEhISEhCuAUyYhkYz0DngOSLgCOGUSEuYYb47xEhISEhIS5hgvISEhISEhISEhYY7xEhISEhISEhKuAE6ZhEQy0jvgOSDhCuCUSUiYY7w5xktISEhISJhjvISEhISEhISEhIQ5xktISEhISEhIuAI4ZRISyUjvgOeAhCuAUyYhYY7x5hgvISEhISFhjvESEhISEhISEhIS5hgvISEhISEhIeEK4JRJSCQjvQOeAxKuAE6ZhIQ5xptjvISEhISEhDnGS0hISEhISEhISJhjvISEhISEhISEK4BTJiGRjPQOeA5IuAI4ZRIS5hhvjvESEhISEhLmGC8hISEhISEhISFhjvESEhISEhISEq4ATpmERDLSO+A5IOEK4JRJSJhjvDnGS0hISEhImGO8hISEhISEhISEhDnGS0hISEhISEi4AjhlEhLJSO+A54CEK4BTJiFhjvHmGC8hISEhIWGO8RISEhISEhISEhLmGC8hISEhISEh4QrglElIJCO9A54DEq4ATpmEhDnGm2O8hISEhISEOcZLSEhISEhISEhImGO8hISEhISEhIQrgFMmIZGM9A54Dki4AjhlEhLmGG+O8RISEhISEuYYLyEhISEhISEhIWGO8RISEhISEhISrgBOmYREMtI74Dkg4QrglElImGO8OcZLSEhISEiYY7yEhISEhISEhISEOcZLSEhISEhISLgCOGUSEslI74DngIQrgFMmIWGO8eYYLyEhISEhYY7xEhISEhISEhISEuYYLyEhISEhISHhCuCUSUgkI70DngMSrgBOmYSE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mGN8VFi6OcabY7yEhIREVFi6OcZLSEhISEi4AjhlEhLJSO+A54CEK4BTJiEhIWGO8VFh6eYYb47xEhISElFh6eYYLyEhISEh4QrglElIJCO9A54DEq4ATpmEhISEOcZHhaWbY7w5xktISEhEhaWbY7yEhISEhIQrgFMmIZGM9A54Dki4AjhlEhISEuYYHxWWbo7x5hgvISEhERWWbo7xEhISEhISrgBOmYREMtI74Dkg4QrglElISEiYY3xUWLo5xptjvISEhERUWLo5xktISEhISLgCOGUSEslI74DngIQrgFMmISEhYY7xUWHp5hhvjvESEhISUWHp5hgvISEhISHhCuCUSUgkI70DngMSrgBOmYSEhIQ5xkeFpZtjvDnGS0hISESFpZtjvISEhISEhCuAUyYhkYz0Dtg1PO4qCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQnXwLirkpHeAbuGx10lISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhIeEaGHdVMtI7YNfwuKskJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJFwD465KRnoH7Boed5WEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhGtg3FXJSO+AXcPjrpKQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQcA2MuyoZ6R2wa3jcVRISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISroFxVyUjvQN2DY+7SkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkLCNTDuqmSkd8Cu4XFXSUhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEi4BsZdlYz0Dtg1PO4qCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQnXwLirkpHeAbuGx10lISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhIeEaGHdVMtI7YNfwuKskJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJFwD465KRnoH7Boed5WEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhGtg3FXJSO+AXcPjrpKQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQcA2MuyoZ6R2wa3jcVRISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISroFxVyUjvQN2DY+7SkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkLCNTDuqmSkd8Cu4XFXSUhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEi4BsZdlYz0Dtg1PO4qCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQnXwLirkpHeAbuGx10lISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhIeEaGHdVMtI7YNfwuKskJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJFwD465KRnoH7Boed5WEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhGtg3FXJSO6AnbsVfge4AjhlEhISEhIS5hhvjvHJ4LCduy34Be0c+B3vCuCUSUhISEhImGO8OcYng8N27rbgF7Rz4He8K4BTJiEhISEhYY7x5hifDA7buduCX9DOgd/xrgBOmYSEhISEhDnGm2N8Mjhs524LfkE7B37HuwI4ZRISEhISEuYYb47xyeCwnbst+AXtHPgd7wrglElISEhISJhjvDnGJ4PDdu624Be0c+B3vCuAUyYhISEhIWGO8eYYnwwO27nbgl/QzoHf8a4ATpmEhISEhIQ5xptjfDI4bOduC35BOwd+x7sCOGUSEhISEhLmGG+O8cngsJ27LfgF7Rz4He8K4JRJSEhISEiYY7w5xieDw3butuAXtHPgd7wrgFMmISEhISFhjvHmGJ8MDtu524Jf0M6B3/GuAE6ZhISEhISEOcabY3wyOGznbgt+QTsHfse7AjhlEhISEhIS5hhvjvHJ4LCduy34Be0c+B3vCuCUSUhISEhImGO8OcYng8N27rbgF7Rz4He8K4BTJiEhISEhYY7x5hifDA7buduCX9DOgd/xrgBOmYSEhISEhDnGm2N8Mjhs524LfkE7B37HuwI4ZRISEhISEuYYb47xyeCwnbst+AXtHPgd7wrglElI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ISEhISEhISEhISEhISEhISHhCkjuZHGNSEhISEhISEhISESFpUtImGO8OcYng8M2x/hkcNgSEhISEhISEhISEhISEhISEhKugOROFteIhISEhISEhISERFRYuoSEOcabY3wyOGxzjE8Ghy0hISEhISEhISEhISEhISEhIeEKSO5kcY1ISEhISEhISEhIRIWlS0iYY7w5xieDwzbH+GRw2BISEhISEhISEhISEhISEhISEq6A5E4W14iEhISEhISEhIREVFi6hIQ5xptjfDI4bHOMTwaHLSEhISEhISEhISEhISEhISEh4QpI7mRxjUhISEhISEhISEhEhaVLSJhjvDnGJ4PDNsf4ZHDYEhISEhISEhISEhISEhISEhISroDkThbXiISEhISEhISEhERUWLqEhDnGm2N8Mjhsc4xPBoctISEhISEhISEhISEhISEhISHhCkjuZHGNSEhISEhISEhISESFpUtImGO8OcYng8M2x/hkcNgSEhISEhISEhISEhISEhISEhKugOROFteIhISEhISEhISERFRYuoSEOcabY3wyOGxzjE8Ghy0hISEhISEhISEhISEhISEhIeEKSO5kcY1ISEhISEhISEhIRIWlS0iYY7w5xieDwzbH+GRw2BISEhISEhISEhISEhISEhISEq6A5E4W14iEhISEhISEhIREVFi6hIQ5xptjfDI4bHOMTwaHLSEhISEhISEhISEhISEhISEh4QpI7mRxjUhISEhISEhISEhEhaVLSJhjvDnGJ4PDNsf4ZHDYEhISEhISEhISEhISEhISEhISroDkThbXiISEhISEhISEhERUWLqEhDnGm2N8Mjhsc4xPBoctISEhISEhISEhISEhISEhISHhCkjuZHGNSEhISEhISEhISESFpUtImGO8OcYng8M2x/hkcNgSEhISEhISEhISEhISEhISEhKugOROFteIhISEhISEhISERFRYuoSEOcabY3wyOGxzjE8Ghy0hISEhISEhISEhISEhISEhIeEKSO5kcY1ISEhISEhISEhIRIWlS0iYY7w5xieDwzbH+GRw2BISEhISEhISEhISEhISEhISEq6A5E4W14iEhISEhISEhIREVFi6hIQ5xptjfDI4bHOMTwaHLSEhISEhISEhISEhISEhISEh4QpI7mRxjUhISEhISEhISEhEhaVLSJhjvDnG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"
                    style="-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;" />
                <div class="guilListT leftPhoneT">
                    <div class="icon_btmMobile"></div>
                    Bản điện thoại
                </div>
                <span>Tận hưởng mọi lúc đặt cược kịp thời</span>
            </div> --}}
        </div>
    </div>
    <div class="footer">
        <div class="brandImg"></div>
    </div>

    <div class="swal2-container swal2-center swal2-shown" id="thongBao" style="overflow-y: auto; display: none;">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content"
            class="swal2-popup swal2-modal swal2-noanimation" tabindex="-1" style="display: flex; top:25%">
            <div class="swal2-header">
                <h2 class="swal2-title">Tin nhắn</h2>
            </div>
            <div class="swal2-content">
                <div id="noiDungThongBao" style="display: block;text-align: center">？</div>
            </div>
            <div class="swal2-actions" style="display: flex;">
                <button type="button" onclick="closeThongBao()" class="swal2-cancel swal2-styled"
                    style="display: inline-block;"><span class="fancybox-cancel-button">Đóng</span></button>
            </div>
        </div>
    </div>

    <div class="swal2-container swal2-center swal2-shown" id="hienThiCapCha"
        style="overflow-y: auto; display: none;">

        <div class="swal2-popup swal2-modal swal2-noanimation" style="display: flex;width: 345px;top:33%">
            <div class="mask_join mask_new " id="loginSet" style="display: block;">
                <div class="popup_container">
                    <div class="popup_bg">
                        <div class="popup" style="width: auto !important">
                            <div class="popup_In">
                                <div class="popupCenter" style="height: 275px">
                                    <div class="slidercaptcha card">
                                        <div class="card-header">
                                            <span>Kéo hình ảnh đến vị trí chính xác</span>
                                        </div>
                                        <div class="card-body" style="padding: 0">
                                            <div id="captcha"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div ng-controller="CustomerServCtrl as ctrl">
        <div class="customerServ">
            <ul ng-cloak>
                {{-- <li onclick="window.open('support.html', '_self')" class="Sevli">
                    <div class="icon_rLiveService"></div>
                    <span>Hỗ Trợ</span>
                </li> --}}
                <li class="Sevli" onclick="window.open('https://t.me/CSKU711', '_blank')">
                    <div class="icon_rTG"></div>
                    <span>Telegram</span>
                    <div class="customerServDiv" style=" opacity: 1;">
                        <div class="servDivT">
                            Telegram
                            <div class="rightCsArrow"></div>
                        </div>
                        <div class="qrImg">
                            <img alt="Telegram QRcode" src="images/hoTroTele.jpg">
                            <span>ID:@CSKU711</span>
                        </div>
                    </div>
                </li>
                <li class="Sevli">
                    <div class="icon_rViber"></div>
                    <span>Viber</span>
                    <div class="customerServDiv" style="opacity: 1;">
                        <div class="servDivT">
                            Viber
                            <div class="rightCsArrow"></div>
                        </div>
                        <div class="qrImg">
                            <img alt="Viber QRcode" src="images/hoTroViber.jpg">
                            <span>ID:+6396**88</span>
                        </div>
                    </div>
                </li>
                <li class="Sevli fancybox">
                    <div class="icon_rCallBack"></div>
                    <span>Điện thoại</span>
                    <div class="rBtmLine"></div>
                    <div class="txt_maintain">
                        <p class="icon_arrowR"></p>
                    </div>
                </li>
                <li class="Sevli off fancybox" ng-if="false">
                    <div class="icon_rCallBack"></div>
                    <span>Điện thoại</span>
                </li>
                <li class="Sevli">
                    <div class="icon_rComputerHelp"></div>
                    <span style="text-align:center">Hỗ trợ xa</span>
                </li>
                <li class="Sevli">
                    <div class="icon_rComplaint"></div>
                    <span>Khiếu nại</span>
                </li>
            </ul>
        </div>
        <style>
            .fancybox-wrap {
                -ms-transform: none;
            }

            .checkHint,
            .checkHint2 {
                width: 308px;
            }

            .errorHint i {
                font-style: normal;
            }

            .errorHint i.font-color-black {
                color: #000 !important;
            }

            .sliderContainer .sliderText {
                padding-left: 20px;
            }

            .selectAC {
                color: #000;
                width: auto;
                left: 105px
            }

            .selectAC_red {
                color: red;
            }

            #RegisterCaptchaCode.fill-f3[type=text][disabled="disabled"] {
                background-color: #f3f3f3 !important;
            }
        </style>

        <div class="fancybox-overlay fancybox-overlay-fixed" id="formDangKy"
            style="width: auto; height: auto; display: none;">
            <div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1"
                style="width: 430px; height: auto; position: absolute; top: 5%; left: calc(50% - 215px); opacity: 1; overflow: visible; display: block;">
                <div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;">
                    <div class="fancybox-outer">
                        <div class="fancybox-inner" style="overflow: auto; width: 400px; height: auto;">
                            <div class="popUp ng-scope block-ui block-ui-anim-fade" id="MemberJoin"
                                style="display: block;">
                                <div class="popUp_title" style="text-align:center">ĐĂNG KÝ HỘI VIÊN</div>
                                <div class="popUp_in">
                                    <div class="popUp_prompt" id="joinStep01">
                                        <form method="post" autocomplete="off" name="RegisterService"
                                            id="RegisterService"
                                            class="ng-pristine ng-valid-maxlength ng-invalid ng-invalid-required">
                                            <ul class="popList popList_register">
                                                <li class="ng-scope">
                                                    <span class="popList_T">Tài khoản<br>đại lý</span>
                                                    <div class="ng-scope">
                                                        <input type="text" id="daiLy" name="AgentID"
                                                            maxlength="10"
                                                            placeholder="Bỏ qua nếu không có đại lý giới thiệu"
                                                            class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty ng-valid-maxlength">
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="popList_T">Tài khoản</span>
                                                    <div>
                                                        <input type="text" id="taiKhoan" name="AccountID"
                                                            maxlength="10" placeholder="4 ~ 10 ký tự chữ và số"
                                                            class="ng-pristine ng-valid ng-isolate-scope ng-empty ng-valid-maxlength ng-touched">
                                                        <div class="selectAC" style="left:105px"
                                                            id="dvRecommendAccounts"></div>
                                                        <div
                                                            style="position:absolute;z-index:5;right:0px;margin-right: 10px;width:16px">
                                                            <a class="memberACHint_OK ng-hide"></a>
                                                            <a class="memberACHint_NG ng-hide"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="popList_T">Biệt danh</span>
                                                    <div>
                                                        <input type="text" id="bietDanh" name="NickName"
                                                            placeholder="Nhập tối đa 8 ký tự"
                                                            class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty ng-valid-maxlength">
                                                        <span style="display: none" class="errorHint">Tài khoản là tổ
                                                            hợp 4 ~ 10 ký tự chữ và số</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="popList_T">Mật khẩu</span>
                                                    <div id="RegisterPWD">
                                                        <input type="text" id="matKhau" name="PWD"
                                                            placeholder="6 ~ 10 ký tự chữ và số"
                                                            class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty">
                                                        <div class="btn_bankEye"><a class="icon_bankEye"></a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="popList_line"></div>
                                            <ul class="popList popList_register">
                                                <li>
                                                    <span class="popList_T">SĐT</span>
                                                    <div>
                                                        <div class="popList_verify">
                                                            <div class="popList_verL">
                                                                <input id="CellPhone" name="txtRegCellPhone"
                                                                    oninput="nhapSoDienThoai()"
                                                                    class="popList_verW100 ng-pristine ng-untouched ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-maxlength"
                                                                    maxlength="10" type="text"
                                                                    placeholder="10 chữ số">
                                                            </div>
                                                            <div class="popList_verR">
                                                                <input onclick="showCapCha()" type="button"
                                                                    id="sendCaptchaButton"
                                                                    class="ng-scope verCode_Msg" value="Gửi mã">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="">
                                                    <span class="popList_T">Mã xác nhận</span>
                                                    <div>
                                                        <div class="popList_verify">
                                                            <div class="popList_verL">
                                                                <input oninput="nhapMaXacNhan()" type="text"
                                                                    id="maOTP" name="maOTP"
                                                                    placeholder="4 Chữ số" autocomplete="off"
                                                                    class="ng-pristine ng-valid ng-scope ng-isolate-scope ng-empty ng-valid-maxlength popList_verW100 ng-touched">
                                                                <span style="display: none" id="loiNhapOTP"
                                                                    class="errorHint">Vui lòng nhập 4 con số</span>
                                                            </div>
                                                            <div class="popList_verR ng-scope">
                                                                <input disabled type="button"
                                                                    class="verCode_Msg ng-scope" value="Gửi">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="popList_line"></div>
                                            <ul class="popList popList_register">
                                                <li>
                                                    <div class="checkBoxIn on"></div>
                                                    <div class="checkHint">Nhận thông tin khuyến mãi qua tin nhắn điện
                                                        thoại
                                                    </div>
                                                </li>
                                                <li>
                                                    <div id="AgreementOfRule" class="checkBoxIn on">
                                                        <input type="hidden" name="agreementofrule"
                                                            autocomplete="off" value="checkBoxIn on">
                                                    </div>
                                                    <div class="checkHint2">
                                                        Tôi đã 18 tuổi, đồng thời đã đọc và đồng ý quy tắc cá cược
                                                        <a class="servPage">Điều khoản</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <input id="buttonXacNhanDangKy" type="button" class="sentOut"
                                                onclick="sendRequestRegister()" value="Xác nhận"
                                                disabled="disabled">
                                        </form>
                                    </div>
                                </div>
                                <div block-ui-container="" class="block-ui-container ng-scope">
                                    <div class="block-ui-overlay"></div>
                                    <div class="block-ui-message-container" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="block-ui-message" ng-class="$_blockUiMessageClass">
                                            <div class="mask_Loading_custom fancybox-margin"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a title="Close" class="fancybox-item fancybox-close" onclick="closeModal()"></a>
                </div>
            </div>
        </div>

        <div class="fancybox-overlay fancybox-overlay-fixed" id="formDangNhap"
            style="width: auto; height: auto; display: none;">
            <div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1"
                style="width: 430px; height: auto; position: absolute; top: 25%; left: calc(50% - 215px); opacity: 1; overflow: visible; display: block;">
                <div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;">
                    <div class="fancybox-outer">
                        <div class="fancybox-inner" style="overflow: auto; width: 400px; height: auto;">
                            <div class="popUp" id="login" style="display: block;">
                                <div class="popUp_title" style="text-align:center">Đăng nhập hội viên</div>
                                <div class="popUp_in">
                                    <div class="popUp_prompt">
                                        <form autocomplete="off" method="post" action="{{ route('login') }}"
                                            id="loginForm"
                                            class="ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength">
                                            @csrf
                                            <ul class="popList">
                                                <li>
                                                    <span>Tài khoản {{ auth()->check() ? 'true' : 'false' }}</span>
                                                    <div>
                                                        <input id="taiKhoanDn" name="username" autocomplete="off"
                                                            type="text" placeholder="Tài khoản / SĐT"
                                                            maxlength="10" required=""
                                                            class="ng-pristine ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-maxlength ng-touched">
                                                    </div>
                                                </li>
                                                <li>
                                                    <span>Mật khẩu</span>
                                                    <div>
                                                        <input name="password" id="matKhauDn" type="password"
                                                            autocomplete="off" placeholder="6 ~ 10 ký tự chữ và số"
                                                            maxlength="10" required=""
                                                            class="ng-pristine ng-untouched ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-maxlength">
                                                        <div class="btn_bankEye"><a class="icon_bankEye off"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <input type="submit" id="signin" class="sentOut"
                                                value="Đăng nhập">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a title="Close" class="fancybox-item fancybox-close" onclick="closeModal()"></a>
                </div>
            </div>
        </div>

        <div class="fancybox-overlay fancybox-overlay-fixed" style="display:none;" id="formNhapThongTinNganHang"
            style="width: auto; height: auto; display: block;">
            <div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1"
                style="width: 430px; height: auto; position: absolute; top: 10vh; left: 37%; opacity: 1; overflow: visible; display: block;">
                <div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;">
                    <div class="fancybox-outer">
                        <div class="fancybox-inner" style="overflow: auto; width: 400px; height: auto;">
                            <div class="popUp ng-scope block-ui block-ui-anim-fade" id="joinList"
                                block-ui="joinList" aria-busy="false" style="display: block;">
                                <div id="bankCard" class="ng-scope" style="">
                                    <div class="popUp_title">Xác nhận tài khoản ngân hàng</div>
                                    <div class="popUp_in">
                                        <div class="popUp_prompt" id="bankCard_step01">
                                            <form method="post" id="bankInfoNextStep" name="bankInfoNextStep"
                                                class="ng-pristine ng-invalid ng-invalid-required"
                                                novalidate="novalidate">
                                                <ul class="popList popList_register">
                                                    <li>
                                                        <span class="popList_T">Họ tên thật</span>
                                                        <div class="off">
                                                            <input type="text" id="tenTaiKhoan"
                                                                oninput="nhapThongTinNganHang()"
                                                                name="AccountNameOfBank"
                                                                placeholder="VD: NGUYEN VAN NAM">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="popList_T">Số tài khoản</span>
                                                        <div>
                                                            <input type="text" id="soTaiKhoan"
                                                                name="BankAccount" oninput="nhapThongTinNganHang()"
                                                                class="btn_prompt ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"
                                                                placeholder="Hãy nhập số tài khoản ngân hàng">
                                                        </div>
                                                    </li>
                                                    <li style="margin-bottom:15px">
                                                        <div class="popList_noT">
                                                            <select class="bankName" id="nganHang"
                                                                onchange="nhapThongTinNganHang()">
                                                                <option value="" selected="selected">Xin chọn
                                                                    ngân hàng
                                                                </option>
                                                                <!-- ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="ABBank" class="ng-binding ng-scope"
                                                                    style="">
                                                                    ABBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="ACB" class="ng-binding ng-scope">
                                                                    ACB
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="agribank"
                                                                    class="ng-binding ng-scope">
                                                                    Agribank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="bacabank"
                                                                    class="ng-binding ng-scope">
                                                                    Bac A Bank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="BaoViet Bank"
                                                                    class="ng-binding ng-scope">
                                                                    BaoVietBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="BIDV" class="ng-binding ng-scope">
                                                                    BIDV
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="DongABank"
                                                                    class="ng-binding ng-scope">
                                                                    Dong A bank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="EXIMBANK"
                                                                    class="ng-binding ng-scope">
                                                                    Eximbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="GP Bank" class="ng-binding ng-scope">
                                                                    GPBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="hdbank" class="ng-binding ng-scope">
                                                                    Hdbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="HSBC" class="ng-binding ng-scope">
                                                                    HSBC
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="IVB" class="ng-binding ng-scope">
                                                                    Indovina
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="KienLong Bank"
                                                                    class="ng-binding ng-scope">
                                                                    KienLongBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="LienVietPost Bank"
                                                                    class="ng-binding ng-scope">
                                                                    LienVietPostBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="MariTime Bank"
                                                                    class="ng-binding ng-scope">
                                                                    Maritime
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="MB Bank" class="ng-binding ng-scope">
                                                                    Mbbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="NAM A Bank"
                                                                    class="ng-binding ng-scope">
                                                                    Nam A bank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="NCB" class="ng-binding ng-scope">
                                                                    NCB
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="OCB" class="ng-binding ng-scope">
                                                                    OCB Phuong Dong
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="OCENBANK"
                                                                    class="ng-binding ng-scope">
                                                                    Oceanbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="PG Bank" class="ng-binding ng-scope">
                                                                    Pgbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="PVcomBank"
                                                                    class="ng-binding ng-scope">
                                                                    PVCombank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="Sacombank"
                                                                    class="ng-binding ng-scope">
                                                                    Sacombank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="SAIGONBank"
                                                                    class="ng-binding ng-scope">
                                                                    SaiGonBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="SeABank" class="ng-binding ng-scope">
                                                                    Seabank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="SHB" class="ng-binding ng-scope">
                                                                    SHB
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="SHINHAN BANK"
                                                                    class="ng-binding ng-scope">
                                                                    ShinHanBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="Techcombank"
                                                                    class="ng-binding ng-scope">
                                                                    Techcombank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="TPBank" class="ng-binding ng-scope">
                                                                    Tien Phong Bank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="SCB" class="ng-binding ng-scope">
                                                                    TMCP SAIGON
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="VIB" class="ng-binding ng-scope">
                                                                    VIBbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="VIB" class="ng-binding ng-scope">
                                                                    VietA Bank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="VietBank"
                                                                    class="ng-binding ng-scope">
                                                                    Vietbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="Vietcombank"
                                                                    class="ng-binding ng-scope">
                                                                    Vietcombank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="VietinBank"
                                                                    class="ng-binding ng-scope">
                                                                    Vietinbank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                                <option value="VPBank" class="ng-binding ng-scope">
                                                                    VPBank
                                                                </option>
                                                                <!-- end ngRepeat: Bank in ctrl.model.DropdownBankInfoList -->
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <span style="color:red">Chỉ chấp nhận TK ngân hàng đúng họ tên
                                                        đăng ký</span>
                                                </ul>
                                                <div class="popList_line" style="margin-top:10px"></div>
                                                <ul class="popList popList_register">
                                                    <li>
                                                        <span class="popList_T">Mật khẩu bảo mật</span>
                                                        <div>
                                                            <input type="password" autocomplete="off"
                                                                disableautocomplete="" id="matKhauBaoMat"
                                                                name="WithdrawalPWDOfBank"
                                                                oninput="nhapThongTinNganHang()" ng-trim="false"
                                                                placeholder="6 ~ 10 ký tự chữ và số">
                                                            <div class="btn_bankEye"><a
                                                                    class="icon_bankEye off"></a></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkBox on">
                                                        </div>
                                                        <div class="joinCheckHint">
                                                            <div>Sử dụng mật khẩu bảo mật</div>
                                                            <span>Khi rút tiền có sử dụng mật khẩu bảo mật hay
                                                                không</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="popList_line"></div>
                                                <input type="button" onclick="xacNhanThongTinNganHang()"
                                                    id="buttonXacNhanThongTinNganHang" class="sentOut"
                                                    value="Xác nhận" disabled="disabled">
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- end ngIf: ctrl.model.RegisterStep == ctrl.REGISTER_STEP.BANK_CARD -->
                                <div block-ui-container="" class="block-ui-container ng-scope">
                                    <div class="block-ui-overlay"></div>
                                    <div class="block-ui-message-container" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="block-ui-message" ng-class="$_blockUiMessageClass">
                                            <div class="mask_Loading_custom fancybox-margin"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a title="Close" class="fancybox-item fancybox-close" onclick="closeModal()"
                        href="javascript:;"></a>
                </div>
            </div>
        </div>
        <script src="disk/longbow.slidercaptcha.min.js"></script>


        <script src="bundles/indexb8c1.js?v=hrHHJVuY38cTD-xYK9RcbIplG3pdIfM9jhLg37V0FBw1"></script>

    </div>
    <script>
        $(document).ready(function() {
            console.log("ready!");
            var isMobile = false;
            if (navigator.userAgent.match(/Android/i) ||
                navigator.userAgent.match(/webOS/i) ||
                navigator.userAgent.match(/iPhone/i) ||
                navigator.userAgent.match(/iPad/i) ||
                navigator.userAgent.match(/iPod/i) ||
                navigator.userAgent.match(/BlackBerry/i) ||
                navigator.userAgent.match(/Windows Phone/i)) {
                isMobile = true;
            } else {
                isMobile = false;
            }
            console.log('check mobile:' + isMobile)
            if (isMobile) {
                window.open('/mobile', '_self')
            }
        });
        // subListDiv
        var list_game = document.getElementsByClassName("subListDiv");
        var list_game_2 = document.getElementsByClassName("gameTypeList");
        if (list_game && list_game.length) {

            for (var i = 0; i < list_game.length; i++) {
                list_game[i].addEventListener('click', () => {
                    console.log('về sảnh')
                    window.open('https://ku11.net/', '_self')
                }, false);
            }
        }
        if (list_game_2 && list_game_2.length) {

            for (var i = 0; i < list_game_2.length; i++) {
                list_game_2[i].addEventListener('click', () => {
                    console.log('về sảnh')
                    window.open('https://ku11.net/', '_self')
                }, false);
            }
        }

        var captcha = sliderCaptcha({
            id: 'captcha',
            repeatIcon: 'fa fa-redo',
            onSuccess: function() {
                console.log('onSuccess')

                axios.post('/user-send-otp', {
                        phone: $('#CellPhone').val() ? $('#CellPhone').val() : ''
                    })
                    .then(function(response) {
                        console.log('Đã gửi')
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                var handler = setTimeout(function() {
                    window.clearTimeout(handler);
                    captcha.reset();
                    let checkCapchaElement = $('#hienThiCapCha');
                    if (checkCapchaElement && checkCapchaElement.length) {
                        checkCapchaElement[0].style.display = 'none'
                    }
                    $('#buttonXacNhanDangKy').prop("disabled", false)
                }, 500);
            }
        });

        function closeModal() {
            $('#formNhapThongTinNganHang')[0].style.display = 'none';
            $('#formDangNhap')[0].style.display = 'none';
            $('#formDangKy')[0].style.display = 'none';
        }

        function xacNhanThongTinNganHang() {
            console.log('xacNhanThongTinNganHang')
            let params = {
                chu_the_ngan_hang: $('#tenTaiKhoan').val(),
                so_tai_khoan: $('#soTaiKhoan').val(),
                ngan_hang: $('#nganHang').val(),
                mat_khau_rut_tien: $('#matKhauBaoMat').val(),
            }
            axios.post('/save-bank-info', params)
                .then(function(response) {
                    console.log(response);
                    if (response.data.rc == 0) {
                        window.open('index.html', '_blank', 'width=950,height=700')
                        $('#formNhapThongTinNganHang')[0].style.display = 'none';
                    } else {
                        $('#thongBao')[0].style.display = 'block';
                        $('#noiDungThongBao')[0].innerHTML = response.data.rd;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function showFormNhapThongTinNganHang() {
            console.log('showFormNhapThongTinNganHang')
            $('#formNhapThongTinNganHang')[0].style.display = 'block';
        }

        function nhapThongTinNganHang() {
            console.log('nhapThongTinNganHang')
            var tenTk = $('#tenTaiKhoan').val();
            var soTk = $('#soTaiKhoan').val();
            var nganHang = $('#nganHang').val();
            var matKhau = $('#matKhauBaoMat').val();
            console.log(tenTk)
            console.log(soTk)
            console.log(nganHang)
            console.log(matKhau)
            if (tenTk && soTk && nganHang && matKhau) {
                console.log('Đủ cả')
                $('#buttonXacNhanThongTinNganHang').removeAttr("disabled");
            } else {
                console.log('Thiếu')
                $('#buttonXacNhanThongTinNganHang').attr("disabled", "disabled");

            }
        }

        function nhapMaXacNhan() {
            console.log('Nhập mã xác nhận')
            var otp = $('#maOTP').val();
            if (otp.length > 4) {
                otp = otp.substring(0, 4);
            }
            if (otp.length < 4) {
                $('#loiNhapOTP')[0].style.display = 'block'
            } else {
                $('#loiNhapOTP')[0].style.display = 'none'
            }
            $('#maOTP').val(otp);
        }

        function showCapCha() {
            console.log('Hiển thị capcha')
            let checkCapchaElement = $('#hienThiCapCha');
            if (checkCapchaElement && checkCapchaElement.length) {
                checkCapchaElement[0].style.display = 'block'
            }
        }

        function showLogin(stt) {
            console.log('showLogin')
            let checkCapchaElement = $('#formDangNhap');
            if (checkCapchaElement && checkCapchaElement.length) {
                if (stt) {
                    checkCapchaElement[0].style.display = 'block'
                } else {
                    checkCapchaElement[0].style.display = 'none'
                }
            }
        }

        function showRegister(stt) {
            console.log('Hiển thị form đăng  ký')
            let checkCapchaElement = $('#formDangKy');
            if (checkCapchaElement && checkCapchaElement.length) {
                if (stt) {
                    checkCapchaElement[0].style.display = 'block'
                } else {
                    checkCapchaElement[0].style.display = 'none'
                }
            }
        }

        function closeThongBao() {
            $('#thongBao')[0].style.display = 'none';
        }

        $('#loginForm').submit(function(e) {
            e.preventDefault();
            sendRequestLogin();
        });

        function sendRequestLogin() {
            let params = {
                username: $('#taiKhoanDn').val(),
                password: $('#matKhauDn').val(),
                csrf_token: $('input[name="_token"]').val()
            }
            $("#signin").attr("disabled", true);
            axios.post("{{ route('login') }}", params)
                .then(function(response) {
                    console.log(response.data);
                    // console.log(response);
                    if (response.data.data) {
                        window.location.href = "{{ route('home') }}";
                    } else {
                        $('#thongBao')[0].style.display = 'block';
                        $('#noiDungThongBao')[0].innerHTML = response.data.rd;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function sendRequestRegister() {
            let dl = $('#daiLy').val();
            let checkDL = window.location.hostname;
            if (checkDL == 'ku11.eu') {
                daiLy = 'LISA'
            }
            if (checkDL == 'kubet712.com') {
                dl = 'KUBET712'
            }
            if (checkDL == 'kubet1102.com') {
                dl = 'KUBET1102'
            }
            if (checkDL == 'ku1162.net') {
                dl = 'KU1162'
            }
            let params = {
                daiLy: dl,
                taiKhoan: $('#taiKhoan').val(),
                matKhau: $('#matKhau').val(),
                bietDanh: $('#bietDanh').val(),
                soDienThoai: $('#CellPhone').val(),
            }
            $("#buttonXacNhanDangKy").attr("disabled", true);
            console.log('Thông tin đăng ký:')
            console.log(params)
            axios.post('/sign-up', params)
                .then(function(response) {
                    console.log(response);
                    if (response.data.rc == 0) {
                        window.open('index5f88.html?show=true', '_self')
                    } else {
                        $('#thongBao')[0].style.display = 'block';
                        $('#noiDungThongBao')[0].innerHTML = response.data.rd;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function checkOTP() {
            console.log('checkOTP')
            let params = {
                otp: $('#maOTP').val(),
            }
            axios.post('/check-otp', params)
                .then(function(response) {
                    console.log(response.data.rc);
                    if (response.data.rc == 0) {
                        console.log('Case 1')
                        $('#buttonXacNhanDangKy').removeAttr("disabled");
                    } else {
                        console.log('case 2')
                        $('#buttonXacNhanDangKy').attr("disabled", "disabled");
                    }
                })
                .catch(function(error) {
                    console.log(error);
                })
        }

        $('#taiKhoanDn').on('input', function() {
            let nickName = $('#taiKhoanDn').val()
            nickName = nickName.replace(/\s/g, '');
            nickName = toSlug(nickName)
            nickName = nickName.toUpperCase();
            $('#taiKhoanDn').val(nickName)
        })

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

        function sendOTP() {
            console.log('sendOTP')
            let phone = $('#CellPhone').val();
            let phoneSend = '+84' + parseInt(phone);
            let params = {
                phone: phoneSend,
            }
            axios.post('/send-otp', params)
                .then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                })
        }
    </script>
</body>

</html>
