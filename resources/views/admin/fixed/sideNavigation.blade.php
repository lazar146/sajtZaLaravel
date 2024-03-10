

<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a  href="{{route('admin')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Tables</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        @foreach($adminSideTables as $table)
                            <li>
                                <a href="{{route('showTable',['table'=>$table])}}">{{$table}}</a>
                            </li>
                        @endforeach


                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
