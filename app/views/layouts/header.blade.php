@php
	$random_var = random_var();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="@yield('og-title', $title)">
	<meta property="og:image" content="@yield('og-image', asset("images/favicon.ico"))">
	<meta property="og:url" content="@yield('og-url', current_url())">
	<meta property="og:site_name" content="@yield('title',$title?? '')">
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}" />
    <meta name="keywords" content="{{ env('APP_KEYWORD') }}">
    <meta name="author" content="{{ env('APP_AUTHOR') }}" />
    <meta name="app:id" content="{{ env('APP_NAME') }}">
    <meta name="title" content="@yield('title',$title?? '')">
    <meta name="var_key" content="{{ $random_var }}">
    <link rel="icon" href="{{ asset() }}images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset() }}css/style.css">
    <link rel="stylesheet" href="{{ asset() }}js/plugins/DataTables/DataTables/css/dataTables.min.css">
    <link rel="stylesheet" href="{{ asset() }}js/plugins/DataTables/DataTables/css/dataTables.bootstrap4.min.css">
    
    @yield('css')
    <script>
    	var _0x26d9=['844PVBCac','286547wfcBtR','245238AYIMHv','{{ user_key() }}','170315pDDHQs','{{ csrf_token() }}','8cMcmpp','28QQKYAg','2695512jYcsFr','5rzrNtR','24469vREJIc','797nvwzIe','{{ api_url() }}','1ytxAGs','175447ZpdlNC'];var _0x3176=function(_0x1f146a,_0xf1eb15){_0x1f146a=_0x1f146a-0x134;var _0x26d9cd=_0x26d9[_0x1f146a];return _0x26d9cd;};var _0xfc2934=_0x3176;(function(_0x57bd89,_0x43ebf5){var _0x529482=_0x3176;while(!![]){try{var _0x294cc9=-parseInt(_0x529482(0x13a))*parseInt(_0x529482(0x141))+-parseInt(_0x529482(0x142))*parseInt(_0x529482(0x136))+parseInt(_0x529482(0x137))*-parseInt(_0x529482(0x13b))+parseInt(_0x529482(0x13d))+-parseInt(_0x529482(0x13c))+parseInt(_0x529482(0x135))*parseInt(_0x529482(0x13f))+parseInt(_0x529482(0x134))*parseInt(_0x529482(0x139));if(_0x294cc9===_0x43ebf5)break;else _0x57bd89['push'](_0x57bd89['shift']());}catch(_0x34b0d0){_0x57bd89['push'](_0x57bd89['shift']());}}}(_0x26d9,0xb5bd2));var {{ $random_var }}={'__url':'{{ base_url() }}','__api_url':_0xfc2934(0x138),'__key':_0xfc2934(0x140),'__user_key':_0xfc2934(0x13e)};
    </script>
</head>
<body class="">