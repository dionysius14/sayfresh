<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
    function getAC() {
        var pelanggan_id = $('#pelanggan_id').val();
        $.ajax({
            url: "<?php echo base_url();?>admin/get_ac",
            method: "POST",
            data: {pelanggan_id: pelanggan_id},
            success: function (result) {
                var list_siswa_id = [];
                var result = JSON.parse(result);
                var html = '<select class="form-control ac_id" name="ac_id" id="ac_id" required>';
                if (result.length != 0) {
                    var i;
                    for (i = 0; i < result.length; i++) {
                        list_siswa_id.push(result[i].ac_id);
                        html += '<option value="' + result[i].ac_id + '">' + result[i].ac_no + '</option>';
                    }
                }
                html = html + '</select>';
                $('.ac_id').html(html);
            }
        });
    }
    function checkWaktu(){
        var jenis = $('#jenis').val();
        if(jenis=='cuci'){
            document.getElementById("jangka").style.visibility = "visible";
        }else if(jenis=='service'){
            document.getElementById("jangka").style.visibility = "hidden";

        }
    }
</script>
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
                            <h2 class="parisienne"><strong>Input Jadwal AC</strong></h2>
                        </div>
                        </center>
                        <br/>
                            <?php
                            $attributes = array('class' => 'form-login', 'id' => 'form-login');
                            echo form_open('admin/input_jadwal_action');
                            ?>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne">Pelanggan</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <select class="form-control" name="pelanggan_id" id="pelanggan_id" onchange="getAC()" required>
                                        <option value="">Pilih Pelanggan</option>
                                        <?php
                                        foreach ($dropdown_pelanggan as $d) {
                                            $selected = '';
                                            ?>
                                            <option value="<?= $d->pelanggan_id ?>"><?= $d->pelanggan_nama ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne">ID AC</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <select class="form-control ac_id" name="ac_id" id="ac_id" required>
                                        <option value="">Pilih AC</option>
                                        <?php
                                        foreach ($dropdown_ac as $d) {
                                            ?>
                                            <option
                                                    value="<?= $d->ac_id ?>"><?= $d->ac_no ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne">Tanggal Order</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <input type="date" required class="form-control" name="tgl_order" value="<?php echo date('Y-m-d'); ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" align="left">
                                   <h2 class="parisienne"> Jenis Layanan</h2>
                                <hr>
                                </div>
                                <div class="form-group" align="left">
                                    <select class="form-control" name="jenis" id="jenis" onchange="checkWaktu()">
                                      <option value="cuci">Cuci Langganan</option>
                                      <option value="service">Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div id='jangka'>
                                    <div class="form-group" align="left">
                                       <h2 class="parisienne">Jangka Waktu</h2>
                                    <hr>
                                    </div>
                                    <div class="form-group" align="left">
                                        <input type="number" class="form-control" name="jangka_waktu" value="0"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <center>
                                    <div class="titlebox">
                                        <button style="width: 100%" class="btn btn-success" name="print" type="submit"><i class="fa fa-fw fa-download"></i> Save</button>
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