<?php /** @var \App\Models\Entity $entity */?>
@foreach ($entities as $entity)
    <?php if (empty($entity->child)) continue; ?>
    <div class="entity">
        <span class="pull-right elapsed" title="{{ $entity->child->updated_at }}">
            <i class="far fa-clock"></i> {{ $entity->child->updated_at->diffForHumans() }}
        </span>

        <a class="entity-image" style="background-image: url('{{ $entity->avatar(true) }}');"
           title="{{ $entity->name }}"
           href="{{ $entity->url() }}"></a>

        <a class="name" data-toggle="tooltip" title="{{ $entity->tooltipWithName() }}" data-html="true" href="{{ $entity->url() }}">
            {{ $entity->name }}
        </a>
    </div>
@endforeach
<div class="text-center">
    <a href="#" class="text-center widget-recent-more"
       data-url="{{ route('dashboard.recent', ['id' => $widget->id, 'offset' => $offset + 10]) }}">
        {{ __('crud.actions.next') }}
    </a>
</div>