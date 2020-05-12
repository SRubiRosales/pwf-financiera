@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ __('Loan') }}</h3>
                        </div>
                        <div>
                        <a class="btn btn-primary" href="{{ route('customers.create') }}">{{ __('New Loan') }}</a>
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
                        <th scope="col">{{ __('Customer') }}</th>
                        <th scope="col">{{ __('Amount') }}</th>
                        <th scope="col">{{ __('Number of payments') }}</th>
                        <th scope="col">{{ __('Rate') }}</th>
                        <th scope="col">{{ __('Total') }}</th>
                        <th scope="col">{{ __('Date Ministry') }}</th>
                        <th scope="col">{{ __('Due date') }}</th>
                        <th scope="col">{{ __('Actions') }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lendings as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->id_customer }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->n_payments }}</td>
                        <td>{{ $item->rate }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->date_ministry }}</td>
                        <td>{{ $item->due_date }}</td>
                        <td>
                            <a href="" class="btn btn-outline-secondary btn-sm">{{ __('Show')}}</a>
                            <a href="" class="btn btn-outline-danger btn-sm">{{ __('Delete')}}</a>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection