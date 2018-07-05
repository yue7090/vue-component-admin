@extends('layouts.master')
@section('title')
组件列表
@stop
@section('page-title')
组件列表
@stop
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="portlet portlet-white">
            <div class="portlet-header pam mbn">
                <div class="caption">组件列表</div>
                <div class="actions"><a href="{{ route('component.create') }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;
新建组件</a>&nbsp;
                </div>
            </div>
            <div class="portlet-body pan">
                <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
                    <thead>
                        <tr>
                            <th width="3%">
                                <input type="checkbox" class="checkall" />
                            </th>
                            <th width="4%">Record #</th>
                            <th width="10%">name</th>
                            <th width="10%">enname</th>
                            <th width="10%">version</th>
                            <th width="17%">description</th>
                            <th width="8%">预览</th>
                            <th width="12%">create_at</th>
                            <th width="11%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($component as $c)
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->enname }}</td>
                            <td>{{ $c->version }}</td>
                            <td>{{ $c->introduction }}</td>
                            <td><button type="button" data-target="#modal-header-primary" data-toggle="modal" class="btn btn-green" onclick="show_component({{$c->id}})">查看</button></td>
                            <td>{{ $c->created_at }}</td>
                            <td>
                                <a href="{{ route('component.edit',['id'=>$c->id]) }}" type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit
                                </a>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i>&nbsp; delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $component->links() !!}
        </div>
    </div>
</div>
<script>
    var url="{{ url('component/getById') }}";
</script>
<script src="{{asset('js/run.js')}}"></script>
@include('component.partials.modal')
@stop