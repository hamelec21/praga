<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
@include('navigation-menu')
<div class="container mx-auto">

    <div class=" text-center bg-gray-900 text-white px-4 py-2 rounded-lg mt-10 ">Crear Notificación</div>


    <div class="">
        <div class="px-4">
            <center>
                <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="bg-red-600 text-white px-4 py-2 rounded-lg mt-10">Activar las Notificaciónes</button>
            </center>

            <div class="container mx-auto">
                <div class="container mx-auto">
                    @if (session('status'))
                        <div class="bg-red-600" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('send.notification') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" name="title" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea  name="body" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="border-gray-400 rounded-lg bg-blue-800 text-center w-full text-white mt-5 py-2">Enviar Notificación</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>

    var firebaseConfig = {
        apiKey: "AIzaSyBFa97fl-J9QCKTSvbLS9tbWfPutjhEBc4",
        authDomain: "carmelo-de-praga.firebaseapp.com",
        projectId: "carmelo-de-praga",
        storageBucket: "carmelo-de-praga.appspot.com",
        messagingSenderId: "737332109614",
        appId: "1:737332109614:web:a4d1e4c1387ea4121cdabf",
        measurementId: "G-Q13EZ9WVKV"
    };

    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function initFirebaseMessagingRegistration() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function(token) {
                console.log(token);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route("save-token") }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });

            }).catch(function (err) {
            console.log('User Chat Token Error'+ err);
        });
    }

    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });

</script>
</body>

</html>
