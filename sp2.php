<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$content = ['A', 'B', 'C'];

function test($data)
{
    foreach ($data as $key => $value) {
        return $data;
    }
}

$content = '
<html>
    <head>
        <style>
            @page { margin: 0px; }
            body { margin: 10px; }
            * {
                font-size: 12px; 
                line-height: 16px
            }

            .big {
                font-size: 20px;
                font-weight: bold;
                line-height: 30px
            }
        </style>
    </head>
    <body>

    <table>
        <tr>
            <td>
            <img style="width:90" src="assets\sp2.png"/>  <br/>
            </td>
            <td>
                <img style="width:100" src="logoZw5JVp4Z3oLqCEFTYrEk (1).png"/>  <br/>
                eTicket <br/>
                <span class="big">GATE PASS</span> <br/>
                '.date('d-m-Y').' 14:00 <br/>
                <span class="big" style="text-aligh: right">BC 2.0</span>
            </td>
        </tr>
    </table>
    <table style="width: 100%">
            <tr>
                <td>OOLU</td>
                <td>22G1</td>
                <td>4910</td>
            </tr>
            <tr>
                <td>323465</td>
                <td></td>
                <td></td>
            </tr>
    </table>

    <p style="text-align: center">
            IF/IMST <br/>
            JKT <br/>
            Voy : OOCL GUANGZHOU / 123N<br/>
            ATB : '.date('d-m-Y ').'23:59<br/>
            PaidThru : '.date('d-m-Y ').'23:59<br/>
            ReefThru : -<br/>
            IDJKT/IDJKT<br/>
    </p>

    <p style="text-align: center">
        PT.PINDO DELI PULP AND PAPER MILLS <br/>
        323465/KPU.01/2020
    </p>

    <table style="">
            <tr>
                <td>Owner</td>
                <td>:</td>
                <td>OOCL GUANGZHOU</td>
            </tr>
            <tr>
                <td>IMO Code</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>BC Doc</td>
                <td>:</td>
                <td> 
                323465/KPU.01/2020 <br/>
                '.date('d-m-Y ').'23:59

                </td>
            </tr>
            <tr>
                <td>BAT</td>
                <td>:</td>
                <td>71 / 20.00107614 <br/> OOCL</td>
            </tr>
            <tr>
                <td>Tanggal BAT</td>
                <td>:</td>
                <td>
                '.date('d-m-Y ').'23:59
                </td>
            </tr>
            <tr>
                <td>Customer</td>
                <td>:</td>
                <td>Ari Putra</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td>08117044456</td>
            </tr>
            <tr>
                <td>TTD</td>
                <td>:</td>
                <td>-</td>
            </tr>
    </table>

    </body>
    
</html>
';

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->setDefaultPaperSize([0, 0, 250, 600]);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($content);


// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream(
    null,
    array('Attachment' => false)
);

exit;
