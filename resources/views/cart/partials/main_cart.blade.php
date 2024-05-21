 <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="container-small cart">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="cart.html#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="cart.html#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <h2 class="mb-6">Cart</h2>
          <div class="row g-5">
            <div class="col-12 col-lg-8">
              @if (\Cart::content()->count())
              <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                <div class="table-responsive scrollbar mx-n1 px-1">
                  <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                        <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                        <th class="sort align-middle" scope="col" style="width:80px;">COLOR</th>
                        <th class="sort align-middle" scope="col" style="width:150px;">SIZE</th>
                        <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                        <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                        <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                        <th class="sort text-end align-middle pe-0" scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list" id="cart-table-body">
                      @foreach (Cart::content() as $item)
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="align-middle white-space-nowrap py-0">
                          <a class="d-block border rounded-2" href="product-details.html">
                          <img style="max-width: 100px; width:53px;" src="{{Storage::url($item->options->urlfoto)}}" alt=""  />
                        </a>
                        </td>
                      
                  
                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="product-details.html"> {{$item->name}}</a></td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900">Glossy black</td>
                        <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">XL</td>
                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end"> {{$item->price}}</td>
                        <td class="quantity align-middle fs-0 ps-5">
                          <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="{{$item->qty}}" aria-label="Amount (to the nearest dollar)" /><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                        </td>
                        <td class="total align-middle fw-bold text-1000 text-end">{{number_format($item->qty * $item->price,2)}}</td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3">

                          <td> <a class="btn btn-sm text-500 hover-text-600 me-2" href="/eliminar/{{$item->rowId}}"> <span class="fas fa-trash"></span>  </a></td>
                      
                        </td>
                      </tr>
                      @endforeach
             
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="6">Items subtotal :</td>
                        <td class="text-1100 fw-bold text-end fs-0">{{Cart::subtotal()}}</td>
                        <td></td>
                        <a href=" {{route('eliminarcarrito')}} " class="btn btn-secondary">Eliminar Carrtito de compras </a>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              @else
              <div class="tex-center">Carrito vacio</div>
              <div class="tex-center"><a class="btn btn-primary" href="{{ route('posts.index') }}"> Ver El catalago de los Productos ></a>
              </div>
           @endif
            </div>
            <div class="col-12 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-between-center mb-3">
                    <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="cart.html#!">Edit cart </a>
                  </div><select class="form-select mb-3" aria-label="delivery type">
                    <option value="cod">Cash on Delivery</option>
                    <option value="card">Card</option>
                    <option value="paypal">Paypal</option>
                  </select>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Items subtotal :</p>
                      <p class="text-1100 fw-semi-bold">{{Cart::subtotal()}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Discount :</p>
                      <p class="text-danger fw-semi-bold">-$59</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Tax :</p>
                      <p class="text-1100 fw-semi-bold">{{Cart::tax()}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Subtotal :</p>
                      <p class="text-1100 fw-semi-bold"> {{Cart::subtotal()}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Shipping Cost :</p>
                      <p class="text-1100 fw-semi-bold">$30</p>
                    </div>
                  </div>
                  <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher" /><button class="btn btn-phoenix-primary px-5">Apply</button></div>
                  <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-"> {{Cart::total()}}</h4>
                  </div>
                  @auth
                  <a  href="{{route('checkout')}}" class="btn btn-success w-100">Proceed to check out<span class="fas fa-chevron-right ms-1 fs--2"></span>
                  </a>
                  @else
            
                  <a  href="{{route('login')}}" class="btn btn-success w-100">Proceed to check out<span class="fas fa-chevron-right ms-1 fs--2"></span>
                  </a>
                @endauth
           
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->