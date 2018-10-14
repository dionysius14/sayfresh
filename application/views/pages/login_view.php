<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <section id="login">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 col-sm-12 col-xs-12">
                <div class="form-div logbox">
                    <center>
                        <div class="titlebox">
                            <h2 class="parisienne"><strong>Welcome!</strong></h2>
                            <h3 class="sacramento">Please use id from your email!</h3>
                        </div>
                    </center>
                    <br/>
                    <?php
                    $attributes = array('class' => 'form-login', 'id' => 'form-login');
                    echo form_open('login');
                    ?>
                    <div class="form-group">
                        <input required class="form-control field-input" name="username" type="text" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input required class="form-control field-input" name="password" type="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <button style="width: 100%" class="btn btn-choco" name="login" type="submit"><i class="fa fa-fw fa-sign-in"></i> LOGIN</button>
                    </div>
                    <div class="form-group">
                        <?php
                        if ($false == 1) {
                            ?>
                            <p style="color: red;"><i>Username and Password didn't match.</i></p>
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