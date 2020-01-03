<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
        <br/><br/>
        <br/><br/>
        <br/><br/>
    <section id="login" >
        <div class="row">
            <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 col-sm-12 col-xs-12">
                <div >
                    <center>
                        <div class="titlebox">
                            <center>
                            <span class="logo-lg">
                            <img style="margin-top: -5px; width:60%;height:60%;" src="<?php echo base_url('assets/img/logo.png'); ?>"
                                 class="user-image" alt="Logo"/> 
                             </center>
                        </div>
                    </center>
                    <br/>
                    <?php
                    $attributes = array('class' => 'form-login', 'id' => 'form-login');
                    echo form_open('admin/login');
                    ?>
                    <div class="form-group">
                        <input required class="form-control field-input" name="username" type="text" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input required class="form-control field-input" name="password" type="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <button style="width: 100%" class="btn btn-success" name="login" type="submit"><i class="fa fa-fw fa-sign-in"></i> LOGIN</button>
                    </div>
                    <div class="form-group">
                        <?php
                        if ($false == 1) {
                            ?>
                            <p style="color: red;"><i>Username dan Password tidak cocok.</i></p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php echo form_close(); ?>    
                </div>
            </div>
        </div>
        <br/><br/>
    </section>
</div>