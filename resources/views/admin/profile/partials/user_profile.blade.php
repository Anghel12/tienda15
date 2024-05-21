<style>
    .profile-cover {
      position: relative;
      height: 7.5rem;
      padding: 1rem 1rem;
      border-radius: 0.75rem;
  }
  .profile-cover {
      height: 10rem;
  }
  .profile-cover-img-wrapper {
      height: 10rem;
  }
  .profile-cover-img-wrapper {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      height: 7.5rem;
      background-color: #e7eaf3;
      border-radius: 0.75rem;
  }
  .profile-cover-img {
      height: 10rem;
  }
  .profile-cover-img {
      width: 100%;
      height: 160px;
      -o-object-fit: cover;
      object-fit: cover;
      vertical-align: top;
      border-radius: 0.75rem;
  }
  
  .profile-cover-avatar {
      display: -ms-flexbox;
      display: flex;
      background-color: #fff;
      border: 0.25rem solid #fff;
      margin: -6.3rem auto 0.5rem auto;
  }
  .border-radius{ 
      border-radius: 50%;
  }
  .avatar {
      position: relative;
      display: inline-block;
      width: 2.625rem;
      height: 2.625rem;
      border-radius: 0.5rem;
  }
  .avatar-circle {
      border-radius: 50%;
  }
  /* centrar img  */
  .avatar-img {
      max-width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      border-radius: 0.5rem;
  }
  .avatar-circle .avatar, .avatar-circle .avatar-img, .avatar-circle .avatar-initials {
      border-radius: 50%;
  }
  .avatar-xxl, .avatar-xxl .avatar-initials {
      width: 7.875rem;
      height: 7.875rem;
  }
  
  .avatar-xxl.avatar-circle .avatar-status {
      bottom: 0.65625rem;
      right: 0.65625rem;
  }
  
  .nav-tabs .nav-link .nav-item.show .nav-link, .nav-tabs .nav-link.active, .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
      border-top-color: rgba(0, 0, 0, 0);
      border-left-color: rgba(0, 0, 0, 0);
      border-right-color: rgba(0, 0, 0, 0);
  }
  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
      color:#377dff;
      background-color: rgba(0, 0, 0, 0);
      border-color:#377dff;
  }
  </style>
  <div class="content container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <!-- Profile Cover -->
          @include('admin.profile.partials.main_banner') 
         <!-- Profile Cover -->
  
            <!-- Donde vive y celular -->
            @include('admin.profile.partials.main_info_banner') 
            <!-- End List -->
          </div>
          <!-- End Profile Header -->
  
          <!-- Nav -->
          @include('admin.profile.partials.main_nabvar') 
          
          <!-- End Nav -->
  
          <div class="row">
            <div class="col-lg-4">
              <!-- Card -->
         {{--      @include('admin.profile.partials.progres_profile')  --}}
              <!-- End Card -->
  
              <!-- Sticky Block Start Point -->
              <div id="accountSidebarNav"></div>
  
              <!-- Card -->
              @include('admin.profile.partials.main_info_user') 
             
              <!-- End Card -->
            </div>
  
            <div class="col-lg-8">
              <div class="d-grid gap-3 gap-lg-5">
                <!-- crear post -->
                @include('admin.profile.partials.main_crear_post') 
            
                <!-- Card -->
               {{--  @include('admin.profile.partials.main_publications')  --}}
                @include('admin.profile.partials.post') 
                <!-- End Card -->
  
                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <!-- Card -->
                    <div class="card h-100">
                      <!-- Header -->
                      <div class="card-header">
                        <h4 class="card-header-title">Connections</h4>
                      </div>
                      <!-- End Header -->
  
                      <!-- Body -->
                      <div class="card-body">
                        <ul class="list-unstyled list-py-3 mb-0">
                          <!-- Item -->
                          <li>
                            <div class="d-flex align-items-center">
                              <a class="d-flex align-items-center me-2" href="#">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                    <span class="avatar-initials">R</span>
                                    <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                  </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h5 class="text-hover-primary mb-0">Rachel Doe</h5>
                                  <span class="fs-6 text-body">25 connections</span>
                                </div>
                              </a>
                              <div class="ms-auto">
                                <!-- Form Check -->
                                <div class="form-check form-check-switch">
                                  <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox1" checked="">
                                  <label class="form-check-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox1">
                                    <span class="form-check-default">
                                      <i class="bi-person-plus-fill"></i>
                                    </span>
                                    <span class="form-check-active">
                                      <i class="bi-check-lg"></i>
                                    </span>
                                  </label>
                                </div>
                                <!-- End Form Check -->
                              </div>
                            </div>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <div class="d-flex align-items-center">
                              <a class="d-flex align-items-center me-2" href="#">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                  </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h5 class="text-hover-primary mb-0">Isabella Finley</h5>
                                  <span class="fs-6 text-body">79 connections</span>
                                </div>
                              </a>
                              <div class="ms-auto">
                                <!-- Form Check -->
                                <div class="form-check form-check-switch">
                                  <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox2">
                                  <label class="form-check-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox2">
                                    <span class="form-check-default">
                                      <i class="bi-person-plus-fill"></i>
                                    </span>
                                    <span class="form-check-active">
                                      <i class="bi-check-lg"></i>
                                    </span>
                                  </label>
                                </div>
                                <!-- End Form Check -->
                              </div>
                            </div>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <div class="d-flex align-items-center">
                              <a class="d-flex align-items-center me-2" href="#">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                  </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h5 class="text-hover-primary mb-0">David Harrison</h5>
                                  <span class="fs-6 text-body">0 connections</span>
                                </div>
                              </a>
                              <div class="ms-auto">
                                <!-- Form Check -->
                                <div class="form-check form-check-switch">
                                  <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox3" checked="">
                                  <label class="form-check-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox3">
                                    <span class="form-check-default">
                                      <i class="bi-person-plus-fill"></i>
                                    </span>
                                    <span class="form-check-active">
                                      <i class="bi-check-lg"></i>
                                    </span>
                                  </label>
                                </div>
                                <!-- End Form Check -->
                              </div>
                            </div>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <div class="d-flex align-items-center">
                              <a class="d-flex align-items-center me-2" href="#">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                  </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h5 class="text-hover-primary mb-0">Costa Quinn</h5>
                                  <span class="fs-6 text-body">9 connections</span>
                                </div>
                              </a>
                              <div class="ms-auto">
                                <!-- Form Check -->
                                <div class="form-check form-check-switch">
                                  <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox4">
                                  <label class="form-check-label btn-icon btn-xs rounded-circle" for="connectionsCheckbox4">
                                    <span class="form-check-default">
                                      <i class="bi-person-plus-fill"></i>
                                    </span>
                                    <span class="form-check-active">
                                      <i class="bi-check-lg"></i>
                                    </span>
                                  </label>
                                </div>
                                <!-- End Form Check -->
                              </div>
                            </div>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>
                      <!-- End Body -->
  
                      <!-- Footer -->
                      <a class="card-footer text-center" href="user-profile-connections.html">
                        View all connections <i class="bi-chevron-right"></i>
                      </a>
                      <!-- End Footer -->
                    </div>
                    <!-- End Card -->
                  </div>
  
                  <div class="col-sm-6">
                    <!-- Card -->
                    <div class="card h-100">
                      <!-- Header -->
                      <div class="card-header">
                        <h4 class="card-header-title">Teams</h4>
                      </div>
                      <!-- End Header -->
  
                      <!-- Body -->
                      <div class="card-body">
                        <ul class="nav nav-pills card-nav card-nav-vertical nav-pills">
                          <!-- Item -->
                          <li>
                            <a class="nav-link" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0">
                                  <i class="bi-people-fill nav-icon text-dark"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <span class="d-block text-dark">#digitalmarketing</span>
                                  <small class="d-block text-muted">8 members</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <a class="nav-link" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0">
                                  <i class="bi-people-fill nav-icon text-dark"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <span class="d-block text-dark">#ethereum</span>
                                  <small class="d-block text-muted">14 members</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <a class="nav-link" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0">
                                  <i class="bi-people-fill nav-icon text-dark"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <span class="d-block text-dark">#conference</span>
                                  <small class="d-block text-muted">3 members</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <a class="nav-link" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0">
                                  <i class="bi-people-fill nav-icon text-dark"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <span class="d-block text-dark">#supportteam</span>
                                  <small class="d-block text-muted">3 members</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- End Item -->
  
                          <!-- Item -->
                          <li>
                            <a class="nav-link" href="#">
                              <div class="d-flex">
                                <div class="flex-shrink-0">
                                  <i class="bi-people-fill nav-icon text-dark"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <span class="d-block text-dark">#invoices</span>
                                  <small class="d-block text-muted">3 members</small>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>
                      <!-- End Body -->
  
                      <!-- Footer -->
                      <a class="card-footer text-center" href="user-profile-teams.html">
                        View all teams <i class="bi-chevron-right"></i>
                      </a>
                      <!-- End Footer -->
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Row -->
  
                <!-- Card -->
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-header-title">Projects</h4>
  
                    <!-- Dropdown -->
                    <div class="dropdowm">
                      <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="projectReportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>
  
                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="projectReportDropdown">
                        <span class="dropdown-header">Settings</span>
  
                        <a class="dropdown-item" href="#">
                          <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                        </a>
  
                        <div class="dropdown-divider"></div>
  
                        <span class="dropdown-header">Feedback</span>
  
                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->
                  </div>
                  <!-- End Header -->
  
                  <!-- Table -->
                  <div class="table-responsive">
                    <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                      <thead class="thead-light">
                        <tr>
                          <th>Project</th>
                          <th style="width: 40%;">Progress</th>
                          <th class="table-text-end">Hours spent</th>
                        </tr>
                      </thead>
  
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-xs avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">U</span>
                              </span>
                              <div class="ms-3">
                                <h5 class="mb-0">UI/UX</h5>
                                <small>Updated 2 hours ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">0%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">4:25</td>
                        </tr>
  
                        <tr>
                          <td>
                            <div class="d-flex">
                              <img class="avatar avatar-xs" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
                              <div class="ms-3">
                                <h5 class="mb-0">Get a complete audit store</h5>
                                <small>Updated 1 day ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">45%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">18:42</td>
                        </tr>
  
                        <tr>
                          <td>
                            <div class="d-flex">
                              <img class="avatar avatar-xs" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
                              <div class="ms-3">
                                <h5 class="mb-0">Build stronger customer relationships</h5>
                                <small>Updated 2 days ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">59%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">9:01</td>
                        </tr>
  
                        <tr>
                          <td>
                            <div class="d-flex">
                              <img class="avatar avatar-xs" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                              <div class="ms-3">
                                <h5 class="mb-0">Update subscription method</h5>
                                <small>Updated 2 days ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">57%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">0:37</td>
                        </tr>
  
                        <tr>
                          <td>
                            <div class="d-flex">
                              <img class="avatar avatar-xs" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                              <div class="ms-3">
                                <h5 class="mb-0">Create a new theme</h5>
                                <small>Updated 1 week ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">100%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">24:12</td>
                        </tr>
  
                        <tr>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-xs avatar-soft-info avatar-circle">
                                <span class="avatar-initials">I</span>
                              </span>
                              <div class="ms-3">
                                <h5 class="mb-0">Improve social banners</h5>
                                <small>Updated 1 week ago</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="me-3">0%</span>
                              <div class="progress table-progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td class="table-text-end">8:08</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->
  
                  <!-- Footer -->
                  <a class="card-footer text-center" href="./projects.html">
                    View all projects <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->
              </div>
  
              <!-- Sticky Block End Point -->
              <div id="stickyBlockEndPoint"></div>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>








