<!-- <section> begin ============================-->

 <section class="pt-5 pb-9">
        <div class="container-small cart">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="shipping-info.html#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="shipping-info.html#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <h2 class="mb-5">Check out</h2>
          <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="card">
              <div class="card-body">
              {!! Form::open(['route' => 'CrearOrden', 'method' => 'POST']) !!}
              <h3 class="mb-5">Shipping Info</h3>
              <div class="row g-4">
                  <div class="col-12">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="inputName">Nombre completo</label>
                      <input class="form-control" id="inputName" name="inputName" type="text" placeholder="Nombre completo" />
                      @error('inputName')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror
                  </div>
                  <div class="col-md-6">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="phone">Telefono</label>
                      <input class="form-control" id="phone" name="phone" type="tel" placeholder="+1234567890" />
                      @error('phone')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror  
                  </div>
                  <div class="col-12">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="address">Calle</label>
                      <input class="form-control" id="address" name="address" type="text" placeholder="Calle" />
                      @error('address')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror 
                  </div>
                  <div class="col-md-4">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="city">ciudad</label>
                      <select class="form-select text-black" id="city" name="city">
                          <option selected="selected">Van Nuys</option>
                          <option value="los-angeles">Los Angeles</option>
                          <option value="chicago">Chicago</option>
                          <option value="houston">Houston</option>
                      </select>
                      @error('city')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror  
                  </div>
                  <div class="col-md-4">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="state">Estado</label>
                      <select class="form-select text-black" id="state" name="state">
                          <option selected="selected">California</option>
                          <option value="Alaska">Alaska</option>
                          <option value="alabama">Alabama</option>
                          <option value="florida">Florida</option>
                      </select>
                      @error('state')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror  
                  </div>
                  <div class="col-md-4">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="zipcode">Zip code</label>
                      <input class="form-control number-arrows-none" name="zipcode" id="zipcode" type="number" placeholder="Zip code" />
                      @error('zipcode')
                          <span class="text-danger"> {{$message}} </span>
                      @enderror 
                  </div>
                  <div class="col-md-4 mb-3">
                      <label class="form-label fs-0 text-1000 ps-0 text-none" for="payment_method">Método de pago</label>
                      <select class="form-select text-black" id="payment_method" name="payment_method">
                          <option selected="selected">skrill</option>
                          <option value="paypal">paypal</option>
                          <option value="cash_on_delivery">cash_on_delivery</option>
                          <option value="bcp">bcp</option>
                      </select>
                      @error('payment_method')
                          <hr>
                          <span class="text-danger"> {{$message}} </span>
                      @enderror 
                  </div>
                  <div class="row ">
                    <div class="col-12">
                      <button class="btn btn-primary px-8 px-sm-11 me-2 col-md-9" type="submit">Guardar</button>
                      <a class="btn btn-phoenix-secondary text-nowrap col-md-2" href="{{ url('/') }}" type="submit">Cancelar</a>
                    </div>
                  </div>
              </div>
          {!! Form::close() !!}
                          
        </div>
            </div>
             </div>
            <div class="col-lg-5 col-xl-4 offset-xl-1">
              <div class="card mt-3 mt-lg-0">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Summary</h3><button class="btn btn-link pe-0" type="button">Edit cart</button>
                  </div>
                  <div class="border-dashed border-bottom mt-4">
                    <div class="ms-n2">
                      <div class="row align-items-center mb-2 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/1.png" width="40" alt="" />
                            <h6 class="fw-semi-bold text-1000 lh-base">Fitbit Sense Advanced Smartwatch with... </h6>
                          </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-2">
                          <h6 class="fs--2 mb-0">x1</h6>
                        </div>
                        <div class="col-2 ps-0">
                          <h5 class="mb-0 fw-semi-bold text-end">$398</h5>
                        </div>
                      </div>
                      <div class="row align-items-center mb-2 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/2.png" width="40" alt="" />
                            <h6 class="fw-semi-bold text-1000 lh-base">iPhone 13 pro max-Pacific Blue-128GB </h6>
                          </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-2">
                          <h6 class="fs--2 mb-0">x1</h6>
                        </div>
                        <div class="col-2 ps-0">
                          <h5 class="mb-0 fw-semi-bold text-end">$398</h5>
                        </div>
                      </div>
                      <div class="row align-items-center mb-5 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/3.png" width="40" alt="" />
                            <h6 class="fw-semi-bold text-1000 lh-base">Apple MacBook Pro 13 inch-M1-8/256GB</h6>
                          </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-2">
                          <h6 class="fs--2 mb-0">x1</h6>
                        </div>
                        <div class="col-2 ps-0">
                          <h5 class="mb-0 fw-semi-bold text-end">$65</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                      <h5 class="text-900 fw-semi-bold">$691</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Discount: </h5>
                      <h5 class="text-danger fw-semi-bold">-$59</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Tax: </h5>
                      <h5 class="text-900 fw-semi-bold">$126.20</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                      <h5 class="text-900 fw-semi-bold">$665</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="text-900 fw-semi-bold">Shipping Cost </h5>
                      <h5 class="text-900 fw-semi-bold">$30 </h5>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between border-dashed-y pt-3">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-0">$695.20</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->