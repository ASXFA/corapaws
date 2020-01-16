<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">ALL PRODUCT</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Product <span> <a href="<?= base_url() ?>admin/clothing/add_product" class="btn btn-primary float-right"> Add Product</a> </span></h6>
            <h6 class="m-0 font-weight-bold text-primary"><i class=></i></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark"> 
                <tr>
                    <th>No</th>
                    <th>ID Product</th>
                    <th>Name Product</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $no = 1; 
                foreach ($product as $prod): 
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $prod->product_id ?></td>                    
                    <td><?= $prod->product_name ?></td>
                    <td class="wd-400" ><?= $prod->product_desc ?></td>
                    <td>$ <?= $prod->product_price ?></td>
                    <td class="wd-50">
                        <a href="<?= base_url() ?>admin/clothing/detail_product/<?= $prod->product_id ?>" class="btn btn-primary mb-2" ><i class="fas fa-eye" ></i></a>
                        <a href="<?= base_url() ?>admin/clothing/edit_product" class="btn btn-warning mb-2" ><i class="fas fa-edit" ></i></a>
                        <a href="#" class="btn btn-danger mb-2" data-toggle="modal" data-target="#deleteModal<?= $prod->product_id ?>" ><i class="fas fa-trash" ></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
          <!-- Delete Modal-->
            <?php foreach ($product as $prod) : ?>
            <div class="modal fade" id="deleteModal<?= $prod->product_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete <b><?= $prod->product_name ?></b> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <form action="<?= base_url();?>admin/clothing/delete_product/<?= $prod->product_id; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="text" name="product_id" class="form-control" value="<?= $prod->product_id ?>" hidden>
                        </div>
                    <div class="modal-body">Select "Delete" below if you are ready to delete your data.</div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            <?php endforeach ?>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
