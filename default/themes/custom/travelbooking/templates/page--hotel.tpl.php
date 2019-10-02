<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Hotel Form</title>

    <!-------------Common files for all---------->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0//sites/default/themes/custom/travelbooking/css/hotel/font-awesome.min.css" rel="Stylesheet" type="text/css" />
    <!-------------Common files End-------------->
    <link href="/sites/default/themes/custom/travelbooking/css/hotel/HotelStyle.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="/sites/default/themes/custom/travelbooking/css/hotel/JQuery_UI.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/sites/default/themes/custom/travelbooking/js/hotel/HotelJs.js"></script>

</head>
<body>
    <div id="Logo" style="display: none;">
        <span class="fleft mainlogo">
            <img alt="" src="/sites/default/themes/custom/travelbooking/images/hotel/logo.png" />
        </span>
    </div>
    <div id="load-img" style="display: none;">
        <div>
            <img src="/sites/default/themes/custom/travelbooking/images/hotel/loader.gif" alt="Loader" />
        </div>
    </div>

    <form id="HotelForm" action="" method="post">
        <div class="wgtfrmbox">

            <div id="Hotels">
                <div id="errMessHotel" class="error_msg" style="display:none;"></div>
                <div>
                    <input type="hidden" name="destinationCity" id="destinationCity" />
                    <input type="hidden" name="destCitySelected" id="destCitySelected" value="false" />
                    <input type="hidden" name="isDomesticHotel" id="isDomesticHotel" value="true" />
                </div>
                <div id="selectDiv_Hotel" class="wgtfrmrow wgthtlistbox">
                    <label>Choose Destination</label>
                    <input class="wgthtlcity" tabindex="1" id="city" name="city" type="text" value="Type Or Select From List" onblur="markout(this, 'Type Or Select From List')" onfocus="markin(this, 'Type Or Select From List')" />
                    <a href="#null" id="SelectListInternational">Select from List</a>
                </div>
            <div class="wgtfrmrow">
                <span class="wgthtldate">
                    <label>Check in</label>
                    <input class="wgtcal" tabindex="1" type="text" id="checkInDate" name="checkInDate" value="DD/MM/YYYY" readonly="readonly" />
                </span>
                <span class="wgthtldate">
                    <label>Check out</label>
                    <input class="wgtcal" tabindex="1" type="text" id="checkOutDate" name="checkOutDate" value="DD/MM/YYYY" readonly="readonly" />
                </span>
                <span class="wgthtlngt">
                    <label>Nights</label>
                    <input type="text" tabindex="1" id="night_stay" value="0" name="night_stay" />
                </span>
            </div>
                <div class="wgtfrmrow">
                    <div class="wgtfrmleft">
                        <label>No. of Rooms</label>
                        <select tabindex="1" class="room_select" name="NoOfRooms" id="NoOfRooms">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <input type="hidden" value="1" id="PrevNoOfRooms" name="PrevNoOfRooms" />
                    </div>
                    <div class="wgtfrmright">
                        <label> Nationality</label>
                        <select tabindex="1" name="Nationality" id="Nationality" class="width_99">

                            <option value="Select"> Select</option>
                            <option value="IN" selected="selected"> Indian</option>
                            <option value="AF"> Afghan</option>

                            <option value="AL"> Albanian</option>

                            <option value="DZ"> Algerian</option>

                            <option value="AS"> American Samoan</option>

                            <option value="US"> American; US citizen</option>

                            <option value="AD"> Andorran</option>

                            <option value="AO"> Angolan</option>

                            <option value="AI"> Anguillan</option>

                            <option value="AQ"> Antarctica</option>

                            <option value="AG"> Antiguan; Barbudian</option>

                            <option value="AN"> Antillean</option>

                            <option value="AR"> Argentinian</option>

                            <option value="AM"> Armenian</option>

                            <option value="AW"> Aruban</option>

                            <option value="AU"> Australian</option>

                            <option value="AT"> Austrian</option>

                            <option value="AZ"> Azerbaijani</option>

                            <option value="BS"> Bahamian</option>

                            <option value="BH"> Bahraini</option>

                            <option value="BD"> Bangladeshi</option>

                            <option value="BB"> Barbadian</option>

                            <option value="LS"> Basotho</option>

                            <option value="BY"> Belarusian</option>

                            <option value="BE"> Belgian</option>

                            <option value="BZ"> Belizean</option>

                            <option value="BJ"> Beninese</option>

                            <option value="BM"> Bermudian</option>

                            <option value="BT"> Bhutanese</option>

                            <option value="BO"> Bolivian</option>

                            <option value="BW"> Botswanan</option>

                            <option value="BV"> Bouvet Islands</option>

                            <option value="BR"> Brazilian</option>

                            <option value="IO"> British Indian Ocean Territory</option>

                            <option value="VG"> British Virgin Islander; BV Islander</option>

                            <option value="BN"> Bruneian</option>

                            <option value="BG"> Bulgarian</option>

                            <option value="BF"> Burkinabe</option>

                            <option value="MM"> Burmese</option>

                            <option value="BI"> Burundian</option>

                            <option value="KH"> Cambodian</option>

                            <option value="CM"> Cameroonian</option>

                            <option value="CB"> Canada Buffer</option>

                            <option value="CA"> Canadian</option>

                            <option value="CV"> Cape Verdean</option>

                            <option value="KY"> Caymanian</option>

                            <option value="CF"> Central African</option>

                            <option value="TD"> Chadian</option>

                            <option value="CL"> Chilean</option>

                            <option value="CN"> Chinese</option>

                            <option value="CX"> Christmas Islander</option>

                            <option value="CC"> Cocos Islander</option>

                            <option value="CO"> Colombian</option>

                            <option value="KM"> Comorian</option>

                            <option value="CD"> congo</option>

                            <option value="CG"> Congolese</option>

                            <option value="CK"> Cook Islander</option>

                            <option value="CR"> Costa Rican</option>

                            <option value="HR"> Croat</option>

                            <option value="CU"> Cuban</option>

                            <option value="CY"> Cypriot</option>

                            <option value="CZ"> Czech</option>

                            <option value="DK"> Dane</option>

                            <option value="DJ"> Djiboutian</option>

                            <option value="DO"> Dominican</option>

                            <option value="DM"> Dominicana</option>

                            <option value="NL"> Dutchman; Dutchwoman; Netherlander</option>

                            <option value="TP"> East Timor</option>

                            <option value="EC"> Ecuadorian</option>

                            <option value="EG"> Egyptian</option>

                            <option value="AE"> Emirati</option>

                            <option value="GQ"> Equatorial Guinean</option>

                            <option value="ER"> Eritrean</option>

                            <option value="EE"> Estonian</option>

                            <option value="ET"> Ethiopian</option>

                            <option value="EU"> European Monetary Union</option>

                            <option value="FO"> Faeroese</option>

                            <option value="FK"> Falkland Islander</option>

                            <option value="FJ"> Fiji Islander</option>

                            <option value="PH"> Filipino</option>

                            <option value="FI"> Finn</option>

                            <option value="TF"> French Southern Territories</option>

                            <option value="FR"> Frenchman; Frenchwoman</option>

                            <option value="GA"> Gabonese</option>

                            <option value="GM"> Gambian</option>

                            <option value="GE"> Georgian</option>

                            <option value="DE"> German</option>

                            <option value="GH"> Ghanaian</option>

                            <option value="GI"> Gibraltarian</option>

                            <option value="GR"> Greece</option>

                            <option value="GL"> Greenlander</option>

                            <option value="GD"> Grenadian</option>

                            <option value="GP"> Guadeloupean</option>

                            <option value="GU"> Guamanian</option>

                            <option value="GT"> Guatemalan</option>

                            <option value="GF"> Guianese</option>

                            <option value="GW"> Guinea-Bissau national</option>

                            <option value="GN"> Guinean</option>

                            <option value="GY"> Guyanese</option>

                            <option value="HT"> Haitian</option>

                            <option value="HM"> Heard &amp; Mcdonald Islands</option>

                            <option value="HN"> Honduran</option>

                            <option value="HK"> Hong Kong Chinese</option>

                            <option value="HU"> Hungarian</option>

                            <option value="IS"> Icelander</option>

                            <option value="ID"> Indonesian</option>

                            <option value="IR"> Iranian</option>

                            <option value="IQ"> Iraqi</option>

                            <option value="IE"> Irishman; Irishwoman</option>

                            <option value="IL"> Israeli</option>

                            <option value="IT"> Italian</option>

                            <option value="CI"> Ivorian</option>

                            <option value="JM"> Jamaican</option>

                            <option value="JP"> Japanese</option>

                            <option value="JO"> Jordanian</option>

                            <option value="KZ"> Kazakh</option>

                            <option value="KE"> Kenyan</option>

                            <option value="KI"> Kiribatian</option>

                            <option value="KN"> Kittsian; Nevisian</option>

                            <option value="KW"> Kuwaiti</option>

                            <option value="KG"> Kyrgyz</option>

                            <option value="LA"> Lao</option>

                            <option value="LV"> Latvian</option>

                            <option value="LB"> Lebanese</option>

                            <option value="LR"> Liberian</option>

                            <option value="LY"> Libyan</option>

                            <option value="LI"> Liechtensteiner</option>

                            <option value="QL"> Lithuania (Dummy Code)</option>

                            <option value="LT"> Lithuanian</option>

                            <option value="LU"> Luxembourger</option>

                            <option value="MO"> Macanese</option>

                            <option value="MK"> Macedonia</option>

                            <option value="YT"> Mahorais</option>

                            <option value="MG"> Malagasy</option>

                            <option value="MW"> Malawian</option>

                            <option value="MY"> Malaysian</option>

                            <option value="MV"> Maldivian</option>

                            <option value="ML"> Malian</option>

                            <option value="MT"> Maltese</option>

                            <option value="MH"> Marshallese</option>

                            <option value="MQ"> Martinican</option>

                            <option value="MR"> Mauritanian</option>

                            <option value="MU"> Mauritian</option>

                            <option value="MX"> Mexican</option>

                            <option value="MB"> Mexico Buffer</option>

                            <option value="FM"> Micronesian</option>

                            <option value="MD"> Moldovan</option>

                            <option value="MC"> Monegasque</option>

                            <option value="MN"> Mongolian</option>

                            <option value="MS"> Montserratian</option>

                            <option value="MA"> Moroccan</option>

                            <option value="MZ"> Mozambican</option>

                            <option value="NA"> Namibian</option>

                            <option value="NR"> Nauruan</option>

                            <option value="NP"> Nepalese</option>

                            <option value="NC"> New Caledonian</option>

                            <option value="NZ"> New Zealander</option>

                            <option value="NI"> Nicaraguan</option>

                            <option value="NG"> Nigerian</option>

                            <option value="NE"> Nigerien</option>

                            <option value="NU"> Niuean</option>

                            <option value="NF"> Norfolk Islander</option>

                            <option value="KP"> North Korean</option>

                            <option value="MP"> Northern Mariana Islander</option>

                            <option value="NO"> Norwegian</option>

                            <option value="BA"> of Bosnia and Herzegovina</option>

                            <option value="VA"> of the Holy See (of the Vatican) </option>

                            <option value="OM"> Omani</option>

                            <option value="PK"> Pakistani</option>

                            <option value="PW"> Palauan</option>

                            <option value="PS"> Palestinian Occ. Territories</option>

                            <option value="PA"> Panamanian</option>

                            <option value="PG"> Papua New Guinean</option>

                            <option value="PY"> Paraguayan</option>

                            <option value="PE"> Peruvian</option>

                            <option value="PL"> Pole</option>

                            <option value="PF"> Polynesian</option>

                            <option value="PT"> Portuguese</option>

                            <option value="PR"> Puerto Rican</option>

                            <option value="QA"> Qatari</option>

                            <option value="RE"> Reunionese</option>

                            <option value="RO"> Romanian</option>

                            <option value="RU"> Russian</option>

                            <option value="RW"> Rwandan; Rwandese</option>

                            <option value="EH"> Sahrawi</option>

                            <option value="SH"> Saint Helenian</option>

                            <option value="LC"> Saint Lucian</option>

                            <option value="SV"> Salvadorian; Salvadoran</option>

                            <option value="WS"> Samoan</option>

                            <option value="SM"> San Marinese</option>

                            <option value="ST"> S�o Tom�an</option>

                            <option value="SA"> Saudi Arabian</option>

                            <option value="SN"> Senegalese</option>

                            <option value="RS"> Serbian</option>

                            <option value="SC"> Seychellois</option>

                            <option value="SL"> Sierra Leonean</option>

                            <option value="SG"> Singaporean</option>

                            <option value="SK"> Slovak</option>

                            <option value="SI"> Slovene</option>

                            <option value="SB"> Solomon Islander</option>

                            <option value="SO"> Somali</option>

                            <option value="ZA"> South African</option>

                            <option value="GS"> South Georgia &amp; South Sandwich</option>

                            <option value="KR"> South Korean</option>

                            <option value="SU"> Soviet Union</option>

                            <option value="ES"> Spaniard</option>

                            <option value="LK"> Sri Lankan</option>

                            <option value="PM"> St-Pierrais; Miquelonnais</option>

                            <option value="SD"> Sudanese</option>

                            <option value="SR"> Surinamer</option>

                            <option value="SJ"> Svalbard &amp; Jan Mayen Islands</option>

                            <option value="SZ"> Swazi</option>

                            <option value="SE"> Swede</option>

                            <option value="CH"> Swiss</option>

                            <option value="SY"> Syrian</option>

                            <option value="TW"> Taiwanese</option>

                            <option value="TJ"> Tajik</option>

                            <option value="TZ"> Tanzanian</option>

                            <option value="TH"> Thai</option>

                            <option value="TG"> Togolese</option>

                            <option value="TK"> Tokelauan</option>

                            <option value="TO"> Tongan</option>

                            <option value="TT"> Trinidadian; Tobagonian</option>

                            <option value="TN"> Tunisian</option>

                            <option value="TR"> Turk</option>

                            <option value="TM"> Turkmen</option>

                            <option value="TC"> Turks and Caicos Islander</option>

                            <option value="TV"> Tuvaluan</option>

                            <option value="UM"> U.S. Minor Outlaying Islands</option>

                            <option value="UG"> Ugandan</option>

                            <option value="UA"> Ukrainian</option>

                            <option value="GB"> United Kingdom</option>

                            <option value="UY"> Uruguayan</option>

                            <option value="VI"> US Virgin Islander</option>

                            <option value="UZ"> Uzbek</option>

                            <option value="VU"> Vanuatuan</option>

                            <option value="VE"> Venezuelan</option>

                            <option value="VN"> Vietnamese</option>

                            <option value="VC"> Vincentian</option>

                            <option value="WF"> Wallisian; Futunan; Wallis and Futuna Islander</option>

                            <option value="YE"> Yemeni</option>

                            <option value="YU"> Yugoslavia</option>

                            <option value="ZM"> Zambian</option>

                            <option value="ZW"> Zimbabwean</option>

                        </select>
                    </div>
                </div>
                <div id="room-1" class="wgtfrmrow">
                    <span class="wgthtlroombox">
                        <b> Room 1</b>
                    </span>
                    <span class="wgthtlpax">
                        <label>Adults(12 + years)</label>
                        <select name="adtRoom-1" id="adtRoom-1" tabindex="1">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <input type="hidden" value="0" id="PrevChildCount-1" name="PrevChildCount-1" />
                    </span>
                    <span class="wgthtlpax">
                        <label>Children(till 12 years)</label>
                        <select name="chdRoom-1" id="chdRoom-1" tabindex="1">
                            <option selected="selected" value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </span>
                </div>
                <div style="display:none;" id="room-2" class="wgtfrmrow">
                    <span class="wgthtlroombox">
                        <b>Room 2</b>
                    </span>
                    <span class="wgthtlpax">
                        <label>Adults(12 + years)</label>
                        <select name="adtRoom-2" id="adtRoom-2" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <input type="hidden" value="0" id="PrevChildCount-2" name="PrevChildCount-2" />
                    </span>
                    <span class="wgthtlpax">
                        <label>Children(till 12 years)</label>
                        <select name="chdRoom-2" id="chdRoom-2" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </span>
                </div>
                <div style="display:none;" id="room-3" class="wgtfrmrow">
                    <span class="wgthtlroombox">
                        <b>Room 3</b>
                    </span>
                    <span class="wgthtlpax">
                        <label>Adults(12 + years)</label>
                        <select name="adtRoom-3" id="adtRoom-3" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <input type="hidden" value="0" id="PrevChildCount-3" name="PrevChildCount-3" />
                    </span>
                    <span class="wgthtlpax">
                        <label>Children(till 12 years)</label>
                        <select name="chdRoom-3" id="chdRoom-3" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </span>
                </div>
                <div style="display:none;" id="room-4" class="wgtfrmrow">
                    <span class="wgthtlroombox">
                        <b>Room 4</b>
                    </span>
                    <span class="wgthtlpax">
                        <label>Adults(12 + years)</label>
                        <select name="adtRoom-4" id="adtRoom-4" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <input type="hidden" value="0" id="PrevChildCount-4" name="PrevChildCount-4" />
                    </span>
                    <span class="wgthtlpax">
                        <label>Children(till 12 years)</label>
                        <select name="chdRoom-4" id="chdRoom-4" class="hl_agecount" tabindex="1">
                            <option selected="selected" value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </span>
                </div>

                <div id="childDetails" style="display: none;">
                    <b>Specify ages of children at time of travel:</b>
                    <div id="ChildBlock-1" class="wgtfrmrow" style="display:none;">
                        <span class="wgthtlchldbox">
                            <b>Room 1</b>
                        </span>
                        <span id="ChildBlock-1-Child-1" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-1-ChildTxt-1" style="display:none;">Child 1</label>
                            <select id="ChildBlock-1-ChildAge-1" name="ChildBlock-1-ChildAge-1" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                        <span id="ChildBlock-1-Child-2" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-1-ChildTxt-2" style="display:none;">Child 2</label>
                            <select id="ChildBlock-1-ChildAge-2" name="ChildBlock-1-ChildAge-2" class="chld_age_count" tabindex="1">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                    </div>
                    <div class="wgtfrmrow" id="ChildBlock-2" style="display:none;">
                        <span class="wgthtlchldbox">
                            <b>Room 2</b>
                        </span>
                        <span id="ChildBlock-2-Child-1" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-2-ChildTxt-1" style="display:none;">Child 1</label>
                            <select id="ChildBlock-2-ChildAge-1" name="ChildBlock-2-ChildAge-1" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                        <span id="ChildBlock-2-Child-2" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-2-ChildTxt-2" style="display:none;">Child 2</label>
                            <select id="ChildBlock-2-ChildAge-2" name="ChildBlock-2-ChildAge-2" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                    </div>
                    <div class="wgtfrmrow" id="ChildBlock-3" style="display:none;">
                        <span class="wgthtlchldbox">
                            <b>Room 3</b>
                        </span>
                        <span id="ChildBlock-3-Child-1" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-3-ChildTxt-1" style="display:none;">Child 1</label>
                            <select id="ChildBlock-3-ChildAge-1" name="ChildBlock-3-ChildAge-1" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                        <span id="ChildBlock-3-Child-2" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-3-ChildTxt-2" style="display:none;">Child 2</label>
                            <select id="ChildBlock-3-ChildAge-2" name="ChildBlock-3-ChildAge-2" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                    </div>
                    <div class="wgtfrmrow" id="ChildBlock-4" style="display:none;">
                        <span class="wgthtlchldbox">
                            <b>Room 4</b>
                        </span>
                        <span id="ChildBlock-4-Child-1" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-4-ChildTxt-1" style="display:none;">Child 1</label>
                            <select id="ChildBlock-4-ChildAge-1" name="ChildBlock-4-ChildAge-1" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                        <span id="ChildBlock-4-Child-2" style="display:none;" class="wgthtlpax">
                            <label id="ChildBlock-4-ChildTxt-2" style="display:none;">Child 2</label>
                            <select id="ChildBlock-4-ChildAge-2" name="ChildBlock-4-ChildAge-2" tabindex="1" class="chld_age_count">
                                <option selected="selected" value="-1">Age?</option>
                                <option value="0">&lt;1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="wgtfrmrow">
                    <div class="wgtfrmleft">
                        <label>Star Rating:</label>
                        <select name="Rating" id="Rating" tabindex="1" class="hl_star">
                            <option value="0" selected="selected">Show All</option>
                            <option value="1">1 Star or less</option>
                            <option value="2">2 Star or less</option>
                            <option value="3">3 Star or less</option>
                            <option value="4">4 Star or less</option>
                            <option value="5">5 Star or less</option>
                            <option value="6">1 Star or more</option>
                            <option value="7">2 Star or more</option>
                            <option value="8">3 Star or more</option>
                            <option value="9">4 Star or more</option>
                            <option value="10">5 Star or more</option>
                        </select>
                    </div>
                    <div class="wgtfrmright">
                        <label>Hotel Name:</label>
                        <input type="text" name="HotelName" id="HotelName" value="" tabindex="1" class="hl_star" />
                    </div>
                </div>
                <div class="wgtfrmrow">
                    <a href="#!" class="wgtsearchbtn fright" id="hotelSearch" style="cursor: pointer;">Search Hotel</a>
                </div>

                </div>
            </div>
    </form>

</body>
</html>
