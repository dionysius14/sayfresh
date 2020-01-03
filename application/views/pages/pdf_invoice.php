<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <style>
        @page {
            margin-left: 2cm;
            margin-top: 1cm;
            margin-right: 2cm;
            margin-bottom: 0.4cm;
        }

        body {
            line-height: 1em;
        }

        .center {
            text-align: center;
        }

        .table {
            font-size: 12px;
        }

        .table-border, .table-border th, .table-border tr, .table-border td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
            font-size: 10px;
        }

        .table-border thead {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="row" style="font-size: 20px">
    <center>
        <strong>
           Bima Putra Perkasa
        </strong>
    </center>
</div>
<br/><br/>
<div class="row">
    <div class="col-md-12" style="font-size: 12px">
        <table >
        <tr>
            <td width='100'><b>Nama</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->pelanggan_nama ?>
            </td>
        </tr>
        <tr>
            <td width='100'><b>No HP</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->pelanggan_wa ?>
            </td>
        </tr>
        <tr>
            <td width='100'><b>Tanggal</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= date('d/m/Y') ?>
            </td>
        </tr>
        <tr>
            <td width='100'><b>Alamat</b></td>
            <td>
                <b>:</b>
            </td>
            <td >
                <?= $_data->pelanggan_alamat ?>
            </td>
        </tr>
        </table>
        <br/><br/>
        <table class="table-border" style="width: 100%;">    
          <tr>
            <th width="1%" align="center" >Jml</th>
            <th width="59%" align="center">Deksripsi</th>
            <th width="20%" align="center">Harga</th>
            <th width="20%" align="center">Total</th>
          </tr>
          <tr>
            <td>1<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
            <td><?= $_data->ac_merk.'/'.$_data->ac_pk ?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
            <td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
            <td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td colspan="3" align="right">Sub Total</td>
            <td></td>
          </tr>
        </table>
        <br/><br/> 
        <table class="table-border" style="width: 100%;">
            <tr>
                <th align="center" colspan="17" rowspan="15"></th>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>
</div>

</body>