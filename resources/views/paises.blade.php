<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
<style>
    
        
        </style>


    <h1>Paises de la region</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="table-primary">Pais</th>
                <th class="table-danger">Capital</th>
                <th class="table-warning">Moneda</th>
                <th class="table-info">Poblacion</th>
                <th class="table-success">Ciudades</th>

            </tr>
        </thead>
            <tbody>

                @foreach($paises as $pais => $infopais)
                <tr>
                    <td class="table-danger"rowspan="{{count($infopais['ciudades'])}}">
                        {{ $pais }}
                    </td>
                    <td class="table-info"rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["capital"]}}
                    </td>
                    
                    <td class="table-success"rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["moneda"]}}
                    </td>

                    <td class="table-warning"rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["poblacion"]}}
                    </td>
                    @foreach($infopais["ciudades"] as $ciudad)
                 <th class="table-info">
                     {{ $ciudad }}
                 </th>
                 </tr>
                    @endforeach
                @endforeach

            </tbody>
            <tfoot></tfoot>
    </table>
</body>
</html>