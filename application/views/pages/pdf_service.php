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
           SPK SERVICE / PASANG BARU
        </strong>
    </center>
</div>
<br/><br/>
<div class="row">
    <div class="col-md-12" style="font-size: 12px">
        <table>
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
            <td width='50'><b>Nama</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->pelanggan_nama ?>
            </td>
        </tr>
        <tr>
            <td width='50'><b>No HP</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->pelanggan_wa ?>
            </td>
        </tr>
        <tr>
            <td width='50'><b>Alamat</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->pelanggan_alamat ?>
            </td>
        </tr>
        <tr>
            <td width='50'><b>Tanggal</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= date('d/m/Y') ?>
            </td>
        </tr>
        <tr>
            <td width='50'><b>Merk AC</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                <?= $_data->ac_merk ?>
            </td>
        </tr>
        <tr>
            <td width='50'><b>Type</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td width='50'><b>Kode/No Seri</b></td>
            <td>
                <b>:</b>
            </td>
            <td>
                
            </td>
        </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <th align="center"><b>KEADAAN AWAL</b></th>
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
        <table class="table-border" style="width: 100%;">
          <tr>
            <th align="center" colspan="3">Kondisi Awal</th>
            <th rowspan="9"></th>
            <th align="center" colspan="3">Kondisi Akhir</th>
          </tr>
          <tr>
            <td></td>
            <td align="center" >Indoor</td>
            <td align="center">Outdoor</td>
            <td ></td>
            <td align="center">Indoor</td>
            <td align="center">Outdoor</td>
          </tr>
          <tr>
            <td >Power</td>
            <td align="center"><?= isset($_form['awal_in_power']) ? ($_form['awal_in_power']) : 'Mati'; ?></td>
            <td align="center"><?= isset($_form['awal_out_power']) ? ($_form['awal_out_power']) : 'Mati'; ?></td>
            <td >Power</td>
            <td align="center"><?= isset($_form['akhir_in_power']) ? ($_form['akhir_in_power']) : 'Mati'; ?></td>
            <td align="center"><?= isset($_form['akhir_out_power']) ? ($_form['akhir_out_power']) : 'Mati'; ?></td>
          </tr>
          <tr>
            <td >Aliran Listrik</td>
            <td align="center"><?= isset($_form['awal_in_listrik']) ? ($_form['awal_in_listrik']) : 'Tidak'; ?></td>
            <td align="center"><?= isset($_form['awal_out_listrik']) ? ($_form['awal_out_listrik']) : 'Tidak'; ?></td>
            <td >Aliran Listrik</td>
            <td align="center"><?= isset($_form['akhir_in_listrik']) ? ($_form['akhir_in_listrik']) : 'Tidak'; ?></td>
            <td align="center"><?= isset($_form['akhir_out_listrik']) ? ($_form['akhir_out_listrik']) : 'Tidak'; ?></td>
          </tr>
          <tr>
            <td >Motoran Kipas</td>
            <td align="center"><?= isset($_form['awal_in_kipas']) ? ($_form['awal_in_kipas']) : 'Tidak'; ?></td>
            <td align="center"><?= isset($_form['awal_out_kipas']) ? ($_form['awal_out_kipas']) : 'Tidak'; ?></td>
            <td >Motoran Kipas</td>
            <td align="center"><?= isset($_form['akhir_in_kipas']) ? ($_form['akhir_in_kipas']) : 'Tidak'; ?></td>
            <td align="center"><?= isset($_form['akhir_out_kipas']) ? ($_form['akhir_out_kipas']) : 'Tidak'; ?></td>
          </tr>
          <tr>
            <td >Remote</td>
            <td align="center"><?= isset($_form['awal_in_remote']) ? ($_form['awal_in_remote']) : 'Mati'; ?></td>
            <td align="center"><?= isset($_form['awal_out_remote']) ? ($_form['awal_out_remote']) : 'Mati'; ?></td>
            <td >Remote</td>
            <td align="center"><?= isset($_form['akhir_in_remote']) ? ($_form['akhir_in_remote']) : 'Mati'; ?></td>
            <td align="center"><?= isset($_form['akhir_out_remote']) ? ($_form['akhir_out_remote']) : 'Mati'; ?></td>
          </tr>
          <tr>
            <td>Flow</td>
            <td ></td>
            <td ></td>
            <td >Flow</td>
            <td ></td>
            <td ></td>
          </tr>
          <tr>
            <td>Suhu</td>
            <td ></td>
            <td ></td>
            <td >Suhu</td>
            <td ></td>
            <td ></td>
          </tr>
          <tr>
            <td >Tekanan Komp.</td>
            <td align="center">Mati :</td>
            <td align="center">Nyala :</td>
            <td >Tekanan Komp</td>
            <td align="center">Mati :</td>
            <td align="center">Nyala :</td>
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
                <td class="table-border" style="width:30%" align="center">
                    TEKNISI<br><br><br><br>
                </td>
                <td></td>
                <td></td>
                <td class="table-border" style="width:30%" align="center">
                    PEMILIK/PENANGGUNG JAWAB<br><br><br><br>
                </td>
                <td></td>
                <td></td>
                <td class="table-border" style="width:40%" align="center">
                    <div class="text-center">
                        ESTIMASI BIAYA<br><br><br><br>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>
