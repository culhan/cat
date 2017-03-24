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
                                            <?php echo lang('name', 'name', array('class' => 'col-sm-2 control-label')); ?>
                                            <div class="col-sm-10">
                                                <?php echo form_input($name);?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php echo lang('categories', 'categories', array('class' => 'col-sm-2 control-label')); ?>
                                            <div class="col-sm-10">
                                                <select name="id_categories">
                                                    <?php
                                                        foreach ($categories as $categories_key => $categories_value) {
                                                            echo '<option value="'.$categories_value->id.'"';
                                                            if( !empty($data['id_categories']) )
                                                            {
                                                                if( $data['id_categories'] == $categories_value->id )
                                                                {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            echo '>'.$categories_value->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
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
                                            <script src=<?=base_url()."assets/js/vendor/tinymce/tinymce.min.js"?>></script>
                                            <script>tinymce.init({ selector:'textarea' });</script>
                                            <?php echo lang('description', 'description', array('class' => 'col-sm-2 control-label')); ?>
                                            <div class="col-sm-10">
                                                <textarea name="description">
                                                    <?php
                                                    if( !empty($data['description']) )
                                                    {
                                                        echo $data['description'];
                                                    }
                                                    ?>
                                                </textarea>
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
