@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

            <!-- {{-- @lang('site.users') --}} -->

            <ol class="breadcrumb">
                <!-- <li> -->

                        <!-- {{-- href="{{ route('dashboard.welcome') }}" --}} -->
                    <a><i class="fa fa-dashboard"></i> </a>

                    <!-- {{-- @lang('site.dashboard') --}} -->
                <!-- {{-- </li>
                <li class="active">@lang('site.users')
                </li> --}} -->
            </ol>
        </section>

        <section class="content">



            <div><h1>المستخدمين</h1></div>

            <table class="table" style="margin-top:3%">

                <thead>
                  <tr>
                    <th scope="col"># رقم المستخدم</th>
                    <th scope="col">الاسم</th>
                    <th scope="col"> الحالة </th>
                    <th scope="col"> تفعيل </th>
                  </tr>
                </thead>

                @foreach ($users as $user)
                <tbody>
                  <tr>
                    <th scope="row"> {{ $user->id }} </th>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->active === 1 ? 'نشط' : 'غير نشط' }} </td>
                
                    <td>
                       
                    <form action="/dashboard/admin/{{ $user->id }}" method="POST">

                            @csrf
                            @method('PATCH')

                        <div class="form-check col-md-4">
                            <input class="form-check-input" type="radio" name="active" id="radio1" value="1" onChange="this.form.submit()" 
                            {{ $user->active === 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="radio1">
                              تفعيل
                            </label>
                          </div>

                          <div class="form-check col-md-4">
                            <input class="form-check-input" type="radio" name="active" id="radio2" value="0" onChange="this.form.submit()"
                             {{ $user->active === 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="radio2">
                              ايقاف
                            </label>
                          </div>

                        </form>
                    </td>
                  </tr>

                </tbody>
                @endforeach
              </table>

          

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

