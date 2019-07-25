
@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

            {{-- @lang('site.users') --}}

            <ol class="breadcrumb">
                <li>

                        {{-- href="{{ route('dashboard.welcome') }}" --}}
                    <a><i class="fa fa-dashboard"></i> </a>

                    {{-- @lang('site.dashboard') --}}
                {{-- </li>
                <li class="active">@lang('site.users')
                </li> --}}
            </ol>
        </section>

      <section class="content">

                    
            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"> Here is head @lang('')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                                 Here is Body       


                </div><!-- end of box body -->

            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection








