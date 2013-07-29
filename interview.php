
<!DOCTYPE html>
<html lang="en">
<head><title>An Interview with Wes Jenkins About LEGO Island</title>
<meta charset="utf-8">
<meta name="description" content="Ever wondered why you can't go into the cave under LEGO Island? Read this interview with Wes Jenkins to learn about the making of the game!">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="style.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>

/*
$(function() {

    $("#submit").hide();

    $("#page-changer select").change(function() {
        window.location = $("#page-changer select option:selected").val();
    })

});
*/
</script>
</head>
<body>
<header>
	<h1><a href="/legoisland"><svg id="logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="280px" height="70px" viewBox="0 0 375 94" enable-background="new 0 0 375 94" xml:space="preserve">
<path d="M370.755,35.526c-1.864-2.993-4.123-7.639-6.912-10c-4.225-3.58-9.496-7.731-15.533-9.136
	c-4.097-0.97-10.122,1.61-17.722,1.61h-12.368c0.058,8-1.225,17.586-1.5,29.979c-0.319,17.518-2.137,27.762-0.319,29.67
	c1.302,1.366,6.427,0.735,11.761,1.055c4.473,0.268,8.028,0.367,10.671,0.367c4.473,0,9.776-0.11,13.209-1.406
	c9.139-3.459,22.393-19.521,22.936-28.998C375.197,44.915,373.646,40.166,370.755,35.526z M349.376,57.51
	c-1.25,1.04-3.848,2.451-6.458,3.114c-2.808,0.708-5.59,0.639-5.59,0.639s-1.333,0.204-1.276-1.686l0.319-24.403
	c0,0,7.32-0.134,9.923,2.265c0.906,0.836,3.567,2.802,5.316,4.786c2.003,2.272,3.19,4.034,3.19,5.476
	C354.801,52.967,351.585,55.679,349.376,57.51z M308.777,26.726c-1.832,0-11.94,2.738-11.94,2.738s0.025,8.934,0.102,11.908
	c0.083,2.878-0.491,12.311-0.491,12.311l-20.619-27.441c0,0-12.016,2.968-13.242,3.114c0.734,15.488-1.608,29.055-1.755,45.233
	c0.051,0.427-0.415,0.957-0.555,3.19c-0.792-3.274-4.32-10.894-12.661-27.428c-9.087-18.021-12.623-28.972-13.433-29.61
	c0,0-0.313-1.806-3.185-2.023c-2.872-0.21-14.521,2.131-16.512,2.023c-1.137,3.178-6.73,15.201-14.758,35.086
	c-0.307,0.753-0.606,1.519-0.894,2.24c-0.65,0.089-1.36,0.204-2.138,0.306c-3.235,0.434-11.965,1.289-13.165,0.332
	c-4.448-3.567,0.242-42.54,0.242-42.54s-0.529-1.915-5.316-1.596c-4.786,0.319-16.062,2.578-16.062,2.578
	c0.97,14.5,0.714,25.635,0.714,33.982c0,5.865-0.562,11.41-1.002,16.496c-0.179-3.682-1.908-7.389-3.861-10.829
	c-2.967-5.335-6.075-8.405-5.316-11.698c1.079-4.734,7.43-11.514,7.43-11.514l-4.667-3.803l-9.333-5.531
	c-5.526,4.079-12.365,10.996-15.364,16.644c0.006-0.357,0.02-0.721,0.025-1.091c0.326-9.049-0.396-19.828-0.396-19.828
	s-0.817-2.463-4.607-2.265c-2.45,0.127-15.22,2.208-15.22,2.208s0.594,19.259,0.594,28.634c0,2.808-3.759,25.794-1.328,32.776
	c1.94,0.645,11.818,0.102,14.569,0.102c1.889,0,6.649-0.434,6.649-0.434s-0.044-0.862-0.102-2.285
	c-0.192-4.173-0.562-13.152-0.562-19.023c0-2.265,0.039-5.055,0.121-8.366c0.006-0.325,0.013-0.651,0.026-0.983
	c1.704,4.072,5.118,7.192,7.058,9.86c3.363,4.627,3.778,6.611,3.509,9.789c-0.216,2.426-6.7,6.911-10.051,8.718
	c3.459,3.439,11.64,8.634,14.946,10.21c4.199-2.208,11.614-8.839,14.888-15.954c0.325-0.708,0.561-1.423,0.728-2.138
	c-0.141,1.979-0.243,3.874-0.249,5.68l0.721,0.957l26.164,0.045c-0.166,2.106-0.242,3.267-0.242,3.937
	c0,0.274,3.874,0.345,3.982,0.453l17.786,0.243c0.586,0.159,2.476-8.992,3.012-10.664c0.166,0,23.242-0.249,23.242-0.249
	l4.065,10.536l18.666-0.345c-0.313,2.578,2.425,2.859,2.425,2.859l17.033-0.925l0.389-21.289c1.71,1.32,6.994,8.596,8.954,11.085
	c1.659,2.151,6.796,8.194,8.456,10.293c2.342,0.293,16.222,1.436,16.222,1.436s0.421-24.748,0.421-29.783
	c0-5.183,0.347-26.269,0.347-26.269S312.925,26.726,308.777,26.726z M222.186,54.76c-1.813-0.134-5.335-1.046-5.335-1.046
	s2.425-6.86,4.499-10.918c1.774-3.484,3.624-5.463,3.624-5.463s2.604,3.829,3.753,6.739c1.142,2.911,3.12,10.702,3.12,10.702
	S224.144,54.913,222.186,54.76z"/>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="116.5747" y1="13.2944" x2="116.5747" y2="86.4709">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_1_)" d="M116.137,15.262c2.508,0.009,10.025-0.396,10.025-0.396s0.72,10.778,0.395,19.83
	c-0.109,4.365-0.201,8.207-0.283,11.519c-0.079,3.315-0.122,6.104-0.122,8.367c0,7.867,0.667,21.306,0.667,21.306
	s-4.763,0.438-6.647,0.438c-2.75,0-11.408-0.003-13.349-0.65c0.375-8.029,0.106-29.425,0.106-32.228
	c0-9.377-0.597-28.638-0.597-28.638S113.683,15.254,116.137,15.262z M115.012,22.813V69.32l2.393,0.319l-0.159-46.825
	C117.354,22.386,115.39,22.6,115.012,22.813z"/>
