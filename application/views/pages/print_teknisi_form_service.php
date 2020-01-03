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
                            <h2 class="parisienne"><strong>Input Form SPK</strong></h2>
                        </div>
                        </center>
                        <br/>
                            <?php
                            $attributes = array('class' => 'form-login', 'id' => 'form-login');
                            echo form_open('admin/print_teknisi');
                            ?>
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                    <h2 class="parisienne">Kondisi Awal (INDOOR)</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_in_power" value="Nyala"> Power<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_in_listrik" value="Ada"> Aliran Listrik<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_in_kipas" value="Normal"> Motoran Kipas<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_in_remote" value="Nyala"> Remote<br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne"> Kondisi Awal (OUTDOOR)</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_out_power" value="Nyala"> Power<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_out_listrik" value="Ada"> Aliran Listrik<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_out_kipas" value="Normal"> Motoran Kipas<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="awal_out_remote" value="Nyala"> Remote<br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                    <h2 class="parisienne">Kondisi Akhir (INDOOR)</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_in_power" value="Nyala"> Power<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_in_listrik" value="Ada"> Aliran Listrik<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_in_kipas" value="Normal"> Motoran Kipas<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_in_remote" value="Nyala"> Remote<br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="left">
                                    <h2 class="parisienne">Kondisi Akhir (OUTDOOR)</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_out_power" value="Nyala"> Power<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_out_listrik" value="Ada"> Aliran Listrik<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_out_kipas" value="Normal"> Motoran Kipas<br>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="checkbox" name="akhir_out_remote" value="Nyala"> Remote<br>
                                </div>
                            </div>
                                    <input hidden type="text" name="id" value="<?php echo $id ?>">
                            <center>
                            <div class="titlebox">
                                    <button  class="btn btn-success" name="print" type="submit"><i class="fa fa-fw fa-download"></i> Print</button>
                            </div>
                            </center>
                            <?php echo form_close(); ?>   
                    </div>
                </div>
                <p>Copyright &copy; <a href="#"></a> 2019</p>
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