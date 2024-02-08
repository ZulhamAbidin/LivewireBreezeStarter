<div>
    
    <div class="card-body pb-0">
        <div class="input-group mb-2">
            <input type="text" wire:model="search" wire:keydown="triggerSearch" class="form-control" placeholder="Searching..">
        </div>
        @if ($search)
            <p class="text-sm">Mencari di antara {{ $totalUsers }} Postingan dengan Waktu eksekusi pencarian: {{ number_format($executionTime, 5, ',', '') }} detik atau {{ number_format($executionTime, 1, '.', ',') }} detik</p>
        @endif
    </div>

    <div class="card-body">
        <div class="cok">
            <table class="table table-bordered text-nowrap border-bottom">
                <thead>
                    <tr>
                        <th class="wd-15p border-bottom-0">ID</th>
                        <th class="wd-15p border-bottom-0">Nama Lengkap</th>
                        <th class="wd-20p border-bottom-0">Alamat Email</th>
                        <th class="wd-15p border-bottom-0">Terakhir Diperbaharui</th>
                        <th class="wd-15p border-bottom-0">Tanggal Dibuat</th>
                        <th class="wd-15p border-bottom-0">Tanggal Email Terverifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->updated_at->format('d F Y') }}</td>
                        <td>{{ $user->created_at->format('d F Y') }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mx-auto justify-content-center">
               {{-- {{ $users->links('livewire.custom-pagination-links') }} --}}
               {{ $users->links() }}
            </div>
        </div>
    </div>

</div>
