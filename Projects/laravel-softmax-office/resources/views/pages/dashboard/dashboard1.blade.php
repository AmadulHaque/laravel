@extends('app') <!-- If you have a layout -->
@section('content')
<div class="page-header">
    <div class="row">
    <div class="col-sm-12">
    <div class="page-sub-header">
    <h3 class="page-title">Welcome Jonathan!</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Teacher</li>
    </ul>
    </div>
    </div>
    </div>
    </div>


    <div class="row">
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
    <div class="card bg-comman w-100">
    <div class="card-body">
    <div class="db-widgets d-flex justify-content-between align-items-center">
    <div class="db-info">
    <h6>Total Classes</h6>
    <h3>04/06</h3>
    </div>
    <div class="db-icon">
    <img src="assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
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
    <h6>Total Students</h6>
    <h3>40/60</h3>
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
    <h6>Total Lessons</h6>
    <h3>30/50</h3>
    </div>
    <div class="db-icon">
    <img src="assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
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
    <h6>Total Hours</h6>
    <h3>15/20</h3>
    </div>
    <div class="db-icon">
    <img src="assets/img/icons/teacher-icon-03.svg" alt="Dashboard Icon">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="row">
    <div class="col-12 col-lg-12 col-xl-8">
    <div class="row">
    <div class="col-12 col-lg-8 col-xl-8 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-header">
    <div class="row align-items-center">
     <div class="col-6">
    <h5 class="card-title">Upcoming Lesson</h5>
    </div>
    <div class="col-6">
    <span class="float-end view-link"><a href="#">View All Courses</a></span>
    </div>
    </div>
    </div>
    <div class="pt-3 pb-3">
    <div class="table-responsive lesson">
    <table class="table table-center">
    <tbody>
    <tr>
    <td>
    <div class="date">
    <b>Lessons 30</b>
    <p>3.1 Ipsuum dolor</p>
    <ul class="teacher-date-list">
    <li><i class="fas fa-calendar-alt me-2"></i>Sep 5, 2023</li>
    <li>|</li>
    <li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
    </ul>
    </div>
    </td>
    <td>
    <div class="lesson-confirm">
    <a href="#">Confirmed</a>
    </div>
    <button type="submit" class="btn btn-info">Reschedule</button>
    </td>
    </tr>
    <tr>
    <td>
    <div class="date">
    <b>Lessons 30</b>
    <p>3.1 Ipsuum dolor</p>
    <ul class="teacher-date-list">
    <li><i class="fas fa-calendar-alt me-2"></i>Sep 5, 2023</li>
    <li>|</li>
    <li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am</li>
    </ul>
    </div>
    </td>
    <td>
    <div class="lesson-confirm">
    <a href="#">Confirmed</a>
    </div>
    <button type="submit" class="btn btn-info">Reschedule</button>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-lg-4 col-xl-4 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-header">
    <div class="row align-items-center">
    <div class="col-12">
    <h5 class="card-title">Semester Progress</h5>
    </div>
    </div>
    </div>
    <div class="dash-widget">
    <div class="circle-bar circle-bar1">
    <div class="circle-graph1" data-percent="50"><canvas width="400" height="400"></canvas>
    <div class="progress-less">
    <b>55/60</b>
    <p>Lesson Progressed</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12 col-lg-12 col-xl-12 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-header">
    <div class="row align-items-center">
    <div class="col-6">
    <h5 class="card-title">Teaching Activity</h5>
    </div>
    <div class="col-6">
    <ul class="chart-list-out">
    <li><span class="circle-blue"></span>Teacher</li>
    <li><span class="circle-green"></span>Students</li>
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="card-body">
    <div id="school-area" style="min-height: 365px;"><div id="apexchartsrmys0c4e" class="apexcharts-canvas apexchartsrmys0c4e apexcharts-theme-light" style="width: 998px; height: 350px;"><svg id="SvgjsSvg1006" width="998" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="998" height="350"><div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1" seriesname="Teachers" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(61, 94, 225); color: rgb(61, 94, 225); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Teachers" data:collapsed="false">Teachers</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2" seriesname="Students" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(112, 196, 207); color: rgb(112, 196, 207); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Students" data:collapsed="false">Students</span></div></div><style type="text/css">

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
          }</style></foreignObject><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(42, 30)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskrmys0c4e"><rect id="SvgjsRect1014" width="954" height="267.348" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskrmys0c4e"><rect id="SvgjsRect1015" width="950" height="267.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1020" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1021" stop-opacity="0.65" stop-color="rgba(61,94,225,0.65)" offset="0"></stop><stop id="SvgjsStop1022" stop-opacity="0.5" stop-color="rgba(158,175,240,0.5)" offset="1"></stop><stop id="SvgjsStop1023" stop-opacity="0.5" stop-color="rgba(158,175,240,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1029" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1030" stop-opacity="0.65" stop-color="rgba(112,196,207,0.65)" offset="0"></stop><stop id="SvgjsStop1031" stop-opacity="0.5" stop-color="rgba(184,226,231,0.5)" offset="1"></stop><stop id="SvgjsStop1032" stop-opacity="0.5" stop-color="rgba(184,226,231,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1013" x1="0" y1="0" x2="0" y2="263.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="263.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1035" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1036" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1038" font-family="Helvetica, Arial, sans-serif" x="0" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1039">Jan</tspan><title>Jan</title></text><text id="SvgjsText1041" font-family="Helvetica, Arial, sans-serif" x="157.66666666666669" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1042">Feb</tspan><title>Feb</title></text><text id="SvgjsText1044" font-family="Helvetica, Arial, sans-serif" x="315.3333333333333" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1045">Mar</tspan><title>Mar</title></text><text id="SvgjsText1047" font-family="Helvetica, Arial, sans-serif" x="472.99999999999994" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1048">Apr</tspan><title>Apr</title></text><text id="SvgjsText1050" font-family="Helvetica, Arial, sans-serif" x="630.6666666666665" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1051">May</tspan><title>May</title></text><text id="SvgjsText1053" font-family="Helvetica, Arial, sans-serif" x="788.3333333333331" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1054">Jun</tspan><title>Jun</title></text><text id="SvgjsText1056" font-family="Helvetica, Arial, sans-serif" x="945.9999999999999" y="292.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1057">Jul</tspan><title>Jul</title></text></g><line id="SvgjsLine1058" x1="0" y1="264.348" x2="946" y2="264.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1075" class="apexcharts-grid"><g id="SvgjsG1076" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1085" x1="0" y1="0" x2="946" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1086" x1="0" y1="43.891333333333336" x2="946" y2="43.891333333333336" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1087" x1="0" y1="87.78266666666667" x2="946" y2="87.78266666666667" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1088" x1="0" y1="131.674" x2="946" y2="131.674" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1089" x1="0" y1="175.56533333333334" x2="946" y2="175.56533333333334" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1090" x1="0" y1="219.45666666666668" x2="946" y2="219.45666666666668" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1091" x1="0" y1="263.348" x2="946" y2="263.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1077" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1078" x1="0" y1="264.348" x2="0" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1079" x1="157.66666666666666" y1="264.348" x2="157.66666666666666" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1080" x1="315.3333333333333" y1="264.348" x2="315.3333333333333" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1081" x1="473" y1="264.348" x2="473" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1082" x1="630.6666666666666" y1="264.348" x2="630.6666666666666" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1083" x1="788.3333333333333" y1="264.348" x2="788.3333333333333" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1084" x1="945.9999999999999" y1="264.348" x2="945.9999999999999" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1093" x1="0" y1="263.348" x2="946" y2="263.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1092" x1="0" y1="1" x2="0" y2="263.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1016" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1017" class="apexcharts-series" seriesName="Teachers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1024" d="M0 263.348L0 153.61966666666666L157.66666666666666 87.78266666666667L315.3333333333333 21.945666666666682L473 127.28486666666666L630.6666666666666 166.78706666666668L788.3333333333334 166.78706666666668L946 219.45666666666668C946 219.45666666666668 946 263.348 946 263.348M946 219.45666666666668C946 219.45666666666668 946 219.45666666666668 946 219.45666666666668 " fill="url(#SvgjsLinearGradient1020)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrmys0c4e)" pathTo="M 0 263.348L 0 153.61966666666666L 157.66666666666666 87.78266666666667L 315.3333333333333 21.945666666666682L 473 127.28486666666666L 630.6666666666666 166.78706666666668L 788.3333333333334 166.78706666666668L 946 219.45666666666668L 946 263.348M 946 219.45666666666668z" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 157.66666666666666 351.1306666666667L 315.3333333333333 351.1306666666667L 473 351.1306666666667L 630.6666666666666 351.1306666666667L 788.3333333333334 351.1306666666667L 946 351.1306666666667"></path><path id="SvgjsPath1025" d="M0 153.61966666666666L157.66666666666666 87.78266666666667L315.3333333333333 21.945666666666682L473 127.28486666666666L630.6666666666666 166.78706666666668L788.3333333333334 166.78706666666668L946 219.45666666666668C946 219.45666666666668 946 219.45666666666668 946 219.45666666666668 " fill="none" fill-opacity="1" stroke="#3d5ee1" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrmys0c4e)" pathTo="M 0 153.61966666666666L 157.66666666666666 87.78266666666667L 315.3333333333333 21.945666666666682L 473 127.28486666666666L 630.6666666666666 166.78706666666668L 788.3333333333334 166.78706666666668L 946 219.45666666666668" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 157.66666666666666 351.1306666666667L 315.3333333333333 351.1306666666667L 473 351.1306666666667L 630.6666666666666 351.1306666666667L 788.3333333333334 351.1306666666667L 946 351.1306666666667"></path><g id="SvgjsG1018" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1099" r="0" cx="0" cy="0" class="apexcharts-marker wqk0xi1qq no-pointer-events" stroke="#ffffff" fill="#3d5ee1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1026" class="apexcharts-series" seriesName="Students" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1033" d="M0 263.348L0 245.79146666666668L157.66666666666666 140.45226666666667L315.3333333333333 105.3392L473 210.6784L630.6666666666666 201.90013333333334L788.3333333333334 122.89573333333334L946 241.40233333333333C946 241.40233333333333 946 263.348 946 263.348M946 241.40233333333333C946 241.40233333333333 946 241.40233333333333 946 241.40233333333333 " fill="url(#SvgjsLinearGradient1029)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrmys0c4e)" pathTo="M 0 263.348L 0 245.79146666666668L 157.66666666666666 140.45226666666667L 315.3333333333333 105.3392L 473 210.6784L 630.6666666666666 201.90013333333334L 788.3333333333334 122.89573333333334L 946 241.40233333333333L 946 263.348M 946 241.40233333333333z" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 157.66666666666666 351.1306666666667L 315.3333333333333 351.1306666666667L 473 351.1306666666667L 630.6666666666666 351.1306666666667L 788.3333333333334 351.1306666666667L 946 351.1306666666667"></path><path id="SvgjsPath1034" d="M0 245.79146666666668L157.66666666666666 140.45226666666667L315.3333333333333 105.3392L473 210.6784L630.6666666666666 201.90013333333334L788.3333333333334 122.89573333333334L946 241.40233333333333C946 241.40233333333333 946 241.40233333333333 946 241.40233333333333 " fill="none" fill-opacity="1" stroke="#70c4cf" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrmys0c4e)" pathTo="M 0 245.79146666666668L 157.66666666666666 140.45226666666667L 315.3333333333333 105.3392L 473 210.6784L 630.6666666666666 201.90013333333334L 788.3333333333334 122.89573333333334L 946 241.40233333333333" pathFrom="M -1 351.1306666666667L -1 351.1306666666667L 157.66666666666666 351.1306666666667L 315.3333333333333 351.1306666666667L 473 351.1306666666667L 630.6666666666666 351.1306666666667L 788.3333333333334 351.1306666666667L 946 351.1306666666667"></path><g id="SvgjsG1027" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1100" r="0" cx="0" cy="0" class="apexcharts-marker wy0zevjtb no-pointer-events" stroke="#ffffff" fill="#70c4cf" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1019" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1028" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1094" x1="0" y1="0" x2="946" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1095" x1="0" y1="0" x2="946" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1096" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1097" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1098" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1101" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1102" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1012" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1059" class="apexcharts-yaxis" rel="0" transform="translate(12, 0)"><g id="SvgjsG1060" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1061" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1062">80</tspan></text><text id="SvgjsText1063" font-family="Helvetica, Arial, sans-serif" x="20" y="75.49133333333333" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1064">70</tspan></text><text id="SvgjsText1065" font-family="Helvetica, Arial, sans-serif" x="20" y="119.38266666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1066">60</tspan></text><text id="SvgjsText1067" font-family="Helvetica, Arial, sans-serif" x="20" y="163.274" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1068">50</tspan></text><text id="SvgjsText1069" font-family="Helvetica, Arial, sans-serif" x="20" y="207.16533333333334" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1070">40</tspan></text><text id="SvgjsText1071" font-family="Helvetica, Arial, sans-serif" x="20" y="251.05666666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1072">30</tspan></text><text id="SvgjsText1073" font-family="Helvetica, Arial, sans-serif" x="20" y="294.94800000000004" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1074">20</tspan></text></g></g><g id="SvgjsG1009" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 94, 225);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(112, 196, 207);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 1049px; height: 416px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-12 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-header d-flex align-items-center">
    <h5 class="card-title">Teaching History</h5>
    <ul class="chart-list-out student-ellips">
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="teaching-card">
    <ul class="steps-history">
    <li>Sep22</li>
    <li>Sep23</li>
    <li>Sep24</li>
    </ul>
    <ul class="activity-feed">
    <li class="feed-item d-flex align-items-center">
    <div class="dolor-activity">
    <span class="feed-text1"><a>Mathematics</a></span>
    <ul class="teacher-date-list">
    <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2023</li>
    <li>|</li>
    <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
    </ul>
    </div>
    <div class="activity-btns ms-auto">
    <button type="submit" class="btn btn-info">In Progress</button>
    </div>
    </li>
    <li class="feed-item d-flex align-items-center">
    <div class="dolor-activity">
    <span class="feed-text1"><a>Geography	</a></span>
    <ul class="teacher-date-list">
    <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2023</li>
    <li>|</li>
    <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
    </ul>
    </div>
    <div class="activity-btns ms-auto">
    <button type="submit" class="btn btn-info">Completed</button>
    </div>
    </li>
    <li class="feed-item d-flex align-items-center">
    <div class="dolor-activity">
    <span class="feed-text1"><a>Botony</a></span>
    <ul class="teacher-date-list">
    <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2023</li>
    <li>|</li>
    <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
    </ul>
    </div>
    <div class="activity-btns ms-auto">
    <button type="submit" class="btn btn-info">In Progress</button>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-4 d-flex">
    <div class="card flex-fill comman-shadow">
    <div class="card-body">
    <div id="calendar-doctor" class="calendar-container"><div class="calendar"><header><h2 class="month">december <div class="year">2023</div></h2><a class="simple-calendar-btn btn-prev" href="#"></a><a class="simple-calendar-btn btn-next" href="#"></a></header><table><thead><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thu</td><td>fri</td><td>sat</td></thead><tbody><tr><td><div class="day wrong-month disabled" data-date="2023-11-25T18:00:00.000Z">26</div></td><td><div class="day wrong-month disabled" data-date="2023-11-27T06:00:00.000Z">27</div></td><td><div class="day wrong-month disabled" data-date="2023-11-28T06:00:00.000Z">28</div></td><td><div class="day wrong-month disabled" data-date="2023-11-29T06:00:00.000Z">29</div></td><td><div class="day wrong-month disabled" data-date="2023-11-30T06:00:00.000Z">30</div></td><td><div class="day disabled" data-date="2023-12-01T06:00:00.000Z">1</div></td><td><div class="day disabled" data-date="2023-12-02T06:00:00.000Z">2</div></td></tr><tr><td><div class="day disabled" data-date="2023-12-03T06:00:00.000Z">3</div></td><td><div class="day disabled" data-date="2023-12-04T06:00:00.000Z">4</div></td><td><div class="day has-event" data-date="2023-12-05T06:00:00.000Z">5</div></td><td><div class="day has-event" data-date="2023-12-06T06:00:00.000Z">6</div></td><td><div class="day today disabled" data-date="2023-12-07T06:00:00.000Z">7</div></td><td><div class="day has-event" data-date="2023-12-08T06:00:00.000Z">8</div></td><td><div class="day has-event" data-date="2023-12-09T06:00:00.000Z">9</div></td></tr><tr><td><div class="day disabled" data-date="2023-12-10T06:00:00.000Z">10</div></td><td><div class="day disabled" data-date="2023-12-11T06:00:00.000Z">11</div></td><td><div class="day disabled" data-date="2023-12-12T06:00:00.000Z">12</div></td><td><div class="day disabled" data-date="2023-12-13T06:00:00.000Z">13</div></td><td><div class="day disabled" data-date="2023-12-14T06:00:00.000Z">14</div></td><td><div class="day disabled" data-date="2023-12-15T06:00:00.000Z">15</div></td><td><div class="day disabled" data-date="2023-12-16T06:00:00.000Z">16</div></td></tr><tr><td><div class="day disabled" data-date="2023-12-17T06:00:00.000Z">17</div></td><td><div class="day disabled" data-date="2023-12-18T06:00:00.000Z">18</div></td><td><div class="day disabled" data-date="2023-12-19T06:00:00.000Z">19</div></td><td><div class="day disabled" data-date="2023-12-20T06:00:00.000Z">20</div></td><td><div class="day disabled" data-date="2023-12-21T06:00:00.000Z">21</div></td><td><div class="day disabled" data-date="2023-12-22T06:00:00.000Z">22</div></td><td><div class="day disabled" data-date="2023-12-23T06:00:00.000Z">23</div></td></tr><tr><td><div class="day disabled" data-date="2023-12-24T06:00:00.000Z">24</div></td><td><div class="day disabled" data-date="2023-12-25T06:00:00.000Z">25</div></td><td><div class="day disabled" data-date="2023-12-26T06:00:00.000Z">26</div></td><td><div class="day disabled" data-date="2023-12-27T06:00:00.000Z">27</div></td><td><div class="day disabled" data-date="2023-12-28T06:00:00.000Z">28</div></td><td><div class="day disabled" data-date="2023-12-29T06:00:00.000Z">29</div></td><td><div class="day disabled" data-date="2023-12-30T06:00:00.000Z">30</div></td></tr></tbody></table><div class="event-container"><div class="close"></div><div class="event-wrapper"></div></div></div></div>
    <div class="calendar-info calendar-info1">
    <div class="up-come-header">
    <h2>Upcoming Events</h2>
    <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
    </div>
    <div class="upcome-event-date">
    <h3>10 Jan</h3>
    <span><i class="fas fa-ellipsis-h"></i></span>
    </div>
    <div class="calendar-details">
    <p>08:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>Botony</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>08:00 - 09:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>09:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>Botony</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>09:00 - 10:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>10:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>Botony</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>10:00 - 11:00 am</span>
    </div>
    </div>
    <div class="upcome-event-date">
    <h3>10 Jan</h3>
    <span><i class="fas fa-ellipsis-h"></i></span>
    </div>
    <div class="calendar-details">
    <p>08:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>English</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>08:00 - 09:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>09:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>Mathematics	</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>09:00 - 10:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>10:00 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>History</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>10:00 - 11:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>11:00 am</p>
    <div class="calendar-box break-bg">
    <div class="calandar-event-name">
    <h4>Break</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>11:00 - 12:00 am</span>
    </div>
    </div>
    <div class="calendar-details">
    <p>11:30 am</p>
    <div class="calendar-box normal-bg">
    <div class="calandar-event-name">
    <h4>History</h4>
    <h5>Lorem ipsum sit amet</h5>
    </div>
    <span>11:30 - 12:00 am</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    @endsection
