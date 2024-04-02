<!-- resources/views/components/button-modal.blade.php -->

@props(['text', 'modalTarget', 'textColor' => 'text-white', 'bgColor' => 'bg-blue-700', 'icon', 'isborder' => false, 'borderColor' => 'border-transparent'])

<button data-modal-target="{{ $modalTarget }}" data-modal-toggle="{{ $modalTarget }}" {{ $attributes->merge(['class' => 'flex items-center justify-center rounded-md px-12 py-1.5 transition duration-300 ease-in-out mb-2 mt-2 ' . $textColor . ' ' . $bgColor . ($isborder ? ' ' . $borderColor : '')]) }}>
    @if($icon)
        <img src="{{ asset($icon) }}" alt="Ícone" class="mr-2">
    @endif
    {{ $text }}
</button>
