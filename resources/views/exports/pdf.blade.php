<!DOCTYPE html>
<html style="margin: 0; padding: 0">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cover</title>
    {{-- <link href='https://fonts.googleapis.com/css?family=Roboto Mono' rel='stylesheet'> --}}

    <style>
        body {
            background: #fff none;
            font-family: DejaVu Sans, 'sans-serif';
            font-size: 14px;
        }

        .container {
            padding-top: 30px;
        }
        .invoice-head td {
            padding: 0 8px;
        }
        .table th {
            vertical-align: bottom;
            font-weight: bold;
            padding: 8px;
            line-height: 14px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table tr.row td {
            border-bottom: 1px solid #ddd;
        }
        .table td {
            padding: 8px;
            line-height: 14px;
            text-align: left;
            vertical-align: top;
            border: 1px solid #ddd;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        .px-5 {
            padding-left: 3rem !important;
            padding-right: 3rem !important;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-3 {
            margin-top: 1.5rem !important;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-lg {
            font-size: 1rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0;
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .font-sans {
            font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }

    </style>
</head>
<body class="font-sans antialiased">
    <table class="pt-5 px-5" width="550" style="margin-left: auto; margin-right: auto;">
        <tr>
            <td align="left">
                <div>
                    <h2 class="font-semibold text-xl">Silva Green ApS</h2>
                </div>
            </td>
            <td align="left">
                <table width="100%">
                    <tr>
                        <td align="left">
                            <h2 class="font-semibold text-xl">Delivery Note: <span class="text-lg">1</span></h2>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <p>Rugårdsvej 784, DK-5462 Morud</p>
                    <p>Tel: +4564801133</p>
                    <p>Fax: +4564801177</p>
                    <p>Mobile: +4530517002</p>
                    <p>Mobile: +4540737078</p>
                    <p>www.silva-green.dk</p>
                </div>
            </td>
            <td>
                <div>
                    <p class="font-medium text-lg">Destination:</p>
                    <p>{{ $deliveryNote->destination }}</p>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="mt-3">
                    <p>Date: {{ $deliveryNote->date->format('d F Y') }}</p>
                    <p class="mt-1">Puller: {{ $deliveryNote->puller }}</p>
                    <p class="mt-1">Trailer: {{ $deliveryNote->trailer }}</p>
                    @if ($deliveryNote->second_trailer)
                        <p class="mt-1">Second Trailer: {{ $deliveryNote->second_trailer }}</p>
                    @endif
                </div>
            </td>
            <td>
                <p> Departure Date: {{ $deliveryNote->departure->format('d F Y') }}</p>
                <p class="mt-1"> Estimated Arrival Date: {{ $deliveryNote->arrival->format('d F Y') }}</p>
            </td>
        </tr>
    </table>

    <div class="mt-5" style="text-align: center; vertical-align: middle;">
        <img src="{{ public_path('images/truck.png') }}" alt="" width="75%">
    </div>


    <table class="table mt-5" width="80%" style="margin-left: auto; margin-right: auto; border-collapse: collapse;">
        <thead>
            <tr class="row">
                <th>#</th>
                <th>Pallet</th>
                <th>Species</th>
                <th>Label</th>
                <th>Size</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deliveryNote->line_items as $item)
                <tr>
                    <td>{{ $item['slot'] }}</td>
                    <td>{{ $item['pallet'] }}</td>
                    <td>{{ $item['type'] }}</td>
                    <td>{{ $item['label'] }}</td>
                    <td>{{ $item['size'] }}</td>
                    <td>{{ $item['amount'] }}</td>
                  </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table mt-5" width="80%" style="margin-left: auto; margin-right: auto; border-collapse: collapse;">
        <thead>
            <tr class="row">
                <th>Species</th>
                <th>Size</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $type => $children)
                @foreach ($children as $size => $child)
                    <tr>
                        <td>
                            {{ $type }}
                        </td>
                        <td>
                            {{ $size }}

                        </td>
                        <td>
                            {{ $child['amount'] }}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>







  <!-- Invoice Table -->
                {{-- <table width="75%" class="table" border="0">
                    <tr>
                        <th align="left">Description</th>
                        <th align="right">Date</th>


                        <th align="right">Amount</th>
                    </tr>

                    <!-- Display The Invoice Items -->
                    @foreach ($invoice->invoiceItems() as $item)
                        <tr class="row">
                            <td colspan="2">{{ $item->description }}</td>



                            <td>{{ $item->total() }}</td>
                        </tr>
                    @endforeach
                </table> --}}
</body>
</html>