<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="141.9878" y1="19.6758" x2="141.9878" y2="84.8883">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_2_)" d="M155.695,29.78c0,0-6.149,5.479-7.232,10.21c-0.754,3.296,2.351,7.101,5.318,12.436
	c2.908,5.118,5.318,10.113,2.872,15.431c-3.273,7.115-10.688,13.744-14.891,15.954c-3.306-1.581-11.992-6.724-15.448-10.158
	c3.35-1.809,10.338-6.348,10.556-8.774c0.27-3.178,0.17-6.011-3.191-10.636c-2.712-3.734-6.028-6.52-5.803-13.381
	c0.212-6.461,8.037-15.974,14.95-21.08L155.695,29.78z M145.511,29.887l-1.462-1.09c0,0-7.02,7.651-7.219,11.839
	c-0.131,2.747,0.159,4.521,3.59,10.024c3.079,4.941,5.767,8.319,5.836,11.58c0.075,3.488-3.797,8.75-7.352,11.819l1.715,1.031
	c3.024-3.13,7.539-7.871,7.658-12.896c0.068-2.844-1.759-5.332-4.866-10.689c-3.197-5.513-4.533-6.86-4.68-9.865
	c-0.108-2.238,1.476-4.938,3.311-7.419C144.015,31.554,145.511,29.887,145.511,29.887z"/>
<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="178.5093" y1="13.2949" x2="178.5093" y2="86.4714">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_3_)" d="M179.307,11.062c0,0-4.693,38.98-0.239,42.543c1.196,0.958,9.928,0.112,13.162-0.319
	c3.232-0.431,5.298-0.745,6.861-0.798c-0.375,2.102-0.779,7.154-2.397,10.874c-1.777,4.095-2.911,7.111-3.395,9.052l-33.656-0.063
	l-0.718-0.957c0.04-7.219,0.179-15.765,0.179-25.25c0-8.351-0.206-19.604-1.176-34.099L179.307,11.062z M169.814,19.629h-1.897
	l0.307,44.041c0,0,1.703,0.934,4.264,1.01c2.559,0.076,16.486-0.391,16.486-0.391l0.465-2.388l-18.692,0.813
	c0,0-0.963-15.035-0.745-25.169C170.161,28.332,169.814,19.629,169.814,19.629z"/>
<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="221.5962" y1="13.2949" x2="221.5962" y2="86.4708">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_4_)" d="M243.15,45.389c8.934,17.709,13.928,28.628,14.141,31.007h-19.804l-2.979-10.241
	c0,0-25.792,0.213-25.952,0.213c-0.54,1.671-2.425,10.826-3.017,10.665l-17.784-0.244c-0.109-0.108-1.854-0.26-1.854-0.53
	c0-2.155,3.268-10.485,9.359-25.467c8.029-19.886,15.248-31.646,16.379-34.826c1.993,0.108,4.119,0.063,9.994-0.044h8.082
	C230.524,16.409,234.059,27.368,243.15,45.389z M226.531,24.16l-12.524-0.11c0,0-6.493,16.84-8.322,21.152
	c-3.611,8.568-10.194,26.052-10.194,26.052l2.505,0.134l4.391-12.466l35.791-0.053c0.593,0.918,4.626,12.071,4.626,12.071
	l2.626,0.089L226.531,24.16z M225.467,25.313l12.232,31.802l-34.721-0.16c2.371-6.684,12.385-31.509,12.385-31.509L225.467,25.313z
	 M227.382,49.669c0,0-1.978-7.793-3.125-10.703c-1.146-2.909-3.749-6.74-3.749-6.74s-1.851,1.975-3.629,5.464
	c-2.069,4.059-4.493,10.916-4.493,10.916s3.521,0.913,5.331,1.05C219.68,49.805,227.382,49.669,227.382,49.669z"/>
<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="283.0615" y1="20.9526" x2="283.0615" y2="83.3294">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_5_)" d="M273.01,24.569l18.932,24.675c0,0,0.61-10.097,0.532-12.976c-0.082-2.977-0.107-11.913-0.107-11.913
	s5.48-0.18,7.308-0.206c2.376-0.033,9.498-0.326,9.498-0.326s-0.744,20.984-0.744,26.164c0,5.032-0.426,29.781-0.426,29.781
	s-12.015-0.239-14.358-0.532c-1.661-2.103-7.821-10.042-9.479-12.191c-1.957-2.493-8.053-10.208-9.761-11.528l-0.419,22.763
	l-17.034,0.957c0,0,0.568-7.873,0.47-8.654c0.146-16.173,1.433-30.843,0.7-46.334C259.342,24.104,273.01,24.569,273.01,24.569z
	 M282.794,49.882c-3.665-4.199-6.865-9.007-9.871-12.135c-3.007-3.125-6.827-7.647-6.827-7.647s-0.841,14.162-0.691,20.953
	c0.095,3.42-0.264,6.569-0.216,9.086c0.047,2.517-0.269,11.151-0.316,12.08c0.146,0,1.861,0.053,1.861,0.053l1.064-37.227
	c2.931,3.078,4.82,5.901,7.654,8.932c2.833,3.03,10.284,11.979,13.062,15.196c3.515,4.07,11.936,14.321,11.936,14.321l0.426-42.118
	l-2.021-0.212l0.106,37.971C297.154,67.425,286.753,54.427,282.794,49.882z"/>
<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="341.8853" y1="13.2944" x2="341.8853" y2="86.4714">
	<stop  offset="0" style="stop-color:#FF4D00"/>
	<stop  offset="0.0992" style="stop-color:#FF6603"/>
	<stop  offset="0.3129" style="stop-color:#FF9508"/>
	<stop  offset="0.5164" style="stop-color:#FFBA0C"/>
	<stop  offset="0.7044" style="stop-color:#FFD50F"/>
	<stop  offset="0.8714" style="stop-color:#FFE511"/>
	<stop  offset="1" style="stop-color:#FFEB12"/>
