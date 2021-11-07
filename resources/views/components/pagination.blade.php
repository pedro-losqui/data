<div>
    @if($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="clearfix push">
            <span>
                {{-- Previous Page Link --}}
                @if($paginator->onFirstPage())
                    <span class="float-left btn btn-alt-secondary min-width-100">
                        {!! __('Anterior') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                        class="float-left btn btn-alt-secondary min-width-100">
                        {!! __('Anterior') !!}
                    </button>
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="float-right btn btn-alt-secondary min-width-100">
                        {!! __('Próxima') !!}
                    </button>
                @else
                    <span
                        class="float-right btn btn-alt-secondary min-width-100">
                        {!! __('Próxima') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
