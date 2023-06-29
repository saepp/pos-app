<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Barcode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .outer {
            display: flex;
            flex-direction: column;
        }

        .heading {
            text-align: center;
            margin-top: 0.75rem;
        }

        .button_cetak {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            margin: 0.5rem auto;
            border: none;
            background-color: #007bff;
            color: white
        }

        .inner {
            display: flex;
            flex-wrap: wrap;
            margin-right: auto;
            margin-left: auto;
            width: 655px;
        }

        .card {
            margin: 0.25rem;
            padding: 0.5rem;
            height: auto;
            width: auto;
            border: 1px solid black;
        }

        @media print {
            .button_cetak {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="outer">
        <h1 class="heading">Cetak Barcode</h1>
        <button class="button_cetak" onclick="window.print()">Print Barcode</button>
        <div class="inner">
            @foreach ($products as $product)
                <div class="card">
                    {{-- {!! DNS1D::getBarcodeSVG("$product->product_code", 'C39', 2, 40) !!} --}}
                    <img src="data:image/png;base64, {{ DNS1D::getBarcodePNG("$product->product_code", 'C39') }}"
                        alt="{{ $product->product_code }}">
                    <p class="text-center">{{ $product->product_code }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
