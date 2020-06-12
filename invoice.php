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
            .card {
                border: 1.2px solid black;
                margin-bottom: 8px;
                padding: 10px 20px
            }   
            
            .header {
                font-size: 11px; font-weight: bold; line-height: 10px
            }

            td {
                vertical-align: top
            }
            
            .main_header {
                font-size: 13px; 
                line-height: 14px
            }

            .main {
                height: 500px
            }

            .notes {
                font-size: 11px
            }
        </style>
    </head>
    <body>
        <div class="card header">
            <table>
                <tr>
                    <td style="vertical-align: top; width: 50%">
                        <img style="width:120" src="logoZw5JVp4Z3oLqCEFTYrEk (1).png"/>  <br/>
                        <table>
                            <tr>
                                <td>ALAMAT</td>
                                <td>:</td>
                                <td>
                                    Jl. Enggano Raya No. 40C, Tanjung Priok, Jakarta Utara 14310
                                </td>
                            </tr>
                            <tr>
                                <td>NPWP</td>
                                <td>:</td>
                                <td>01.301.534.4-043.000</td>
                            </tr>
                            <tr>
                                <td>Invoice</td>
                                <td>:</td>
                                <td style="font-size: 16px">101004140022</td>
                            </tr>
                        </table>
                    </td>
                    <td style="vertical-align: top; width: 5%; color: white">hoho</td>
                    <td>
                        <table>
                            <tr>
                                <td>Proforma</td>
                                <td>:</td>
                                <td>202005250033</td>
                            </td>
                            </tr>
                            <tr>
                                <td>No Faktur Pajak</td>
                                <td>:</td>
                                <td>202005250033</td>
                            </tr>
                            <tr>
                                <td>Job Number</td>
                                <td>:</td>
                                <td>GTS/JKT/SP2/202006-0013</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>:</td>
                                <td>IMST/IMPORT STANDART</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>'. date('Y-m-d') .'</td>
                            </tr>
                            <tr>
                                <td>1-BC2.0</td>
                                <td>:</td>
                                <td>5555555</td>
                            </tr>
                            <tr>
                                <td>No. VA Bank BNI</td>
                                <td>:</td>
                                <td>7810202001539202</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card main_header">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>Perusahaan</b></td>
                                <td>:</td>
                                <td> PT.PINDO DELI PULP AND PAPER MILLS</td>
                            </tr>
                            <tr>
                                <td>NPWP/NPPKP</b></td>
                                <td>:</td>
                                <td>01.804.534.4-093.000</td>
                            </tr>
                            <tr>
                                <td>Alamat</b></td>
                                <td>:</td>
                                <td>
                                GEDUNG SINAR MAS LAND PLAZA MENARA 2 LT.9 JL.M.H.THAMRIN
                                : NO.51 RT.009 RW.004 GONDANGDIA MENTENG,JAKARTA PUSAT DKI JAKARTA 10350 
                                </td>                            
                            </tr>
                            <tr>
                                <td>Vessel/Voyage</b></td>
                                <td>:</td>
                                <td>
                                OOCL GUANGZHOU / 123N
                                </td>                            
                            </tr>
                            <tr>
                                <td>CLTM/PDHTR</b></td>
                                <td>:</td>
                                <td>2020-05-25 '.date('h:i:s').'</td>
                            </tr>
                            <tr>
                                <td>Total shift</b></td>
                                <td>:</td>
                                <td></td>                            
                            </tr>
                            <tr>
                                <td>Total CNT</b></td>
                                <td>:</td>
                                <td>1</td>                            
                            </tr>
                        </table>                    
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>Nomor DO/PEB</td>
                                <td>:</td>
                                <td>
                                323465/KPU.01/2020
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor BL</td>
                                <td>:</td>
                                <td>
                                323465
                                </td>
                            </tr>
                            <tr>
                                <td>Bongkar/Muat</td>
                                <td>:</td>
                                <td>MUAT</td>
                            </td>
                            </tr>
                            <tr>
                                <td>Tanggal Tiba</td>
                                <td>:</td>
                                <td>2020-06-30 '.date('h:i:s').'</td>
                            </tr>
                        </table>                    
                    </td>
                </tr>
            </table>
        </div>

        <div class="card main">
        Billing Components :  <hr/> 
            <table style="width: 100%">
                <tr>
                    <td>Jenis Biaya</td>
                    <td>Jumlah</td>
                    <td style="text-align: right">Harga Per-Unit</td>
                    <td style="text-align: right">Total</td>
                </tr>
                <tr>
                    <td>Invoice Terminal - KOJA (101004140022)</td>
                    <td>1</td>
                    <td style="text-align: right">1.000.000</td>
                    <td style="text-align: right">1.000.000</td>
                </tr>
                <tr>
                    <td>ADMINISTRATION</td>
                    <td>1</td>
                    <td style="text-align: right">5.000</td>
                    <td style="text-align: right">5.000</td>
                </tr>
                <tr>
                    <td>PPN Administration 10%</td>
                    <td>1</td>
                    <td style="text-align: right">500</td>
                    <td style="text-align: right">500</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Total</td>
                    <td style="text-align: right">1.005.500</td>
                </tr>
            </table>

            <p>            
                Terbilang: satu juta lima ribu lima ratus rupiah
            </p>
            <p class="notes">            
                * Pembayaran dapat di lakukan melalui VA (Virtual Account) Bank BNI <br/>
                25/06/2020 08117044456 5101702 RNUN TGL. PE: 22/05/2020 MASA PENUMPUKAN: 25/05/2020 S/D 26/05/2020 = 2 HARI
                </p>
            
        </div>
        
        <div class="card">
            <table>
                <tr class="notes">
                    <td>
                    Ketentuan :
                        <ol>
                            <li>Dalam waktu 8 hari kerja setelah nota ini diterima, tidak ada pengajuan keberatan saudara dianggap setuju </li>
                            <li>Terhadap nota yang harus dikoreksi harus dilunasi terlebih dahulu</li>
                            <li>Tidak dibenarkan memberi imbalan kepada petugas</li>
                            <li>Nota ini sebagai bukti pembayaran</li>
                        </ol>
                    </td>
                    <td style="vertical-align: center">
                        <img style="margin: 10px; width:100" src="assets\invoice.png"/>  <br/>
                        
                    </td>
                    <td style="text-align: left">
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
';

$options = new Options();
$options->set('defaultFont', 'sans-serif');
$options->setDefaultPaperSize('A4', 'portrait');

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
