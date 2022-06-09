@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="card-title d-inline-block">جدول کاربران</h6>
                <a class="btn btn-primary my-auto" href="{{ route('admin.users.create') }}">افزودن</a>
            </div>
            <div class="table-responsive" tabindex="13" style="overflow: hidden; outline: none;">
                <table class="table">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col">شناسه</th>
                            <th scope="col">نام کاربر</th>
                            <th scope="col">شماره تلفن</th>
                            <th scope="col">وضعیت زرین</th>
                            <th scope="col">کاربر ویژه</th>
                            <th scope="col" style="width: 10%">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td class="ls-1">{{ $user->phone }}</td>
                            <td>
                                @if($user->zarin)
                                    <button type="button" class="btn btn-success">تایید شده</button>
                                @else
                                    <button type="button" class="btn btn-danger">تایید نشده</button>
                                @endif
                            </td>
                            <td>
                                @if($user->vip)
                                    <i class="ti-check"></i>
                                @else
                                    <i class="ti-close"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-floating">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-floating">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
