    <!-- Begin Page Content -->
    <div class="container-fluid pl-5 pr-5">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add New Product</h1>

        <!-- Form -->
        <?= form_open_multipart('admin/clothing/action_add_product'); ?>
            <div class="row">
                <?php 
                    if ($this->session->flashdata('failupload')) {
                      echo "<div class='alert alert-danger' role='alert'><p class='alert-link'>".$this->session->flashdata('failupload')."</div>";
                    }elseif (validation_errors()) {
                      echo "<div class='alert alert-danger' role='alert'><p class='alert-link'>".validation_errors()."</div>";
                    }
                  ?>
                <div class="col">
                    <input type="text" name="product_id" readonly class="form-control-plaintext form-control-lg text-grey-800" id="staticEmail2" value="<?= $code ?>" >
                    <label for="#nameproduct">Product Name</label>
                    <input type="text" id="#nameproduct" name="product_name" class="form-control form-control-lg">
                    <label class="mt-3 block" for="#Availablesize">Available Size</label>
                    </br>
                    <?php foreach($size as $sz) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox<?= $sz->size_id?>" name="size[]" value="<?= $sz->size_name ?>">
                        <label class="form-check-label text-gray-700" for="inlineCheckbox<?= $sz->size_id?>"><?= $sz->size_name?></label>
                    </div>
                    <?php endforeach ?>
                    </br>
                    <label class="mt-3 block" for="#Availablesize">Available Color</label>
                    </br>
                    <?php foreach($color as $clr) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox<?= $clr->color_id?>" name="color[]" value="<?= $clr->color_name ?>">
                        <label class="form-check-label text-gray-700" for="inlineCheckbox<?= $clr->color_id?>"><?= $clr->color_name?></label>
                    </div>
                    <?php endforeach ?>
                    </br>
                    <label class="mt-3 block" for="#Availablesize">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" name="price" min="0" class="form-control" id="inlineFormInputGroup" placeholder="Price" >
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="product_images" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="col">
                    <label for="#descadd">Description</label>
                    <textarea name="product_desc" class="form-control" rows="15" id="descadd" ></textarea> 
                </div>
            </div>
            <button class="btn btn-primary mt-3 float-right">ADD</button>
        </form>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>