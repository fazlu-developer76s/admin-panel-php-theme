<?php require('layouts/header.php'); ?>
<?php require('layouts/sidebar.php'); ?>
<div id="content" class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Product</a></li>
                <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Create New Product</li>
            </ol>
            <h1 class="page-header mb-0">Create New Product</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <i class="fa fa-dolly fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Product Information
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Product name">
                    </div>
                    <div class>
                        <label class="form-label">Description</label>
                        <div class="form-control p-0 overflow-hidden">
                            <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <i class="fa fa-file-image fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Product Image
                </div>
                <div class="card-body">
                    <div class="row mb-n3">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Thumbnail Image</label>
                                <input type="file" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Multiple Images</label>
                                <input type="file" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <i class="fa fa-box fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Inventory
                </div>
                <div class="card-body">
                    <div class="row mb-n3">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Compare at Price</label>
                                <input type="text" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                        <small class="text-muted">To Show a reduced price, enter the product's original price into compare at price and enter a lower price into price </small>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">SKU Code</label>
                                <input type="text" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Barcode</label>
                                <input type="text" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="text" class="form-control" name="weight" placeholder="(kg)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3">
                    <i class="fa fa-search fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Seo Content
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" class="form-control" name="package_content" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Keyword</label>
                        <input type="text" class="form-control" name="package_content" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <div class="form-control p-0 overflow-hidden">
                            <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                    <div class="flex-1">
                        <div>Product Status</div>
                    </div>
                </div>
                <div class="card-body fw-bold">
                    <div class="mb-3">
                        <label class="form-label">Product type</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Product type" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                    <div class="flex-1">
                        <div>Product Category</div>
                    </div>
                </div>
                <div class="card-body fw-bold">
                    <div class="mb-3">
                        <label class="form-label">Product type</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Product type" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Vendor</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Apple store supplies" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                    <div class="flex-1">
                        <div>Product Feature</div>
                    </div>
                </div>
                <div class="card-body fw-bold">
                    <div class="mb-3">
                        <label class="form-label">Product Feature</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Product type" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                    <div class="flex-1">
                        <div>Product Brand</div>
                    </div>
                </div>
                <div class="card-body fw-bold">
                    <div class="mb-3">
                        <label class="form-label">Product type</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Product type" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Vendor</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Apple store supplies" />
                            <button class="btn btn-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require('layouts/footer-data.php'); ?>