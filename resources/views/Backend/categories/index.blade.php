@extends('layouts.admin_app')

@section('content')

    <!--=============Start title============== -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{__('الأقسام')}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a class="default-color" href="{{ route('admin.dashboard.index') }}">{{__('الرئيسية')}}</a></li>
                    <li class="breadcrumb-item active">{{__('الأقسام')}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--=============End title============== -->


    <!--=============Start content============== -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <button type="button" class="button x-small m-2" data-toggle="modal" data-target="#exampleModal">
                        {{__('اضـافـة')}}
                    </button>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered p-0" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>الوصف</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>
                                            <img class="rounded" width="110" height="60"
                                                 src="{{ asset('images/categories/'.$category->image) }}">
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->text }}</td>
                                        <td>{{ $category->status != 0 ? 'نشط' : 'غير نشط' }}</td>
                                        <th>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{ $category->id }}"
                                                    title="{{__('تـعـديـل')}}"><i
                                                    class="fa fa-edit"></i>
                                            </button>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $category->id }}"
                                                    title="{{__('حــذف')}}"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </th>
                                    </tr>


                                    <!-- add_modal_social -->
                                    <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                        {{__('تعديل القسم')}}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form action="{{ route('admin.categories.update', 'test') }}" method="post"  enctype="multipart/form-data">
                                                        {{ method_field('patch') }}
                                                        @csrf
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $category->id }}">

                                                        <div class="form-group modual_space">
                                                            <div class="col">
                                                                <label for="name" class="mr-sm-2">{{__('الاســم') }} : </label>
                                                                <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group modual_space">
                                                            <div class="col">
                                                                <label for="text" class="mr-sm-2">{{__('الوصف') }} : </label>
                                                                <textarea class="form-control" name="text">{{ $category->text }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group modual_space">
                                                            <div class="col">
                                                                <label for="image" class="mr-sm-2">{{__('صورة االقسم') }} : </label>
                                                                <input type="file" class="form-control" name="image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group modual_space">
                                                            <div class="col">
                                                                <label for="name" class="mr-sm-2">{{__('حالة االقسم') }} : </label>
                                                                <select for="status" name="status" class="form-control">
                                                                    <option value="1"  {{ old('status', $category->status) == 1 ? 'selected' : null }}>نشط</option>
                                                                    <option value="0"  {{ old('status', $category->status) == 0 ? 'selected' : null }}>غير نشط</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">{{__('اغــلاق') }}</button>
                                                            <button type="submit"
                                                                    class="btn btn-success">{{__('حفظ البيانات') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- delete_modal_social -->
                                    <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        {{__('حـذف القسم') }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.categories.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        {{__('هـل أنـت مـتـأكـد مـن هـذه الـعـمـلـبـة')}}
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $category->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">{{__('اغــلاق')}}</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">{{__('حــذف')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>الوصف</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============End content============== -->


    <!-- add_modal_social -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        {{__('اضافة قسم جديد')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="name" class="mr-sm-2">{{__('الاســم') }} : </label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="text" class="mr-sm-2">{{__('الوصف') }} : </label>
                                <textarea class="form-control" name="text"></textarea>
                            </div>
                        </div>
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="image" class="mr-sm-2">{{__('صورة االقسم') }} : </label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                        </div>
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="name" class="mr-sm-2">{{__('حالة االقسم') }} : </label>
                                <select for="status" name="status" class="form-control">
                                    <option value="1">نشط</option>
                                    <option value="0">غير نشط</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('اغــلاق') }}</button>
                            <button type="submit"
                                    class="btn btn-success">{{__('حفظ البيانات') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
