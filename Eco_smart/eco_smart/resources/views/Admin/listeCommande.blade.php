@extends('layouts.appAdmin')

@section('ContentAdmin')
<table class="table table-bordered table table-striped">
    <thead>
        <tr>
            <th scope="col " class="text-danger">id</th>
            <th scope="col">created_at</th>

            <th scope="col">Commande</th>
            <th scope="col">Total</th>
            <th scope="col">Nom Client</th>
            <th scope="col">ID Client</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($commande as $cmd)
        <tr>
            <td>{{ $cmd->id }}</td>
            <td>{{ $cmd->created_at }}</td>
            <td>
                {{$cmd->detail}}
            </td>
              
            
            <td>{{ $cmd->total }}</td>
            {{-- @dd($cmd->user); --}}
            <td>{{$cmd->user? $cmd->user->name:"not found"}}</td>
            <td>{{$cmd->user? $cmd->user->id:"not found"}}</td>

        </tr>
        @endforeach

        
        
    </tbody>
</table>
@endsection
