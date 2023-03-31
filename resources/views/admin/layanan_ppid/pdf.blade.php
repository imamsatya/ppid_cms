<?php
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// exit();
setlocale(LC_ALL, 'IND');
global $i;
$i = 0;
function n($reset = null){
    global $i;
    if($reset){
        $i = 0;
    } else {
        $i++;
        return $i.'.';
    }
}
?>
<html>
<head>
    <style>
        /* custom */
        body,
        html, p, div, table {
            margin: 0;
            padding: 0;
            text-rendering: optimizeLegibility;
            font-size: 12.5px;
            color: #111315;
            font-family:"Book Antiqua";
            line-height: normal;
        }
        div{
            line-height:1;
        }

        h1 {
            
            text-align: center;
            font-size: 1.56em;
            line-height: 1;
            letter-spacing: 1px;
            margin:5px 0px;
        }

        hr{
            margin:8px 0px;
            color: #333;
            height:2px;
        }
        .subtitle{
            line-height:0;
            margin:0;
            font-size:10px;
        }
        table {
            font-weight:normal;
            border-collapse: collapse;
        }
        /* custom */
        .page-break {
            page-break-after: always;
        }
        .page-break-avoid{
            page-break-inside: avoid;
        }
        /* default */
        .padding-0{
            padding: 0!important;
        }

        .width-33,.width-66,
        .width-15,.width-30,.width-45,.width-90,
        .width-50,.width-25,.width-75,.width-100 {
            float: left;
            padding: 0px 15px;
        }
        .width-33{
            width: 33.33333%;
        }
        .width-66{
            width: 66.667%;
        }
        .width-15{
            width: 15%;
        }
        .width-30{
            width: 30%;
        }
        .width-45{
            width: 45%;
        }
        .width-90{
            width: 90%;
        }
        .width-50 {
            width: 50%;
        }

        .width-25 {
            width: 25%;
        }

        .width-75 {
            width: 75%;
        }
        .width-85 {
            width: 85%;
        }
        .width-100 {
            width: 75%;
        }
        .clearfix{
            clear:both;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-justify {
            text-align: justify;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .text-lowercase {
            text-transform: lowercase;
        }

        .text-uppercase,
        .initialism {
            text-transform: uppercase;
        }

        .text-capitalize {
            text-transform: capitalize;
        }
        .margin-top-10 {
            margin-top:10px;
        }
        .margin-top-15 {
            margin-top:15px;
        }
        .margin-top-20 {
            margin-top:20px;
        }

        .border-top{
            border-top:3px solid #333;
            padding:0px 8px;
        }
        .left{
            float: left;
        }
        .bold{
            font-weight:bold;
        }
        .barcode {
            padding: 0.5mm;
            color: #000044;
            width:40px;
        }
        .barcodecell {
            text-align: center;
            vertical-align: top;
        }
        /* default */
    </style>
</head>
<body>
    <!--  -->
    <div class="padding-0">
        <div class="text-center">
            <p class="text-uppercase bold margin-top-20">surat tugas</p>
            <p class="margin-top-10">Nomor : <span>123123</span></p>
        </div>
        <div class="margin-top-15">
        
            <p style="text-indent:40px" class="text-justify">Dalam rangka 123123, dengan ini kami menugaskan sebagai 123123 kepada:</p>
            
        </div>

       
                
    </div>

    
</body>
<html>