<div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
    <div class="table-responsive scrollbar mx-n1 px-1">
      <table  id="myTable" class="table table-sm fs--1 mb-0">
        <thead>
          <tr>
            <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
              <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-order-select" type="checkbox" data-bulk-select='{"body":"order-table-body"}' /></div>
            </th>
            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:5%;">ORDER</th>
            <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:6%;">TOTAL</th>
            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:28%; min-width: 250px;">CUSTOMER</th>
            <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:10%;">PAYMENT STATUS</th>
            <th class="sort align-middle text-start pe-3" scope="col" data-sort="fulfilment_status" style="width:12%; min-width: 200px;">FULFILMENT STATUS</th>
            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:30%;">DELIVERY TYPE</th>
            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">Accion</th>
          </tr>
        </thead>
        <tbody class="list" id="order-table-body">
            @foreach ($orders as $order)
          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
            <td class="fs--1 align-middle px-0 py-3">
              <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"order":2453,"total":87,"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"payment_status":{"label":"Complete","type":"badge-phoenix-success","icon":"check"},"fulfilment_status":{"label":"Cancelled","type":"badge-phoenix-secondary","icon":"x"},"delivery_type":"Cash on delivery","date":"Dec 12, 12:56 PM"}' /></div>
            </td>
            <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="orders.html#!">#{{ $order->item_count}} </a></td>
            <td class="total align-middle text-end fw-semi-bold text-1000">{{ $order->total }}</td>
            <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center text-900" href="../landing/profile.html">
                <div class="avatar avatar-m"><img class="rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/32.webp" alt="" /></div>
                <h6 class="mb-0 ms-3 text-900">{{$order->user->name}}</h6>
              </a></td>
            <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">{{ $order->status }}</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
            <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">{{ $order->payment_method }}</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
            <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">{{ $order->payment_method }}</td>
            <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">{{$order->created_at->diffForHumans() }}</td>

            <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary">Ver</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
      <div class="col-auto d-flex">
        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="orders.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="orders.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
      </div>
      <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
      </div>
    </div>
  </div>