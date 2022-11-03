<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Criar Produto</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        li,
        ul {
            margin: 0;
            list-style: none;
        }

        .conteudo {
            display: flex;
        }

        .menu__lateral {
            width: 20%;
        }

        .container__nav {
            background-color: #c8c8c8;
            height: 100vh;
        }

        .nav__opcoes {
            padding: 40px 0;
        }

        .nav__opcoes li {
            margin-bottom: 15px;
        }

        .container__nav .nav__opcoes li {
            font-size: 16px;
            font-weight: 800;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        main {
            width: 100%;
        }

        .header__main {
            height: 80px;
            padding: 0 56px;
            background-color: aqua;
        }

        .header__main-lista {
            display: flex;
            padding: 0;
            height: 100%;
            justify-content: flex-end;
            align-items: center;
        }

        .header__main-lista li {
            margin: 0 20px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="conteudo">

        <aside class="menu__lateral">
            <div class="container__nav">
                <div class="nav__opcoes">
                    <ul>
                        <li>
                            <a href="../client/list">Cliente</a>
                        </li>
                        <li class="active">
                            <a href="../product/list">
                                Produto
                            </a>
                        </li>
                        <li>
                            <a href="../sale/list">
                                Venda
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <main>
            <div class="container__main">
                <div class="header__main">
                    <ul class="header__main-lista">
                        <li>
                            <a href="/sale/create">
                                Cadastrar Venda
                            </a>
                        </li>
                        <li>
                            <a href="/sale/list">
                                Lista de Vendas
                            </a>
                        </li>
                    </ul>
                </div>
                <section>

                    <form class="formulario" method="post" action="{{ route('sale.store')}}">
                        @csrf
                        @method( session('post'))
                        <p>Cadastre a Venda</p>
                        <div>
                            <h2>Produto</h2>
                            <select class="options" name="products" multiple='' style="width: 50%;">
                                @foreach($products as $product)
                                <option value="{{$product->idproduto}}">{{$product->nome}}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="field">
                            <label for="codigo">Codigo Venda:</label>
                            <input type="number" id="codigo" name="codigo" placeholder="Codigo *">
                        </div>
                        <div class="field">
                            <label for="descricao">Data da Venda:</label>
                            <input type="date" id="data" name="data" placeholder="Data da Venda*">
                        </div>
                        <div class="field">
                            <label for="total">total da Venda:</label>
                            <input type="text" id="total" name="total" placeholder="Total da Venda*">
                        </div>

                        <div>
                            <button type="submit" value="salvar">Salvar</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        var produtos = '<?php echo json_encode($products); ?>';
        let itemsAdicionados = [];
        let precos = [];
        var total = document.getElementById('total');
        let totalPrice = 0;
        var produtosObj = JSON.parse(produtos);

        $(document).ready(
            function() {
                $(".options").select2();
            }
        );

        $('.options').on('select2:select', function(e) {
            var data = e.params.data;
            if (data.selected === true) {
                itemsAdicionados.push(parseInt(data.id));
                calcula(itemsAdicionados);
            }
        });

        function calcula() {
            let teste = 0;
            for (let i = 0; i < itemsAdicionados.length; i++) {
                if (produtosObj[i].idproduto === itemsAdicionados[i]) {
                    teste += parseFloat(produtosObj[i].price);
                }

            }
            totalPrice = teste;
            total.value = totalPrice;

        }
    </script>
</body>

</html>