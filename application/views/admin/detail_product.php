    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
        <div class="card">
            <div class="card-header">
                Detail Product
            </div>
            <div class="card-body">
                <?php foreach ($product as $prod): ?>
                <h5 class="card-title"><?= $prod->product_name ?> <b>( <?= $prod->product_id ?> )</b></h5>
                <!-- Lightbox -->
                    <div>
                    <?php foreach ($image as $img) : 
                        echo "<a class='img-lightbox' href='".base_url()."assets/product/image/".$img->product_image_name."' data-lightbox='example-set' data-title='".$prod->product_name."'><img class='' src='".base_url()."assets/product/image/".$img->product_image_name."' alt=''/></a>";
                        endforeach
                    ?>
                    </div>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <?php endforeach ?>
                <a href="#" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->