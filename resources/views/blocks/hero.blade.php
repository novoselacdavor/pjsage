{{--
    Block: Hero
--}}
@php
    // If there is an image present, then use wp function to return image with src set for better responsive experience
    $blockData = $block->data;
    $blockData->background_image = $blockData->background_image ? wp_get_attachment_image($blockData->background_image, 'full', false, [ 'class' => esc_attr($block->className) . '__image'] ) : null;
@endphp
@if( $blockData->text )
    <section id="{{ $block->id}}" class="{{ esc_attr($block->className) }}">
        
        {{-- Block: block__image --}}
        @if( $blockData->background_image )
            {!! $blockData->background_image !!}
        @endif

        {{-- Block: block__text --}}
        <div class="{{ esc_attr($block->className) }}__text">
            {!! $blockData->text !!}
        </div>
        
    </section>
@endif