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
    <div class="invoice">
          <div class="invoice-company">
            <span class="float-end hidden-print">
              <a href="javascript:;" class="btn btn-sm btn-white mb-10px"
                ><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i>
                Export as PDF</a
              >
              <a
                href="javascript:;"
                onclick="if (!window.__cfRLUnblockHandlers) return false; window.print()"
                class="btn btn-sm btn-white mb-10px"
                data-cf-modified-f5cc89947d6903fcff5c8376-
                ><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a
              >
            </span>
            Company Name, Inc
          </div>

          <div class="invoice-header">
            <div class="invoice-from">
              <small>from</small>
              <address class="mt-5px mb-5px">
                <strong class="text-dark">Twitter, Inc.</strong><br />
                Street Address<br />
                City, Zip Code<br />
                Phone: (123) 456-7890<br />
                Fax: (123) 456-7890
              </address>
            </div>
            <div class="invoice-to">
              <small>to</small>
              <address class="mt-5px mb-5px">
                <strong class="text-dark">Company Name</strong><br />
                Street Address<br />
                City, Zip Code<br />
                Phone: (123) 456-7890<br />
                Fax: (123) 456-7890
              </address>
            </div>
            <div class="invoice-date">
              <small>Invoice / July period</small>
              <div class="date text-dark mt-5px">August 3,2022</div>
              <div class="invoice-detail">
                #0000123DSS<br />
                Services Product
              </div>
            </div>
          </div>

          <div class="invoice-content">
            <div class="table-responsive">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th>TASK DESCRIPTION</th>
                    <th class="text-center" width="10%">RATE</th>
                    <th class="text-center" width="10%">HOURS</th>
                    <th class="text-end" width="20%">LINE TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="text-dark"
                        >Website design &amp; development</span
                      ><br />
                      <small
                        >Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed id sagittis arcu.</small
                      >
                    </td>
                    <td class="text-center">$50.00</td>
                    <td class="text-center">50</td>
                    <td class="text-end">$2,500.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-dark">Branding</span><br />
                      <small
                        >Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed id sagittis arcu.</small
                      >
                    </td>
                    <td class="text-center">$50.00</td>
                    <td class="text-center">40</td>
                    <td class="text-end">$2,000.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-dark">Redesign Service</span><br />
                      <small
                        >Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed id sagittis arcu.</small
                      >
                    </td>
                    <td class="text-center">$50.00</td>
                    <td class="text-center">50</td>
                    <td class="text-end">$2,500.00</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="invoice-price">
              <div class="invoice-price-left">
                <div class="invoice-price-row">
                  <div class="sub-price">
                    <small>SUBTOTAL</small>
                    <span class="text-dark">$4,500.00</span>
                  </div>
                  <div class="sub-price">
                    <i class="fa fa-plus text-muted"></i>
                  </div>
                  <div class="sub-price">
                    <small>PAYPAL FEE (5.4%)</small>
                    <span class="text-dark">$108.00</span>
                  </div>
                </div>
              </div>
              <div class="invoice-price-right">
                <small>TOTAL</small> <span class="fw-bold">$4508.00</span>
              </div>
            </div>
          </div>

          <div class="invoice-note">
            * Make all cheques payable to [Your Company Name]<br />
            * Payment is due within 30 days<br />
            * If you have any questions concerning this invoice, contact [Name,
            Phone Number, Email]
          </div>

          <div class="invoice-footer">
            <p class="text-center mb-5px fw-bold">
              THANK YOU FOR YOUR BUSINESS
            </p>
            <p class="text-center">
              <span class="me-10px"
                ><i class="fa fa-fw fa-lg fa-globe"></i>
                matiasgallipoli.com</span
              >
              <span class="me-10px"
                ><i class="fa fa-fw fa-lg fa-phone-volume"></i>
                T:016-18192302</span
              >
              <span class="me-10px"
                ><i class="fa fa-fw fa-lg fa-envelope"></i>
                <a
                  href="/cdn-cgi/l/email-protection"
                  class="__cf_email__"
                  data-cfemail="6210160b070f121122050f030b0e4c010d0f"
                  >[email&#160;protected]</a
                ></span
              >
            </p>
          </div>
        </div>
</div>
<?php require('layouts/footer-data.php'); ?>