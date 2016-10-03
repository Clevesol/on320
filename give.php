<html lang="en">
<head>
<title>ON320</title>
<script type="text/javascript" src="/res/scripts/jquery/jquery.js"></script>
<script type="text/javascript" src="/res/jui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/res/scripts/domscript.js"></script>
<script type="text/javascript"></script>

<link rel="stylesheet" href="res/btstrp/css/bootstrap.min.css" />
<link rel="stylesheet" href="res/btstrp/css/style.css" />
<link rel="icon" type="favicon" href="/res/img/logo_day.png" />

<meta name="viewport"
	content="width=device-width,height=device-height, initial-scale=3, maximum-scale=1, user-scalable=no">
</head>
<body>
	
	<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
	
</body>

</html>