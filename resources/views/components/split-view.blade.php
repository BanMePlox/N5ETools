<!-- resources/views/components/split-view.blade.php -->
<div class="container-fluid py-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-4 border-end" style="max-height: 80vh; overflow-y: auto;">
            {{ $sidebar }}
        </div>

        <!-- Detail panel -->
        <div class="col-md-8" id="details-container">
            {{ $details }}
        </div>
    </div>
</div>
