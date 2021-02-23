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
        html {
            margin: 15pt 15pt;
        }
        body{
            font-family: sans-serif;
            font-size: 14px;
          }
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            caption-side: top;
            border: 1px solid #000;
         }
         .title{
            font-size: 20px; padding-top: 70pt;
         }
         .subtitle{
            font-size: 18px
         }
         .data{
            width: 70pt
         }
         .text_diametro{
            font-size: 20px
         }
         .text_longitud{
            font-size: 20px
         }
         .text_peso{
            font-size: 24px
         }
         .footer{
            text-align: center; font-size: 16px;
         }
         caption, td, th {
            padding: 0.3em;
         }

         th:lastchild, td:lastchild {
             border-right: 0;
         }
         th {
            padding-bottom: 5px;
         }
         .div_code {
            writing-mode: vertical-lr;
            transform: rotate(-90deg);
            width: 120pt;
        }
        .code{
            height: 46px !important;
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
        <td colspan="3" class="title">LAS LOMAS</td>
    </tr>
    <tr>
        <td colspan="3" class="subtitle">NB732-AH500S</td>
    </tr>
    <tr>
        <td colspan="2" class="text_diametro">{{ $item->print_label->product->diametro }}</td>
        <td colspan="1" rowspan="7">
            <div class="div_code">
                {{ $item->barcode }}
                {!! DNS1D::getBarcodeHTML($item->barcode, 'c128'); !!}
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text_longitud">{{ $item->print_label->product->longitud }}</td>
    </tr>
    <tr>
        <td colspan="1" class="data">Lote:</td>
        <td colspan="1">{{ $item->print_label->lote }}</td>
    </tr>
    <tr>
        <td colspan="1" class="data">Paquete:</td>
        <td colspan="1">{{ $item->package }}</td>
    </tr>
    <tr>
        <td colspan="1" class="data">Materia:</td>
        <td colspan="1">{{ $item->print_label->product->cod_material }}</td>
    </tr>
    <tr>
        <td colspan="2">Peso</td>
    </tr>
    <tr>
        <td colspan="3" class="text_peso">{{ $item->peso }}</td>
    </tr>
    <tr>
        <td colspan="3" class="footer">HECHO EN BOLIVIA</td>
    </tr>
</table>
 @empty
     <p>No hay datos encontrados</p>
 @endforelse

</body>
</html>
