<?php require('layouts/header.php'); ?>
<?php require('layouts/sidebar.php'); ?>

<div id="content" class="app-content">
  <div class="d-flex align-items-center mb-3">
    <div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
        <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Banner</li>
      </ol>
      <h1 class="page-header mb-0">Banner</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card border-0 mb-4">
        <div class="card-header h6 mb-0 bg-none p-3">
          <i class="fa fa-image fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Add Banner
        </div>

        <form action="http://localhost/fobeaappliances/admin/manage-banner" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Banner Title</label>
                  <input class="form-control" type="text" name="btitle" placeholder="Enter Banner Title" value="" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Banner Redirect Link</label>
                  <input class="form-control" type="text" name="burl" placeholder="Enter Banner Redirect Link" value="" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Banner Image</label>
                  <input class="form-control" type="file" name="bimage" accept="image/png, image/webp, image/jpeg" value="" />
                </div>
              </div>

              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label">Banner Display Order</label>
                  <input class="form-control" type="number" name="bsort" placeholder="Enter Banner Display Order" value="" />
                </div>
              </div>

              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label">Banner Status</label>
                  <select class="form-control" name="bstatus">
                    <option value="1">Active Banner</option>
                    <option value="0">Inactive Banner</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-none d-flex p-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> CLICK TO SAVE DETAIL </button>
            <button type="reset" class="btn btn-danger ms-2">RESET</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row mb-3">
          <div class="col-xl-4 banner-div">
        <div class="banner-area">
          <a href="#"><img src="http://localhost/fobeaappliances/uploads/banner/banner_1681432837.jpg"></a>
          <div class="pic_title" style="background: #fff;padding: 10px;">
            <div class="col-xl-12 row">
              <div class="col-xl-11">
                <div class="banner_title" style="font-weight: bold;"> Banner 1 </div>
              </div>
              <div class="col-xl-1" style="text-align: end;"> 
                <div class="form-check form-switch">
                  <input class="form-check-input statusbanner" data-id="2" type="checkbox" checked>
                </div> 
              </div>
            </div>  
          </div>
          <a class="remove-banner" style="display: inline;" href="http://localhost/fobeaappliances/admin/manage-banner/2" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fas fa-trash"></i></a>
          <a data-id="2" data-bs-toggle="modal" class="edit-banner edit_banner" style="display: inline;"><i class="fas fa-edit"></i></a>
        </div>
      </div>
          <div class="col-xl-4 banner-div">
        <div class="banner-area">
          <a href="#"><img src="http://localhost/fobeaappliances/uploads/banner/banner_1681638999.jpg"></a>
          <div class="pic_title" style="background: #fff;padding: 10px;">
            <div class="col-xl-12 row">
              <div class="col-xl-11">
                <div class="banner_title" style="font-weight: bold;"> Banner 1 </div>
              </div>
              <div class="col-xl-1" style="text-align: end;"> 
                <div class="form-check form-switch">
                  <input class="form-check-input statusbanner" data-id="1" type="checkbox" checked>
                </div> 
              </div>
            </div>  
          </div>
          <a class="remove-banner" style="display: inline;" href="http://localhost/fobeaappliances/admin/manage-banner/1" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fas fa-trash"></i></a>
          <a data-id="1" data-bs-toggle="modal" class="edit-banner edit_banner" style="display: inline;"><i class="fas fa-edit"></i></a>
        </div>
      </div>
      </div>


</div>
</div>
<?php require('layouts/footer-data.php'); ?>