<div class="-wrapper">
    {{-- izquierda usuario perfil --}}
    @include('admin.profile.partials.left_user_profile') 
    {{-- sobre info usuario perfil --}}
    @include('admin.profile.partials.about_user') 
    
    </div>
    
    <div class="col-md-9">
    <div class="card">
    <div class="card-header p-2">
    <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="tab-content">
    <div class="active tab-pane" id="activity">
    
    <div class="post">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
    <span class="username">
    <a href="#">Jonathan Burke Jr.</a>
    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    </span>
    <span class="description">Shared publicly - 7:30 PM today</span>
    </div>
    
    <p>
    Lorem ipsum represents a long-held tradition for designers,
    typographers and the like. Some people hate it and argue for
    its demise, but others ignore the hate as they create awesome
    tools to help create filler text for everyone from bacon lovers
    to Charlie Sheen fans.
    </p>
    <p>
    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
    <span class="float-right">
    <a href="#" class="link-black text-sm">
    <i class="far fa-comments mr-1"></i> Comments (5)
    </a>
    </span>
    </p>
    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
    </div>
    
    
    <div class="post clearfix">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">Sarah Ross</a>
    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    </span>
    <span class="description">Sent you a message - 3 days ago</span>
    </div>
    
    <p>
    Lorem ipsum represents a long-held tradition for designers,
    typographers and the like. Some people hate it and argue for
    its demise, but others ignore the hate as they create awesome
    tools to help create filler text for everyone from bacon lovers
    to Charlie Sheen fans.
    </p>
    <form class="form-horizontal">
    <div class="input-group input-group-sm mb-0">
    <input class="form-control form-control-sm" placeholder="Response">
    <div class="input-group-append">
    <button type="submit" class="btn btn-danger">Send</button>
    </div>
    </div>
    </form>
    </div>
    
    
    <div class="post">
    <div class="user-block">
    <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
    <span class="username">
    <a href="#">Adam Jones</a>
     <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    </span>
    <span class="description">Posted 5 photos - 5 days ago</span>
    </div>
    
    <div class="row mb-3">
    <div class="col-sm-6">
    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
    </div>
    
    <div class="col-sm-6">
    <div class="row">
    <div class="col-sm-6">
    <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
    </div>
    
    <div class="col-sm-6">
    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
    </div>
    
    </div>
    
    </div>
    
    </div>
    
    <p>
    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
    <span class="float-right">
    <a href="#" class="link-black text-sm">
    <i class="far fa-comments mr-1"></i> Comments (5)
    </a>
    </span>
    </p>
    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
    </div>
    
    </div>
    
    <div class="tab-pane" id="timeline">
    
    <div class="timeline timeline-inverse">
    
    <div class="time-label">
    <span class="bg-danger">
    10 Feb. 2014
    </span>
    </div>
    
    
    <div>
    <i class="fas fa-envelope bg-primary"></i>
    <div class="timeline-item">
    <span class="time"><i class="far fa-clock"></i> 12:05</span>
    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
    <div class="timeline-body">
    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
    weebly ning heekya handango imeem plugg dopplr jibjab, movity
    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
    quora plaxo ideeli hulu weebly balihoo...
    </div>
    <div class="timeline-footer">
    <a href="#" class="btn btn-primary btn-sm">Read more</a>
    <a href="#" class="btn btn-danger btn-sm">Delete</a>
    </div>
    </div>
    </div>
    
    
    <div>
    <i class="fas fa-user bg-info"></i>
    <div class="timeline-item">
     <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
    <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
    </h3>
    </div>
    </div>
    
    
    <div>
    <i class="fas fa-comments bg-warning"></i>
    <div class="timeline-item">
    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
    <div class="timeline-body">
    Take me to your leader!
    Switzerland is small and neutral!
    We are more like Germany, ambitious and misunderstood!
    </div>
    <div class="timeline-footer">
    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
    </div>
    </div>
    </div>
    
    
    <div class="time-label">
    <span class="bg-success">
    3 Jan. 2014
    </span>
    </div>
    
    
    <div>
    <i class="fas fa-camera bg-purple"></i>
    <div class="timeline-item">
    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
    <div class="timeline-body">
    <img src="https://placehold.it/150x100" alt="...">
    <img src="https://placehold.it/150x100" alt="...">
    <img src="https://placehold.it/150x100" alt="...">
    <img src="https://placehold.it/150x100" alt="...">
    </div>
    </div>
    </div>
    
    <div>
    <i class="far fa-clock bg-gray"></i>
    </div>
    </div>
    </div>
    
    <div class="tab-pane" id="settings">
    <form class="form-horizontal">
    <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="inputName" placeholder="Name">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName2" placeholder="Name">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
    <div class="col-sm-10">
     <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
    </div>
    </div>
    <div class="form-group row">
    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
    <div class="checkbox">
    <label>
    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
    </label>
    </div>
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Submit</button>
    </div>
    </div>
    </form>
    </div>
    
    </div>
    
    </div>
    </div>
    
    </div>
    
    </div>
     
    </div>
    </section>
    
    </div>

    
    <aside class="control-sidebar control-sidebar-dark">
    
    </aside>
    
    </div>
    
    
    <script src="../../plugins/jquery/jquery.min.js"></script>
    
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
    
    <script src="../../dist/js/demo.js"></script>