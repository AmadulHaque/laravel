@extends('app') <!-- If you have a layout -->
@section('content')

<div class="row">
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Students</h6>
                        <h3>50055</h3>
                    </div>
                    <div class="db-icon">
                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Awards</h6>
                        <h3>50+</h3>
                    </div>
                    <div class="db-icon">
                        <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Department</h6>
                        <h3>30+</h3>
                    </div>
                    <div class="db-icon">
                        <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Revenue</h6>
                        <h3>$505</h3>
                    </div>
                    <div class="db-icon">
                        <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-6">

        <div class="card card-chart">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="card-title">Overview</h5>
                    </div>
                    <div class="col-6">
                        <ul class="chart-list-out">
                            <li><span class="circle-blue"></span>Teacher</li>
                            <li><span class="circle-green"></span>Student</li>
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="apexcharts-area" style="min-height: 365px;"><div id="apexchartsnnsacnb7" class="apexcharts-canvas apexchartsnnsacnb7 apexcharts-theme-light" style="width: 764px; height: 350px;"><svg id="SvgjsSvg1167" width="764" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="764" height="350"><div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1" seriesname="Teachers" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(61, 94, 225); color: rgb(61, 94, 225); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Teachers" data:collapsed="false">Teachers</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2" seriesname="Students" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(112, 196, 207); color: rgb(112, 196, 207); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Students" data:collapsed="false">Students</span></div></div><style type="text/css">

.apexcharts-legend {
display: flex;
overflow: auto;
padding: 0 10px;
}
.apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
flex-wrap: wrap
}
.apexcharts-legend.position-right, .apexcharts-legend.position-left {
flex-direction: column;
bottom: 0;
}
.apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
justify-content: flex-start;
}
.apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
justify-content: center;
}
.apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
justify-content: flex-end;
}
.apexcharts-legend-series {
cursor: pointer;
line-height: normal;
}
.apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
display: flex;
align-items: center;
}
.apexcharts-legend-text {
position: relative;
font-size: 14px;
}
.apexcharts-legend-text *, .apexcharts-legend-marker * {
pointer-events: none;
}
.apexcharts-legend-marker {
position: relative;
display: inline-block;
cursor: pointer;
margin-right: 3px;
border-style: solid;
}

.apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
display: inline-block;
}
.apexcharts-legend-series.apexcharts-no-click {
cursor: auto;
}
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
display: none !important;
}
.apexcharts-inactive-legend {
opacity: 0.45;
}</style></foreignObject><g id="SvgjsG1169" class="apexcharts-inner apexcharts-graphical" transform="translate(42, 30)"><defs id="SvgjsDefs1168"><clipPath id="gridRectMasknnsacnb7"><rect id="SvgjsRect1175" width="721" height="268.348" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknnsacnb7"><rect id="SvgjsRect1176" width="716" height="267.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1174" x1="0" y1="0" x2="0" y2="263.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="263.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1186" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1187" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1189" font-family="Helvetica, Arial, sans-serif" x="0" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1190">Jan</tspan><title>Jan</title></text><text id="SvgjsText1192" font-family="Helvetica, Arial, sans-serif" x="118.66666666666666" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1193">Feb</tspan><title>Feb</title></text><text id="SvgjsText1195" font-family="Helvetica, Arial, sans-serif" x="237.33333333333334" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1196">Mar</tspan><title>Mar</title></text><text id="SvgjsText1198" font-family="Helvetica, Arial, sans-serif" x="356.00000000000006" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1199">Apr</tspan><title>Apr</title></text><text id="SvgjsText1201" font-family="Helvetica, Arial, sans-serif" x="474.6666666666667" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1202">May</tspan><title>May</title></text><text id="SvgjsText1204" font-family="Helvetica, Arial, sans-serif" x="593.3333333333333" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1205">Jun</tspan><title>Jun</title></text><text id="SvgjsText1207" font-family="Helvetica, Arial, sans-serif" x="711.9999999999999" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1208">Jul</tspan><title>Jul</title></text></g><line id="SvgjsLine1209" x1="0" y1="264.348" x2="712" y2="264.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1226" class="apexcharts-grid"><g id="SvgjsG1227" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1236" x1="0" y1="0" x2="712" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1237" x1="0" y1="43.891333333333336" x2="712" y2="43.891333333333336" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1238" x1="0" y1="87.78266666666667" x2="712" y2="87.78266666666667" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1239" x1="0" y1="131.674" x2="712" y2="131.674" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1240" x1="0" y1="175.56533333333334" x2="712" y2="175.56533333333334" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1241" x1="0" y1="219.45666666666668" x2="712" y2="219.45666666666668" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1242" x1="0" y1="263.348" x2="712" y2="263.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1228" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1229" x1="0" y1="264.348" x2="0" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1230" x1="118.66666666666667" y1="264.348" x2="118.66666666666667" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1231" x1="237.33333333333334" y1="264.348" x2="237.33333333333334" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1232" x1="356" y1="264.348" x2="356" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1233" x1="474.6666666666667" y1="264.348" x2="474.6666666666667" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1234" x1="593.3333333333334" y1="264.348" x2="593.3333333333334" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1235" x1="712" y1="264.348" x2="712" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1244" x1="0" y1="263.348" x2="712" y2="263.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1243" x1="0" y1="1" x2="0" y2="263.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1177" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1178" class="apexcharts-series" seriesName="Teachers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1181" d="M 0 153.61966666666666C 41.53333333333333 153.61966666666666 77.13333333333334 87.78266666666667 118.66666666666667 87.78266666666667C 160.2 87.78266666666667 195.8 21.945666666666682 237.33333333333334 21.945666666666682C 278.8666666666667 21.945666666666682 314.4666666666667 127.28486666666666 356 127.28486666666666C 397.53333333333336 127.28486666666666 433.1333333333333 166.78706666666668 474.6666666666667 166.78706666666668C 516.2 166.78706666666668 551.8000000000001 166.78706666666668 593.3333333333334 166.78706666666668C 634.8666666666667 166.78706666666668 670.4666666666667 219.45666666666668 712 219.45666666666668" fill="none" fill-opacity="1" stroke="rgba(61,94,225,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasknnsacnb7)" pathTo="M 0 153.61966666666666C 41.53333333333333 153.61966666666666 77.13333333333334 87.78266666666667 118.66666666666667 87.78266666666667C 160.2 87.78266666666667 195.8 21.945666666666682 237.33333333333334 21.945666666666682C 278.8666666666667 21.945666666666682 314.4666666666667 127.28486666666666 356 127.28486666666666C 397.53333333333336 127.28486666666666 433.1333333333333 166.78706666666668 474.6666666666667 166.78706666666668C 516.2 166.78706666666668 551.8000000000001 166.78706666666668 593.3333333333334 166.78706666666668C 634.8666666666667 166.78706666666668 670.4666666666667 219.45666666666668 712 219.45666666666668" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 118.66666666666667 351.1306666666667L 237.33333333333334 351.1306666666667L 356 351.1306666666667L 474.6666666666667 351.1306666666667L 593.3333333333334 351.1306666666667L 712 351.1306666666667"></path><g id="SvgjsG1179" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1250" r="0" cx="0" cy="0" class="apexcharts-marker we7mpl31r no-pointer-events" stroke="#ffffff" fill="#3d5ee1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1182" class="apexcharts-series" seriesName="Students" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1185" d="M 0 245.79146666666668C 41.53333333333333 245.79146666666668 77.13333333333334 140.45226666666667 118.66666666666667 140.45226666666667C 160.2 140.45226666666667 195.8 105.3392 237.33333333333334 105.3392C 278.8666666666667 105.3392 314.4666666666667 210.6784 356 210.6784C 397.53333333333336 210.6784 433.1333333333333 201.90013333333334 474.6666666666667 201.90013333333334C 516.2 201.90013333333334 551.8000000000001 122.89573333333334 593.3333333333334 122.89573333333334C 634.8666666666667 122.89573333333334 670.4666666666667 241.40233333333333 712 241.40233333333333" fill="none" fill-opacity="1" stroke="rgba(112,196,207,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMasknnsacnb7)" pathTo="M 0 245.79146666666668C 41.53333333333333 245.79146666666668 77.13333333333334 140.45226666666667 118.66666666666667 140.45226666666667C 160.2 140.45226666666667 195.8 105.3392 237.33333333333334 105.3392C 278.8666666666667 105.3392 314.4666666666667 210.6784 356 210.6784C 397.53333333333336 210.6784 433.1333333333333 201.90013333333334 474.6666666666667 201.90013333333334C 516.2 201.90013333333334 551.8000000000001 122.89573333333334 593.3333333333334 122.89573333333334C 634.8666666666667 122.89573333333334 670.4666666666667 241.40233333333333 712 241.40233333333333" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 118.66666666666667 351.1306666666667L 237.33333333333334 351.1306666666667L 356 351.1306666666667L 474.6666666666667 351.1306666666667L 593.3333333333334 351.1306666666667L 712 351.1306666666667"></path><g id="SvgjsG1183" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1251" r="0" cx="0" cy="0" class="apexcharts-marker ws55bzus1 no-pointer-events" stroke="#ffffff" fill="#70c4cf" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1184" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1245" x1="0" y1="0" x2="712" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1246" x1="0" y1="0" x2="712" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1247" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1248" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1249" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1252" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1253" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1173" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1210" class="apexcharts-yaxis" rel="0" transform="translate(12, 0)"><g id="SvgjsG1211" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1212" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1213">80</tspan></text><text id="SvgjsText1214" font-family="Helvetica, Arial, sans-serif" x="20" y="75.49133333333333" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1215">70</tspan></text><text id="SvgjsText1216" font-family="Helvetica, Arial, sans-serif" x="20" y="119.38266666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1217">60</tspan></text><text id="SvgjsText1218" font-family="Helvetica, Arial, sans-serif" x="20" y="163.274" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1219">50</tspan></text><text id="SvgjsText1220" font-family="Helvetica, Arial, sans-serif" x="20" y="207.16533333333334" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1221">40</tspan></text><text id="SvgjsText1222" font-family="Helvetica, Arial, sans-serif" x="20" y="251.05666666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1223">30</tspan></text><text id="SvgjsText1224" font-family="Helvetica, Arial, sans-serif" x="20" y="294.94800000000004" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1225">20</tspan></text></g></g><g id="SvgjsG1170" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 94, 225);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(112, 196, 207);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 781px; height: 382px;"></div></div><div class="contract-trigger"></div></div></div>
        </div>

    </div>
    <div class="col-md-12 col-lg-6">

        <div class="card card-chart">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="card-title">Number of Students</h5>
                    </div>
                    <div class="col-6">
                        <ul class="chart-list-out">
                            <li><span class="circle-blue"></span>Girls</li>
                            <li><span class="circle-green"></span>Boys</li>
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="bar" style="min-height: 365px;"><div id="apexcharts0uenf0tc" class="apexcharts-canvas apexcharts0uenf0tc apexcharts-theme-light" style="width: 764px; height: 350px;"><svg id="SvgjsSvg1254" width="764" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="764" height="350"><div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1" seriesname="Boys" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(112, 196, 207); color: rgb(112, 196, 207); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Boys" data:collapsed="false">Boys</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2" seriesname="Girls" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(61, 94, 225); color: rgb(61, 94, 225); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Girls" data:collapsed="false">Girls</span></div></div><style type="text/css">

