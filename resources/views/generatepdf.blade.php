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
        {{--  html{margin:0px 50px}  --}}
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
         }

         .title{
            padding-top: 200px;
            font-size: 64pt;
            font-weight: bold;
            padding-bottom: 10px;
            padding-left: 6px
         }
         .subtitle{
            font-size: 36pt;
            padding: 6px;
            padding-bottom: 35px;
         }
         .text_diametro{
            font-size: 36pt;
            font-weight: bold
         }
         .text_longitud{
            font-size: 36pt;
            padding-bottom: 35px
         }
         .data_title{
            width: 150pt;
            padding-right: 20px;
            font-size: 24pt;
            padding-top: 0.4em;
            padding-bottom: 0.4em;
         }
         .data_text{
            font-size: 24pt;
            width: 400pt;
            padding-top: 0.4em;
            padding-bottom: 0.4em;
         }
         .title_peso{
            font-size: 24pt;
            padding-top: 35px;
            padding-bottom: 10px;
         }
         .text_peso{
            font-size: 36pt;
            font-weight: bold;
         }
         .footer{
            text-align: center;
            font-size: 18pt;
            padding-top: 30px
         }
{{--
         caption, td, th {
            padding: 65px;
         }  --}}

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
            padding-top: 40px
        }
        .code{
            height: 85px !important;
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
        <td colspan="4" class="title">LAS LOMAS</td>
    </tr>
    <tr>
        <td colspan="4" class="subtitle">NB732 - AH500S</td>
    </tr>
    <tr>
        <td colspan="3" class="text_diametro">{{ $item->print_label->product->diametro }} mm</td>

    </tr>
    <tr>
        <td colspan="3" class="text_longitud">{{ $item->print_label->product->longitud }}</td>
        <td colspan="1" rowspan="7">
            <div class="div_code">
                {{ $item->barcode }}
                {!! DNS1D::getBarcodeHTML($item->barcode, 'C128'); !!}
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="1"class="data_title">Lote:</td>
        <td colspan="2"class="data_text">{{ $item->print_label->lote }}</td>
    </tr>
    <tr>
        <td colspan="1"class="data_title">Paquete:</td>
        <td colspan="2"class="data_text">{{ $item->package }}</td>

    </tr>
    <tr>
        <td colspan="1" class="data_title">Materia:</td>
        <td colspan="2" class="data_text">{{ $item->print_label->product->cod_material }}</td>
    </tr>
    <tr>
        <td colspan="3" class="title_peso">Peso</td>
    </tr>
    <tr>
        <td colspan="3" class="text_peso">{{ $item->peso }} kg</td>
    </tr>
    <tr>
        <td colspan="4" class="footer">HECHO EN BOLIVIA</td>
    </tr>
</table>
 @empty
     <p>No hay datos encontrados</p>
 @endforelse

</body>
</html>