</linearGradient>
<path fill="url(#SVGID_6_)" d="M313.755,12.337c1.78,0,3.964,0,6.549,0h5.821c7.598,0,13.443,0.487,17.541,1.458
	c6.033,1.404,11.3,4.644,15.523,8.221c2.788,2.361,4.679,5.626,6.541,8.615c2.891,4.638,5.002,9.168,4.786,12.922
	c-0.546,9.477-13.8,25.526-22.938,28.987c-3.432,1.299-8.736,1.392-13.209,1.392c-2.641,0-6.197-0.134-10.67-0.405
	c-5.335-0.322-8.562-0.498-10.448-0.553c0.053-2.638-0.14-12.729,0.183-30.243C313.702,30.335,313.812,20.206,313.755,12.337z
	 M357.035,32.146c-4.849-7.114-12.417-10.901-17.733-12.211c-4.255-1.048-15.799-0.795-17.525-0.312v46.426
	c3.068,0.539,6.635,0.319,9.493,0.319c10.939,0,19.739-3.55,25.127-10.77c2.641-3.558,5.743-7.437,5.743-12.125
	C362.14,39.754,358.867,34.841,357.035,32.146z M338.897,22.119c6.571,1.013,13.079,6.166,15.824,9.948
	c2.314,3.187,5.504,8.163,5.504,11.288c0,6.683-9.069,15.924-14.403,18.708c-2.772,1.448-7.797,2.288-12.666,2.87
	c-1.782,0.212-7.604,0.478-9.067-0.292l-0.319-43.342c0,0,3.945-0.338,5.263-0.31C331.515,21.041,336.444,21.741,338.897,22.119z
	 M341.958,31.748c-2.604-2.398-10.052-1.675-10.052-1.675l-0.321,24.401c-0.056,1.888,1.279,1.684,1.279,1.684
	s2.779,0.073,5.584-0.638c2.612-0.663,5.213-2.072,6.461-3.111c2.208-1.832,5.425-4.546,5.425-9.812
	c0-1.439-0.866-4.025-2.872-6.301C345.714,34.311,342.867,32.585,341.958,31.748z"/>
<path d="M0,0v93.372h93.474V0H0z"/>
<rect x="1.578" y="1.576" fill="#FF0000" width="90.319" height="90.22"/>
<path fill="#FFFF00" d="M76.314,27.654c-4.169,0-7.901,1.313-10.951,3.823c-2.165-2.269-5.152-3.487-8.669-3.487
	c-2.819,0-5.373,0.61-7.748,1.857c-2.016-1.689-4.832-1.972-7.659-1.972c-5.131,0-8.061,1.187-10.319,3.535
	c-0.109-0.208-0.223-0.398-0.341-0.569c-1.348-1.972-3.843-2.973-7.418-2.973c-5.643,0-7.68,2.459-10.367,6.51
	C10.046,38.6,6.088,47.611,4.783,51.624c-1.077,3.312-1.468,7.804,0.665,10.479c1.294,1.624,3.748,3.561,8.078,3.561l0.839-0.015
	c1.419,0,4.803-0.216,8.463-2.001c1.689,1.379,3.853,1.97,6.967,1.97c4.169,0,8.115-1.148,11.014-3.142
	c2.439,2.04,5.386,3.142,8.499,3.142c3.877,0,7.57-1.552,10.509-4.341c2.539,3.03,5.769,4.563,9.635,4.563
	c14.037,0,19.706-16.681,19.706-23.637C89.158,28.704,79.328,27.654,76.314,27.654z"/>
<path d="M76.314,30.372c-4.475,0-8.204,1.69-11.079,5.021l-0.231,0.268l-0.169-0.312c-2.073-3.836-5.572-4.641-8.141-4.641
	c-3.032,0-5.694,0.837-8.142,2.563l-0.226,0.16l-0.13-0.244c-0.851-1.6-2.303-2.591-6.91-2.591c-6.237,0-8.279,1.788-10.756,6.066
	c-2.445,4.221-4.753,9.853-5.863,12.559l-0.307,0.746l-0.228-0.096c-0.452-0.192-0.802-0.267-1.44-0.305l-0.375-0.022l0.174-0.333
	c0.901-1.734,5.312-10.946,5.853-12.332c0.518-1.324,0.944-3.18,0.04-4.503c-0.811-1.187-2.553-1.789-5.176-1.789
	c-4.196,0-5.554,1.452-8.102,5.293c-2.442,3.687-6.364,12.347-7.741,16.585c-0.883,2.717-1.163,6.228,0.206,7.945
	c1.342,1.684,3.344,2.538,5.953,2.538c0.218,0,0.409-0.006,0.563-0.01c0.11-0.003,0.202-0.006,0.275-0.006
	c1.412,0,5.097-0.25,8.801-2.574l0.191-0.119l0.134,0.18c0.978,1.308,2.195,2.481,6.305,2.481c5.256,0,9.12-2.023,10.982-3.915
	l0.185-0.189l0.173,0.2c1.543,1.781,4.211,3.904,8.173,3.904c5.763,0,9.294-4.047,10.545-5.788l0.223-0.31l0.188,0.333
	c2.263,4.029,5.268,5.987,9.188,5.987c12.101,0,16.989-14.763,16.989-20.919C86.441,31.525,79.36,30.372,76.314,30.372z"/>
