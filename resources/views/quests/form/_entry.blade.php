
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.name', ['trans' => 'quests'])
        @include('cruds.fields.type', ['base' => \App\Models\Quest::class, 'trans' => 'quests'])
        <div class="form-group">
            {!! Form::foreignSelect(
                'quest_id',
                [
                    'preset' => (isset($model) && $model->quest ? $model->quest : FormCopy::field('quest')->select(true, \App\Models\Quest::class)),
                    'class' => App\Models\Quest::class,
                    'enableNew' => true,
                    'labelKey' => 'quests.fields.quest',
                    'placeholderKey' => 'quests.placeholders.quest',
                    'from' => isset($model) ? $model : null
                ]
            ) !!}
        </div>
        @include('cruds.fields.character', ['label' => 'quests.fields.character'])

        @include('cruds.fields.tags')

        <div class="form-group">
            <label>{{ trans('quests.fields.date') }}</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', FormCopy::field('date')->string(), ['placeholder' => trans('quests.placeholders.date'), 'id' => 'date', 'class' => 'form-control date-picker', 'autocomplete' => 'off']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::hidden('is_completed', 0) !!}
            <label>{!! Form::checkbox('is_completed', 1, (!empty($model) ? $model->is_completed : (!empty($source) ? FormCopy::field('is_completed')->boolean() : 0))) !!}
                {{ trans('quests.fields.is_completed') }}
            </label>
        </div>
    </div>
    <div class="col-md-6">
        @include('cruds.fields.entry2')
        @include('cruds.fields.image')
    </div>
</div>
@include('cruds.fields.private2')
