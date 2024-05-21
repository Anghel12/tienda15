<div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="customer-details.html#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="customer-details.html#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
      </ol>
    </nav>
    <div class="mb-9">
      <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Customer details</h2>
        </div>
        <div class="col-auto">
          <div class="row g-3">
            <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Delete customer</button></div>
            <div class="col-auto"><button class="btn btn-phoenix-secondary"><span class="fas fa-key me-2"></span>Reset password</button></div>
          </div>
        </div>
      </div>
      <div class="row g-5">
        <div class="col-12 col-xxl-4">
          <div class="row g-3 g-xxl-0 h-100">
            <div class="col-12 col-md-7 col-xxl-12 mb-xxl-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-between pb-3">
                  <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                    <div class="col-12 col-sm-auto mb-sm-2">
                      <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../../assets/img/team/15.webp" alt="" /></div>
                    </div>
                    <div class="col-12 col-sm-auto flex-1">
                      <h3>Ansolo Lazinatov</h3>
                      <p class="text-800">Joined 3 months ago</p>
                      <div><a class="me-2" href="customer-details.html#!"><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="customer-details.html#!"><span class="fab fa-facebook text-400 hover-primary"></span></a><a href="customer-details.html#!"><span class="fab fa-twitter text-400 hover-primary"></span></a></div>
                    </div>
                  </div>
                  <div class="d-flex flex-between-center border-top border-dashed border-300 pt-4">
                    <div>
                      <h6>Following</h6>
                      <p class="fs-1 text-800 mb-0">297</p>
                    </div>
                    <div>
                      <h6>Projects</h6>
                      <p class="fs-1 text-800 mb-0">56</p>
                    </div>
                    <div>
                      <h6>Completion</h6>
                      <p class="fs-1 text-800 mb-0">97</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-5 col-xxl-12 mb-xxl-3">
              <div class="card h-100">
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center mb-3">
                    <h3 class="me-1">Default Address</h3><button class="btn btn-link p-0"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                  </div>
                  <h5 class="text-800">Address</h5>
                  <p class="text-800">Shatinon Mekalan<br />Vancouver, British Columbia<br />Canada</p>
                  <div class="mb-3">
                    <h5 class="text-800">Email</h5><a href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a>
                  </div>
                  <h5 class="text-800">Phone</h5><a class="text-800" href="tel:+1234567890">+1234567890</a>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="mb-4">Notes on Customer</h3><textarea class="form-control mb-3" rows="4"></textarea><button class="btn btn-phoenix-primary w-100 mb-4">Add Note</button>
                  <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                    <p class="text-1000 mb-1">Gave us a nice feedback</p>
                    <div class="text-end">
                      <p class="text-600 mb-0">12 Nov, 2020</p>
                    </div>
                  </div>
                  <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                    <p class="text-1000 mb-1">Customer added product to cart and then forgot to checkout. Later knocked the customer support to ask about update on shipping. Later, settled on “One day Shipping” though “Free delivery” was preferred. Overall good behavior.</p>
                    <div class="text-end">
                      <p class="text-600 mb-0">23 Dec, 2019</p>
                    </div>
                  </div>
                  <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                    <p class="text-1000 mb-1">User of this support ticket won a 100% off coupon and received top-notch service from the technical support engineer. Along with providing a good review, user highly appreciated the team.</p>
                    <div class="text-end">
                      <p class="text-600 mb-0">2 Oct, 2019</p>
                    </div>
                  </div>
                  <div class="fs--1 fw-semi-bold">
                    <p class="text-1000 mb-1">Customer returned and bought 2 related items, which is currently being shipped. Customer chose “One day Shipping”. Additional notes were added regarding customised wrapping. Customer submitted positive review.</p>
                    <div class="text-end">
                      <p class="text-600 mb-0">26 Apr, 2019</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xxl-8">
          <div class="mb-6">
            <h3 class="mb-4">Orders <span class="text-700 fw-normal">(97)</span></h3>
            <div class="border-top border-bottom border-200" id="customerOrdersTable" data-list='{"valueNames":["order","total","payment_status","fulfilment_status","delivery_type","date"],"page":6,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table table-sm fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle ps-0 pe-3" scope="col" data-sort="order" style="width:10%;">ORDER</th>
                      <th class="sort align-middle text-end pe-7" scope="col" data-sort="total" style="width:10%;">TOTAL</th>
                      <th class="sort align-middle white-space-nowrap pe-3" scope="col" data-sort="payment_status" style="width:15%;">PAYMENT STATUS</th>
                      <th class="sort align-middle white-space-nowrap text-start pe-3" scope="col" data-sort="fulfilment_status" style="width:20%;">FULFILMENT STATUS</th>
                      <th class="sort align-middle white-space-nowrap text-start" scope="col" data-sort="delivery_type" style="width:30%;">DELIVERY TYPE</th>
                      <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                      <th class="sort text-end align-middle pe-0 ps-5" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="customer-order-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2453</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$87</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Order Fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 12, 12:56 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2452</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$7264</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Free shipping</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 9, 2:28PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2451</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$375</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Partial FulfiLled</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 4, 12:56 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2450</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$657</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Order CancelLed</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 1, 4:07 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2449</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$9562</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Failed</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Order Fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Express</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 28, 7:28 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2448</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$46</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Delivery Delayed</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 24, 10:16 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2447</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$953</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 5:43 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2446</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$12</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 2:09 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2445</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$3927</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Canceled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 16, 3:22 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2444</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$5937</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 09, 8:49 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2443</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$124</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Failed</span><span class="ms-1" data-feather="minus-circle" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 05, 4:35 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2442</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$542</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 05, 12:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2441</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$1480</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 02, 2:00 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2440</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$80</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Free shipping</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Oct 30, 4:25 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold" href="customer-details.html#!">#2439</a></td>
                      <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">$999</td>
                      <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                      <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Oct 28, 3:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="customer-details.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="customer-details.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-6">
            <h3 class="mb-4">Wishlist <span class="text-700 fw-normal">(43)</span></h3>
            <div class="border-200 border-top border-bottom" id="customerWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:5%;"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="width:35%; min-width:250px;" data-sort="products">PRODUCTS</th>
                      <th class="sort align-middle" scope="col" data-sort="color" style="width:15%;">COLOR</th>
                      <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:15%;">PRICE</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:15%;">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="customer-wishlist-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/1.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Fitbit Sense Advanced Smartwatch wi...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Pure matte black</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">42</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$57</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$57</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/7.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, ...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,499</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$1499</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/6.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">PlayStation 5 DualSense Wireless Cont...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$299</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$359</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/3.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256G...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,699</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$1,799</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/4.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 C...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Ocean Blue</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">21&quot;</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$65</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/10.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Apple Magic Mouse (Wireless, Recharg...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$30</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$60</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/8.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Amazon Basics Matte Black Wired Keybo...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">MD</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$40</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$40</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/12.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">HORI Racing Wheel Apex for PlayStation...</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">45</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$130</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$130</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap py-1"><a class="border rounded-2 d-inline-block" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/17.png" alt="" width="40" height="40" /></a></td>
                      <td class="products align-middle"><a class="fw-semi-bold mb-0" href="../landing/product-details.html">Xbox Series S</a></td>
                      <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                      <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">sm</td>
                      <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$99</td>
                      <td class="total align-middle fw-bold text-1000 text-end">$99</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="customer-details.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="customer-details.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h3 class="mb-4">Ratings & reviews <span class="text-700 fw-normal">(43)</span></h3>
            <div class="border-top border-bottom border-200" id="customerRatingsTable" data-list='{"valueNames":["product","rating","review","status","date"],"page":5,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="width:20%;" data-sort="product">PRODUCT</th>
                      <th class="sort align-middle" scope="col" data-sort="rating" style="width:10%;">RATING</th>
                      <th class="sort align-middle" scope="col" style="width:50%;" data-sort="review">REVIEW</th>
                      <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="status">STATUS</th>
                      <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="date">DATE</th>
                      <th class="sort text-end pe-0 align-middle" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="customer-rating-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Apple Magic Mouse (Wireless, Rech...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">It's lovely, works right out of the box (as you'd expect from an Apple device), and has a number of useful functions.</p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Just now</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Fitbit Sense Advanced Smartwatch ...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">This is an exceptional smartwatch, featuring a wealth of useful functions at an affordable price. The watch is small ...<a href='customer-details.html#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Dec 9, 2:28PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">HORI Racing Wheel Apex for PlaySt...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">This steering wheel is a great buy! It works well and feels good, however I wish it had a wider diameter like a real ...<a href='customer-details.html#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Dec 4, 12:56 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surro...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">My son says these are the greatest he's ever tasted.</p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 28, 7:28 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">iPhone 13 pro max-Pacific Blue-12...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">I chose wisely. The phone is in excellent condition, with no scratches or dents, excellent battery life, and flawless...<a href='customer-details.html#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 24, 10:16 AM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/25...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">It's lovely, works right out of the box (as you'd expect from an Apple device), and has a number of useful functions.</p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Just now</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Apple iMac 24&quot; 4K Retina Display ...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpas...<a href='customer-details.html#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 09, 3:23 AM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">PlayStation 5 DualSense Wireless ...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">My son says these are the greatest he's ever tasted.</p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 08, 8:53 AM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 07, 9:00 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="../landing/product-details.html">Amazon Basics Matte Black Wired K...</a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fw-semi-bold text-1000 mb-0">I chose wisely. The phone is in excellent condition, with no scratches or dents, excellent battery life, and flawless...<a href='customer-details.html#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-end status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-700 mb-0">Nov 07, 11:20 AM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="customer-details.html#!">View</a><a class="dropdown-item" href="customer-details.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="customer-details.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="customer-details.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="customer-details.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.13.0</p>
        </div>
      </div>
    </footer>
  </div>