<path fill="#FFFFFF" d="M18.909,51.738c0.716-1.375,6.824-13.617,7.293-14.824c1.058-2.725,0.101-3.81-2.798-3.852
	c-3.544-0.047-4.376,1.407-6.557,4.699c-2.122,3.203-5.383,10.454-6.61,13.893c-0.831,2.323-1.826,5.909-0.641,7.406
	c1.397,1.771,5.211,1.479,7.796,1.005c2.784-0.509,7.05-2.657,7.019-5.817C24.381,51.059,20.914,51.292,18.909,51.738z
	 M37.34,42.905l0.839-1.952c5.048,0,8.145-1.808,8.119-5.068c-0.021-2.675-2.62-2.713-5.788-2.719
	c-4.243-0.01-5.654,1.047-7.955,4.599c-2.002,3.092-5.381,10.328-7.119,16.61c-0.77,2.785-0.215,4.376,1.048,5.215
	c1.572,1.043,4.87,0.822,7.339,0.291c2.814-0.604,6.845-3.261,6.387-6.283c-0.375-2.481-3.143-2.439-6.638-1.695l0.856-2.086
	c4.396-0.246,5.839-1.803,6.32-3.807C41.349,43.51,39.736,42.871,37.34,42.905z M54.717,44.31c-1.854,0.387-3.07,2.09-3.251,2.807
	c-0.199,0.799-0.24,1.59,0.439,2.27c0.6,0.6,1.944,0.538,1.944,0.538c-0.357,1.197-1.438,2.756-1.967,3.128
	c-0.717,0.509-1.739,0.668-2.429,0.338c-0.531-0.253-0.753-0.399-1.016-0.955c-0.271-0.568-0.786-2.105,0.98-6.109
	c1.955-4.435,3.914-6.385,5.441-6.678c2.431-0.465,2.012,2.139,3.144,2.978c0.65,0.485,1.14,0.526,2.067,0.37
	c0.888-0.153,2.494-1.258,2.829-2.587c0.394-1.576,0.337-2.958-0.829-4.781c-1.135-1.773-5.969-4.204-11.536-0.678
	c-4.799,3.038-10.091,11.208-8.936,18.517c0.241,1.514,1.338,5.354,5.762,6.556c4.452,1.209,8.75-1.951,10.93-5.351
	c2.388-3.72,3.392-6.74,2.574-8.723C60.026,43.918,56.579,43.92,54.717,44.31z M76.737,32.913
	c-8.265-0.538-13.271,7.895-14.652,14.461c-1.364,6.474,0.648,13.015,7.609,13.166c6.217,0.133,11.848-5.468,13.884-15.497
	C85.4,36.065,80.315,33.145,76.737,32.913z"/>
<path d="M75.164,39.603c-2.364-0.423-4.26,2.751-5.504,5.891c-0.839,2.113-2.792,8.031,0.68,8.278
	c2.475,0.177,4.185-2.321,5.832-7.449C76.945,43.914,78.056,40.117,75.164,39.603z"/>
<path fill="#FFFF00" d="M74.37,42.305c-0.503-0.077-1.291,1.535-2.268,3.878c-0.897,2.152-1.729,4.979-1.273,5.155
	c0.613,0.242,1.934-2.866,2.582-4.619C74.16,44.698,74.861,42.381,74.37,42.305z"/>
<path d="M88.592,28.274c-1.226,0-2.219,0.993-2.219,2.215c0,1.225,0.993,2.215,2.219,2.215c1.225,0,2.217-0.99,2.217-2.215
	C90.809,29.267,89.816,28.274,88.592,28.274z M88.592,32.245c-0.971,0-1.757-0.787-1.757-1.756c0-0.969,0.787-1.754,1.757-1.754
	c0.969,0,1.756,0.785,1.756,1.754C90.348,31.458,89.561,32.245,88.592,32.245z M89.238,30.568v-0.006
	c0.253-0.103,0.362-0.304,0.362-0.574c0-0.346-0.262-0.631-0.672-0.631h-1.235v2.289h0.502v-0.894H88.7
	c0.253,0,0.346,0.105,0.383,0.346c0.025,0.183,0.019,0.403,0.081,0.548h0.503c-0.089-0.128-0.087-0.398-0.095-0.542
	C89.555,30.874,89.484,30.632,89.238,30.568z M88.749,30.393h-0.554v-0.645h0.554c0.224,0,0.346,0.096,0.346,0.317
	C89.095,30.297,88.973,30.393,88.749,30.393z"/>
</svg></a></h1>
	<nav>
	<ul>
		<li><a href="/legoisland">Home</a></li><li><a href="interview.php">Interview</a></li><li><a href="tips.php">Tips & Tricks</a></li><li><a href="music.php">Music</a></li><li><a href="videos.php">Videos</a></li><li><a href="comic.php">Comic</a></li><li><a href="pictures.php">Pictures</a></li><li><a href="characters.php">Characters</a></li><li><a href="credits.php">Credits</a></li><li><a href="contact.php">Contact</a></li>
	</ul>
    <!--
    <form id="page-changer" action="" method="post">
        <select id="nav" name="nav" onChange="">
		  <option value="/legoisland">Home</option>
          <option value="interview.php">Interview</option>
          <option value="tips.php">Tips &amp; Tricks</option>
          <option value="music.php">Music</option>
          <option value="videos.php">Videos</option>
          <option value="comic.php">Comic</option>
          <option value="pictures.php">Pictures</option>
          <option value="characters.php">Characters</option>
          <option value="credits.php">Credits</option>
          <option value="contact.php">Contact</option>
        </select>
        <input type="submit" value="Go" id="submit" />
    </form>
    -->
	</nav>
</header>
<article>
<h1>An Interview with Wes Jenkins <span>the Creative Director of LEGO Island</span></h1>

<p>Ever wondered why you can't go into the cave under the island? Read this exclusive interview with the co-creator of LEGO Island, Wes Jenkins, to learn about the making of the game, the planned ideas that never panned out, the missing spinoffs, and more!</p>

<figure class="wide"><img src="images/wes_header.jpg"></figure>
<figcaption class="wide">Multiple images of Wes showing his involvement in the making of LEGO Island</figcaption>

<dl id="interview">
<dt>First off, I'd like to thank you in advance for answering this Q&amp;A! Can you tell us a little bit about yourself, your history, and how you got into the gaming industry?</dt>
<dd><p>I was raised by a pack of balloons in upstate New York and temporarily landed in New Jersey, Connecticut, Venice-CA, San Francisco, Seattle, London-UK and finally in Austin Texas. I began my career as a small child and continued to grow when appropriate.</p>
<p>But seriously, which is very hard for me to do&hellip; It's been a very Forest Gump like career&hellip; I doodled since my first birthday. I got a B.A. in psychology in Connecticut then hitchhiked to San Francisco for a BFA in art school. I did everything from production artist to Creative Director&hellip; cartooning for local papers, being an art director, doing crappy advertising, illustration, design, animation, comedy radio show; anything I could do with art&hellip; I fell into a cool opportunity by answering an ad for an artist wanted at Stanford University. I found myself in this consortium where companies gave us these computers to engineers and some artists to figure out what to do with them and how to break them&hellip;anyway, I'm getting carried away&hellip; what am I writing a novel here? But, I did 'work" before LEGO for
NASA, Zappa, Disney, PBS, ABC, MCA, IBM, California Academy of Sciences, Winterland/Bill Graham Presents&hellip;</p></dd>

