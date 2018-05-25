<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Data Inicial:</label>
                <div class="col-sm-10">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control">
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>

                <label class="col-sm-2 control-label">Data Final:</label>
                <div class="col-sm-10">
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" id="dtFinal">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-primary" href="#">Consultar</a>
                </div>
            </div>
        </form> 
        </div>
    </div>
</body>
</html>