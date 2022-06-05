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

                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        {{__('اضـافـة')}}
                    </button>

                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered p-0" id="datatable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($categories as $category)
                                <tr>
                                    <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>Tiger Nixon</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <th>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $category->id }}"
                                                title="{{__('تـعـديـل')}}"><i
                                                class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ 'id' }}"
                                                title="{{__('حــذف')}}"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </th>
                                </tr>

                                <!-- edit_modal_social -->
                                <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{__('تـعـديـل')}}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- add_form -->
                                                <form action="{{ route('admin.categories.update', 'test') }}" method="post">
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $category->id }}">
                                                    <div class="form-group modual_space">
                                                        <div class="col">
                                                            <label for="name" class="mr-sm-2">{{__('الاســم') }} :  <span style="color: red"> * </span> </label>
                                                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group modual_space">
                                                        <div class="col">
                                                            <label for="description" class="mr-sm-2">{{__('الوصف') }} : </label>
                                                            <textarea class="form-control" name="description">{{ $category->description }}</textarea>
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
                                                    {{__('حـذف نوع منتج') }}
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
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
                        {{__('اضـافـة')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="name" class="mr-sm-2">{{__('الاســم') }} :  <span style="color: red"> * </span> </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group modual_space">
                            <div class="col">
                                <label for="description" class="mr-sm-2">{{__('الوصف') }} : </label>
                                <textarea class="form-control" name="description"></textarea>
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
