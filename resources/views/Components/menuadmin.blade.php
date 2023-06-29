<header class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <a href="/"><img class="rounded-circle" src="{{asset('image/logo.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div></a>
                
            </div>
            <div class="ms-3">
                <h6 class="mb-0"></h6>
                <span><a href="/">Admin</a></span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a  @class(['nav-item', 'nav-link','active' => $menu == 'table']) href="/admin/table" ><i class="fa fa-keyboard me-2"></i>Tables</a>
            <a  @class(['nav-item', 'nav-link','active' => $menu == 'form']) href="/admin/form"><i class="fa fa-table me-2"></i>Form Blog</a>
            <a  @class(['nav-item', 'nav-link','active' => $menu == 'formconstellar']) href="/admin/formconstellar"><i class="fa fa-table me-2"></i>FormConstellaton</a>
            <a  @class(['nav-item', 'nav-link','active' => $menu == 'observatory']) href="/admin/observatory"><i class="fa fa-light fa-globe me-2"></i>Observatory</a>
            <a class = 'nav-item nav-link' href="/test"><i class="fa fa-arrow-right-from-bracket me-2"></i>Sign Out</a>
        </div>
        
    </nav>
</header>
