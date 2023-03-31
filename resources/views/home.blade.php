@extends('layouts.app')

@section('content')
@include('menu')
<div class="container-fluid">
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10" bis_skin_checked="1">
               
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-20" bis_skin_checked="1">
                    <!--begin::Card widget 4-->
                    <div class="card card-flush overflow-hidden mb-5 h-md-50" bis_skin_checked="1">
                        <!--begin::Header-->
                        <div class="card-header py-5" bis_skin_checked="1">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Ventas Anuales</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">De todas las plataformas</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <!-- <div class="card-toolbar">
                                <a href="../../demo17/dist/apps/ecommerce/catalog/products.html" class="btn btn-sm btn-light-primary fw-bolder">Launch eCommerce App</a>
                            </div> -->
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0"
                            bis_skin_checked="1">
                            <!--begin::Statistics-->
                            <div class="px-9 mb-5" bis_skin_checked="1">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2" bis_skin_checked="1">

                                    <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">1,098,050</span><span
                                        class="fs-4 fw-bold text-gray-400 me-1">€</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-bold text-gray-400">Se han hecho un total de 3.500 pedidos.</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3" class="    min-h-auto ps-4 pe-6"
                                style="height: 300px; min-height: 315px;" bis_skin_checked="1">
                                <div id="apexchartsss42j27p"
                                    class="apexcharts-canvas apexchartsss42j27p apexcharts-theme-light"
                                    bis_skin_checked="1" style="width: 405.5px; height: 300px;"><svg id="SvgjsSvg1139"
                                        width="405.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1141" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(58.63198280334473, 30)">
                                            <defs id="SvgjsDefs1140">
                                                <clipPath id="gridRectMaskss42j27p">
                                                    <rect id="SvgjsRect1146" width="343.8680171966553"
                                                        height="222.87839876556396" x="-3.5" y="-1.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskss42j27p"></clipPath>
                                                <clipPath id="nonForecastMaskss42j27p"></clipPath>
                                                <clipPath id="gridRectMarkerMaskss42j27p">
                                                    <rect id="SvgjsRect1147" width="340.8680171966553"
                                                        height="223.87839876556396" x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1152" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1153" stop-opacity="0.3"
                                                        stop-color="rgba(0,158,247,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1154" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1155" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1158" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1159" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText1161"
                                                        font-family="inherit" x="0" y="242.87839876556396"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1162"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1164" font-family="inherit"
                                                        x="18.71488984425863" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1165"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1167" font-family="inherit"
                                                        x="37.42977968851725" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1168"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1170" font-family="inherit"
                                                        x="56.14466953277587" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 57.36514854431152 237.47840023040771)">
                                                        <tspan id="SvgjsTspan1171">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1173" font-family="inherit"
                                                        x="74.85955937703449" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1174"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1176" font-family="inherit"
                                                        x="93.57444922129311" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1177"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1179" font-family="inherit"
                                                        x="112.28933906555173" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 113.28933525085449 237.47840023040771)">
                                                        <tspan id="SvgjsTspan1180">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1182" font-family="inherit"
                                                        x="131.00422890981037" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1183"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1185" font-family="inherit"
                                                        x="149.719118754069" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1186"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1188" font-family="inherit"
                                                        x="168.43400859832764" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 169.43401527404785 237.47840023040771)">
                                                        <tspan id="SvgjsTspan1189">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1191" font-family="inherit"
                                                        x="187.14889844258627" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1192"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1194" font-family="inherit"
                                                        x="205.8637882868449" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1195"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1197" font-family="inherit"
                                                        x="224.57867813110354" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 225.63865089416504 237.47840023040771)">
                                                        <tspan id="SvgjsTspan1198">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1200" font-family="inherit"
                                                        x="243.29356797536218" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1201"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1203" font-family="inherit"
                                                        x="262.0084578196208" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1204"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1206" font-family="inherit"
                                                        x="280.7233476638794" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 281.7233715057373 237.47840023040771)">
                                                        <tspan id="SvgjsTspan1207">Apr 16</tspan>
                                                        <title>Apr 16</title>
                                                    </text><text id="SvgjsText1209" font-family="inherit"
                                                        x="299.438237508138" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1210"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1212" font-family="inherit"
                                                        x="318.1531273523966" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1213"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1215" font-family="inherit"
                                                        x="336.8680171966552" y="242.87839876556396" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1216"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1229" class="apexcharts-grid">
                                                <g id="SvgjsG1230" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1232" x1="0" y1="0" x2="336.8680171966553" y2="0"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1233" x1="0" y1="54.96959969139099"
                                                        x2="336.8680171966553" y2="54.96959969139099" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1234" x1="0" y1="109.93919938278198"
                                                        x2="336.8680171966553" y2="109.93919938278198" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1235" x1="0" y1="164.90879907417298"
                                                        x2="336.8680171966553" y2="164.90879907417298" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1236" x1="0" y1="219.87839876556396"
                                                        x2="336.8680171966553" y2="219.87839876556396" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1231" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1238" x1="0" y1="219.87839876556396"
                                                    x2="336.8680171966553" y2="219.87839876556396" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1237" x1="0" y1="1" x2="0" y2="219.87839876556396"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1148" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1149" class="apexcharts-series" seriesName="Sales"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1156"
                                                        d="M 0 219.87839876556396L 0 94.233599470956C 6.550211445490518 94.233599470956 12.164678398768107 94.233599470956 18.714889844258625 94.233599470956C 25.265101289749143 94.233599470956 30.879568243026732 62.822399647303996 37.42977968851725 62.822399647303996C 43.97999113400777 62.822399647303996 49.59445808728536 62.822399647303996 56.14466953277588 62.822399647303996C 62.6948809782664 62.822399647303996 68.30934793154398 94.233599470956 74.8595593770345 94.233599470956C 81.40977082252502 94.233599470956 87.0242377758026 94.233599470956 93.57444922129312 94.233599470956C 100.12466066678364 94.233599470956 105.73912762006124 31.411199823651998 112.28933906555176 31.411199823651998C 118.83955051104228 31.411199823651998 124.45401746431985 31.411199823651998 131.00422890981037 31.411199823651998C 137.5544403553009 31.411199823651998 143.16890730857847 62.822399647303996 149.719118754069 62.822399647303996C 156.26933019955953 62.822399647303996 161.8837971528371 62.822399647303996 168.43400859832764 62.822399647303996C 174.98422004381814 62.822399647303996 180.59868699709574 94.233599470956 187.14889844258624 94.233599470956C 193.69910988807678 94.233599470956 199.31357684135435 94.233599470956 205.86378828684488 94.233599470956C 212.4139997323354 94.233599470956 218.02846668561298 62.822399647303996 224.57867813110352 62.822399647303996C 231.12888957659402 62.822399647303996 236.74335652987162 62.822399647303996 243.29356797536212 62.822399647303996C 249.84377942085263 62.822399647303996 255.45824637413023 94.233599470956 262.00845781962073 94.233599470956C 268.55866926511123 94.233599470956 274.1731362183889 94.233599470956 280.7233476638794 94.233599470956C 287.2735591093699 94.233599470956 292.8880260626475 62.822399647303996 299.438237508138 62.822399647303996C 305.9884489536285 62.822399647303996 311.6029159069061 62.822399647303996 318.1531273523966 62.822399647303996C 324.7033387978871 62.822399647303996 330.31780575116477 31.411199823651998 336.8680171966553 31.411199823651998C 336.8680171966553 31.411199823651998 336.8680171966553 31.411199823651998 336.8680171966553 219.87839876556396M 336.8680171966553 31.411199823651998z"
                                                        fill="url(#SvgjsLinearGradient1152)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskss42j27p)"
                                                        pathTo="M 0 219.87839876556396L 0 94.233599470956C 6.550211445490518 94.233599470956 12.164678398768107 94.233599470956 18.714889844258625 94.233599470956C 25.265101289749143 94.233599470956 30.879568243026732 62.822399647303996 37.42977968851725 62.822399647303996C 43.97999113400777 62.822399647303996 49.59445808728536 62.822399647303996 56.14466953277588 62.822399647303996C 62.6948809782664 62.822399647303996 68.30934793154398 94.233599470956 74.8595593770345 94.233599470956C 81.40977082252502 94.233599470956 87.0242377758026 94.233599470956 93.57444922129312 94.233599470956C 100.12466066678364 94.233599470956 105.73912762006124 31.411199823651998 112.28933906555176 31.411199823651998C 118.83955051104228 31.411199823651998 124.45401746431985 31.411199823651998 131.00422890981037 31.411199823651998C 137.5544403553009 31.411199823651998 143.16890730857847 62.822399647303996 149.719118754069 62.822399647303996C 156.26933019955953 62.822399647303996 161.8837971528371 62.822399647303996 168.43400859832764 62.822399647303996C 174.98422004381814 62.822399647303996 180.59868699709574 94.233599470956 187.14889844258624 94.233599470956C 193.69910988807678 94.233599470956 199.31357684135435 94.233599470956 205.86378828684488 94.233599470956C 212.4139997323354 94.233599470956 218.02846668561298 62.822399647303996 224.57867813110352 62.822399647303996C 231.12888957659402 62.822399647303996 236.74335652987162 62.822399647303996 243.29356797536212 62.822399647303996C 249.84377942085263 62.822399647303996 255.45824637413023 94.233599470956 262.00845781962073 94.233599470956C 268.55866926511123 94.233599470956 274.1731362183889 94.233599470956 280.7233476638794 94.233599470956C 287.2735591093699 94.233599470956 292.8880260626475 62.822399647303996 299.438237508138 62.822399647303996C 305.9884489536285 62.822399647303996 311.6029159069061 62.822399647303996 318.1531273523966 62.822399647303996C 324.7033387978871 62.822399647303996 330.31780575116477 31.411199823651998 336.8680171966553 31.411199823651998C 336.8680171966553 31.411199823651998 336.8680171966553 31.411199823651998 336.8680171966553 219.87839876556396M 336.8680171966553 31.411199823651998z"
                                                        pathFrom="M -1 376.9343978838239L -1 376.9343978838239L 18.714889844258625 376.9343978838239L 37.42977968851725 376.9343978838239L 56.14466953277588 376.9343978838239L 74.8595593770345 376.9343978838239L 93.57444922129312 376.9343978838239L 112.28933906555176 376.9343978838239L 131.00422890981037 376.9343978838239L 149.719118754069 376.9343978838239L 168.43400859832764 376.9343978838239L 187.14889844258624 376.9343978838239L 205.86378828684488 376.9343978838239L 224.57867813110352 376.9343978838239L 243.29356797536212 376.9343978838239L 262.00845781962073 376.9343978838239L 280.7233476638794 376.9343978838239L 299.438237508138 376.9343978838239L 318.1531273523966 376.9343978838239L 336.8680171966553 376.9343978838239">
                                                    </path>
                                                    <path id="SvgjsPath1157"
                                                        d="M 0 94.233599470956C 6.550211445490518 94.233599470956 12.164678398768107 94.233599470956 18.714889844258625 94.233599470956C 25.265101289749143 94.233599470956 30.879568243026732 62.822399647303996 37.42977968851725 62.822399647303996C 43.97999113400777 62.822399647303996 49.59445808728536 62.822399647303996 56.14466953277588 62.822399647303996C 62.6948809782664 62.822399647303996 68.30934793154398 94.233599470956 74.8595593770345 94.233599470956C 81.40977082252502 94.233599470956 87.0242377758026 94.233599470956 93.57444922129312 94.233599470956C 100.12466066678364 94.233599470956 105.73912762006124 31.411199823651998 112.28933906555176 31.411199823651998C 118.83955051104228 31.411199823651998 124.45401746431985 31.411199823651998 131.00422890981037 31.411199823651998C 137.5544403553009 31.411199823651998 143.16890730857847 62.822399647303996 149.719118754069 62.822399647303996C 156.26933019955953 62.822399647303996 161.8837971528371 62.822399647303996 168.43400859832764 62.822399647303996C 174.98422004381814 62.822399647303996 180.59868699709574 94.233599470956 187.14889844258624 94.233599470956C 193.69910988807678 94.233599470956 199.31357684135435 94.233599470956 205.86378828684488 94.233599470956C 212.4139997323354 94.233599470956 218.02846668561298 62.822399647303996 224.57867813110352 62.822399647303996C 231.12888957659402 62.822399647303996 236.74335652987162 62.822399647303996 243.29356797536212 62.822399647303996C 249.84377942085263 62.822399647303996 255.45824637413023 94.233599470956 262.00845781962073 94.233599470956C 268.55866926511123 94.233599470956 274.1731362183889 94.233599470956 280.7233476638794 94.233599470956C 287.2735591093699 94.233599470956 292.8880260626475 62.822399647303996 299.438237508138 62.822399647303996C 305.9884489536285 62.822399647303996 311.6029159069061 62.822399647303996 318.1531273523966 62.822399647303996C 324.7033387978871 62.822399647303996 330.31780575116477 31.411199823651998 336.8680171966553 31.411199823651998"
                                                        fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskss42j27p)"
                                                        pathTo="M 0 94.233599470956C 6.550211445490518 94.233599470956 12.164678398768107 94.233599470956 18.714889844258625 94.233599470956C 25.265101289749143 94.233599470956 30.879568243026732 62.822399647303996 37.42977968851725 62.822399647303996C 43.97999113400777 62.822399647303996 49.59445808728536 62.822399647303996 56.14466953277588 62.822399647303996C 62.6948809782664 62.822399647303996 68.30934793154398 94.233599470956 74.8595593770345 94.233599470956C 81.40977082252502 94.233599470956 87.0242377758026 94.233599470956 93.57444922129312 94.233599470956C 100.12466066678364 94.233599470956 105.73912762006124 31.411199823651998 112.28933906555176 31.411199823651998C 118.83955051104228 31.411199823651998 124.45401746431985 31.411199823651998 131.00422890981037 31.411199823651998C 137.5544403553009 31.411199823651998 143.16890730857847 62.822399647303996 149.719118754069 62.822399647303996C 156.26933019955953 62.822399647303996 161.8837971528371 62.822399647303996 168.43400859832764 62.822399647303996C 174.98422004381814 62.822399647303996 180.59868699709574 94.233599470956 187.14889844258624 94.233599470956C 193.69910988807678 94.233599470956 199.31357684135435 94.233599470956 205.86378828684488 94.233599470956C 212.4139997323354 94.233599470956 218.02846668561298 62.822399647303996 224.57867813110352 62.822399647303996C 231.12888957659402 62.822399647303996 236.74335652987162 62.822399647303996 243.29356797536212 62.822399647303996C 249.84377942085263 62.822399647303996 255.45824637413023 94.233599470956 262.00845781962073 94.233599470956C 268.55866926511123 94.233599470956 274.1731362183889 94.233599470956 280.7233476638794 94.233599470956C 287.2735591093699 94.233599470956 292.8880260626475 62.822399647303996 299.438237508138 62.822399647303996C 305.9884489536285 62.822399647303996 311.6029159069061 62.822399647303996 318.1531273523966 62.822399647303996C 324.7033387978871 62.822399647303996 330.31780575116477 31.411199823651998 336.8680171966553 31.411199823651998"
                                                        pathFrom="M -1 376.9343978838239L -1 376.9343978838239L 18.714889844258625 376.9343978838239L 37.42977968851725 376.9343978838239L 56.14466953277588 376.9343978838239L 74.8595593770345 376.9343978838239L 93.57444922129312 376.9343978838239L 112.28933906555176 376.9343978838239L 131.00422890981037 376.9343978838239L 149.719118754069 376.9343978838239L 168.43400859832764 376.9343978838239L 187.14889844258624 376.9343978838239L 205.86378828684488 376.9343978838239L 224.57867813110352 376.9343978838239L 243.29356797536212 376.9343978838239L 262.00845781962073 376.9343978838239L 280.7233476638794 376.9343978838239L 299.438237508138 376.9343978838239L 318.1531273523966 376.9343978838239L 336.8680171966553 376.9343978838239">
                                                    </path>
                                                    <g id="SvgjsG1150" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1246" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wtfwzayi7j no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1151" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1240" x1="0" y1="0" x2="0" y2="219.87839876556396"
                                                stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                height="219.87839876556396" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1241" x1="0" y1="0" x2="336.8680171966553" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1242" x1="0" y1="0" x2="336.8680171966553" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1243" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1244" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1245" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1247" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1248" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1217" class="apexcharts-yaxis" rel="0"
                                            transform="translate(28.631982803344727, 0)">
                                            <g id="SvgjsG1218" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1219"
                                                    font-family="inherit" x="20" y="31.4" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1220">$2.4K</tspan>
                                                    <title>$2.4K</title>
                                                </text><text id="SvgjsText1221" font-family="inherit" x="20"
                                                    y="86.36959969139099" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1222">$2.0K</tspan>
                                                    <title>$2.0K</title>
                                                </text><text id="SvgjsText1223" font-family="inherit" x="20"
                                                    y="141.33919938278197" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1224">$1.7K</tspan>
                                                    <title>$1.7K</title>
                                                </text><text id="SvgjsText1225" font-family="inherit" x="20"
                                                    y="196.30879907417295" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1226">$1.4K</tspan>
                                                    <title>$1.4K</title>
                                                </text><text id="SvgjsText1227" font-family="inherit" x="20"
                                                    y="251.27839876556394" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1228">$1.0K</tspan>
                                                    <title>$1.0K</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect1239" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1142" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 150px;" bis_skin_checked="1">
                                    </div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1">
                                        <div class="apexcharts-tooltip-title" bis_skin_checked="1"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" bis_skin_checked="1"
                                            style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                        bis_skin_checked="1">
                                        <div class="apexcharts-xaxistooltip-text" bis_skin_checked="1"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                        bis_skin_checked="1">
                                        <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <div class="d-flex flex-row g-5 g-xl-0 mb-xl-10" style="column-gap: 18px;" bis_skin_checked="1">
                        <div class="card card-flush h-md-auto w-50 mb-5 mb-xl-1" style="" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas WP España</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">38,835€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 350 pedidos</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">82%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 82%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush h-md-auto w-50 mb-5 mb-xl-1" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas WP Italia</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">16,854€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 150 pedidos</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">98%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 98%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>

                        <!--end::Card body-->
                    </div>
                    <div bis_skin_checked="1">


                        <!--end::Card widget 4-->
                        <!--begin::Card widget 5-->

                        <div class="card card-flush h-md-auto mb-5 mb-xl-20" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas Comerciales</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">2391€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 70 pedidos</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">75%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 75%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 5-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-20" bis_skin_checked="1">
                    <!--begin::Card widget 4-->
                    <div class="card card-flush overflow-hidden mb-5 h-md-50" bis_skin_checked="1">
                        <!--begin::Header-->
                        <div class="card-header py-5" bis_skin_checked="1">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Ventas del Mes</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">De todas las plataformas</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <!-- <div class="card-toolbar">
                                <a href="../../demo17/dist/apps/ecommerce/catalog/products.html" class="btn btn-sm btn-light-primary fw-bolder">Launch eCommerce App</a>
                            </div> -->
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0"
                            bis_skin_checked="1">
                            <!--begin::Statistics-->
                            <div class="px-9 mb-5" bis_skin_checked="1">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2" bis_skin_checked="1">
                                    <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">70,500</span><span
                                        class="fs-4 fw-bold text-gray-400 me-1">€</span>

                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-bold text-gray-400">Se han hecho un total de 190 pedidos.</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3" class="    min-h-auto ps-4 pe-6"
                                style="height: 300px; min-height: 315px;" bis_skin_checked="1">
                                <div id="apexcharts3ifdf20dh"
                                    class="apexcharts-canvas apexcharts3ifdf20dh apexcharts-theme-light"
                                    style="width: 581.5px; height: 300px;" bis_skin_checked="1"><svg id="SvgjsSvg1056"
                                        width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1058" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(57.4317626953125, 30)">
                                            <defs id="SvgjsDefs1057">
                                                <clipPath id="gridRectMask3ifdf20dh">
                                                    <rect id="SvgjsRect1063" width="521.0682373046875" height="224.82"
                                                        x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask3ifdf20dh"></clipPath>
                                                <clipPath id="nonForecastMask3ifdf20dh"></clipPath>
                                                <clipPath id="gridRectMarkerMask3ifdf20dh">
                                                    <rect id="SvgjsRect1064" width="518.0682373046875" height="225.82"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1069" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1070" stop-opacity="0.4"
                                                        stop-color="rgba(0,158,247,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1071" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                    <stop id="SvgjsStop1072" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskvqg5jmqu">
                                                    <rect id="SvgjsRect1124" width="522.3480224609375"
                                                        height="222.66266666666667" x="-3.5" y="-1.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskvqg5jmqu"></clipPath>
                                                <clipPath id="nonForecastMaskvqg5jmqu"></clipPath>
                                                <clipPath id="gridRectMarkerMaskvqg5jmqu">
                                                    <rect id="SvgjsRect1125" width="519.3480224609375"
                                                        height="223.66266666666667" x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMaski1iaadzv">
                                                    <rect id="SvgjsRect1013" width="519.0680389404297"
                                                        height="222.66266666666667" x="-3.5" y="-1.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaski1iaadzv"></clipPath>
                                                <clipPath id="nonForecastMaski1iaadzv"></clipPath>
                                                <clipPath id="gridRectMarkerMaski1iaadzv">
                                                    <rect id="SvgjsRect1014" width="516.0680389404297"
                                                        height="223.66266666666667" x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1086" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1087" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText1089"
                                                        font-family="inherit" x="0" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1090"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1092" font-family="inherit"
                                                        x="28.559346516927086" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1093"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1095" font-family="inherit"
                                                        x="57.118693033854164" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1096"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1098" font-family="inherit"
                                                        x="85.67803955078124" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 67.41728210449219 239.32000732421875)">
                                                        <tspan id="SvgjsTspan1099">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1101" font-family="inherit"
                                                        x="114.23738606770833" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1102"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1104" font-family="inherit"
                                                        x="142.79673258463544" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1105"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1107" font-family="inherit"
                                                        x="171.35607910156253" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 153.59532165527344 239.32000732421875)">
                                                        <tspan id="SvgjsTspan1108">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1110" font-family="inherit"
                                                        x="199.91542561848962" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1111"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1113" font-family="inherit"
                                                        x="228.4747721354167" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1114"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1116" font-family="inherit"
                                                        x="257.03411865234375" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 240.62847900390625 239.32000732421875)">
                                                        <tspan id="SvgjsTspan1117">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1119" font-family="inherit"
                                                        x="285.5934651692708" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1120"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1122" font-family="inherit"
                                                        x="314.1528116861979" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1123"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1125" font-family="inherit"
                                                        x="342.71215820312494" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 326.313720703125 239.32000732421875)">
                                                        <tspan id="SvgjsTspan1126">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1128" font-family="inherit"
                                                        x="371.271504720052" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1129"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1131" font-family="inherit"
                                                        x="399.8308512369791" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1132"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1134" font-family="inherit"
                                                        x="428.39019775390614" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 411.90643310546875 239.32000732421875)">
                                                        <tspan id="SvgjsTspan1135">Apr 16</tspan>
                                                        <title>Apr 16</title>
                                                    </text><text id="SvgjsText1137" font-family="inherit"
                                                        x="456.9495442708332" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1138"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1140" font-family="inherit"
                                                        x="485.50889078776027" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1141"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1143" font-family="inherit"
                                                        x="514.0682373046874" y="244.82" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1144"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1075" class="apexcharts-grid">
                                                <g id="SvgjsG1076" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1080" x1="0" y1="55.455" x2="514.0682373046875"
                                                        y2="55.455" stroke="#e1e3ea" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1081" x1="0" y1="110.91" x2="514.0682373046875"
                                                        y2="110.91" stroke="#e1e3ea" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1082" x1="0" y1="166.365" x2="514.0682373046875"
                                                        y2="166.365" stroke="#e1e3ea" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1077" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1085" x1="0" y1="221.82" x2="514.0682373046875"
                                                    y2="221.82" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1084" x1="0" y1="1" x2="0" y2="221.82"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1065" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1066" class="apexcharts-series" seriesname="Sales"
                                                    data:longestseries="true" rel="1" data:realindex="0">
                                                    <path id="SvgjsPath1073"
                                                        d="M0 221.82L0 95.06571428571425C9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138C514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 221.82M514.0682373046875 31.68857142857138C514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 "
                                                        fill="url(#SvgjsLinearGradient1069)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3ifdf20dh)"
                                                        pathto="M 0 221.82 L 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138C 514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 221.82M 514.0682373046875 31.68857142857138z"
                                                        pathfrom="M -1 380.2628571428571 L -1 380.2628571428571 L 28.559346516927082 380.2628571428571 L 57.118693033854164 380.2628571428571 L 85.67803955078125 380.2628571428571 L 114.23738606770833 380.2628571428571 L 142.7967325846354 380.2628571428571 L 171.3560791015625 380.2628571428571 L 199.9154256184896 380.2628571428571 L 228.47477213541666 380.2628571428571 L 257.03411865234375 380.2628571428571 L 285.5934651692708 380.2628571428571 L 314.15281168619794 380.2628571428571 L 342.712158203125 380.2628571428571 L 371.27150472005206 380.2628571428571 L 399.8308512369792 380.2628571428571 L 428.39019775390625 380.2628571428571 L 456.9495442708333 380.2628571428571 L 485.50889078776044 380.2628571428571 L 514.0682373046875 380.2628571428571">
                                                    </path>
                                                    <path id="SvgjsPath1074"
                                                        d="M0 95.06571428571425C9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138C514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 "
                                                        fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3ifdf20dh)"
                                                        pathto="M 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138"
                                                        pathfrom="M -1 380.2628571428571 L -1 380.2628571428571 L 28.559346516927082 380.2628571428571 L 57.118693033854164 380.2628571428571 L 85.67803955078125 380.2628571428571 L 114.23738606770833 380.2628571428571 L 142.7967325846354 380.2628571428571 L 171.3560791015625 380.2628571428571 L 199.9154256184896 380.2628571428571 L 228.47477213541666 380.2628571428571 L 257.03411865234375 380.2628571428571 L 285.5934651692708 380.2628571428571 L 314.15281168619794 380.2628571428571 L 342.712158203125 380.2628571428571 L 371.27150472005206 380.2628571428571 L 399.8308512369792 380.2628571428571 L 428.39019775390625 380.2628571428571 L 456.9495442708333 380.2628571428571 L 485.50889078776044 380.2628571428571 L 514.0682373046875 380.2628571428571"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1067" class="apexcharts-series-markers-wrap"
                                                        data:realindex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1169" r="0" cx="199.9154256184896"
                                                                cy="31.68857142857138"
                                                                class="apexcharts-marker wb662jl62 no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1230" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wpj9icmvc no-pointer-events"
                                                                stroke="#b0dc00" fill="#b0dc00" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1113" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wqaubszmq no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1078" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1079" x1="0" y1="0" x2="514.0682373046875" y2="0"
                                                    stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1083" x1="0" y1="221.82" x2="514.0682373046875"
                                                    y2="221.82" stroke="#e1e3ea" stroke-dasharray="4"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1163" x1="199.4154256184896" y1="0"
                                                x2="199.4154256184896" y2="221.82" stroke="#009ef7" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                x="199.4154256184896" y="0" width="1" height="221.82" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1164" x1="0" y1="0" x2="514.0682373046875" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1165" x1="0" y1="0" x2="514.0682373046875" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1166" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1167" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1168" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1170" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1171" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1145" class="apexcharts-yaxis" rel="0"
                                            transform="translate(27.4317626953125, 0)">
                                            <g id="SvgjsG1146" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1148"
                                                    font-family="inherit" x="20" y="31.4" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1149">$24K</tspan>
                                                    <title>$24K</title>
                                                </text><text id="SvgjsText1151" font-family="inherit" x="20" y="86.855"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1152">$20.5K</tspan>
                                                    <title>$20.5K</title>
                                                </text><text id="SvgjsText1154" font-family="inherit" x="20" y="142.31"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1155">$17K</tspan>
                                                    <title>$17K</title>
                                                </text><text id="SvgjsText1157" font-family="inherit" x="20"
                                                    y="197.76500000000001" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1158">$13.5K</tspan>
                                                    <title>$13.5K</title>
                                                </text><text id="SvgjsText1160" font-family="inherit" x="20" y="253.22"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1161">$10K</tspan>
                                                    <title>$10K</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect1162" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1059" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 150px;" bis_skin_checked="1">
                                    </div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                        style="left: 268.347px; top: 34.6886px;" bis_skin_checked="1">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;" bis_skin_checked="1">Apr 08
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 1; display: flex;" bis_skin_checked="1"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;" bis_skin_checked="1">
                                                <div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-y-label">Sales: </span><span
                                                        class="apexcharts-tooltip-text-y-value">$22K</span></div>
                                                <div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"
                                            bis_skin_checked="1"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(176, 220, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;" bis_skin_checked="1">
                                                <div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"
                                            bis_skin_checked="1"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;" bis_skin_checked="1">
                                                <div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                        style="left: 227.761px; top: 253.82px;" bis_skin_checked="1">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: inherit; font-size: 12px; min-width: 35.2031px;"
                                            bis_skin_checked="1">Apr 08</div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                        bis_skin_checked="1">
                                        <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div id="apexchartsvqg5jmqu"
                                    class="apexcharts-canvas apexchartsvqg5jmqu apexcharts-theme-light"
                                    style="width: 581.5px; height: 300px;" bis_skin_checked="1"><svg id="SvgjsSvg1117"
                                        width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1119" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(56.1519775390625, 30)">
                                            <defs id="SvgjsDefs1118">
                                                <linearGradient id="SvgjsLinearGradient1130" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1131" stop-opacity="0.3"
                                                        stop-color="rgba(176,220,0,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1132" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1133" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1136" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1137" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 6.292166666666667)"><text id="SvgjsText1139"
                                                        font-family="inherit" x="0" y="242.66266666666667"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1140"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1142" font-family="inherit"
                                                        x="28.630445692274307" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1143"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1145" font-family="inherit"
                                                        x="57.26089138454861" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1146"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1148" font-family="inherit"
                                                        x="85.89133707682291" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 67.63057708740234 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1149">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1151" font-family="inherit"
                                                        x="114.52178276909723" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1152"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1154" font-family="inherit"
                                                        x="143.15222846137152" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1155"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1157" font-family="inherit"
                                                        x="171.78267415364581" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 154.02191162109375 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1158">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1160" font-family="inherit"
                                                        x="200.4131198459201" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1161"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1163" font-family="inherit"
                                                        x="229.0435655381944" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1164"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1166" font-family="inherit"
                                                        x="257.6740112304687" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 241.26837158203125 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1167">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1169" font-family="inherit"
                                                        x="286.304456922743" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1170"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1172" font-family="inherit"
                                                        x="314.9349026150173" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1173"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1175" font-family="inherit"
                                                        x="343.5653483072916" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 327.1669006347656 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1176">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1178" font-family="inherit"
                                                        x="372.19579399956586" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1179"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1181" font-family="inherit"
                                                        x="400.82623969184016" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1182"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1184" font-family="inherit"
                                                        x="429.45668538411445" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 413.0198211669922 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1185">Apr 18</tspan>
                                                        <title>Apr 18</title>
                                                    </text><text id="SvgjsText1187" font-family="inherit"
                                                        x="458.08713107638874" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1188"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1190" font-family="inherit"
                                                        x="486.71757676866304" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1191"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1193" font-family="inherit"
                                                        x="515.3480224609373" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1194"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1211" class="apexcharts-grid">
                                                <g id="SvgjsG1212" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1214" x1="0" y1="0" x2="515.3480224609375" y2="0"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1215" x1="0" y1="36.61044444444445"
                                                        x2="515.3480224609375" y2="36.61044444444445" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1216" x1="0" y1="73.2208888888889"
                                                        x2="515.3480224609375" y2="73.2208888888889" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1217" x1="0" y1="109.83133333333333"
                                                        x2="515.3480224609375" y2="109.83133333333333" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1218" x1="0" y1="146.4417777777778"
                                                        x2="515.3480224609375" y2="146.4417777777778" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1219" x1="0" y1="183.05222222222224"
                                                        x2="515.3480224609375" y2="183.05222222222224" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1220" x1="0" y1="219.6626666666667"
                                                        x2="515.3480224609375" y2="219.6626666666667" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1213" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1222" x1="0" y1="219.66266666666667"
                                                    x2="515.3480224609375" y2="219.66266666666667" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1221" x1="0" y1="1" x2="0" y2="219.66266666666667"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1126" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1127" class="apexcharts-series" seriesname="Discounted"
                                                    data:longestseries="true" rel="1" data:realindex="0">
                                                    <path id="SvgjsPath1134"
                                                        d="M0 219.6626666666666L0 119.81599999999935C10.020655992296005 119.81599999999935 18.6097896999783 119.81599999999935 28.630445692274304 119.81599999999935C38.65110168457031 119.81599999999935 47.2402353922526 86.53377777777678 57.26089138454861 86.53377777777678C67.28154737684461 86.53377777777678 75.87068108452691 86.53377777777678 85.89133707682291 86.53377777777678C95.91199306911892 86.53377777777678 104.50112677680121 53.25155555555466 114.52178276909721 53.25155555555466C124.54243876139321 53.25155555555466 133.1315724690755 53.25155555555466 143.15222846137152 53.25155555555466C153.17288445366754 53.25155555555466 161.7620181613498 86.53377777777678 171.78267415364581 86.53377777777678C181.80333014594183 86.53377777777678 190.39246385362412 86.53377777777678 200.41311984592014 86.53377777777678C210.43377583821615 86.53377777777678 219.02290954589841 119.81599999999935 229.04356553819443 119.81599999999935C239.06422153049044 119.81599999999935 247.65335523817274 119.81599999999935 257.67401123046875 119.81599999999935C267.69466722276474 119.81599999999935 276.28380093044706 119.81599999999935 286.30445692274304 119.81599999999935C296.325112915039 119.81599999999935 304.91424662272135 119.81599999999935 314.93490261501734 119.81599999999935C324.9555586073133 119.81599999999935 333.54469231499564 86.53377777777678 343.56534830729163 86.53377777777678C353.58600429958767 86.53377777777678 362.17513800726994 86.53377777777678 372.195793999566 86.53377777777678C382.21644999186196 86.53377777777678 390.8055836995443 119.81599999999935 400.82623969184027 119.81599999999935C410.84689568413626 119.81599999999935 419.4360293918186 53.25155555555466 429.45668538411456 53.25155555555466C439.47734137641055 53.25155555555466 448.0664750840929 53.25155555555466 458.08713107638886 53.25155555555466C468.10778706868484 53.25155555555466 476.69692077636716 53.25155555555466 486.71757676866315 53.25155555555466C496.7382327609592 53.25155555555466 505.32736646864146 86.53377777777678 515.3480224609375 86.53377777777678C515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 515.3480224609375 219.6626666666666M515.3480224609375 86.53377777777678C515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 "
                                                        fill="url(#SvgjsLinearGradient1130)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskvqg5jmqu)"
                                                        pathto="M 0 219.66266666666667L 0 119.81599999999935C 10.020655992296005 119.81599999999935 18.6097896999783 119.81599999999935 28.630445692274304 119.81599999999935C 38.65110168457031 119.81599999999935 47.2402353922526 86.53377777777678 57.26089138454861 86.53377777777678C 67.28154737684461 86.53377777777678 75.87068108452691 86.53377777777678 85.89133707682291 86.53377777777678C 95.91199306911892 86.53377777777678 104.50112677680121 53.25155555555466 114.52178276909721 53.25155555555466C 124.54243876139321 53.25155555555466 133.1315724690755 53.25155555555466 143.15222846137152 53.25155555555466C 153.17288445366754 53.25155555555466 161.7620181613498 86.53377777777678 171.78267415364581 86.53377777777678C 181.80333014594183 86.53377777777678 190.39246385362412 86.53377777777678 200.41311984592014 86.53377777777678C 210.43377583821615 86.53377777777678 219.02290954589841 119.81599999999935 229.04356553819443 119.81599999999935C 239.06422153049044 119.81599999999935 247.65335523817274 119.81599999999935 257.67401123046875 119.81599999999935C 267.69466722276474 119.81599999999935 276.28380093044706 119.81599999999935 286.30445692274304 119.81599999999935C 296.325112915039 119.81599999999935 304.91424662272135 119.81599999999935 314.93490261501734 119.81599999999935C 324.9555586073133 119.81599999999935 333.54469231499564 86.53377777777678 343.56534830729163 86.53377777777678C 353.58600429958767 86.53377777777678 362.17513800726994 86.53377777777678 372.195793999566 86.53377777777678C 382.21644999186196 86.53377777777678 390.8055836995443 119.81599999999935 400.82623969184027 119.81599999999935C 410.84689568413626 119.81599999999935 419.4360293918186 53.25155555555466 429.45668538411456 53.25155555555466C 439.47734137641055 53.25155555555466 448.0664750840929 53.25155555555466 458.08713107638886 53.25155555555466C 468.10778706868484 53.25155555555466 476.69692077636716 53.25155555555466 486.71757676866315 53.25155555555466C 496.7382327609592 53.25155555555466 505.32736646864146 86.53377777777678 515.3480224609375 86.53377777777678C 515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 515.3480224609375 219.66266666666667M 515.3480224609375 86.53377777777678z"
                                                        pathfrom="M -1 2416.2893333333445L -1 2416.2893333333445L 28.630445692274304 2416.2893333333445L 57.26089138454861 2416.2893333333445L 85.89133707682291 2416.2893333333445L 114.52178276909721 2416.2893333333445L 143.15222846137152 2416.2893333333445L 171.78267415364581 2416.2893333333445L 200.41311984592014 2416.2893333333445L 229.04356553819443 2416.2893333333445L 257.67401123046875 2416.2893333333445L 286.30445692274304 2416.2893333333445L 314.93490261501734 2416.2893333333445L 343.56534830729163 2416.2893333333445L 372.195793999566 2416.2893333333445L 400.82623969184027 2416.2893333333445L 429.45668538411456 2416.2893333333445L 458.08713107638886 2416.2893333333445L 486.71757676866315 2416.2893333333445L 515.3480224609375 2416.2893333333445">
                                                    </path>
                                                    <path id="SvgjsPath1135"
                                                        d="M0 119.81599999999935C10.020655992296005 119.81599999999935 18.6097896999783 119.81599999999935 28.630445692274304 119.81599999999935C38.65110168457031 119.81599999999935 47.2402353922526 86.53377777777678 57.26089138454861 86.53377777777678C67.28154737684461 86.53377777777678 75.87068108452691 86.53377777777678 85.89133707682291 86.53377777777678C95.91199306911892 86.53377777777678 104.50112677680121 53.25155555555466 114.52178276909721 53.25155555555466C124.54243876139321 53.25155555555466 133.1315724690755 53.25155555555466 143.15222846137152 53.25155555555466C153.17288445366754 53.25155555555466 161.7620181613498 86.53377777777678 171.78267415364581 86.53377777777678C181.80333014594183 86.53377777777678 190.39246385362412 86.53377777777678 200.41311984592014 86.53377777777678C210.43377583821615 86.53377777777678 219.02290954589841 119.81599999999935 229.04356553819443 119.81599999999935C239.06422153049044 119.81599999999935 247.65335523817274 119.81599999999935 257.67401123046875 119.81599999999935C267.69466722276474 119.81599999999935 276.28380093044706 119.81599999999935 286.30445692274304 119.81599999999935C296.325112915039 119.81599999999935 304.91424662272135 119.81599999999935 314.93490261501734 119.81599999999935C324.9555586073133 119.81599999999935 333.54469231499564 86.53377777777678 343.56534830729163 86.53377777777678C353.58600429958767 86.53377777777678 362.17513800726994 86.53377777777678 372.195793999566 86.53377777777678C382.21644999186196 86.53377777777678 390.8055836995443 119.81599999999935 400.82623969184027 119.81599999999935C410.84689568413626 119.81599999999935 419.4360293918186 53.25155555555466 429.45668538411456 53.25155555555466C439.47734137641055 53.25155555555466 448.0664750840929 53.25155555555466 458.08713107638886 53.25155555555466C468.10778706868484 53.25155555555466 476.69692077636716 53.25155555555466 486.71757676866315 53.25155555555466C496.7382327609592 53.25155555555466 505.32736646864146 86.53377777777678 515.3480224609375 86.53377777777678C515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 515.3480224609375 86.53377777777678 "
                                                        fill="none" fill-opacity="1" stroke="#b0dc00" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskvqg5jmqu)"
                                                        pathto="M 0 119.81599999999935C 10.020655992296005 119.81599999999935 18.6097896999783 119.81599999999935 28.630445692274304 119.81599999999935C 38.65110168457031 119.81599999999935 47.2402353922526 86.53377777777678 57.26089138454861 86.53377777777678C 67.28154737684461 86.53377777777678 75.87068108452691 86.53377777777678 85.89133707682291 86.53377777777678C 95.91199306911892 86.53377777777678 104.50112677680121 53.25155555555466 114.52178276909721 53.25155555555466C 124.54243876139321 53.25155555555466 133.1315724690755 53.25155555555466 143.15222846137152 53.25155555555466C 153.17288445366754 53.25155555555466 161.7620181613498 86.53377777777678 171.78267415364581 86.53377777777678C 181.80333014594183 86.53377777777678 190.39246385362412 86.53377777777678 200.41311984592014 86.53377777777678C 210.43377583821615 86.53377777777678 219.02290954589841 119.81599999999935 229.04356553819443 119.81599999999935C 239.06422153049044 119.81599999999935 247.65335523817274 119.81599999999935 257.67401123046875 119.81599999999935C 267.69466722276474 119.81599999999935 276.28380093044706 119.81599999999935 286.30445692274304 119.81599999999935C 296.325112915039 119.81599999999935 304.91424662272135 119.81599999999935 314.93490261501734 119.81599999999935C 324.9555586073133 119.81599999999935 333.54469231499564 86.53377777777678 343.56534830729163 86.53377777777678C 353.58600429958767 86.53377777777678 362.17513800726994 86.53377777777678 372.195793999566 86.53377777777678C 382.21644999186196 86.53377777777678 390.8055836995443 119.81599999999935 400.82623969184027 119.81599999999935C 410.84689568413626 119.81599999999935 419.4360293918186 53.25155555555466 429.45668538411456 53.25155555555466C 439.47734137641055 53.25155555555466 448.0664750840929 53.25155555555466 458.08713107638886 53.25155555555466C 468.10778706868484 53.25155555555466 476.69692077636716 53.25155555555466 486.71757676866315 53.25155555555466C 496.7382327609592 53.25155555555466 505.32736646864146 86.53377777777678 515.3480224609375 86.53377777777678"
                                                        pathfrom="M -1 2416.2893333333445L -1 2416.2893333333445L 28.630445692274304 2416.2893333333445L 57.26089138454861 2416.2893333333445L 85.89133707682291 2416.2893333333445L 114.52178276909721 2416.2893333333445L 143.15222846137152 2416.2893333333445L 171.78267415364581 2416.2893333333445L 200.41311984592014 2416.2893333333445L 229.04356553819443 2416.2893333333445L 257.67401123046875 2416.2893333333445L 286.30445692274304 2416.2893333333445L 314.93490261501734 2416.2893333333445L 343.56534830729163 2416.2893333333445L 372.195793999566 2416.2893333333445L 400.82623969184027 2416.2893333333445L 429.45668538411456 2416.2893333333445L 458.08713107638886 2416.2893333333445L 486.71757676866315 2416.2893333333445L 515.3480224609375 2416.2893333333445">
                                                    </path>
                                                    <g id="SvgjsG1128" class="apexcharts-series-markers-wrap"
                                                        data:realindex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1231" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wu2r8ops2 no-pointer-events"
                                                                stroke="#b0dc00" fill="#b0dc00" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1114" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker w4hwrn40h no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1224" x1="0" y1="0" x2="0" y2="219.66266666666667"
                                                stroke="#b0dc00" stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                height="219.66266666666667" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1225" x1="0" y1="0" x2="515.3480224609375" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1226" x1="0" y1="0" x2="515.3480224609375" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1227" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1228" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1229" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1232" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1233" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1195" class="apexcharts-yaxis" rel="0"
                                            transform="translate(26.1519775390625, 0)">
                                            <g id="SvgjsG1196" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1197"
                                                    font-family="inherit" x="20" y="31.6" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1198">$362</tspan>
                                                    <title>$362</title>
                                                </text><text id="SvgjsText1199" font-family="inherit" x="20"
                                                    y="68.21044444444445" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1200">$357</tspan>
                                                    <title>$357</title>
                                                </text><text id="SvgjsText1201" font-family="inherit" x="20"
                                                    y="104.8208888888889" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1202">$351</tspan>
                                                    <title>$351</title>
                                                </text><text id="SvgjsText1203" font-family="inherit" x="20"
                                                    y="141.43133333333336" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1204">$346</tspan>
                                                    <title>$346</title>
                                                </text><text id="SvgjsText1205" font-family="inherit" x="20"
                                                    y="178.0417777777778" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1206">$340</tspan>
                                                    <title>$340</title>
                                                </text><text id="SvgjsText1207" font-family="inherit" x="20"
                                                    y="214.65222222222226" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1208">$335</tspan>
                                                    <title>$335</title>
                                                </text><text id="SvgjsText1209" font-family="inherit" x="20"
                                                    y="251.26266666666672" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1210">$330</tspan>
                                                    <title>$330</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect1223" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1120" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" bis_skin_checked="1"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;" bis_skin_checked="1"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                        bis_skin_checked="1">
                                        <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div id="apexchartsi1iaadzv"
                                    class="apexcharts-canvas apexchartsi1iaadzv apexcharts-theme-light"
                                    style="width: 581.5px; height: 300px;" bis_skin_checked="1"><svg id="SvgjsSvg1006"
                                        width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(59.43196105957031, 30)">
                                            <defs id="SvgjsDefs1007">
                                                <linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1020" stop-opacity="0.3"
                                                        stop-color="rgba(0,158,247,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1021" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1022" stop-opacity="0.7"
                                                        stop-color="rgba(255,255,255,0.7)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1025" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1026" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 6.292166666666667)"><text id="SvgjsText1028"
                                                        font-family="inherit" x="0" y="242.66266666666667"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1029"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1031" font-family="inherit"
                                                        x="28.44822438557943" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1032"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1034" font-family="inherit"
                                                        x="56.89644877115885" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1035"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1037" font-family="inherit"
                                                        x="85.34467315673827" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 86.56829071044922 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1038">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText1040" font-family="inherit"
                                                        x="113.7928975423177" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1041"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1043" font-family="inherit"
                                                        x="142.24112192789715" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1044"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1046" font-family="inherit"
                                                        x="170.6893463134766" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 171.9129638671875 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1047">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText1049" font-family="inherit"
                                                        x="199.13757069905603" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1050"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1052" font-family="inherit"
                                                        x="227.58579508463546" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1053"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1055" font-family="inherit"
                                                        x="256.03401947021484" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 257.26121520996094 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1056">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText1058" font-family="inherit"
                                                        x="284.48224385579425" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1059"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1061" font-family="inherit"
                                                        x="312.93046824137366" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1062"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1064" font-family="inherit"
                                                        x="341.37869262695307" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 342.3786926269531 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1065">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText1067" font-family="inherit"
                                                        x="369.8269170125325" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1068"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1070" font-family="inherit"
                                                        x="398.2751413981119" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1071"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1073" font-family="inherit"
                                                        x="426.7233657836913" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 427.91148376464844 237.1626739501953)">
                                                        <tspan id="SvgjsTspan1074">Apr 16</tspan>
                                                        <title>Apr 16</title>
                                                    </text><text id="SvgjsText1076" font-family="inherit"
                                                        x="455.1715901692707" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1077"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1079" font-family="inherit"
                                                        x="483.6198145548501" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1080"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1082" font-family="inherit"
                                                        x="512.0680389404296" y="242.66266666666667" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan1083"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1096" class="apexcharts-grid">
                                                <g id="SvgjsG1097" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1099" x1="0" y1="0" x2="512.0680389404297" y2="0"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1100" x1="0" y1="54.91566666666667"
                                                        x2="512.0680389404297" y2="54.91566666666667" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1101" x1="0" y1="109.83133333333333"
                                                        x2="512.0680389404297" y2="109.83133333333333" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1102" x1="0" y1="164.747" x2="512.0680389404297"
                                                        y2="164.747" stroke="#e4e6ef" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1103" x1="0" y1="219.66266666666667"
                                                        x2="512.0680389404297" y2="219.66266666666667" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1098" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1105" x1="0" y1="219.66266666666667"
                                                    x2="512.0680389404297" y2="219.66266666666667" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1104" x1="0" y1="1" x2="0" y2="219.66266666666667"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1015" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1016" class="apexcharts-series" seriesname="Sales"
                                                    data:longestseries="true" rel="1" data:realindex="0">
                                                    <path id="SvgjsPath1023"
                                                        d="M0 219.66266666666667L0 94.14114285714282C9.9568785349528 94.14114285714282 18.49134585062663 94.14114285714282 28.44822438557943 94.14114285714282C38.40510292053223 94.14114285714282 46.93957023620606 62.760761904761864 56.89644877115886 62.760761904761864C66.85332730611165 62.760761904761864 75.38779462178549 62.760761904761864 85.34467315673828 62.760761904761864C95.30155169169109 62.760761904761864 103.83601900736491 94.14114285714282 113.79289754231772 94.14114285714282C123.74977607727052 94.14114285714282 132.28424339294435 94.14114285714282 142.24112192789715 94.14114285714282C152.19800046284996 94.14114285714282 160.73246777852376 31.380380952380904 170.68934631347656 31.380380952380904C180.64622484842937 31.380380952380904 189.1806921641032 31.380380952380904 199.137570699056 31.380380952380904C209.0944492340088 31.380380952380904 217.62891654968263 62.760761904761864 227.58579508463544 62.760761904761864C237.54267361958824 62.760761904761864 246.07714093526204 62.760761904761864 256.03401947021484 62.760761904761864C265.99089800516765 62.760761904761864 274.5253653208415 94.14114285714282 284.4822438557943 94.14114285714282C294.4391223907471 94.14114285714282 302.9735897064209 94.14114285714282 312.9304682413737 94.14114285714282C322.8873467763265 94.14114285714282 331.4218140920003 62.760761904761864 341.3786926269531 62.760761904761864C351.33557116190593 62.760761904761864 359.8700384775798 62.760761904761864 369.8269170125326 62.760761904761864C379.7837955474854 62.760761904761864 388.3182628631592 94.14114285714282 398.275141398112 94.14114285714282C408.2320199330648 94.14114285714282 416.7664872487386 94.14114285714282 426.7233657836914 94.14114285714282C436.6802443186442 94.14114285714282 445.21471163431806 62.760761904761864 455.17159016927087 62.760761904761864C465.1284687042237 62.760761904761864 473.6629360198975 62.760761904761864 483.6198145548503 62.760761904761864C493.5766930898031 62.760761904761864 502.1111604054769 31.380380952380904 512.0680389404297 31.380380952380904C512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 512.0680389404297 219.66266666666667M512.0680389404297 31.380380952380904C512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 "
                                                        fill="url(#SvgjsLinearGradient1019)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaski1iaadzv)"
                                                        pathto="M 0 219.66266666666667L 0 94.14114285714282C 9.9568785349528 94.14114285714282 18.49134585062663 94.14114285714282 28.44822438557943 94.14114285714282C 38.40510292053223 94.14114285714282 46.93957023620606 62.760761904761864 56.89644877115886 62.760761904761864C 66.85332730611165 62.760761904761864 75.38779462178549 62.760761904761864 85.34467315673828 62.760761904761864C 95.30155169169109 62.760761904761864 103.83601900736491 94.14114285714282 113.79289754231772 94.14114285714282C 123.74977607727052 94.14114285714282 132.28424339294435 94.14114285714282 142.24112192789715 94.14114285714282C 152.19800046284996 94.14114285714282 160.73246777852376 31.380380952380904 170.68934631347656 31.380380952380904C 180.64622484842937 31.380380952380904 189.1806921641032 31.380380952380904 199.137570699056 31.380380952380904C 209.0944492340088 31.380380952380904 217.62891654968263 62.760761904761864 227.58579508463544 62.760761904761864C 237.54267361958824 62.760761904761864 246.07714093526204 62.760761904761864 256.03401947021484 62.760761904761864C 265.99089800516765 62.760761904761864 274.5253653208415 94.14114285714282 284.4822438557943 94.14114285714282C 294.4391223907471 94.14114285714282 302.9735897064209 94.14114285714282 312.9304682413737 94.14114285714282C 322.8873467763265 94.14114285714282 331.4218140920003 62.760761904761864 341.3786926269531 62.760761904761864C 351.33557116190593 62.760761904761864 359.8700384775798 62.760761904761864 369.8269170125326 62.760761904761864C 379.7837955474854 62.760761904761864 388.3182628631592 94.14114285714282 398.275141398112 94.14114285714282C 408.2320199330648 94.14114285714282 416.7664872487386 94.14114285714282 426.7233657836914 94.14114285714282C 436.6802443186442 94.14114285714282 445.21471163431806 62.760761904761864 455.17159016927087 62.760761904761864C 465.1284687042237 62.760761904761864 473.6629360198975 62.760761904761864 483.6198145548503 62.760761904761864C 493.5766930898031 62.760761904761864 502.1111604054769 31.380380952380904 512.0680389404297 31.380380952380904C 512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 512.0680389404297 219.66266666666667M 512.0680389404297 31.380380952380904z"
                                                        pathfrom="M -1 376.5645714285714L -1 376.5645714285714L 28.44822438557943 376.5645714285714L 56.89644877115886 376.5645714285714L 85.34467315673828 376.5645714285714L 113.79289754231772 376.5645714285714L 142.24112192789715 376.5645714285714L 170.68934631347656 376.5645714285714L 199.137570699056 376.5645714285714L 227.58579508463544 376.5645714285714L 256.03401947021484 376.5645714285714L 284.4822438557943 376.5645714285714L 312.9304682413737 376.5645714285714L 341.3786926269531 376.5645714285714L 369.8269170125326 376.5645714285714L 398.275141398112 376.5645714285714L 426.7233657836914 376.5645714285714L 455.17159016927087 376.5645714285714L 483.6198145548503 376.5645714285714L 512.0680389404297 376.5645714285714">
                                                    </path>
                                                    <path id="SvgjsPath1024"
                                                        d="M0 94.14114285714282C9.9568785349528 94.14114285714282 18.49134585062663 94.14114285714282 28.44822438557943 94.14114285714282C38.40510292053223 94.14114285714282 46.93957023620606 62.760761904761864 56.89644877115886 62.760761904761864C66.85332730611165 62.760761904761864 75.38779462178549 62.760761904761864 85.34467315673828 62.760761904761864C95.30155169169109 62.760761904761864 103.83601900736491 94.14114285714282 113.79289754231772 94.14114285714282C123.74977607727052 94.14114285714282 132.28424339294435 94.14114285714282 142.24112192789715 94.14114285714282C152.19800046284996 94.14114285714282 160.73246777852376 31.380380952380904 170.68934631347656 31.380380952380904C180.64622484842937 31.380380952380904 189.1806921641032 31.380380952380904 199.137570699056 31.380380952380904C209.0944492340088 31.380380952380904 217.62891654968263 62.760761904761864 227.58579508463544 62.760761904761864C237.54267361958824 62.760761904761864 246.07714093526204 62.760761904761864 256.03401947021484 62.760761904761864C265.99089800516765 62.760761904761864 274.5253653208415 94.14114285714282 284.4822438557943 94.14114285714282C294.4391223907471 94.14114285714282 302.9735897064209 94.14114285714282 312.9304682413737 94.14114285714282C322.8873467763265 94.14114285714282 331.4218140920003 62.760761904761864 341.3786926269531 62.760761904761864C351.33557116190593 62.760761904761864 359.8700384775798 62.760761904761864 369.8269170125326 62.760761904761864C379.7837955474854 62.760761904761864 388.3182628631592 94.14114285714282 398.275141398112 94.14114285714282C408.2320199330648 94.14114285714282 416.7664872487386 94.14114285714282 426.7233657836914 94.14114285714282C436.6802443186442 94.14114285714282 445.21471163431806 62.760761904761864 455.17159016927087 62.760761904761864C465.1284687042237 62.760761904761864 473.6629360198975 62.760761904761864 483.6198145548503 62.760761904761864C493.5766930898031 62.760761904761864 502.1111604054769 31.380380952380904 512.0680389404297 31.380380952380904C512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 512.0680389404297 31.380380952380904 "
                                                        fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaski1iaadzv)"
                                                        pathto="M 0 94.14114285714282C 9.9568785349528 94.14114285714282 18.49134585062663 94.14114285714282 28.44822438557943 94.14114285714282C 38.40510292053223 94.14114285714282 46.93957023620606 62.760761904761864 56.89644877115886 62.760761904761864C 66.85332730611165 62.760761904761864 75.38779462178549 62.760761904761864 85.34467315673828 62.760761904761864C 95.30155169169109 62.760761904761864 103.83601900736491 94.14114285714282 113.79289754231772 94.14114285714282C 123.74977607727052 94.14114285714282 132.28424339294435 94.14114285714282 142.24112192789715 94.14114285714282C 152.19800046284996 94.14114285714282 160.73246777852376 31.380380952380904 170.68934631347656 31.380380952380904C 180.64622484842937 31.380380952380904 189.1806921641032 31.380380952380904 199.137570699056 31.380380952380904C 209.0944492340088 31.380380952380904 217.62891654968263 62.760761904761864 227.58579508463544 62.760761904761864C 237.54267361958824 62.760761904761864 246.07714093526204 62.760761904761864 256.03401947021484 62.760761904761864C 265.99089800516765 62.760761904761864 274.5253653208415 94.14114285714282 284.4822438557943 94.14114285714282C 294.4391223907471 94.14114285714282 302.9735897064209 94.14114285714282 312.9304682413737 94.14114285714282C 322.8873467763265 94.14114285714282 331.4218140920003 62.760761904761864 341.3786926269531 62.760761904761864C 351.33557116190593 62.760761904761864 359.8700384775798 62.760761904761864 369.8269170125326 62.760761904761864C 379.7837955474854 62.760761904761864 388.3182628631592 94.14114285714282 398.275141398112 94.14114285714282C 408.2320199330648 94.14114285714282 416.7664872487386 94.14114285714282 426.7233657836914 94.14114285714282C 436.6802443186442 94.14114285714282 445.21471163431806 62.760761904761864 455.17159016927087 62.760761904761864C 465.1284687042237 62.760761904761864 473.6629360198975 62.760761904761864 483.6198145548503 62.760761904761864C 493.5766930898031 62.760761904761864 502.1111604054769 31.380380952380904 512.0680389404297 31.380380952380904"
                                                        pathfrom="M -1 376.5645714285714L -1 376.5645714285714L 28.44822438557943 376.5645714285714L 56.89644877115886 376.5645714285714L 85.34467315673828 376.5645714285714L 113.79289754231772 376.5645714285714L 142.24112192789715 376.5645714285714L 170.68934631347656 376.5645714285714L 199.137570699056 376.5645714285714L 227.58579508463544 376.5645714285714L 256.03401947021484 376.5645714285714L 284.4822438557943 376.5645714285714L 312.9304682413737 376.5645714285714L 341.3786926269531 376.5645714285714L 369.8269170125326 376.5645714285714L 398.275141398112 376.5645714285714L 426.7233657836914 376.5645714285714L 455.17159016927087 376.5645714285714L 483.6198145548503 376.5645714285714L 512.0680389404297 376.5645714285714">
                                                    </path>
                                                    <g id="SvgjsG1017" class="apexcharts-series-markers-wrap"
                                                        data:realindex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1115" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wsjhh08m3 no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1068" class="apexcharts-datalabels" data:realindex="0"></g>
                                                <g id="SvgjsG1129" class="apexcharts-datalabels" data:realindex="0"></g>
                                                <g id="SvgjsG1018" class="apexcharts-datalabels" data:realindex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1107" x1="0" y1="0" x2="0" y2="219.66266666666667"
                                                stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                height="219.66266666666667" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1108" x1="0" y1="0" x2="512.0680389404297" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1109" x1="0" y1="0" x2="512.0680389404297" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1110" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1111" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1112" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1116" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1117" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1084" class="apexcharts-yaxis" rel="0"
                                            transform="translate(29.431961059570312, 0)">
                                            <g id="SvgjsG1085" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1086"
                                                    font-family="inherit" x="20" y="31.4" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1087">$2.4K</tspan>
                                                    <title>$2.4K</title>
                                                </text><text id="SvgjsText1088" font-family="inherit" x="20"
                                                    y="86.31566666666667" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1089">$2.0K</tspan>
                                                    <title>$2.0K</title>
                                                </text><text id="SvgjsText1090" font-family="inherit" x="20"
                                                    y="141.23133333333334" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1091">$1.7K</tspan>
                                                    <title>$1.7K</title>
                                                </text><text id="SvgjsText1092" font-family="inherit" x="20"
                                                    y="196.14700000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1093">$1.4K</tspan>
                                                    <title>$1.4K</title>
                                                </text><text id="SvgjsText1094" font-family="inherit" x="20"
                                                    y="251.06266666666667" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1095">$1.0K</tspan>
                                                    <title>$1.0K</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect1106" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" bis_skin_checked="1"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;" bis_skin_checked="1"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                        bis_skin_checked="1">
                                        <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <div class="d-flex flex-row g-5 g-xl-0 mb-xl-10" style="column-gap: 18px;" bis_skin_checked="1">
                        <div class="card card-flush h-md-auto w-50 mb-5 mb-xl-1" style="" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas Ankstore</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">98,835€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 650 pedidos</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">82%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 82%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <div class="card card-flush h-md-auto w-50 mb-5 mb-xl-1" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas Fairie</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">7,347€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 90 pedidos.</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">98%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 98%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>

                        <!--end::Card body-->
                    </div>
                    <div bis_skin_checked="1">


                        <!--end::Card widget 4-->
                        <!--begin::Card widget 5-->

                        <div class="card card-flush h-md-auto mb-5 mb-xl-20" bis_skin_checked="1">
                            <!--begin::Header-->
                            <div class="card-header pt-5" bis_skin_checked="1"><span
                                    class="fs-3 fw-bolder text-dark me-2 lh-1">Ventas Comerciales Exterior</span></div>
                            <div class="card-header pt-0" bis_skin_checked="1">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column" bis_skin_checked="1">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center" bis_skin_checked="1">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">6,291€</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.2%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Total de 50 pedidos</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0" bis_skin_checked="1">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100" bis_skin_checked="1">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2" bis_skin_checked="1">
                                        <span class="fw-boldest fs-6 text-dark">Pedidos del Mes</span>
                                        <span class="fw-bolder fs-6 text-gray-400">75%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded" bis_skin_checked="1">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 75%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 5-->
                    </div>
                </div>
            </div>
            <!--end::Card widget 7-->
        </div>
        <!--begin::Col-->

        <!--end::Col-->
    </div>
</div>

@endsection