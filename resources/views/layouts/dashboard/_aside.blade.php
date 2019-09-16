<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            {{-- <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div> --}}
            <div class="pull-left info">
                {{-- <p>Alexander Pierce</p> --}}
                {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
            </div>
        </div>



        <ul class="sidebar-menu" data-widget="tree">


        @if (Gate::allows('user'))  

                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>

                <li><a href="{{ route('dashboard.bonds.index2') }}"><i class="fa fa-th"></i><span>@lang('site.bonds')</span></a></li>

                <li><a href="{{ route('dashboard.invoices.index') }}"><i class="fa fa-th"></i><span>@lang('site.invoices')</span></a></li>

                <li><a href="{{ route('dashboard.customers_balance.index') }}"><i class="fa fa-th"></i><span>@lang('site.customer_account')</span></a></li>

                <li><a href="{{ route('dashboard.suppliers_balance.index') }}"><i class="fa fa-th"></i><span>@lang('site.suppliers_account')</span></a></li>

                <li><a href="{{ route('dashboard.bank.index') }}"><i class="fa fa-th"></i><span>البنك</span></a></li>

                <li><a href="{{ route('dashboard.box.index') }}"><i class="fa fa-th"></i><span>الصندوق</span></a></li>


                <li><a href="{{ route('dashboard.report.index') }}"><i class="fa fa-th"></i><span>@lang('site.reports')</span></a></li>

                <li><a href=""><i class="fa fa-th"></i><span>@lang('site.prices')</span></a></li>

         @elseif (Gate::allows('admin-user')) 


                @include('layouts.dashboard._asideAdmin')

        @endif
        </ul>
{{-- 
        <!-- <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>

            @if (auth()->user()->hasPermission('read_categories'))
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_products'))
                <li><a href="{{ route('dashboard.products.index') }}"><i class="fa fa-th"></i><span>@lang('site.products')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_clients'))
                <li><a href="{{ route('dashboard.clients.index') }}"><i class="fa fa-th"></i><span>@lang('site.clients')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_orders'))
                <li><a href="{{ route('dashboard.orders.index') }}"><i class="fa fa-th"></i><span>@lang('site.orders')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_users'))
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
            @endif --}}

            {{--<li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-book"></i><span>@lang('site.categories')</span></a></li>--}}
            {{----}}
            {{----}}
            {{--<li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-users"></i><span>@lang('site.users')</span></a></li>--}}

            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        {{-- </ul> --}} -->

    </section>

</aside>

