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
            * {font-size: 12px; line-height: 16px}
        </style>
    </head>
    <body>
        <img style="width:100" src="logoZw5JVp4Z3oLqCEFTYrEk (1).png"/> 
        <br/>
        Proforma Billing<br/>
        <b>202006080006</b> <br/>
        CLICKARGO - 08117044456

        <p>
            IMST/IMPORT STANDARD
            <table>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td> 08-06-2020 15:15:52</td>
                </tr>
                <tr>
                    <td>1~BC2.0</td>
                    <td>:</td>
                    <td>555555/KPU.01/2020</td>
                </tr>
            </table>
            <b>---------------------------------</b>
            <table>
                <tr>
                    <td>SHIPPER</td>
                    <td>:</td>
                    <td> 08-06-2020 15:15:52</td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>VESSEL          </td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>VOYAGE          </td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTALSHIFT     </td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>CLTM/PDTHR</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTAL CNT</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <b>---------------------------------</b>
            Ringkasan Porofma
            <table>
            <tr>
                <td>PENUMPUKAN</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>DENDA SP2</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>LIFT ON</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>COST RECOVERY</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>PASS PELABUHAN</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>BIAYA ETICKET</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>ADM NOTA</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>BIAYA MATERAI</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td><b>SUBTOTAL</b></td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td><b>PPN</b></td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td><b>TOTAL</b></td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
            <td><b>ADMINISTRATION</b></td>
            <td>:</td>
            <td></td>
        </tr>

        </table>
        <b>---------------------------------</b>
        <div style="text-align:center">
            Harap Melakukan Pembayaran Sebelum <b>' . date('Ymd h:i:s') . '</b>
            <b>---------------------------------</b>
            Pembayaran dapat dilakukan di EDC
            ATM,Cargolink, & payment channel
            lain yang tersedia <br/>
            *************

        </div>
    </body>
</html>
';

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->setDefaultPaperSize([0, 0, 195, 600]);

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
