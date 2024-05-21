<div class="content">
    <div class="mb-9">
      <div class="mx-n4 mx-lg-n6 mt-n5 position-relative mb-md-9" style="height:208px">
        <div class="bg-holder bg-card d-dark-none" style="background-image:url(../../assets/img/bg/bg-40.png);background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder bg-card d-light-none" style="background-image:url(../../assets/img/bg/bg-dark-40.png);background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="faq-title-box position-relative bg-white border border-200 p-6 rounded-3 text-center mx-auto">
          <h1>How can we help?</h1>
          <p class="my-3">Search for the topic you need help with or <a href="faq-tab.html#!">contact our support</a></p>
          <div class="search-box w-100">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" aria-label="Search" /><span class="fas fa-search search-box-icon"></span></form>
          </div>
        </div>
      </div>
      <div class="row gx-xl-8 gx-xxl-11 gy-6 faq">
        <div class="col-md-6 col-xl-5 col-xxl-4">
          <div class="faq-sidebar offcanvas offcanvas-start bg-soft z-index-5 w-100" id="faq-offcanvas" data-bs-backdrop="false" data-vertical-category-offcanvas="data-vertical-category-offcanvas">
            <ul class="faq-category-tab nav nav-tabs mb-10 mb-md-5 pb-3 pt-2 w-100 w-sm-75 w-md-100 mx-auto">
              <li class="nav-item"><button class="nav-link fw-semi-bold fs-0 active" id="all" type="button" data-bs-toggle="tab" data-category-filter="all">All fap</button></li>
            </ul>
            <div class="faq-subcategory-tab nav nav-tabs w-sm-75 w-md-100 mx-auto mb-4" id="faq-subcategory-tab" style="width: 90%">
              <div class="nav-item w-100 popular mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0 active" id="tab-sale-101" data-bs-toggle="tab" data-bs-target="#sale-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-chart-pie"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Sales</span><span class="d-block text-900 fw-normal mb-0 fs--1">Answer the most frequently asked questions about your products &amp; services here.</span></button></div>
 {{--              <div class="nav-item w-100  mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-delivery-101" data-bs-toggle="tab" data-bs-target="#delivery-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-truck-fast"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Delivery</span><span class="d-block text-900 fw-normal mb-0 fs--1">Answer each &amp; every question about your product and service delivery, maintain customers.</span></button></div>
                --}}  
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-7 col-xxl-8 mt-md-11">
          <div class="faq-subcategory-content tab-content">
            <div class="empty-header d-none d-md-block"></div><button class="btn btn-link d-md-none my-6 fs-0 ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#faq-offcanvas"> <span class="fa-solid fa-chevron-left fs--1 me-2" data-fa-transform="up-2"></span>Categories</button>
           
            @foreach ($HomeHelps as $key => $HomeHelp)
            <div class="tab-pane fade active show" id="sale-101">
              <ul class="list-inline mb-0">
                <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                  <div>
                    <h4 class="mb-3 text-1000">1{{$HomeHelp->title}}</h4>
                    <p class="mb-0 text-700">1{!! $HomeHelp->body !!}</p>
                  </div>
                </li>
              </ul>
              <hr class="text-300" />
            </div>
            @endforeach

      {{--       <div class="tab-pane fade" id="delivery-101">
              <ul class="list-inline mb-0">
                <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                  <div>
                    <h4 class="mb-3 text-1000">Do you avail any delivery tracking option?</h4>
                    <p class="mb-0 text-700">Yes. You can track your order and shipment details through the purchase code that we send, and know the current status of your purchase</p>
                  </div>
                </li>
              </ul>
              <hr class="text-300" />
            </div> --}}
       
          </div>
        </div>
      </div>
    </div>
  </div>