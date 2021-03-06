<div class="box box-solid">
    <div class="box-body box-profile">
        @if (!View::hasSection('entity-header'))
            @include ('cruds._image')
            @include('entities.components.links')
        @endif

        <ul class="list-group list-group-unbordered">
            @include('cruds.lists.type')
            @if ($model->timeline)
                <li class="list-group-item">
                    <b>{{ __('timelines.fields.timeline') }}</b>
                    <span class="pull-right">
                        {!! $model->timeline->tooltipedLink() !!}
                    </span>
                    <br class="clear" />
                </li>
            @endif
            @include('entities.components.relations')
            @include('entities.components.attributes')
            @include('entities.components.tags')
        </ul>
    </div>
</div>

@include('entities.components.menu')
@include('entities.components.actions')
