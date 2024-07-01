@extends('admin.layouts.layout')
@section('breadcrumb')الاعضاء@endsection
@section('content')
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-white" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>

        @if (count($errors) > 0)

            <ul>
                @foreach ($errors->all() as $item)
                    <li class="text-danger">
                        {{ $item }}
                    </li>
                @endforeach
            </ul>

        @endif

        <div class="row backgroundW p-4 m-3">
            <div class="container">
                <div class="form-group btn-create">
                    <h4>الاعضاء</h4>
                </div>
                <div class="form-group btn-create  justify-content-end" style="display: flex">
                   
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            {{-- <th scope="col">User</th> --}}
                            <th scope="col">الاسم</th>
                            <th scope="col">بريد الإلكتروني</th> 


                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($clients as $user)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{$user->name}}</td>
                                <td>{{ $user->email }}</td>

                                <td style="width: 100px">
                                    <div class="row">
                                        <div class="col-sm-2">
                                                                                           
                                        </div>
                                        <div class="col-sm-2">
                                            <form method="POST" action="{{route('client.destroy', $user->id)}}" >
                                                @csrf
                                                @method('DELETE')
                                            <a href="" title="حذف"   onclick="event.preventDefault();  this.closest('form').submit();">
                                                <i class="fa-solid fa-trash"></i></a>                                                    
                                            </a>
                                        </form>

                                        </div>

                                    </div>


                                </td>
                            </tr>
                             @empty
                                <tr>
                                    <td colspan="3" style="text-align:center;">لايوجد بيانات لعرضها</td>
                                </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>

    </main>


@endsection