<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('libraries.style')
    @include('libraries.navbarStyle')
</head>
<body>

    <nav>
        <ul>
            <li class="logo"><h3><i class="bi bi-airplane-engines me-1"></i></i>Flight.lk</h3></li>


                <li><a href="{{ route('home') }}" class="{{ request()->path() == '/' ? 'active':'' }}">Passenger</a> </li>
                <li><a href="{{ route('flightMaster') }}" class="{{ request()->path() == 'flightMaster' ? 'active':'' }}">Flight Master</a></li>
                <li><a href="{{ route('loadairCraft') }}" class="{{ request()->path() == 'airCraft' ? 'active':'' }}">Air Craft</a></li>
                <li><a href="{{ route('loadTransaction') }}" class="{{ request()->path() == 'flightTransaction' ? 'active':'' }}">Flight Transaction</a></li>
                <li><a href="">Cancellaration</a></li>
                <li><a href="">ManifStaion</a></li>



        </ul>
    </nav>
</body>
</html>
