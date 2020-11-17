<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/img/apple.jpg') }}"
                         alt="Card image cap">

                    <div class="card-body">
                        <h4 class="card-title">Смартфон Apple iPhone 11 Pro Max</h4>
                        <p class="card-text">SoC Apple A13 Bionic (6 ядер: 2 высокопроизводительных + 4
                            энергоэффективных) + система Neural Engine третьего поколения
                            Сопроцессор движения Apple M13, включающий барометр, акселерометр, гироскоп и компас
                        </p>

                        <p class="price text-danger">90000 som</p>

                        <a href="#" class="btn btn-primary buy" data-price="90000"
                           data-product="Смартфон Apple iPhone 11 Pro Max">Купить</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/img/redmi.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">СМАРТФОН XIAOMI REDMI NOTE 9</h4>
                        <p class="card-text"> Xiaomi Redmi Note 9 смартфон с 2020 года, весом 199 г и размером 162.3 x
                            77.2 x 8.9 мм. Он оснащен 6.53 дюймовым экраном 48 мегапиксельной камерой и памятью 64GB 3GB
                            RAM, 128GB 4GB RAM. </p>
                        <p class="price text-danger">15000 som</p>
                        <a href="#" class="btn btn-primary buy" data-price="15000"
                           data-product="СМАРТФОН XIAOMI REDMI NOTE 9">Купить</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/img/samsung.jpg')}}"
                         alt="Card image cap">

                    <div class="card-body">
                        <h4 class="card-title">СМАРТФОН SAMSUNG GALAXY A71</h4>
                        <p class="card-text">Galaxy A71 оборудован чипсетом Qualcomm Snapdragon 730, 6 ГБ оперативной
                            памяти и 128 ГБ встроенной памяти. SoC построена по 8 нм техпроцессу и содержит восемь ядер:
                            два высокопроизводительных Kryo 470 Gold (2.2 ГГц) и шесть энергоэффективных Kryo 470 Silver
                            (1.8 ГГц). </p>
                        <p class="price text-danger">27000 som</p>
                        <a href="#" class="btn btn-primary buy" data-price="27000"
                           data-product="СМАРТФОН SAMSUNG GALAXY A71">Купить</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="cart">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="buy" method="post" action="{{ route('store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div>

                    <img class="card-img-top" src="{{URL::asset('/123.jpeg')}}" alt="Card">

                    <div class="form-group">
                        <label for="nomer">Номер карты</label>
                        <input name="nomer" type="text" class="form-control" id="nomer" placeholder="Номер карты">
                    </div>

                    <div class="form-group">
                        <label for="product">Выбранный товар</label>
                        <input name="product" type="text" class="form-control" id="product" readonly>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input name="price" type="text" class="form-control" id="price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Купить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $('.buy').click(function () {
        var price = $(this).data('price'),
            product = $(this).data('product'),
            nomer = $(this).data('nomer');
        $('#nomer').val(nomer);
        $('#price').val(price);
        $('#product').val(product);
        $('#cart').modal();
        return false;
    });
</script>

</body>
</html>
