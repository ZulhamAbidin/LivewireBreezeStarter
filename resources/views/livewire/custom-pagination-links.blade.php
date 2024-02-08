<ul class="pagination">
    <li class="page-item page-prev">
        <a class="page-link" wire:click="previousPage" tabindex="-1">Prev</a>
    </li>
    @foreach ($paginator->links()->elements[0] as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
    @else
    <li class="page-item"><a class="page-link" wire:click="gotoPage({{ $page }})" href="javascript:void(0)">{{ $page
            }}</a></li>
    @endif
    @endforeach
    <li class="page-item page-next">
        <a class="page-link" wire:click="nextPage" href="javascript:void(0)">Next</a>
    </li>
</ul>