<dt>Wow, those are a lot of big companies! Okay, can you describe the initial steps that lead up to the creation of the LEGO Island game (whose idea it was, and how did the ball get rolling)</dt>
<dd><p>Well, I wanted to say it was all my idea and in a way&nbsp;&ndash;&nbsp;it kind of was&hellip; but not without everybody I worked with (see round 1 stages). Mindscape, like the biz in those days started making divisions like "Kid's products" and "Print products".</p><p>The deptartment head researched toy companies and thought the company should pitch LEGO. Again, I just was sort of in the right place at the right time, I guess. I was asked to put together something and I went with Paul&nbsp;&ndash;&nbsp;the smart education guy&nbsp;&ndash;&nbsp;to the Toy Fair in NYC to see if we could get an appointment. Somehow we did. I think it was Paul's charm and wisdom&nbsp;&ndash;&nbsp;not me.</p></dd>

<dt>So, what was it like working on LEGO Island?</dt>
<dd><p>It was the coolest adventure in my Forest Gump-like career. Ultimately, it was about having fun, seriously. The project was about providing a fun engaging experience for kids to play, to learn and to interact in a LEGO-eye-view world of make believe, so we had to have fun to do that. It was designed as a toy with gaming features, if you wanted a game to play. LEGO is not about telling you what to do&nbsp;&ndash;&nbsp;it's about having undirected fun so we went with a more open playing field. The team that we put together was outstanding kids-at-heart professionals.</p>
<p>Scott Anderson was our producer, Dennis Goodrow was our Technical Director, Paul Melmed was our educational expert and Dave Patch was our Art Director. There were some great actors, musicians, artists and animators like Jeff Walkup, Kevin Byall, Jim Pearson, Shawn Wallis and a great team of programmers and more artists, all with a sense of fun.</p></dd>

<dt>What were your duties as the creative director?</dt>
<dd><p>I played with a great team of like-minded fun people. Oh, I said that already. Specifically, my duties were anything I could do to make it happen with a bunch of great people that soon became my friends. My ultimate duties were to design the concept, do presentations, write the script, write and design the product with a team of a great producer, a great Technological Director, killer artists, actors, musicians, an education expert&hellip; and on and on&hellip; oh and one meeting after another&hellip;</p>
<p>There were meetings and more meetings in California, Connecticut, England, and Denmark. There was auditioning actors/voices, musicians, artists. There was directing audio, animation and art and well&hellip; all kinds of stuff really. I want to say everybody did everything, but that's not all that accurate&nbsp;&ndash;&nbsp;I hate sounding like an arrogant schmuck: "Oh I did this and I did that"&hellip; I'm not really&hellip; but, well, you asked and I did do a lot on it.</p>
<p><a id="revealer" href="#duties">Click here to reveal a detailed list of Wes' duties</a></p>
<script>
$(document).ready(function() {
	$("#reveal").hide();
});
$("#revealer").click(function() {
	$("#reveal").show();
	$("#revealer").hide();
});
</script>
<div id="reveal">
<a id="duties"></a>
<ul>
<li>Initial concept development</li>
<li>Pitched the idea to LEGO with our cool educational expert at the Toy fair/NY</li>
<li>Rough Storyboards, rough sketches, presentations (Connecticut first, then England, then Denmark)..to final story boards, sketches…</li>
<li>In house meetings with one of the VPS and a department head guy who were there at the time but soon left- made Powerpoint presentations of the meetings.</li>
<li>Flow charts, concept summaries and meetings with Dept. head and LEGO reps</li>
<li>A cool new producer came in- so we met and tried to figure out if we were on the same page- we were.</li>
<li>Interviewed/ Hired the art director and solicited for team members</li>
<li>Writing the first pass design doc. More meetings with tech head, producer, and art director…then with the team to finalize concept design doc</li>
<li>More meetings with LEGO- feedback/discussions/ (repeat and rinse)</li>
<li>Built a two table sized LEGO Island out of modeling clay, Styrofoam, and, of course, LEGO with my wife…( how much fun is that!)</li>
<li>Focus testing with kids with The educational guy</li>
<li>Demo direction for E3 and presentation of video that was made by our amazing animators</li>
<li>Review and suggest and direct animation and art that had to be real LEGO</li>
<li>Wrote the script- reviewed with producer- enhanced, rewrote and finalized. Met with a few writers to have some sweetening up on dialog. Some worked, some didn’t…rewrite- finalize</li>
<li>Discuss defensively with administration that it’s going well. They were sure it wouldn’t and couldn’t. Producer would get beat up daily.</li>
<li>Some 2d Art for product-like facial expressions</li>
<li>Designed characters, their bios, and personalities were vased on educational influences like a  guy named Howard Gardner who has this theory about Multiple Intelligences but I’m babbling now</li>
<li>Co-wrote back story with producer</li>
<li>Selected voice actors</li>
<li>Selected musicians</li>
<li>Co-directed in sound studio</li>
<li>Was a voice over</li>
<li>Wrote with producer- user guide comic book- designed book- directed the art</li>
<li>Finalized all of the above</li>
<li>Meeting, meeting, more meetings…work work and more work</li>
<li>Discussed and contributed to the TV ad agency for commercial</li>
<li>Wrote a Disney radio ad for the product</li>
<li>Comps and direction for the package.</li>
<li>Interviews with press</li>
<li>Finalized product</li>
<li>Did initial concepts for several next product</li>
<li>Get fired the day before product release</li>
<li>Went home and sulked and got pissed</li>
<li>Watched as the product success went beyond the company expectations and receive awards. Heard from kids who really liked it and realized that I can die a happy man.</li>
<li>Got hired by LEGO</li>
</ul>
<p>Geez &ndash; that’s wordy but we mostly had a great deal of fun and some not so much fun with administration…I think that covers most of it but there’s no doubt something that I’m missing</p>
</div>
</dd>

