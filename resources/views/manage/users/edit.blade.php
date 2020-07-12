@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit Users</h1>
        </div>
    </div>
    <hr class="m-t-10">
    <div class="card">
        <div class="card-content">
            <form action="{{route('users.update', $user->id)}}" method="post">
                <div class="columns">
                    <div class="column">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label for="name" class="label">Ad</label>
                            <div class="control">
                                <input class="input" type="text" name="name" id="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="email" class="label">Eposta</label>
                            <div class="control">
                                <input class="input" type="email" name="email" id="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="password" class="label">Şifre</label>
                            <div class="control">
                                <div class="field">
                                    <b-radio v-model="passwordOptions"
                                    name="passwordOptions"
                                    native-value="keep"
                                    type="is-success">
                                   Şifre Değişmek İstemiyorum
                                </b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="passwordOptions"
                                name="passwordOptions"
                                native-value="auto"
                                type="is-black">
                                Otomatik Yeni Şifre Oluştur
                            </b-radio>
                        </div>
                        <div class="field">
                            <b-radio v-model="passwordOptions"
                            name="passwordOptions"
                            native-value="manual"
                            type="is-black">
                            Manuel Yeni Şifre Oluştur
                        </b-radio>
                    </div>

                    <input class="input" type="password" name="password" id="password"  v-if="passwordOptions === 'manual'" placeholder="Kullanıcıya Manuel Yeni Şifre Oluştur">
                </div>
            </div>




        </div> <!--end of the first .column-->
        <div class="column">
            <label for="roles" class="label">Roles:</label>
            <input type="hidden" :value="roleSelected" name="roles"/>

            @foreach ($roles as $role)
            <div class="field">
                <b-checkbox :native-value="{{$role->id}}" v-model="roleSelected">{{$role->display_name}} ({{$role->description}})</b-checkbox>
            </div>
            @endforeach
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-primary">Edit User</button>
                </div>
                <div class="control">
                    <a class="button is-text" href="{{route('users.index')}}">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load',function(){
        var app = new Vue({
            el: '#app',
            data:{
                auto_generate:true,
                passwordOptions: 'keep',
                roleSelected:{!! $user->roles->pluck('id') !!},
            }
        });
    });
</script>
@endsection