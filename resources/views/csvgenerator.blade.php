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
            }
            #xd{
                position:fixed;
                top: 15%;
                left: 15%;
                width:75%;
                height:75%;
                border: 1px solid #ccc;
                background-color: #f3f3f3;
            }
            .qwe{
                position:absolute;
                bottom:0;
                right:0;
            }

        </style>
    </head>
    <body>    
    <!--
    <div id="xd">
        <form method="post" action="{{ route('csvcontroller.main') }}">
            @csrf
            <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control " name="number0"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country0"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac0" />
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip0"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount0"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number1"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country1"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac1"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip1"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount1"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number2"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country2"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac2"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip2"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount2"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number3"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country3"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac3"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip3"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount3"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number4"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country4"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac4"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip4"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount4"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number5"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country5"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac5"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip5"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount5"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number6"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country6"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac6"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip6"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount6"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number7"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country6"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac7"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip7"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount7"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number8"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country7"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac8"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip8"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount8"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number9"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country9"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac9"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip9"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount9"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
        <div class="form row g-3 text-center pr-1 pl-1">
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="number10"/>
                    <label class="form-label"  for="form10Example2">Shop Number</label>
                    </div>
                </div>
                <div class="col-auto pt-3 ">
                    <div class="form-outline">
                    <input type="text" id="" class="form-control" name="country10"/>
                    <label class="form-label"  for="form10Example1">Country</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example2" class="form-control" name="mac10"/>
                    <label class="form-label"  for="form10Example2">MAC</label>
                    </div>
                </div>
                <div class="col-sm pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="ip10"/>
                    <label class="form-label"  for="form10Example3">Adres IP</label>
                    </div>
                </div>
                <div class="col-auto pt-3">
                    <div class="form-outline">
                    <input type="text" id="form10Example3" class="form-control" name="poscount10"/>
                    <label class="form-label"  for="form10Example3">POS count</label>
                    </div>
                </div>
        </div>
                <button type="submit" class="qwe btn btn-danger relative-bottom">Generuj CSV</button>
                </form>
    </div>
    -->
    <div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
            <form method="post" action="{{ route('csvcontroller.main') }}">
                @csrf
                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                    <thead>
                        <tr >
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
                                
                            </form>
                            <td data-name="del">
                                <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-danger float-right relative-bottom">Generuj CSV</button>
		</div>
	</div>
	
</div>
    </body>
</html>