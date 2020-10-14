<div>

    @if ( count($errors) > 0 )
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.products.update')
    @else
        @include('livewire.products.create')
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <button wire:click="edit({{ $product->id }})"
                                class="btn btn-success btn-sm">edit</button>
                        <button wire:click="destroy({{ $product->id }})"
                                class="btn btn-danger btn-sm">delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

</div>