<dt>Were you around for any of the voice recording sessions? What about John Morris (from the Toy Story trilogy) who played Pepper&hellip; what was he like to work with?</dt>
<dd><p>Oh yeah I was around&hellip; which was amazingly cool&hellip; I auditioned the talent and directed them all in the studio along with my producer, educational guy and sound engineer.</p>
<p>June Foray was one of the voices who was the voice of Rocky from The Rocky and Bullwinkle Show, in addition to a most versatile and well accomplished pro&hellip;  and David Landers who was Squiggy in Laverne &amp; Shirley (as well as a lot of characters)&hellip; and a bunch of really great talent. It was cool. One of the studios was down in Hollywood, and one day I bumped into William Shatner. I said some dumb joke but he smiled a bit&hellip;</p>
<p>John Morris was great! Really smart and really nice and fun to work with&hellip; the more I think about it&nbsp;&ndash;&nbsp;everybody was extremely cool and fun&nbsp;&ndash;&nbsp;except for some administration folks that didn't care whether we were selling golf balls or something fun, and possibly kind of educational. At least something encouraging for kids to make up stuff.</p><p>LEGO has&nbsp;&ndash;&nbsp;or at least used to have&nbsp;&ndash;&nbsp;the slogan of &ldquo;Play to Learn.&rdquo; I like that.</p></dd>

<figure><a href="images/wes1_full.jpg" target="_blank"><img src="images/wes1.jpg" alt="Wes with the Infomaniac" title="Wes with the Infomaniac" width="189" height="176" class="right"/></a></figure>

<dt>How much of the character's personalities, looks, and attributes came from you? I can't help but notice how similar you look to the Infomaniac in that picture you sent&hellip; that can't be a coincidence, can it? ;)</dt>
<dd><p>I designed the characters and all of that stuff but geez&nbsp;&ndash;&nbsp;again, I'm starting to sound like some arrogant schmuck which I'm not&nbsp;&ndash;&nbsp;really&hellip;  I want to say everybody did but that's not all that accurate&nbsp;&ndash;&nbsp;besides you asked&nbsp;&ndash;&nbsp;so, yes, I designed them. I kind of based their personalities on friends of mine when we were little kids (although don't tell them) but again, it was inspired by everyone on the team and kids and my memory of being a kid. Paul introduced this theory from a guy named <a href="http://www.google.com/search?q=Howard+Gardner" target="_blank">Howard Gardner</a> (Google him). It has to do with "Multiple Intelligence". Basically, we all have some strengths whether it's art or language or people or sports and dance and other things. So the main characters have definitive strengths that allow the user to see LEGO Island through different "intelligences".</p>
<figure><a href="images/info_minifig_full.jpg" target="_blank"><img src="images/info_minifig.jpg" alt="The Infomaniac minifigure" title="The Infomaniac minifigure" width="85" height="110" class="left"/></a></figure>
<p>I know&nbsp;&ndash;&nbsp;everyone told me that the Infomaniac looked like me. I wasn't aware of it when I did it, but I guess that's why I related to the guy in an odd way. I'm told that happens when people write stories and that the main character ends up being based on the guy writing it. I do know it helped me immerse myself into the Island, I guess. After the fact, some 10 years later&nbsp;&ndash;&nbsp;yeah, it does kind of look like me. Sorry. Wish I was better looking. What was cool about making him up was LEGO made him into a plastic toy.</p></dd>

<dt>Were there any major changes in characters or the story throughout the development of the game? Or was everything pretty solid from the start?</dt>
<dd><p>It evolved but they were pretty much solid&nbsp;&ndash;&nbsp;a lot was built around the characters once we got the Island together</p></dd>

<dt>What additional features (or buildings) were planned for LEGO Island but got scrapped, and why? How would these features have worked?</dt>
<dd><p>They got scrapped 'cause: Budget, time, technology and short sightedness by some nameless administrators and coin counters. Some of the features missing are: the ability to go into every building, many more missions and activities, going underwater, going into the pirate's cave, taking a pirate voyage with the pirate guy&hellip; etc.</p>
<p>Some of the missions didn't quite pan out as we liked&nbsp;&ndash;&nbsp;like the hospital, or going into the pizzeria. This technology was really new at the time so really, the technology guys and programmers were amazing. Not being a programmer, I couldn't answer more technologically. I'm just a goofy artist/writer.</p></dd>

<dt>Any other missions or activities that you can remember that got scrapped? Delivering mail? Was there a fire station planned? Was there any plan for what was going to happen if someone got 1st place on <em>all</em> the missions in the game? Sorry for the multi-part question&hellip;</dt>
<dd><p>Actually you just answered it! Yes to all the above. You have to realize that technology was very primitive then. I think the only example is check out the first <em>Doom</em> game. We were going for as much of a play experience we could squeeze out of the technology at the time.</p></dd>

<dt>Was the helicopter initially planned as a mode of transportation? In the released came you can only really take it for a tour and then you're forced to land it back next to the jail.</dt>
<dd><p>We wanted it to. It would have been cool to fly it around after you built it but another example of budget, time and technology. If it were done today, we could have most of the ideas we wanted to in there.</p></dd>

<dt>Can you talk technology for a bit? What sort of computers you guys had, and what sort of software was used if you can remember? Any problems you ran into with the technology?</dt>
<dd><p>Well, on the art end it was 3D Studio and Photoshop. I'll see if I can get the Producer to answer some of  the technical issues. Again, I was just a goofy artist/writer type guy. We had PCs&hellip; If I recall an IBM 250 was a big deal then. I got to have a PC and a Mac. I felt special&hellip; We had problems; mostly because the technology was not quite invented yet. We hit polygon maximum walls. Polygons ended up reversed and inside out at one time.</p>
<p>One of the challenges for the tech guys was to guess where the technology will be by the time of release. It was changing pretty fast then.</p></dd>

