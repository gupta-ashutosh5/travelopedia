<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Form</title>

    <!---Common files for all-->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="Stylesheet" type="text/css" />
    <!---Common files End-->

    <link href="/sites/default/themes/custom/travelbooking/css/flights/FlightStyle.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="/sites/default/themes/custom/travelbooking/css/flights/JQuery_UI.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/sites/default/themes/custom/travelbooking/js/flights/FlightJs.js"></script>

</head>
<body>

    <form id="FlightForm" action="" method="post">
        <div style="display: none;">
            <input type="hidden" id="IsSpecialReturnAllowed" value="True" />
            <input type="hidden" id="promotionalPlanType" name="promotionalPlanType" value="Normal" />
            <input type="hidden" id="searchType" name="searchType" value="0" />
            <input type="hidden" id="flightSegmentCounter" name="flightSegmentCounter" value="1" />
            <input type="hidden" id="fdepDate" name="depDate" value="" />
        </div>

        <div class="wgtfrmbox" id="Flights">
            <span id="errMess" class="error_msg" style="display: none;">
                <span id="errorMessage"></span>
            </span>
            <!-- Flight form start here -->
            <ul class="wgt_flightnav">
                <li id="one_Way" class="selected"><a class="oneway" href="#!" id="oneWay"><span class="fa fa-plane"></span> Oneway</a></li>
                <li id="round_Trip"><a class="return" href="#!" id="roundTrip"><span class="fa fa-plane fa-rotate-270"></span> Return</a></li>
                <li id="multi_Stop"><a class="multicity" href="#!" id="multiStop"><span class="fa fa-building-o"></span> Multi-city</a></li>
                <li id="cal_Fare"><a class="air_cal" href="#!" id="calFare"><span class="fa fa-calendar-o"></span> Air Calendar</a></li>
            </ul>
            <!-- Oneway/Return form start here -->
            <div id="onewayReturnDiv">
                <div class="wgtfrmrow">
                    <span class="wgtfrmleft">
                        <label class="city_lbl">Leaving From</label>
                        <input type="text" id="origin" class="city_inpts" name="origin" value="Enter any city/airport" tabindex="1" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" />
                    </span>
                    <span class="wgtfrmright">
                        <label class="city_lbl">Going To</label>
                        <input class="city_inpts" type="text" id="dest" name="dest" value="Enter any city/airport" tabindex="1" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" />
                    </span>
                </div>
                <div class="wgtfrmrow" id="onewayReturnDatesDiv">
                    <span class="wgtfrmleft">
                        <label class="city_lbl">Departure</label>
                        <dfn>
                            <input class="wgtcal" type="text" id="DepDate" tabindex="1" value="DD/MM/YYYY" readonly="readonly" style="cursor: pointer;" />
                        </dfn>
                        <select id="#" name="#" class="time_slect" style="display: none;">
                            <option value="">Any Time</option>
                        </select>
                    </span>
                    <span class="wgtfrmright" id="retDate" style="display: none;">
                        <label id="retText" class="city_lbl">Return</label>
                        <dfn>
                            <input class="wgtcal" type="text" value="DD/MM/YYYY" id="ReturnDate" tabindex="1" name="returnDate" readonly="readonly" style="cursor: pointer;" />
                        </dfn>

                        <select id="Select1" name="#" class="time_slect" style="display: none;">
                            <option value="">Any Time</option>
                        </select>
                    </span>
                </div>
                <div class="wgtfrmrow" id="calFareDatesDiv" style="display: none;">
                    <span class="wgtfrmleft">
                        <label class="city_lbl">Departure Month</label>
                        <dfn>
                            <select id="DepartureMonth" class="air_cdr" tabindex="1" >
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </dfn>
                    </span>
                    <span class="wgtfrmright">
                        <label class="city_lbl">Departure Year</label>
                        <dfn>
                            <select id="DepartureYear" class="air_cdr" tabindex="1">
                            </select>
                        </dfn>
                    </span>
                </div>
            </div>

            <!-- Multicity Start here -->
            <div class="mcity_flds" id="multiStopDiv" style="display: none;">
                <div class="wgtfrmrow" id="MultiStopSegment_1">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 1</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_1" tabindex="1" class="city_inpts" name="multiStopOrigin_1" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_1" tabindex="1" name="multiStopDest_1" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_1" tabindex="1" class="wgtcal" name="multiStopDepDate_1" value="DD/MM/YYYY" readonly="readonly" /></span>
                    </div>
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_2" style="display: none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 2</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_2" tabindex="1" name="multiStopOrigin_2" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_2" tabindex="1" name="multiStopDest_2" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_2" tabindex="1" class="wgtcal" name="multiStopDepDate_2" value="DD/MM/YYYY" readonly="readonly" style="cursor: pointer;" /></span>
                        <a href="#!" id="removeMultiStop_2" tabindex="1" class="wgtmltfltdel">
                            <img src="/sites/default/themes/custom/travelbooking/images/flights/cnl.jpg" alt="cancel" /></a>
                    </div>
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_3" style="display: none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 3</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_3" tabindex="1" name="multiStopOrigin_3" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_3" tabindex="1" name="multiStopDest_3" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" />
                        </span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_3" tabindex="1" class="wgtcal" name="multiStopDepDate_3" value="DD/MM/YYYY" readonly="readonly" /></span>
                        <a href="#!" id="removeMultiStop_3" tabindex="1" class="wgtmltfltdel">
                            <img src="/sites/default/themes/custom/travelbooking/images/flights/cnl.jpg" alt="cancel" /></a>
                    </div>
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_4" style="display: none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 4</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_4" tabindex="1" class="city_inpts" name="multiStopOrigin_4" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_4" tabindex="1" name="multiStopDest_4" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_4" tabindex="1" class="wgtcal" name="multiStopDepDate_4" value="DD/MM/YYYY" readonly="readonly" /></span>
                        <a href="#!" id="removeMultiStop_4" tabindex="1" class="wgtmltfltdel">
                            <img src="/sites/default/themes/custom/travelbooking/images/flights/cnl.jpg" alt="cancel" /></a>
                    </div>
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_5" style="display: none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 5</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_5" tabindex="1" name="multiStopOrigin_5" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_5" tabindex="1" name="multiStopDest_5" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_5" tabindex="1" class="wgtcal" name="multiStopDepDate_5" value="DD/MM/YYYY" readonly="readonly" style="cursor: pointer;" /></span>
                        <a href="#!" id="removeMultiStop_5" tabindex="1" class="wgtmltfltdel">
                            <img src="/sites/default/themes/custom/travelbooking/images/flights/cnl.jpg" alt="cancel" /></a>
                    </div>
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_6" style="display: none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest">Leaving From</span>
                        <span class="wgtmltdest">Going To</span>
                        <span class="wgtmltdest">Depart On</span>
                    </div>
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 6</span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopOrigin_6" tabindex="1" name="multiStopOrigin_6" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" /></span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDest_6" tabindex="1" name="multiStopDest_6" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')" />
                        </span>
                        <span class="wgtmltdest">
                            <input type="text" id="multiStopDepDate_6" tabindex="1" class="wgtcal" name="multiStopDepDate_6" value="DD/MM/YYYY" readonly="readonly" /></span>
                        <a href="#!" id="removeMultiStop_6" tabindex="1" class="wgtmltfltdel">
                            <img src="/sites/default/themes/custom/travelbooking/images/flights/cnl.jpg" alt="cancel" /></a>
                    </div>
                </div>
                <div class="wgtfrmrow" id="multi-add">
                    <a href="#!" tabindex="1" class="wgtaddflt" id="addMoreMultiStop">+ Add more flights</a>
                </div>
            </div>

            <div class="wgtfrmrow" id="onewayreturnform">
                <div class="wgtcountbox">Travelers (upto 9 per Booking)</div>
                <span class="wgtpaxbox">
                    <label>Adults(12+)</label>
                    <select tabindex="1" name="adultCount" id="adultCount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </span>

                <span class="wgtpaxbox">
                    <label>Children(2-11)</label>
                    <select tabindex="1" name="childCount" id="childCount">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </span>

                <span class="wgtpaxbox">
                    <label>Infants(0-2)</label>
                    <select tabindex="1" name="infantCount" id="infantCount">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </span>
            </div>

            <div class="wgtfrmrow">
                <span class="wgtclass">
                    <label class="city_lbl">Class</label>
                    <select name="cabinClass" tabindex="1" class="fgt_slct">
                        <option value="0">Any</option>
                        <option value="1">Economy</option>
                        <option value="2">PremiumEconomy</option>
                        <option value="3">Business</option>
                        <option value="5">First</option>
                    </select>
                </span>
            </div>

            <div class="wgtfrmrow">

                <span class="btn_box fright" id="fSearchbtn_box">
                    <a href="#!" id="flightSearch" class="wgtsearchbtn" tabindex="1" alt="" style="cursor: pointer;">Search Flight</a>
                </span>
                <span class="btn_box fright" id="calFareBtn_box" style="display: none;">
                    <a href="#!" id="CalendarWidget" class="wgtsearchbtn" tabindex="1" alt="" style="cursor: pointer;">Search Flight</a>
                </span>
            </div>
        </div>
        <!-- Flight form end here -->
    </form>

    <div id="GrayBox" class="greybg"></div>
    <div class="wgtpopbox" id="SplSrchBox" style="display: none;">
        <div class="wgtpop">
            <div class="wgtpoplogo">
                <img src="images/logo.png"></img></div>
            <b>We have special return fares for domestic flights. Would you like to search for special return fares?</b>
            <a href="#!" id="originalSearch" class="wgtsearchbtn">Continue with Original Search</a>
            <a href="#!" id="specialReturnFares" class="wgtsearchbtn">Search for Special Return Fares</a>

        </div>
    </div>
</body>
</html>
