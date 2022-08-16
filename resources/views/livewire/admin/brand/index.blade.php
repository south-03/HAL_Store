<div>
    @include('livewire.admin.brand.model-form')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brands List
                        <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $brands as $brand )
                            <tr>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->phone }}</td>
                                <td>{{ $brand->fax }}</td>
                                <td>{{ $brand->address }}</td>
                                <td>{{ $brand->email }}</td>
                                <td>
                                    <a href="#" wire:click="editBrand({{ $brand->id }})" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateBrandModal">Edit</a>
                                    <a href="#" wire:click="deleteBrand({{ $brand->id }})" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBrandModal">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">No Brand Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        });

    </script>
@endpush