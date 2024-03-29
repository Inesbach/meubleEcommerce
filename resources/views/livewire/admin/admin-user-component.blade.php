<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tous les Utilisateurs
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.adduser')}}" class="btn btn-success pull-right">Ajouter Utilisateur</a>  
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>utype</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td>{{$user->utype}}</td>
                                        <td>
                                        <a href="{{route('admin.edituser',['id'=>$user->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a> 
                                        <a href="#" onclick="confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?') || event.stopImmediatePropagation()" style="margin-left:10px;" wire:click.prevent="deleteUser({{$user->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





