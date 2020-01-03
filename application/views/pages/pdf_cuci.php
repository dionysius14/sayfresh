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
           SPK CUCI / PERAWATAN
        </strong>
    </center>
</div>
<br/><br/>
<div class="row">
    <div class="col-md-12" style="font-size: 12px">
        <table >
        <tr>
            <td width='100'><b>No Order</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->no_order ?>
            </td>
        </tr>
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
            <th colspan="3" rowspan="2"></th>
            <th align="center" colspan="7">KONDISI AWAL</th>
            <th align="center" colspan="7">KONDISI AWAL</th>
          </tr>
          <tr>
            <td align="center" colspan="4">INDOOR</td>
            <td align="center" colspan="3">OUTDOOR</td>
            <td align="center" colspan="4">INDOOR</td>
            <td align="center" colspan="3">OUTDOOR</td>
          </tr>
          <tr>
            <td align="center">AC</td>
            <td align="center">Letak/Kode</td>
            <td align="center">Merk/PK</td>
            <td align="center">Nyala</td>
            <td align="center">Suhu Evap</td>
            <td align="center">Suhu Luar</td>
            <td align="center">Flow</td>
            <td align="center">Nyala</td>
            <td align="center">Suhu</td>
            <td align="center">Flow</td>
            <td align="center">Nyala</td>
            <td align="center">Suhu Evap</td>
            <td align="center">Suhu Luar</td>
            <td align="center">Flow</td>
            <td align="center">Nyala</td>
            <td align="center">Suhu</td>
            <td align="center">Flow</td>
          </tr>
          <tr>
            <td align="center">1</td>
            <td ><?= $_data->ac_posisi ?></td>
            <td align="center"><?= $_data->ac_merk.'/'.$_data->ac_pk ?></td>
            <td ><?= isset($_form['awal_in_nyala']) ? ($_form['awal_in_nyala']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_in_evap']) ? ($_form['awal_in_evap']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_in_luar']) ? ($_form['awal_in_luar']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_in_flow']) ? ($_form['awal_in_flow']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_out_nyala']) ? ($_form['awal_out_nyala']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_out_suhu']) ? ($_form['awal_out_suhu']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['awal_out_flow']) ? ($_form['awal_out_flow']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_in_nyala']) ? ($_form['akhir_in_nyala']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_in_evap']) ? ($_form['akhir_in_evap']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_in_suhu']) ? ($_form['akhir_in_suhu']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akrhi_in_flow']) ? ($_form['akrhi_in_flow']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_out_nyala']) ? ($_form['akhir_out_nyala']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_out_suhu']) ? ($_form['akhir_out_suhu']) : 'Tidak'; ?></td>
            <td ><?= isset($_form['akhir_out_flow']) ? ($_form['akhir_out_flow']) : 'Tidak'; ?></td>
          </tr>
        </table>
        <br/><br/> 
        <table style="width: 100%;">
            <tr>
                <th align="center"><b>TINDAKAN/HASIL/REKOMENDASI</b></th>
            </tr>
        </table>
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
        <br/><br/> 
        <table style="width: 100%">
            <tr>
                <td class="table-border" style="width:50%" align="center">
                    TANGGAL CUCI KEMBALI<br><br><br><br>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="table-border" style="width:50%" align="center">
                    <div class="text-center">
                        ESTIMASI BIAYA<br><br><br><br>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>