<dt>Rumor has it that there was a planned spin-off, entitled <em>Beneath the Phanta-Sea</em>. Why didn't this game get developed? Is the second floor of the elevator an homage to this unreleased game?</dt>
<figure><a href="images/elevator_full.gif" target="_blank"><img src="images/elevator.gif" alt="2nd floor of the elevator" width="203" height="222" class="right" title="2nd floor of the elevator"/></a></figure>
<dd><p>Well&hellip; time, budget, technology, and other&hellip; but mostly because Mindscape got in a dispute with LEGO over distribution and lost their contract&nbsp;&ndash;&nbsp;political issues, mostly. They didn't realize the potential profits of the product and what LEGO was about. In fact, they couldn't quite understand why we didn't just do a simple 2D program instead of 3D. Is that libelous? No, I didn't mention any names&hellip; maybe I should just say some people from some unknown places seemed less than enthusiastic and were paranoid every step of the way.</p>
<p>Yes the 2nd floor was an homage&nbsp;&ndash;&nbsp;hey, cool that you went there! We thought it was funny that the ocean was on the second floor&hellip;</p></dd>

<dt>I absolutely love the music in the game, and it's one of the major reasons that I come back and play the game once in a while. Do you have any stories about any of the musicians that stand out that you'd be willing to share?</dt>
<dd><p>Yes&hellip; but again would be a novel of adventures</p>
<p>Seriously, they're all great people. It was fun finding musicians and bands who wanted to play. It's LEGO after all and everybody likes them I found out and well, the product was for kids&hellip; I heard from friends, and friends of friends. One person (musician of Mama Poppy Brickilini song) auditioned on the phone. I thought it was brilliant. I spoke with a lot of bands but it was a bit of a struggle with the administration to get some top of the line bands&hellip; Google these guys if you don't know them but I spoke with <a href="http://www.google.com/search?q=Mark+Mothersbaugh" target="_blank">Mark Mothersbaugh</a> [<em>Devo</em>], <a href="http://www.google.com/search?q=Ray+Manzarek" target="_blank">Ray Manzarek</a> [Keyboardist for <em>The Doors</em>], <a href="http://www.google.com/search?q=Duane+Eddy" target="_blank">Duane Eddy</a>&hellip; but budget and administration fear clipped our complete efforts short. I wanted to make a separate CD of just the music to accompany the package.</p></dd>

<dt>I've heard that Mindscape scrapped the development team on the day of release. Can you describe what happened?</dt>
<dd><p>Actually, it was the day before release. Long story but basically&nbsp;&ndash;&nbsp;the industry tradition (back then) was that you will receive product bonuses if you stay to the day of product release. The best solution for them (administrators) at the time was to fire everybody the day before release. There's bigger profits and then could get their investment money back before the product sells&hellip; if you don't have to pay bonuses or continued salaries. They also sold the company eventually to bigger companies, which ended up in some legal complications&hellip; It was explained to me later when we won best of the show at E3 later that year, that "it wasn't personal&nbsp;&ndash;&nbsp;it was just business".</p>
<p>What remained unfinished was about 5 more projects.</p>
<p>I was hired by LEGO a while later though, so it was cool in hindsite although I really miss where I lived for 30 years!!!</p></dd>

<dt>Any other stories you can think to share about the development of LEGO Island? Good, bad, or entertaining?</dt>
<dd><p>Yes&nbsp;&ndash;&nbsp;but it would be a novel.</p></dd>

<dt>A very good novel though, I would think&hellip; Anyway, next question: do you still have lots of artifacts of LEGO Island kicking around, like old pictures, or the script?</dt>
<dd><p>Yes&nbsp;&ndash;&nbsp;the script, however, it's now just about 300 printed pages in a binder. I have a few infomaniac characters. I use to have arm loads of LEGO but I eventually gave them away to parents of kids. I was pretty popular with the neighborhood for a while. I have a trophy, and a binder full of stuff, plus some huge storyboards.
I have a few odd photos here and there. I'll see if I can hunt em down for ya, but it was last century though.</p></dd>
<figure><a href="images/island_model_full.jpg" target="_blank"><img src="images/island_model.jpg" alt="The tangible model of the Island" width="212" height="208" class="right" title="That's Scott (Producer) Me (Hunched over) and Dennis (Technology Director) huddled over the tangible model of the Island"/></a></figure>
<dt>Do you happen to have any good photos of the tangible model of the island? I think in the comic book or something it said that you guys built a model and I've always been really curious to see what it looked like. Any other images of the island in its pre-production stages.</dt>
<dd><p>My wife and I built it together which was a lot of fun, as you could imagine. The team would have focus tests with kids to ask how they would play and all which we tried to incorporate. Also, the team kinda played around on it when we wanted to. It did really help us understand what the product is about. The Island model was built before we built it on computer. You know, one of the sad things is we don't really have really good photos of it&hellip;</p> </dd>

<dt>Do you have any press clippings of interviews from the around the time of development of the game? I think there might have been one on your site (but it was too small to read to know for sure). Anything from E3?</dt>
<dd><p>On some Cassette tapes and full sheet newspaper articles but that's a bit of struggle to find them.</p></dd>

<dt>Anything you can tell us about the LEGO TV series for BBC you worked on? What the plot was going to be like&hellip; that sort of thing&hellip;</dt>
<dd><p>The pilot I worked on wasn't for the BBC directy&nbsp;&ndash;&nbsp;it was for LEGO itself and it was hopefully going somewhere. The pilot was about the pirate Captain Click who takes all of the LEGO bricks that people leave out when they go to sleep. The pirates take them to the Island, off Ogel, and build weird stuff and the battle begins&hellip; and well, it was kind of funny. Have some of it on a DVD somewhere.</p>
<p>The BBC project did not reach any level due to the fact that in the UK &ndash; a children's show cannot be based on an actually existing product because it's considered a stealthy advertising ploy. They did go on to develop a movie but I was already gone (surgery and heart explosion). </p></dd>

