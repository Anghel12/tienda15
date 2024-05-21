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

           <!-- Nav -->
        @include('admin.profile.partials.main_nabvar') 
        </div>
        <!-- End Profile Header -->

        
       {{--  view profiles--}}

       @include('admin.profile.partials.view_profiles') 

       
    
        <!-- End Row -->
      </div>
      <!-- End Col -->
  </div>