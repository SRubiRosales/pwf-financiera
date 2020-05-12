@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ __('Customers') }}</h3>
                        </div>
                        <div>
                        <a class="btn btn-primary" href="{{ route('customers.create') }}">{{ __('New Client') }}</a>
                        </div>
                    </div>
                <div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Phone') }}</th>
                        <th scope="col">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customers)
                    <tr>
                        <td scope="row">{{ $customers->id }}</td>
                        <td>{{ $customers->name }}</td>
                        <td>{{ $customers->phone }}</td>
                        <td>
                            <a href="" class="btn btn-outline-secondary btn-sm">{{ __('Show')}}</a>
                            <a href="" class="btn btn-outline-danger btn-sm btn-delete">{{ __('Delete')}}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


@section('bottom-js')
<script>
    $('body').on('click', '.btn-delete', function(event) {
        //const id = $(this).data('id');
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'No podrás revertir esta acción',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText:'Sí, bórralo!'
        });
        .then(result) => {
            if (result.value) {
                Swal.fire(
                    title: 'Borrado',
                    text: 'El cliente ha sido borrado',
                    icon: 'success'
                );
            }
        }
    });
</script>
@endsection