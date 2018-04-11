<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Form</title>
    <!--==============common files===============-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!--==============common files===============-->
    <link href="/sites/default/themes/custom/travelbooking/css/bus/BusStyle.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="/sites/default/themes/custom/travelbooking/css/bus/JQuery_UI.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/sites/default/themes/custom/travelbooking/js/bus/BusJs.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#selby_Theme").click(function () {
                $(this).addClass("active");
                $("#selby_Dest").removeClass("active");
            });
            $("#selby_Dest").click(function () {
                $(this).addClass("active");
                $("#selby_Theme").removeClass("active");
            });
        });
    </script>
</head>
<body>
    <div id="Logo" style="display: none;">
        <span class="fleft mainlogo">
            <img alt="Logo" src="/sites/default/themes/custom/travelbooking/images/bus/logo.png" />
        </span>
    </div>
    <div id="load-img" style="display: none;">
        <div>
            <img src="/sites/default/themes/custom/travelbooking/images/bus/loader.gif" alt="Loader" />
        </div>
    </div>

    <form id="BusForm" action="" method="post">
        <div class="wgtfrmbox" id="Bus">
            <!--Bus Starts-->
            <div style="display: none;" class="error_msg" id="errMsg">
                <span id="errMessage"></span>
            </div>
            <div class="wgtfrmrow">
                <div class="wgtfrmleft">
                    <label>Leaving from</label>
                    <input type="text" onblur="markout(this, 'Enter any city')" onfocus="markin(this, 'Enter any city')"
                           value="Enter any city" name="busSource" id="busSource" />
                    <input type="hidden" value="" name="hidCityCode" id="hidCityCode" />
                    <input type="hidden" value="" name="SourceId" id="SourceId" />
                </div>
                <div class="wgtfrmright">
                    <label>Going to</label>
                    <select id="selectedDestinationCity" name="selectedDestinationCity">
                        <option selected="selected" value="0">Choose From List</option>
                    </select>
                    <input type="hidden" value="" name="BusDestination" id="BusDestination" />
                    <input type="hidden" value="" name="DestinationId" id="DestinationId" />
                </div>
            </div>
            <div class="wgtfrmrow">
                <div class="wgtfrmleft">
                    <label>Departure</label>
                    <input type="text" class="wgtcal" id="departureDate" name="departureDate" value="DD/MM/YYYY" readonly="readonly" />
                </div>
            </div>
            <div class="wgtfrmrow">
                <a href="#!" id="busSearch" class="wgtsearchbtn fright"><span class="fa fa-bus wgticon"></span> Search Bus</a>
            </div>
            <!--Bus ends here-->
        </div>
    </form>

    <div id="GrayBox" class="greybg"></div>
</body>
</html>