.apexcharts-legend {
display: flex;
overflow: auto;
padding: 0 10px;
}
.apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
flex-wrap: wrap
}
.apexcharts-legend.position-right, .apexcharts-legend.position-left {
flex-direction: column;
bottom: 0;
}
.apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
justify-content: flex-start;
}
.apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
justify-content: center;
}
.apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
justify-content: flex-end;
}
.apexcharts-legend-series {
cursor: pointer;
line-height: normal;
}
.apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
display: flex;
align-items: center;
}
.apexcharts-legend-text {
position: relative;
font-size: 14px;
}
.apexcharts-legend-text *, .apexcharts-legend-marker * {
pointer-events: none;
}
.apexcharts-legend-marker {
position: relative;
display: inline-block;
cursor: pointer;
margin-right: 3px;
border-style: solid;
}

.apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
display: inline-block;
}
.apexcharts-legend-series.apexcharts-no-click {
cursor: auto;
}
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
display: none !important;
}
.apexcharts-inactive-legend {
opacity: 0.45;
}</style></foreignObject><g id="SvgjsG1256" class="apexcharts-inner apexcharts-graphical" transform="translate(48, 35)"><defs id="SvgjsDefs1255"><linearGradient id="SvgjsLinearGradient1261" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1262" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1263" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1264" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask0uenf0tc"><rect id="SvgjsRect1266" width="712" height="283" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask0uenf0tc"><rect id="SvgjsRect1267" width="710" height="285" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1265" width="16.179166666666667" height="281" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1261)" class="apexcharts-xcrosshairs" y2="281" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1297" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1298" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1311" class="apexcharts-grid"><g id="SvgjsG1312" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1314" x1="0" y1="0" x2="706" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="70.25" x2="706" y2="70.25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="140.5" x2="706" y2="140.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="210.75" x2="706" y2="210.75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1318" x1="0" y1="281" x2="706" y2="281" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1313" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1320" x1="0" y1="281" x2="706" y2="281" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1319" x1="0" y1="1" x2="0" y2="281" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1268" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1269" class="apexcharts-series" rel="1" seriesName="Boys" data:realIndex="0"><path id="SvgjsPath1271" d="M 13.2375 281L 13.2375 136.51979166666666Q 20.327083333333334 130.43020833333333 27.416666666666668 136.51979166666666L 27.416666666666668 136.51979166666666L 27.416666666666668 281L 27.416666666666668 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 13.2375 281L 13.2375 136.51979166666666Q 20.327083333333334 130.43020833333333 27.416666666666668 136.51979166666666L 27.416666666666668 136.51979166666666L 27.416666666666668 281L 27.416666666666668 281z" pathFrom="M 13.2375 281L 13.2375 281L 27.416666666666668 281L 27.416666666666668 281L 27.416666666666668 281L 13.2375 281" cy="133.475" cx="71.07083333333334" j="0" val="420" barHeight="147.525" barWidth="16.179166666666667"></path><path id="SvgjsPath1272" d="M 72.07083333333334 281L 72.07083333333334 97.17979166666669Q 79.16041666666668 91.09020833333335 86.25 97.17979166666669L 86.25 97.17979166666669L 86.25 281L 86.25 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 72.07083333333334 281L 72.07083333333334 97.17979166666669Q 79.16041666666668 91.09020833333335 86.25 97.17979166666669L 86.25 97.17979166666669L 86.25 281L 86.25 281z" pathFrom="M 72.07083333333334 281L 72.07083333333334 281L 86.25 281L 86.25 281L 86.25 281L 72.07083333333334 281" cy="94.13500000000002" cx="129.90416666666667" j="1" val="532" barHeight="186.86499999999998" barWidth="16.179166666666667"></path><path id="SvgjsPath1273" d="M 130.90416666666667 281L 130.90416666666667 102.79979166666669Q 137.99375 96.71020833333336 145.08333333333334 102.79979166666669L 145.08333333333334 102.79979166666669L 145.08333333333334 281L 145.08333333333334 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 130.90416666666667 281L 130.90416666666667 102.79979166666669Q 137.99375 96.71020833333336 145.08333333333334 102.79979166666669L 145.08333333333334 102.79979166666669L 145.08333333333334 281L 145.08333333333334 281z" pathFrom="M 130.90416666666667 281L 130.90416666666667 281L 145.08333333333334 281L 145.08333333333334 281L 145.08333333333334 281L 130.90416666666667 281" cy="99.75500000000002" cx="188.7375" j="2" val="516" barHeight="181.24499999999998" barWidth="16.179166666666667"></path><path id="SvgjsPath1274" d="M 189.7375 281L 189.7375 82.07604166666667Q 196.82708333333335 75.98645833333333 203.91666666666669 82.07604166666667L 203.91666666666669 82.07604166666667L 203.91666666666669 281L 203.91666666666669 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 189.7375 281L 189.7375 82.07604166666667Q 196.82708333333335 75.98645833333333 203.91666666666669 82.07604166666667L 203.91666666666669 82.07604166666667L 203.91666666666669 281L 203.91666666666669 281z" pathFrom="M 189.7375 281L 189.7375 281L 203.91666666666669 281L 203.91666666666669 281L 203.91666666666669 281L 189.7375 281" cy="79.03125" cx="247.57083333333335" j="3" val="575" barHeight="201.96875" barWidth="16.179166666666667"></path><path id="SvgjsPath1275" d="M 248.57083333333335 281L 248.57083333333335 101.74604166666668Q 255.6604166666667 95.65645833333335 262.75 101.74604166666668L 262.75 101.74604166666668L 262.75 281L 262.75 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 248.57083333333335 281L 248.57083333333335 101.74604166666668Q 255.6604166666667 95.65645833333335 262.75 101.74604166666668L 262.75 101.74604166666668L 262.75 281L 262.75 281z" pathFrom="M 248.57083333333335 281L 248.57083333333335 281L 262.75 281L 262.75 281L 262.75 281L 248.57083333333335 281" cy="98.70125000000002" cx="306.4041666666667" j="4" val="519" barHeight="182.29874999999998" barWidth="16.179166666666667"></path><path id="SvgjsPath1276" d="M 307.4041666666667 281L 307.4041666666667 102.44854166666667Q 314.49375000000003 96.35895833333333 321.58333333333337 102.44854166666667L 321.58333333333337 102.44854166666667L 321.58333333333337 281L 321.58333333333337 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 307.4041666666667 281L 307.4041666666667 102.44854166666667Q 314.49375000000003 96.35895833333333 321.58333333333337 102.44854166666667L 321.58333333333337 102.44854166666667L 321.58333333333337 281L 321.58333333333337 281z" pathFrom="M 307.4041666666667 281L 307.4041666666667 281L 321.58333333333337 281L 321.58333333333337 281L 321.58333333333337 281L 307.4041666666667 281" cy="99.40375" cx="365.2375" j="5" val="517" barHeight="181.59625" barWidth="16.179166666666667"></path><path id="SvgjsPath1277" d="M 366.2375 281L 366.2375 124.57729166666667Q 373.32708333333335 118.48770833333333 380.4166666666667 124.57729166666667L 380.4166666666667 124.57729166666667L 380.4166666666667 281L 380.4166666666667 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 366.2375 281L 366.2375 124.57729166666667Q 373.32708333333335 118.48770833333333 380.4166666666667 124.57729166666667L 380.4166666666667 124.57729166666667L 380.4166666666667 281L 380.4166666666667 281z" pathFrom="M 366.2375 281L 366.2375 281L 380.4166666666667 281L 380.4166666666667 281L 380.4166666666667 281L 366.2375 281" cy="121.5325" cx="424.0708333333333" j="6" val="454" barHeight="159.4675" barWidth="16.179166666666667"></path><path id="SvgjsPath1278" d="M 425.0708333333333 281L 425.0708333333333 146.35479166666667Q 432.16041666666666 140.26520833333333 439.25 146.35479166666667L 439.25 146.35479166666667L 439.25 281L 439.25 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 425.0708333333333 281L 425.0708333333333 146.35479166666667Q 432.16041666666666 140.26520833333333 439.25 146.35479166666667L 439.25 146.35479166666667L 439.25 281L 439.25 281z" pathFrom="M 425.0708333333333 281L 425.0708333333333 281L 439.25 281L 439.25 281L 439.25 281L 425.0708333333333 281" cy="143.31" cx="482.90416666666664" j="7" val="392" barHeight="137.69" barWidth="16.179166666666667"></path><path id="SvgjsPath1279" d="M 483.90416666666664 281L 483.90416666666664 192.0172916666667Q 490.99375 185.92770833333336 498.0833333333333 192.0172916666667L 498.0833333333333 192.0172916666667L 498.0833333333333 281L 498.0833333333333 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 483.90416666666664 281L 483.90416666666664 192.0172916666667Q 490.99375 185.92770833333336 498.0833333333333 192.0172916666667L 498.0833333333333 192.0172916666667L 498.0833333333333 281L 498.0833333333333 281z" pathFrom="M 483.90416666666664 281L 483.90416666666664 281L 498.0833333333333 281L 498.0833333333333 281L 498.0833333333333 281L 483.90416666666664 281" cy="188.97250000000003" cx="541.7375" j="8" val="262" barHeight="92.02749999999999" barWidth="16.179166666666667"></path><path id="SvgjsPath1280" d="M 542.7375 281L 542.7375 149.51604166666667Q 549.8270833333332 143.42645833333333 556.9166666666666 149.51604166666667L 556.9166666666666 149.51604166666667L 556.9166666666666 281L 556.9166666666666 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 542.7375 281L 542.7375 149.51604166666667Q 549.8270833333332 143.42645833333333 556.9166666666666 149.51604166666667L 556.9166666666666 149.51604166666667L 556.9166666666666 281L 556.9166666666666 281z" pathFrom="M 542.7375 281L 542.7375 281L 556.9166666666666 281L 556.9166666666666 281L 556.9166666666666 281L 542.7375 281" cy="146.47125" cx="600.5708333333333" j="9" val="383" barHeight="134.52875" barWidth="16.179166666666667"></path><path id="SvgjsPath1281" d="M 601.5708333333333 281L 601.5708333333333 127.38729166666667Q 608.6604166666666 121.29770833333333 615.75 127.38729166666667L 615.75 127.38729166666667L 615.75 281L 615.75 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 601.5708333333333 281L 601.5708333333333 127.38729166666667Q 608.6604166666666 121.29770833333333 615.75 127.38729166666667L 615.75 127.38729166666667L 615.75 281L 615.75 281z" pathFrom="M 601.5708333333333 281L 601.5708333333333 281L 615.75 281L 615.75 281L 615.75 281L 601.5708333333333 281" cy="124.3425" cx="659.4041666666667" j="10" val="446" barHeight="156.6575" barWidth="16.179166666666667"></path><path id="SvgjsPath1282" d="M 660.4041666666667 281L 660.4041666666667 90.50604166666668Q 667.49375 84.41645833333334 674.5833333333334 90.50604166666668L 674.5833333333334 90.50604166666668L 674.5833333333334 281L 674.5833333333334 281z" fill="rgba(112,196,207,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 660.4041666666667 281L 660.4041666666667 90.50604166666668Q 667.49375 84.41645833333334 674.5833333333334 90.50604166666668L 674.5833333333334 90.50604166666668L 674.5833333333334 281L 674.5833333333334 281z" pathFrom="M 660.4041666666667 281L 660.4041666666667 281L 674.5833333333334 281L 674.5833333333334 281L 674.5833333333334 281L 660.4041666666667 281" cy="87.46125" cx="718.2375000000001" j="11" val="551" barHeight="193.53875" barWidth="16.179166666666667"></path></g><g id="SvgjsG1283" class="apexcharts-series" rel="2" seriesName="Girls" data:realIndex="1"><path id="SvgjsPath1285" d="M 29.416666666666668 281L 29.416666666666668 166.0247916666667Q 36.50625 159.93520833333335 43.59583333333333 166.0247916666667L 43.59583333333333 166.0247916666667L 43.59583333333333 281L 43.59583333333333 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 29.416666666666668 281L 29.416666666666668 166.0247916666667Q 36.50625 159.93520833333335 43.59583333333333 166.0247916666667L 43.59583333333333 166.0247916666667L 43.59583333333333 281L 43.59583333333333 281z" pathFrom="M 29.416666666666668 281L 29.416666666666668 281L 43.59583333333333 281L 43.59583333333333 281L 43.59583333333333 281L 29.416666666666668 281" cy="162.98000000000002" cx="87.25" j="0" val="336" barHeight="118.02" barWidth="16.179166666666667"></path><path id="SvgjsPath1286" d="M 88.25 281L 88.25 69.0797916666667Q 95.33958333333334 62.99020833333336 102.42916666666667 69.0797916666667L 102.42916666666667 69.0797916666667L 102.42916666666667 281L 102.42916666666667 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 88.25 281L 88.25 69.0797916666667Q 95.33958333333334 62.99020833333336 102.42916666666667 69.0797916666667L 102.42916666666667 69.0797916666667L 102.42916666666667 281L 102.42916666666667 281z" pathFrom="M 88.25 281L 88.25 281L 102.42916666666667 281L 102.42916666666667 281L 102.42916666666667 281L 88.25 281" cy="66.03500000000003" cx="146.08333333333334" j="1" val="612" barHeight="214.96499999999997" barWidth="16.179166666666667"></path><path id="SvgjsPath1287" d="M 147.08333333333334 281L 147.08333333333334 163.21479166666668Q 154.17291666666668 157.12520833333335 161.26250000000002 163.21479166666668L 161.26250000000002 163.21479166666668L 161.26250000000002 281L 161.26250000000002 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 147.08333333333334 281L 147.08333333333334 163.21479166666668Q 154.17291666666668 157.12520833333335 161.26250000000002 163.21479166666668L 161.26250000000002 163.21479166666668L 161.26250000000002 281L 161.26250000000002 281z" pathFrom="M 147.08333333333334 281L 147.08333333333334 281L 161.26250000000002 281L 161.26250000000002 281L 161.26250000000002 281L 147.08333333333334 281" cy="160.17000000000002" cx="204.91666666666669" j="2" val="344" barHeight="120.83" barWidth="16.179166666666667"></path><path id="SvgjsPath1288" d="M 205.91666666666669 281L 205.91666666666669 56.78604166666668Q 213.00625000000002 50.69645833333334 220.09583333333336 56.78604166666668L 220.09583333333336 56.78604166666668L 220.09583333333336 281L 220.09583333333336 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 205.91666666666669 281L 205.91666666666669 56.78604166666668Q 213.00625000000002 50.69645833333334 220.09583333333336 56.78604166666668L 220.09583333333336 56.78604166666668L 220.09583333333336 281L 220.09583333333336 281z" pathFrom="M 205.91666666666669 281L 205.91666666666669 281L 220.09583333333336 281L 220.09583333333336 281L 220.09583333333336 281L 205.91666666666669 281" cy="53.74125000000001" cx="263.75" j="3" val="647" barHeight="227.25875" barWidth="16.179166666666667"></path><path id="SvgjsPath1289" d="M 264.75 281L 264.75 162.8635416666667Q 271.83958333333334 156.77395833333335 278.9291666666667 162.8635416666667L 278.9291666666667 162.8635416666667L 278.9291666666667 281L 278.9291666666667 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 264.75 281L 264.75 162.8635416666667Q 271.83958333333334 156.77395833333335 278.9291666666667 162.8635416666667L 278.9291666666667 162.8635416666667L 278.9291666666667 281L 278.9291666666667 281z" pathFrom="M 264.75 281L 264.75 281L 278.9291666666667 281L 278.9291666666667 281L 278.9291666666667 281L 264.75 281" cy="159.81875000000002" cx="322.58333333333337" j="4" val="345" barHeight="121.18124999999999" barWidth="16.179166666666667"></path><path id="SvgjsPath1290" d="M 323.58333333333337 281L 323.58333333333337 86.29104166666667Q 330.6729166666667 80.20145833333333 337.76250000000005 86.29104166666667L 337.76250000000005 86.29104166666667L 337.76250000000005 281L 337.76250000000005 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 323.58333333333337 281L 323.58333333333337 86.29104166666667Q 330.6729166666667 80.20145833333333 337.76250000000005 86.29104166666667L 337.76250000000005 86.29104166666667L 337.76250000000005 281L 337.76250000000005 281z" pathFrom="M 323.58333333333337 281L 323.58333333333337 281L 337.76250000000005 281L 337.76250000000005 281L 337.76250000000005 281L 323.58333333333337 281" cy="83.24625" cx="381.4166666666667" j="5" val="563" barHeight="197.75375" barWidth="16.179166666666667"></path><path id="SvgjsPath1291" d="M 382.4166666666667 281L 382.4166666666667 194.12479166666665Q 389.50625 188.03520833333332 396.59583333333336 194.12479166666665L 396.59583333333336 194.12479166666665L 396.59583333333336 281L 396.59583333333336 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 382.4166666666667 281L 382.4166666666667 194.12479166666665Q 389.50625 188.03520833333332 396.59583333333336 194.12479166666665L 396.59583333333336 194.12479166666665L 396.59583333333336 281L 396.59583333333336 281z" pathFrom="M 382.4166666666667 281L 382.4166666666667 281L 396.59583333333336 281L 396.59583333333336 281L 396.59583333333336 281L 382.4166666666667 281" cy="191.07999999999998" cx="440.25" j="6" val="256" barHeight="89.92" barWidth="16.179166666666667"></path><path id="SvgjsPath1292" d="M 441.25 281L 441.25 163.21479166666668Q 448.33958333333334 157.12520833333335 455.4291666666667 163.21479166666668L 455.4291666666667 163.21479166666668L 455.4291666666667 281L 455.4291666666667 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 441.25 281L 441.25 163.21479166666668Q 448.33958333333334 157.12520833333335 455.4291666666667 163.21479166666668L 455.4291666666667 163.21479166666668L 455.4291666666667 281L 455.4291666666667 281z" pathFrom="M 441.25 281L 441.25 281L 455.4291666666667 281L 455.4291666666667 281L 455.4291666666667 281L 441.25 281" cy="160.17000000000002" cx="499.0833333333333" j="7" val="344" barHeight="120.83" barWidth="16.179166666666667"></path><path id="SvgjsPath1293" d="M 500.0833333333333 281L 500.0833333333333 170.59104166666665Q 507.17291666666665 164.50145833333332 514.2624999999999 170.59104166666665L 514.2624999999999 170.59104166666665L 514.2624999999999 281L 514.2624999999999 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 500.0833333333333 281L 500.0833333333333 170.59104166666665Q 507.17291666666665 164.50145833333332 514.2624999999999 170.59104166666665L 514.2624999999999 170.59104166666665L 514.2624999999999 281L 514.2624999999999 281z" pathFrom="M 500.0833333333333 281L 500.0833333333333 281L 514.2624999999999 281L 514.2624999999999 281L 514.2624999999999 281L 500.0833333333333 281" cy="167.54625" cx="557.9166666666666" j="8" val="323" barHeight="113.45375" barWidth="16.179166666666667"></path><path id="SvgjsPath1294" d="M 558.9166666666666 281L 558.9166666666666 178.66979166666667Q 566.0062499999999 172.58020833333333 573.0958333333333 178.66979166666667L 573.0958333333333 178.66979166666667L 573.0958333333333 281L 573.0958333333333 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 558.9166666666666 281L 558.9166666666666 178.66979166666667Q 566.0062499999999 172.58020833333333 573.0958333333333 178.66979166666667L 573.0958333333333 178.66979166666667L 573.0958333333333 281L 573.0958333333333 281z" pathFrom="M 558.9166666666666 281L 558.9166666666666 281L 573.0958333333333 281L 573.0958333333333 281L 573.0958333333333 281L 558.9166666666666 281" cy="175.625" cx="616.75" j="9" val="300" barHeight="105.375" barWidth="16.179166666666667"></path><path id="SvgjsPath1295" d="M 617.75 281L 617.75 124.22604166666667Q 624.8395833333333 118.13645833333334 631.9291666666667 124.22604166666667L 631.9291666666667 124.22604166666667L 631.9291666666667 281L 631.9291666666667 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 617.75 281L 617.75 124.22604166666667Q 624.8395833333333 118.13645833333334 631.9291666666667 124.22604166666667L 631.9291666666667 124.22604166666667L 631.9291666666667 281L 631.9291666666667 281z" pathFrom="M 617.75 281L 617.75 281L 631.9291666666667 281L 631.9291666666667 281L 631.9291666666667 281L 617.75 281" cy="121.18125" cx="675.5833333333334" j="10" val="455" barHeight="159.81875" barWidth="16.179166666666667"></path><path id="SvgjsPath1296" d="M 676.5833333333334 281L 676.5833333333334 123.87479166666668Q 683.6729166666667 117.78520833333334 690.7625 123.87479166666668L 690.7625 123.87479166666668L 690.7625 281L 690.7625 281z" fill="rgba(61,94,225,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0uenf0tc)" pathTo="M 676.5833333333334 281L 676.5833333333334 123.87479166666668Q 683.6729166666667 117.78520833333334 690.7625 123.87479166666668L 690.7625 123.87479166666668L 690.7625 281L 690.7625 281z" pathFrom="M 676.5833333333334 281L 676.5833333333334 281L 690.7625 281L 690.7625 281L 690.7625 281L 676.5833333333334 281" cy="120.83000000000001" cx="734.4166666666667" j="11" val="456" barHeight="160.17" barWidth="16.179166666666667"></path></g><g id="SvgjsG1270" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1284" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1321" x1="0" y1="0" x2="706" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1322" x1="0" y1="0" x2="706" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1323" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1324" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-point-annotations"></g></g><text id="SvgjsText1258" font-family="Helvetica, Arial, sans-serif" x="10" y="20.5" text-anchor="start" dominant-baseline="auto" font-size="18px" font-weight="900" fill="#373d3f" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;"></text><g id="SvgjsG1299" class="apexcharts-yaxis" rel="0" transform="translate(18, 0)"><g id="SvgjsG1300" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1301" font-family="Helvetica, Arial, sans-serif" x="20" y="36.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#777777" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1302">800</tspan></text><text id="SvgjsText1303" font-family="Helvetica, Arial, sans-serif" x="20" y="106.65" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#777777" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1304">600</tspan></text><text id="SvgjsText1305" font-family="Helvetica, Arial, sans-serif" x="20" y="176.9" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#777777" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1306">400</tspan></text><text id="SvgjsText1307" font-family="Helvetica, Arial, sans-serif" x="20" y="247.15" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#777777" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1308">200</tspan></text><text id="SvgjsText1309" font-family="Helvetica, Arial, sans-serif" x="20" y="317.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#777777" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1310">0</tspan></text></g></g><g id="SvgjsG1257" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(112, 196, 207);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 94, 225);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 781px; height: 382px;"></div></div><div class="contract-trigger"></div></div></div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xl-6 d-flex">

        <div class="card flex-fill student-space comman-shadow">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title">Star Students</h5>
                <ul class="chart-list-out student-ellips">
                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table star-student table-hover table-center table-borderless table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Marks</th>
                                <th class="text-center">Percentage</th>
                                <th class="text-end">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" width="25" alt="Star Students">
                                        John Smith
                                    </a>
                                </td>
                                <td class="text-center">1185</td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2019</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1245</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="25" alt="Star Students">
                                        Jolie Hoskins
                                    </a>
                                </td>
                                <td class="text-center">1195</td>
                                <td class="text-center">99.5%</td>
                                <td class="text-end">
                                    <div>2018</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1625</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-03.jpg" width="25" alt="Star Students">
                                        Pennington Joy
                                    </a>
                                </td>
                                <td class="text-center">1196</td>
                                <td class="text-center">99.6%</td>
                                <td class="text-end">
                                    <div>2017</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2516</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-04.jpg" width="25" alt="Star Students">
                                        Millie Marsden
                                    </a>
                                </td>
                                <td class="text-center">1187</td>
                                <td class="text-center">98.2%</td>
                                <td class="text-end">
                                    <div>2016</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" width="25" alt="Star Students">
                                        John Smith
                                    </a>
                                </td>
                                <td class="text-center">1185</td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2015</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-6 d-flex">

        <div class="card flex-fill comman-shadow">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title ">Student Activity </h5>
                <ul class="chart-list-out student-ellips">
                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="activity-groups">
                    <div class="activity-awards">
                        <div class="award-boxs">
                            <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                        </div>
                        <div class="award-list-outs">
                            <h4>1st place in "Chess”</h4>
                            <h5>John Doe won 1st place in "Chess"</h5>
                        </div>
                        <div class="award-time-list">
                            <span>1 Day ago</span>
                        </div>
                    </div>
                    <div class="activity-awards">
                        <div class="award-boxs">
                            <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                        </div>
                        <div class="award-list-outs">
                            <h4>Participated in "Carrom"</h4>
                            <h5>Justin Lee participated in "Carrom"</h5>
                        </div>
                        <div class="award-time-list">
                            <span>2 hours ago</span>
                        </div>
                    </div>
                    <div class="activity-awards">
                        <div class="award-boxs">
                            <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                        </div>
                        <div class="award-list-outs">
                            <h4>Internation conference in "St.John School"</h4>
                            <h5>Justin Leeattended internation conference in "St.John School"</h5>
                        </div>
                        <div class="award-time-list">
                            <span>2 Week ago</span>
                        </div>
                    </div>
                    <div class="activity-awards mb-0">
                        <div class="award-boxs">
                            <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                        </div>
                        <div class="award-list-outs">
                            <h4>Won 1st place in "Chess"</h4>
                            <h5>John Doe won 1st place in "Chess"</h5>
                        </div>
                        <div class="award-time-list">
                            <span>3 Day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill fb sm-box">
            <div class="social-likes">
                <p>Like us on facebook</p>
                <h6>50,095</h6>
            </div>
            <div class="social-boxs">
                <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill twitter sm-box">
            <div class="social-likes">
                <p>Follow us on twitter</p>
                <h6>48,596</h6>
            </div>
            <div class="social-boxs">
                <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill insta sm-box">
            <div class="social-likes">
                <p>Follow us on instagram</p>
                <h6>52,085</h6>
            </div>
            <div class="social-boxs">
                <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill linkedin sm-box">
            <div class="social-likes">
                <p>Follow us on linkedin</p>
                <h6>69,050</h6>
            </div>
            <div class="social-boxs">
                <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection
