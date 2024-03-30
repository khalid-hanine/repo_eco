@extends('layouts.appAdmin')

@section('ContentAdmin')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col ">id</th>
            <th scope="col">nom</th>

            <th scope="col">tele</th>
            <th scope="col">password</th>
            <th scope="col">created_at</th>
            
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->tele }}</td>

            <td>
                {{$user->password}}
            </td>
              
            
            <td>{{ $user->created_at }}</td>
           
        </tr>
        @endforeach

        
        
    </tbody>
</table>
@endsection
