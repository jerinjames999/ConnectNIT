<?php include_once('admin_panel_menu.php')?>
<div class="col-md-9" id="deletecategory1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>ALL CATEGORIES</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="table-responsive">
                                <table class="table table-striped table-hover table-sm">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">category</th>
                                        <th scope="col">category order</th>
                                        <th scope="col">status</th>
                                        <th scope="col">delete category</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($datas as $data):?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $data['category_hname'];?></td>
                                        <td><?php echo $data['category_order'];?></td>
                                        <td><a href="<?php echo site_url();?>/admin/category_status/<?php echo $data['category_id']; ?>" style ='color:red'><?php echo $data['category_status'];?></a></td>
                                        <td><a href="<?php echo site_url(); ?>/admin/delete_category/<?php echo $data['category_id'];?>" style ='color:red'>delete</a></td>
                                    </tr>
                                       
                                    <?php $count++; endforeach ?>
                                </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>