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

          <h1></h1>
          
           

          <a class="btn btn-primary" href="{{ route('dashboard.bonds.create') }}" role="button"><i class="fa fa-plus"></i> @lang('site.add') @lang('site.received_bond')</a>

          {{-- <button class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add') @lang('site.received_bond')</button> --}}


          

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

