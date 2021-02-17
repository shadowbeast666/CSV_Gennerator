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
                <button type="submit" class="qwe btn btn-danger relative-bottom">Generuj CSV</button>
                </form>
    </div>
    </body>
</html>