<dt>For LEGO Island 2, what prompted leaving sandbox-style gameplay for a very linear style?</dt>
<dd><figure><a href="images/lego_island_2_full.jpg" target="_blank"><img src="images/lego_island_2.jpg" alt="LEGO Island 2" width="145" height="174" class="left" title="LEGO Island 2"/></a></figure><p>Good question, and I asked myself that one for years. I couldn't agree more. I could give you the guy's name&hellip; but no&hellip; just kidding.</p><p>It had to do with decisions by others to closely copy what the game industry was starting to copy from everyone else. They wanted a "game". I kinda wanted a toy that had gaming features that you'd play only if you wanted to do that. That seems more LEGO to me, rather than force you to play a certain way. So did the kids I spoke with. The industry started to morph to less "interactivity". It became really big business now with a major influence of blowing somebody's head off with real cool blood, or racing games.</p></dd>

<dt>Any stories about LEGO Island 2 you'd like to share? Was it as much fun to work on?</dt>
<dd><p>It was fun working with the senior producer of the project, but not like the first one.</p>
<p>I just re-wrote and enhanced the script&nbsp;&ndash;&nbsp;I was home after surgery and bed-ridden. I couldn't go over anymore and, in fact, on a couple more non-Island projects (<a href="http://www.brickset.com/search/?query=My%20Style" target="_blank">My Style</a> for instance).</p><p>Some weird guy hired his girlfriend and I passed along my presentation to her&nbsp;&ndash;&nbsp;she presented it as her own and then told the developers not to listen to me! I was in hospital again so I could only grin and think&nbsp;&ndash;&nbsp;"whatever&nbsp;&ndash;&nbsp;Play is becoming as weird as any corporation now."</p><p>The guy who was the producer on LEGO Island II is a great guy. He left after that product was completed. So did just about everyone there. There were some amazingly cool and brilliantly talented people there in the beginning. There is one extremely cool woman who is still there though but it kind of collapsed when fun was secondary to money, and power struggles emerged.</p></dd>

<dt>Something that I always wondered about LEGO Island 2&hellip; why were none of the original voice actors rehired? None of them&hellip; I think there was one David Landers laugh that was ripped from the first game present in LEGO Island 2, but I believe that's all.</dt>
<dd><p>LEGO Island 2 was done over in the UK. LEGO noticed that maybe this multimedia stuff could make money after all. There was international issues, I believe but mostly because the uh&nbsp;&ndash;&nbsp;gentleman in charge of the department over there wanted "new blood" in the product. I don't think he really got what LEGO was about. He made a lot of money from some muzak company so LEGO headquarters thought&nbsp;&ndash;&nbsp;"hey, he could make us a lot of money". He thought it should be more of a game like the other games he saw&nbsp;&ndash;&nbsp;kind of like Muzak now that I think of it. He wanted me to be in charge of the Learning range and make games with Duplo and make proposals for other games across the board&hellip; but I'm babbling again&hellip; It was fun though until my heart exploded.</p></dd>

<dt>Any idea why the characters from LEGO Island 2 also looked different? Were the original vector images lost? Or were they just upgraded to look more like LEGO faces at the time of release?</dt>
<dd><p>Same reason as above and since they had a foundation of what they looked like, they thought they should improve on it and LEGO style allowed more flexibility by then. Some decisions were based on localization where marketing believes what sells well in the states wouldn't sell the same in Europe. LEGO island, however, sold well in over 21 countries and in 7 languages. Products localize all of the time though. Sometimes they're right. Sometimes they just mess with a good thing just to reinvent it. Most book titles, for example, are different over there than they are here. I also tend to think that when people were hired to do stuff, they tend to want to prove "well, I can do it even better" ("<a href="http://www.youtube.com/watch?v=uTmfwklFM-M&t=6s" target="_blank">We have our phony baloney jobs to protect</a>") so they changed whatever they could get away with</p></dd>

<dt>One final question (that I keep forgetting to ask)&hellip; can you describe your health issues you mentioned? Your heart exploded? Was it because of all of that cigar smoking &amp; beer drinking as a baby? Have you fully recovered, and what actually happened?</dt>
<dd><figure><a href="images/wes3.jpg" target="_blank"><img src="images/wes3.jpg" alt="Wes as a baby" width="126" height="132" class="left" title="Wes as a baby"/></a></figure><p>Basically, it's a genetic thing that was sped up by catching some kind of heart virus (didn't know there was such a thing) at the Heathrow baggage claim. I would have gotten this congestive heart failure years later&hellip; In fact, my older brother and oldest best friend just died with the same thing last December.  Stress, running around, working and youthful partying all the time kind of sped it up too.</p><p>I've had many surgeries. I now have a defribulator/pacemaker insert and well, nobody wants to hire a freelance old guy that's just a goofy guy so it gets kind of depressing, one reason why I'm a fan of LEGO Island, and kind of proud of my involvement in it. It's probably the last best thing I ever did.</p>
<p>I am writing stuff (not LEGO) comedy novels and graphic novels for self-publishing efforts and I do this odd doodle a day thing just for fun&hellip; <a href="http://doodleallday.weebly.com" target="_blank">doodleallday.weebly.com</a></p>

<p><a href="http://www.wesdotcom.com/images/LEGO_narrative.doc" target="_blank">Click here for a brief exceprt from a book about the making of LEGO Island that Wes occasionally messes around with</a></p></dd>
</dl>

<p><strong>If you want know to more about the man behind the island (and a multitude of other projects), check out <a href="http://www.wesdotcom.com/" target="_blank">his website</a>.</strong></p>
</article>

<footer>This is a fansite, and is not endorsed or owned by The LEGO Group.<br /><br />LEGO and LEGO Island logos, the the Brick and Knob configurations and the Minifigure are trademarks of the LEGO Group.<br /><br />LEGO Island is a game that was created in 1997 by Mindscape and The LEGO Group, and the content on this site is either a direct product of the aforementioned, or opinions and views expressed by those associated with these groups. The views expressed, however, don't necessarily reflect the views of the aforementioned companies. This fansite does not restrict the companies' ability to sell/promote the product and all of the content on this site should be seen as fair-use in a court of law.<br /><br />If anyone knows a lawyer and wants to help me complete this footer, please contact me.</footer>
</body>
</html>