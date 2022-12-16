@extends('templates.navbar')
@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="w-50 bg-tiga rounded boxShadow">
            <form class="m-3" action="/register/createAccount" method="POST">
                @csrf
                <div class="d-flex flex-column rounded my-2">
                    <label for="name">Name</label>
                    <input class="border-3 border-bottom px-2 py-1 rounded" type="text"  name="name" value="{{ auth()->user()->name }}">
                </div>
                <div class="d-flex flex-column rounded my-2">
                    <label for="email">Email</label>
                    <input class="border-3 border-bottom px-2 py-1 rounded" type="email" name="email" value="{{ auth()->user()->email }}">
                </div>
                <div class="d-flex flex-column rounded my-2">
                    <label for="password">Password</label>
                    <div class="d-flex align-items-center rounded bg-satu">
                        <input class="password w-100 border-3 border-bottom px-2 py-1 rounded" type="password" name="password">
                        <ion-icon onclick="passwordPrivacyHandler()" class="icon fs-4 text-tiga rounded py-1 px-2" name="eye-off"></ion-icon>
                    </div>
                </div>
                <div class="my-2">
                    Gender
                    <div>
                        <input type="radio" value="0" name="gender" id="female" {{ auth()->user()->gender == 'female' ? 'checked' : '' }}>
                        <label for="female">Female</label>
                    </div>
                    <div>
                        <input type="radio" value="1" name="gender" id="male" {{ auth()->user()->gender == 'female' ? 'checked' : '' }}>
                        <label for="male">Male</label>
                    </div>
                </div>
                <div class="d-flex flex-column rounded my-2">
                    <label for="dateOfBirth">Date Of Birth</label>
                    <input class="border-3 border-bottom px-2 py-1 rounded" type="date" name="dateOfBirth" value="{{ auth()->user()->dateOfBirth }}">
                </div>
                <div class="d-flex flex-column rounded my-2">
                    <label for="country">Country</label>
                    <select class="border-3 border-bottom px-2 py-1 rounded" name="country">
                        @foreach ($listCountry as $country)
                            <option {{ auth()->user()->country == $country ? 'selected' : '' }} value={{ $country }}>{{$country}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end mb-5 gap-3 mt-3">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="w-50 boxShadow px-4 py-2 rounded text-light bg-empat">
                            Log Out
                        </button>
                    </form>
                    <button type="submit" class="w-50 boxShadow px-4 py-2 rounded text-light bg-satu">
                        Save Edit
                    </button>
                </div>
            </form>
            <form action="">
                <button type="submit" class="text-lima">
                    Delete Account
                </button>
            </form>
        </div>
    </main>
@endsection

@section('myScript')
    <script type="text/javascript">
        let icon = document.querySelector(" .icon ");
        let input = document.querySelector(" .password ")
        let show = false;

        function hidePassword() {
            icon.setAttribute('name','eye-off')
            input.setAttribute('type','password')
            show = false;
        }

        function showPassword() {
            icon.setAttribute('name','eye')
            input.setAttribute('type','text')
            show = true;
        }

        function passwordPrivacyHandler() {
            if(show){
                hidePassword()
            }else{
                showPassword()
            }
        }
    </script>
@endsection
