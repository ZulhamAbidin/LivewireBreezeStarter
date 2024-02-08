<div>
    <?php
    
    use App\Livewire\Actions\Logout;
    
    $logout = function (Logout $logout) {
        $logout();
    
        $this->redirect('/', navigate: true);
    };
    
    ?>
    
    <button wire:click="logout" class="btn"><i class="dropdown-icon fe fe-alert-circle"></i>Logout</button>
</div>