@extends('flare::admin.sections.wrapper')

@section('page_title', $modelAdmin::Title())

@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            Create {{ $modelAdmin->modelManager()->Title() }}
        </h3>
    </div>
    <form action="" method="post">
        <div class="box-body">
            @foreach ($modelAdmin->modelManager()->getMapping() as $attribute => $field)
                {!! \Flare::viewAttribute($attribute, $field, $modelItem) !!}
            @endforeach
        </div>
        <div class="box-footer">
            {!! csrf_field() !!}
            <a href="{{ $modelAdmin::CurrentUrl() }}" class="btn btn-default">
                Back
            </a>
            <a href="{{ $modelAdmin::CurrentUrl('edit/'.$modelItem->id) }}" class="btn btn-primary">
                Edit {{ $modelAdmin::Title() }}
            </a>
            <a href="{{ $modelAdmin::CurrentUrl('delete/'.$modelItem->id) }}" class="btn btn-danger">            
                Delete {{ $modelAdmin::Title() }}
            </a>
        </div>
    </form>
</div>

@stop