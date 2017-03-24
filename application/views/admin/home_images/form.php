<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo lang('groups_create'); ?></h3>
                                </div>
                                <div class="box-body">
                                    <?php echo $message;?>
                                    <?=(empty($error)) ? '' : $error;?>

                                    <?php echo form_open_multipart(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_group')); ?>
                                        
                                        <div class="form-group">
                                            <?php echo lang('picture', 'picture', array('class' => 'col-sm-2 control-label')); ?>
                                            <div class="col-sm-10">
                                                <input type="file" name="picture" size="20" />
                                                <br>
                                                <?php
                                                if( !empty($data['file']) )
                                                {
                                                    echo "<img src=".base_url().'/upload/'.$data['file']." height=300 >";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <?php echo lang('status', 'status', array('class' => 'col-sm-2 control-label')); ?>
                                            <div class="col-sm-10">
                                                <select name="status">
                                                    <?php
                                                        if( !empty($data['status']) )
                                                        {
                                                            echo '<option>~</option>';
                                                        }
                                                        else
                                                        {
                                                            if($data['status'] == 0)
                                                            {
                                                                echo '<option>~</option>';
                                                            }
                                                        }

                                                        for ($i=1; $i <= 13 ; $i++) { 
                                                            echo "<option value=$i ";
                                                            if( !empty($data['status']) )
                                                            {
                                                                if($data['status'] == $i)
                                                                {
                                                                    echo "selected=''";
                                                                }
                                                            }
                                                            echo ">home $i</option>";
                                                        }
                                                    ?>                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="btn-group">
                                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                                    <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => lang('actions_reset'))); ?>
                                                    <?php echo anchor('admin/'.$link, lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
