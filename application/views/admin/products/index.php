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
                                    <h3 class="box-title"><?php echo anchor('admin/'.$link.'/create', '<i class="fa fa-plus"></i> '. lang('create'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo lang('name');?></th>
                                                <th><?php echo lang('categories_name');?></th>
                                                <th><?php echo lang('action');?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $values):?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($values->name, ENT_QUOTES, 'UTF-8'); ?></td>
                                                    <td><?php echo htmlspecialchars($values->categories_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                                    <td><?php echo anchor("admin/".$link."/edit/".$values->id, lang('edit')); ?> | <?php echo anchor("admin/".$link."/delete/".$values->id, lang('delete')); ?></td>
                                                </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-12 text-left">
                                            <?php echo $links; ?>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                         </div>
                    </div>
                </section>
            </div>
