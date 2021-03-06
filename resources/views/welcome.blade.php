<!DOCTYPE html>
<html>
    <head>
        <title>Ismael</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
  
                {!! Form::open(array('class' => 'form')) !!}
                    <div class="form-group">
                        {!! Form::label('Your Name') !!}
                        {!! Form::text('name', null,
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Your name')) !!}
                    </div>
                {!! Form::close() !!}
     
                <div class="title">Ismael Gandarillas</div>
            </div>
        </div>
    </body>
</html>
