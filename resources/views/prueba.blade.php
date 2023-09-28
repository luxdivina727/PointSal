@extends('layouts.admin')
@section('title','Gestión de categorías')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title"></h4>
                        <div class="btn-group">
                            <a href="#" type="button" class="btn btn-info ">
                                <i class="fas fa-plus"></i> Nuevo
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="category_listing" class="table tree">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                               {{-- @foreach ($categories as $category)
                                <tr>
                                    <th scope="row"> {{$category->id}}</th>
                                    <td>
                                        <a href="{{route('categories.show',$category)}}">{{$category->categoryName}}</a>
                                    </td>
                                    <td> {{$category->categoryDescription}}</td>
                                    <td style="width:50px;">
                                    {!! Form::open(['route'=>['categories.destroy',$category],'method'=>'DELETE']) !!}
                                    <a class="jsgrid-button jsgrid-edit-button" href="{{route('categories.edit',$category)}}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a class="jsgrid-button jsgrid-delete-button" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    </td>
                                    {!! Form::close() !!}
                                    </tr>
                                    @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer text-muted">
                    {{$categories->render()}}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{!! Html::scripts('melody/js/data-table.js')!!}}
@endsection