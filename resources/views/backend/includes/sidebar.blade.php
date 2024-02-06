<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex justify-content-center">
        <a href="{{route("backend.dashboard")}}">
            <img class="sidebar-brand-full" src="{{asset('img/backendLogo.svg')}}" height="78" alt="{{ app_name() }}">
            <img class="sidebar-brand-full" src="{{asset('img/unilogo.svg')}}" height="78" alt="{{ app_name() }}">
            
            <img class="sidebar-brand-narrow" src="{{asset('img/backendLogo.png')}}" height="46" alt="{{ app_name() }}">
        </a>
        <!--<div class="siteName ms-2">-->
        <!--    <h6 class="mb-1 text-capitalize">Balaji Institute of International Business (BIIB)</h6>-->
        <!--    <p class=" mb-0">A constituent institute of Sri Balaji University, Pune (SBUP),Courses Approved By AICTE, Ministry of HRD, Govt. of India</p>-->
        <!--</div>-->
        <!-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg> -->
    </div>

    {!! $admin_sidebar->asUl( ['class' => 'sidebar-nav', 'data-coreui'=>'navigation', 'data-simplebar'], ['class' => 'nav-group-items'] ) !!}

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>