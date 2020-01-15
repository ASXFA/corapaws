    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
        <div class="card">
            <div class="card-header">
                Detail Product
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- coloumn 1 -->
                    <div class="col-8">
                        <?php foreach ($product as $prod): ?>
                        <h4 class="card-title"><?= $prod->product_name ?> <b>( <?= $prod->product_id ?> )</b></h4>
                        <!-- Lightbox -->
                            <div>
                                <?php echo "<a class='img-lightbox m-2' href='".base_url()."assets/img/design/".$prod->product_image."' data-lightbox='example-set' data-title='".$prod->product_image."'><img class='img-lightbox' src='".base_url()."assets/img/design/".$prod->product_image."' alt=''/></a>";
                                ?>
                            </div>
                        <h5 class="card-tittle mt-3 mb-3">Description</h5>
                        <p class="card-text mt-2 align-text-detail "><?= $prod->product_desc ?></p>
                        <?php endforeach ?>
                        <a href="<?= base_url() ?>admin/clothing" class="btn btn-secondary">Back</a>
                    </div>
                    <!-- column 2 -->
                    <div class="col-sm">
                        <?php foreach ($product as $prod): ?>
                        <h4 class="card-title">Available Size and Color</h4>
                        <table class="table">
                            <thead>
                                <th>Size</th>
                                <th>Color</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $prod->product_size ?></td>
                                    <td><?= $prod->product_color ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->