<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">ALL PRODUCT</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
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
                    <th>Category Product</th>
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
                    <!-- Lightbox -->
                    <!-- <td class="wd-100" >
                    <?php foreach ($image as $img) : 
                        if (($img->product_image_id_product==$prod->product_id) && ($img->product_image_status=="primary")) {
                            echo "<a class='example-image-link' href='".base_url()."assets/product/image/".$img->product_image_name."' data-lightbox='example-set' data-title='".$prod->product_name."'><img class='example-image img-thumbnail' src='".base_url()."assets/product/image/".$img->product_image_name."' alt=''/></a>";
                        }elseif (($img->product_image_id_product==$prod->product_id) && ($img->product_image_status=="secondary")){
                            echo "<a class='example-image-link' href='".base_url()."assets/product/image/".$img->product_image_name."' data-lightbox='example-set' data-title='".$prod->product_name."' hidden><img class='example-image img-thumbnail' src='".base_url()."assets/product/image/".$img->product_image_name."' alt=''/></a>";
                        }
                        endforeach
                    ?></td> -->
                    <!-- End Lightbox -->
                    <td><?= $prod->product_name ?></td>
                    <?php if ($prod->product_category == 1) {
                        echo "<td>MEN</td>";
                    }else{
                        echo "<td>WOMEN</td>";
                    } ?>
                    <td class="wd-400" ><?= $prod->product_desc ?></td>
                    <td>$ <?= $prod->product_price ?></td>
                    <td class="wd-50">
                        <a href="<?= base_url() ?>admin/clothing/detail_product/<?= $prod->product_id ?>" class="btn btn-primary mb-2" ><i class="fas fa-eye" ></i></a>
                        <a href="<?= base_url() ?>admin/clothing/edit_product" class="btn btn-warning mb-2" ><i class="fas fa-edit" ></i></a>
                        <a href="" class="btn btn-danger mb-2" ><i class="fas fa-trash" ></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
