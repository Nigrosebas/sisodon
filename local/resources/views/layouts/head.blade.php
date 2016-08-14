    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SisOdon</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="shortcut icon" href="{!! asset('packages/favicon.ico')!!}" >
    <!-- Bootstrap Core CSS -->
    <!--<link rel="stylesheet" href="{!! asset('packages/css/bootstrap.min.css')!!}">->>
    <!--<link rel="stylesheet" href="{!! asset('packages/css/bootstrap.css')!!}">-->
    <link rel="stylesheet" href="{!! asset('packages/css/bootstrap-theme.css')!!}">
    <link rel="stylesheet" href="{!! asset('packages/css/bootstrap-theme.min.css')!!}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('packages/css/sb-admin.css')!!}">

    <!-- Morris Charts CSS -->
    <!--<link rel="stylesheet" href="{!! asset('packages/css/plugins/morris.css')!!}" >-->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{!! asset('packages/font-awesome/css/font-awesome.css')!!}" >
    <link rel="stylesheet" href="{!! asset('packages/font-awesome/css/font-awesome.min.css')!!}" >

	<!--<link rel="stylesheet" href="{!!asset('packages/calendar/lib/cupertino/jquery-ui.min.css')!!}" >-->
    <link rel="stylesheet" href="{!! asset('packages/calendar/fullcalendar.css')!!}" >
	<link rel="stylesheet" media="print" href="{!! asset('packages/calendar/fullcalendar.print.css')!!}" >




@stack('styles')
    <!-- jQuery -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{!!asset('packages/js/jquery.js')!!}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{!! asset('packages/js/bootstrap.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('packages/js/npm.js')!!}"></script>

    <!-- Morris Charts JavaScript -->
    <!--<script type="text/javascript" src="{!! asset('packages/js/plugins/morris/raphael.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('packages/js/plugins/morris/morris.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('packages/js/plugins/morris/morris-data.js')!!}"></script>-->
    <script type="text/javascript" src="{!! asset('packages/calendar/lib/moment.min.js')!!}"></script>
    <!--<script type="text/javascript" src="{!! asset('packages/calendar/lib/jquery.min.js')!!}"></script>-->
    <script type="text/javascript" src="{!! asset('packages/calendar/lib/cupertino/jquery-ui.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('packages/calendar/fullcalendar.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('packages/calendar/lang-all.js')!!}"></script>
    <!--<script type="text/javascript" src="{!!asset('packages/js/bootstrap.js')!!}"></script>-->



</script>
@stack('scripts')

