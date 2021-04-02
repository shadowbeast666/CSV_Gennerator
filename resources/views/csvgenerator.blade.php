<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CsvGenerator</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/csv.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('aruba.png') }}" type="image/x-icon"/>
        <style>
            body{
                background-color:#429bf5
            };
        </style>
    </head>
    <body>    
    <div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
        <form method="post" action="{{ route('csvcontroller.main') }}">
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Numer skelpu
                            </th>
                            <th class="text-center">
                                Skrót kraju
                            </th>
                            <th class="text-center">
                                MAC adres
                            </th>
                            <th class="text-center">
                                Adres IP
                            </th>
                            <th class="text-center">
                                Liczba kas
                            </th>
                            <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                            <a id="add_row" class="btn btn-primary float-right">Add Row</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @csrf
                        <tr id='addr0' data-id="0" class="hidden">
                            <td data-name="number">
                                <input type="text" name='number0'  placeholder='Shop Number' class="form-control"/>
                            </td>
                            <td data-name="country">
                                <input type="text" name='country0' placeholder='Country' class="form-control"/>
                            </td>
                            <td data-name="mac">
                                <input type="text" name='mac0'  placeholder='MAC' class="form-control"/>
                            </td>
                            <td data-name="ip">
                                <input type="text" name='ip0'  placeholder='IP' class="form-control"/>
                            </td>
                            <td data-name="poscount">
                                <input type="text" name='poscount0'  placeholder='POS Count' class="form-control"/>
                            </td> 
                            
                            <td data-name="del">
                            <button type="button" name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-danger float-right relative-bottom">Generuj CSV</button>
                </form>
                
		</div>
	</div>
	
</div>
    </body>
</html>