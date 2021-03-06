<?php
include("./product_display.php");
?>
<header>
    <div class="container overflow-hidden sticky-top">
        <div class="row g-3 justify-content-start m-1 ">
            <div class="col-lg-12 shadow p-0 mb-0 bg-body rounded p-0">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Product List</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-success" aria-current="page" href="view/_add_product.php">ADD</a>
                                </li>
                                <li class="nav-item me-2">
                                    <button class="btn btn-danger" aria-current="page" id=delete-product-btn>MASS DELETE</button>
                                </li>
                                <li class="nav-item mt-1">
                                    <div> <input type="checkbox" name='select-all' id='select-all'> Select All </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</header>


<div class="container overflow-hidden">
    <div class="row  justify-content-start align-items-start m-1 ">
        <div class="col-md-12 shadow mb-5 bg-body rounded p-4" style="min-height: 250px;">
            <div id='app'>
                <form>
                    <?php
                    $display_box = new product_box();
                    $display_box->create_box();
                    ?>
                </form>
            </div>
        </div>
    </div>

</div>
