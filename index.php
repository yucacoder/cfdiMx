<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CFDI Handler</title>
</head>

<body>
    
    <div class="container-fluid">
        <h1 class="title">CFDI Handler 1.00</h1>
        <p>Para SAT/México V 3.3</p>
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-header p-2">
                        <h2 class="card-title text-white">XML</h2>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" id="frmupfactura" action="" method="POST">
                            <div class="input-group input-group-sm mt-2">
                                <label for="archivo" class="col-form-label col-sm-2">Archivo:</label>
                                <input type="file" class="form-control col-sm-10 subarchivo" id="archivo" name="archivo[]" multiple>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="button-group float-right">
                            <button type="submit" class="btn btn-success btnupload" form="frmupfactura" formenctype="multipart/form-data">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script
        src="https://unpkg.com/xlsx/dist/xlsx.full.min.js">
    </script>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js">
    </script>
    <script type="text/javascript" src="facturas.js"></script>
    <script type="text/javascript" src="data/getExcel.js"></script>
</body>

</html>