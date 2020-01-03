<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container body">
    <div class="main_container">
        <?php echo $menu_admin; ?>
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1200px;">
            <!-- footer content -->
            <div class="container" style="text-align: right; padding: 10px 10px 5px 10px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <center>
                        <div class="titlebox">
                            <h2 class="parisienne"><strong>Laporan Penjualan</strong></h2>
                        </div>
                        </center>
                        <br/>
                            <?php
                            $attributes = array('class' => 'form-login', 'id' => 'form-login');
                            echo form_open('admin/print_teknisi');
                            ?>
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne"> Pilih Tahun</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="number" class="form-control" name="tahun" value="<?= date("Y"); ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne"> Pilih Bulan</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <select class="form-control" name="bulan" id="bulan">
                                        <?php
                                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni","Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                        $jlh_bln = count($bulan);
                                        for ($c = 0; $c < $jlh_bln; $c++) {
                                            $val = $c + 1 + 6;
                                            if ($val > 12) {
                                                $val -= 12;
                                            }
                                            $temp = $this->session->userdata('bulan_dashboard') == $val ? 'selected' : '';
                                            echo "<option $temp value=$val> $bulan[$c] </option>";
                                        }
                                        ?>
                                    </select><br>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-2"><br/>
                                <center>
                                    <div class="titlebox">
                                        <button style="width: 100%" class="btn btn-success" name="print" type="submit"><i class="fa fa-fw fa-download"></i> Print</button>
                                    </div>
                                </center>
                            </div>
                            <div class="col-md-5"></div>
                            <?php echo form_close(); ?>   
                    </div>
                </div>
               <!--  <p>Copyright &copy; <a href="#"></a> 2019</p> -->
            </div>
            <!-- /footer content -->
        </div>
    </div>
    <!-- /page content -->
</div> 
<?php
echo add_js('admin/default-theme/bootstrap.min');
echo add_js('admin/default-theme/jquery.mCustomScrollbar.concat.min');
echo add_js('admin/default-theme/custom');
?>