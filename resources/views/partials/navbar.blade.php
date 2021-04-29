<div class="container">
    <div class="row">
        <div class="col"><a href="{{ url('/') }}" class="text-sm text-gray-700 underline">INICIO</a></div>
        <div class="col">
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="col"><a href="{{ url('logout') }}" class="text-sm text-gray-700 underline">Logout</a></div>
    </div>
</div>