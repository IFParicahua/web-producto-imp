<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            font-family: sans-serif;
            font-size: 14px;
          }
        .title1{
            text-align: start;
            border-right: none;
        }
        .title2{
            border-right: none;
            border-left: none;
        }
        .title3{
            border-left: none;
        }
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            caption-side: top;
            border: 1px solid #000;
         }
         caption, td, th {
            padding: 0.3em;
         }

         th:lastchild, td:lastchild {
             border-right: 0;
         }
         th {
            width: 25%;
            padding-bottom: 5px;
         }
         .verticalText {
            writing-mode: vertical-lr;
            transform: rotate(-90deg);
            width: 240px;
        }
        .code{
            height: 50px !important;
        }
    </style>
    <br>
{{--
    <table border="1">
        <tr>
          <td colspan="3">alfa</td>
          <td>bravo</td>
          <td rowspan="2">charlie</td>
        </tr>
        <tr>
          <td>delta</td>
          <td>echo</td>
          <td>foxtrot</td>
          <td>golf</td>
        </tr>
        <tr>
          <td>hotel</td>
          <td colspan="3" rowspan="2">india</td>
          <td>juliet</td>
        </tr>
        <tr>
          <td>kilo</td>
          <td>lima</td>
        </tr>
        <tr>
          <td>mike</td>
          <td>november</td>
          <td>oscar</td>
          <td>papa</td>
          <td>quebec</td>
        </tr>
    </table>
 --}}

 @forelse ($collection as $item)

 <table>
    <tr>
        <td colspan="3" style="font-size: 26px">LAS LOMAS</td>
    </tr>
    <tr>
        <td colspan="3" style="font-size: 18px">NB732-AH500S</td>

    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px">{{ $item->print_label->product->diametro }}</td>
        <td colspan="1" rowspan="7">
            <div class="verticalText">
                {{ $item->barcode }}
                {!! DNS1D::getBarcodeHTML($item->barcode, 'c128'); !!}
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px">{{ $item->print_label->product->longitud }}</td>
    </tr>
    <tr>
        <td colspan="1">Lote:</td>
        <td colspan="1">--</td>
    </tr>
    <tr>
        <td colspan="1">Paquete</td>
        <td colspan="1">{{ $item->package }}</td>
    </tr>
    <tr>
        <td colspan="1">Materia</td>
        <td colspan="1">{{ $item->print_label->product->cod_material }}</td>
    </tr>
    <tr>
        <td colspan="2">Peso</td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 24px">{{ $item->peso }}</td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center; font-size: 16px; padding-top: 50px;">HECHO EN BOLIVIA</td>
    </tr>
</table>
 @empty
     <p>No hay datos encontrados</p>
 @endforelse

</body>
</html>
