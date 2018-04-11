var ajaxCityList = '';
$(document).ready(function () {

    ////**********************************JS for Bus**************************************************************************////
    var BusOrigin = "";
    var arrowkey = 0;
    var autoFocus = false;
    var resultDESnew = 0;
    var resultKey = 0;
    var resultCount = 0;
    var cityCount = 0;
    var busSourceCount = 0;
    var clickId;
    var totalAutoComplete = 0;
    var cityDataList = [];
    var cityCodeDataList = [];
    var widgetSiteName = "http://search.travelopedia.in";

    $('#busSearch').click(function () {
        var loading = "<div   class=\"wgtpop\">";
        loading += "<div id=\"logoDisplay\"  class=\"wgtpoplogo\">";
        loading += "<img src=\"<%=hotelPreference.Logo %>\"  alt=\"Logo\" />";
        loading += "</div> ";
        loading += " <div id =\"loading-img\" class=\"wgtpoplogo\"></div> ";
        loading += "</div>";
        var buslogo;
        var busloader;
        if (validation()) {
            $('#BusDestination').val($("#selectedDestinationCity option:selected").text());
            $('#DestinationId').val($("#selectedDestinationCity option:selected").val());
            var locationString;
            locationString = "<b>We are searching Buses from  " + BusOrigin + "<br>Please wait. Do not close this window...</b>";
            buslogo = $('#Logo').html();
            busloader = $('#load-img').html();
            $('#BusForm').attr("action", widgetSiteName + "/BusSearchResults.aspx");
            $('#BusForm').submit();
            $('body').html("");
            $('body').append($('<div/>', {
                id: 'holdy',
                class: 'wgtpopbox',
                html: loading
            }));

            $('#logoDisplay').html(buslogo + locationString);
            $('#loading-img').html(busloader);
            $('#header').hide();
            $('#footer').hide();
            $('#form1').hide();
            $('#container').hide();
        }
    });


    $('#busSource').keydown(function (e) {
        clickId = this.id;
        ajaxCityList = '';
        var busevent = false;
        var citylist;
        var cityCodelist;
        $(this).autocomplete({
            source: function (request, response) {
                cityDataList = [];
                cityCodeDataList = [];
                $.ajax({
                    type: "POST",
                    url: widgetSiteName + "/BusAjax.aspx",
                    data: "searchFrom=busWidget&searchKey=" + request.term + "&checkSource=false",
                    crossDomain: true,
                    dataType: "jsonp",
                    cache: false,
                    accept: { json: "application/json", jsonp: "application/javascript" },
                    beforeSend: function (xhr) { xhr.withCredentials = true; }, xhrFields: { withCredentials: true },
                    dataFilter: function (data) {
                        if (ajaxCityList != '') {
                            resultKey = 0;
                            data = ajaxCityList;
                            var citylist = data.split("/");
                            for (var i = 0; i < citylist.length; i++) {
                                cityCodeDataList.push(citylist[i].split('|')[0]);
                                cityDataList.push(citylist[i].split('|')[1]);
                            }
                            if (cityDataList.length == 0) {
                                cityDataList.push("No city found");
                                cityCodeDataList.push("0");
                            }
                            citylist = cityDataList;

                            if (clickId == "busSource") {
                                resultDESnew = busSourceCount;
                                if (busSourceCount == 0) {
                                    resultDESnew = resultCount + totalAutoComplete + 1;
                                    busSourceCount = resultDESnew;
                                    totalAutoComplete = totalAutoComplete + 1;
                                }
                            }
                            resultCount = resultCount + citylist.length;
                            response(citylist);
                        }
                    }
                });
            },
            minLength: 3,
            focus: function (event, ui) {
                resultKey = 1;
                for (var i = 0; i < cityDataList.length; i++) {
                    if (cityDataList[i] == ui.item.label) {
                        $('#hidCityCode').val(cityCodeDataList[i]);
                        BusOrigin = cityDataList[i];
                    }
                }
                $(this).val(ui.item.label);
                return false;
            },
            select: function (event, ui) {
                for (var i = 0; i < cityDataList.length; i++) {
                    if (cityDataList[i] == ui.item.label) {
                        $('#hidCityCode').val(cityCodeDataList[i]);
                        BusOrigin = cityDataList[i];
                    }
                }
                $(this).val(ui.item.label);
                ajaxCityList = '';
                busevent = true;
                resultKey = 1;
                if ($('#hidCityCode').val() != "") {

                    var paramlist = "Type=BusSearch&sourceCityCode=" + $('#hidCityCode').val() + "&checkSource=true";
                    $.ajax({
                        type: "POST",
                        url: widgetSiteName + "/BusAjax.aspx",
                        data: paramlist,
                        crossDomain: true,
                        dataType: "jsonp",
                        cache: false,
                        accept: { json: "application/json", jsonp: "application/javascript" },
                        beforeSend: function (xhr) { xhr.withCredentials = true; }, xhrFields: { withCredentials: true },
                        dataFilter: function (data) {
                            if (ajaxCityList != '') {
                                $('#selectedDestinationCity option').remove();
                                $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                                $('#SourceId').val($('#hidCityCode').val());
                                $('#hidCityCode').val("");
                                var destList = ajaxCityList.toString().split('$');
                                var destName;
                                var destCode;
                                for (var i = 0; i < destList.length; i++) {
                                    $('<option />', { value: destList[i].split('|')[0], text: destList[i].split('|')[1] }).appendTo('#selectedDestinationCity');
                                }
                                $('#selectedDestinationCity').focus();
                            }
                        }
                    });

                }
                else {
                    $('#busSource').val("Enter any city");
                    $('#selectedDestinationCity option').remove();
                    $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                }
                return false;
            },
            change: function (event, ui) {
                if (busevent == false) {
                    if (clickId == "busSource") {
                        resultDESnew = busSourceCount;
                        if (busSourceCount == 0) {
                            resultDESnew = resultCount + totalAutoComplete + 1;
                            busSourceCount = resultDESnew;
                            totalAutoComplete = totalAutoComplete + 1;
                        }
                    }
                    if ($('#ui-id-' + resultDESnew + ' li:first')) {
                        if (arrowkey == 0 && resultKey == 0) {
                            if ($('#ui-id-' + resultDESnew + ' li:first').text() == "") {
                                $(this).val("Enter any city");
                            }
                            else {
                                var orgCity = $('#ui-id-' + resultDESnew + ' li:first').text();
                                for (var i = 0; i < cityDataList.length; i++) {
                                    if (cityDataList[i] == orgCity) {
                                        $('#hidCityCode').val(cityCodeDataList[i]);
                                        BusOrigin = cityDataList[i];
                                    }
                                }
                                $(this).val(orgCity);
                            }
                            autoFocus = true;
                        }
                        else {
                            if (ui.item != null && ui.item.label != null) {
                                for (var i = 0; i < cityDataList.length; i++) {
                                    if (cityDataList[i] == ui.item.label) {
                                        $('#hidCityCode').val(cityCodeDataList[i]);
                                        BusOrigin = cityDataList[i];
                                    }
                                }
                                $(this).val(ui.item.label);
                                autoFocus = true;
                            }
                        }
                        if ($('#hidCityCode').val() != "") {
                             
                            ajaxCityList = '';
                            var paramlist = "Type=BusSearch&sourceCityCode=" + $('#hidCityCode').val() + "&checkSource=true"; ;
                            $.ajax({
                                type: "POST",
                                url: widgetSiteName + "/BusAjax.aspx",
                                data: paramlist,
                                crossDomain: true,
                                dataType: "jsonp",
                                cache: false,
                                accept: { json: "application/json", jsonp: "application/javascript" },
                                beforeSend: function (xhr) { xhr.withCredentials = true; }, xhrFields: { withCredentials: true },
                                dataFilter: function (data) {
                                    if (ajaxCityList != '') {
                                        $('#selectedDestinationCity option').remove();
                                        $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                                        $('#SourceId').val($('#hidCityCode').val());
                                        $('#hidCityCode').val("");
                                        var destList = ajaxCityList.toString().split('$');
                                        var destName;
                                        var destCode;
                                        for (var i = 0; i < destList.length; i++) {
                                            $('<option />', { value: destList[i].split('|')[0], text: destList[i].split('|')[1] }).appendTo('#selectedDestinationCity');
                                        }
                                    }
                                }
                            });

                        }
                        else {
                            $('#busSource').val("Enter any city");
                            $('#selectedDestinationCity option').remove();
                            $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                        }
                        return false;
                    }
                }
            }
        });
    });

    //$('#selectedDestinationCity').change(function () {
    //    $('#departureDate').focus();
    //});



    ////**********************Calender related js***********************************************//
    var min = '0';
    $("#departureDate").datepicker({
        minDate: min, maxDate: '+1Y', selectedDate: '0', dateFormat: 'dd/mm/yy', numberOfMonths: 2, showAnim: 'slideDown',
        beforeShowDay: function (DepDate) {
            var day = DepDate.getDay();
            if (day == 0) {
                return [true, "markholiday"];
            }
            else {
                return [true];
            }
        }
    });

    $("#ui-datepicker-div").hide();

});

function callback(json) {
    ajaxCityList = json.CityList;
}

function markout(textBox, txt) {
    if ($('#' + textBox.id).val() == "") {
        $('#' + textBox.id).val(txt);
    }
}
function markin(textBox, txt) {
    if ($('#' + textBox.id).val() == txt) {
        $('#' + textBox.id).val("");
    }
}

//*****************************************Bus Validation*************************************************//

function validation() {
    if ($('#busSource').val() == "" || parseInt(Trim($('#busSource').val()).length) == 0 || $('#busSource').val() == "Enter any city") {
        $('#errMsg').html("Please Enter Source City");
        $('#errMsg').show();
        return false;
    }
    if ($('#selectedDestinationCity').val() == "0") {
        $('#errMsg').html("Please Select Destination City");
        $('#errMsg').show();
        return false;
    }
    if ($('#departureDate').val() == "DD/MM/YYYY" || $('#departureDate').val() == "") {
        $('#errMsg').html("Please Select Date of Journey ");
        $('#errMsg').style.display = "block";
        return false;
    }
    return true;
}

function Trim(str) {
    return str.replace(/^\s+|\s+$/g, '');
}

