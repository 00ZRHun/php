<!DOCTYPE html>
<html>
<head>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
<script type='text/javascript' src='https://code.highcharts.com/highcharts.js'></script>
<script type='text/javascript' src='https://code.highcharts.com/modules/exporting.js'></script>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <link href="assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link rel="stylesheet" href="assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css" media="screen" >
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
       <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>     
</head>
<body class="">
<?php include("header.php");?>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='https://code.highcharts.com/highcharts.js'></script>
    <script type='text/javascript' src='https://code.highcharts.com/modules/exporting.js'></script>

    <div class="col-lg-12" style="min-height:280px;">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> All User Visit </h3>
								
								<!-- <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> -->
													   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
								<script type='text/javascript' src='https://code.highcharts.com/highcharts.js'></script>
								<script type='text/javascript' src='https://code.highcharts.com/modules/exporting.js'></script>

								<script type="text/javascript">
										var visitorsCount = [];
										var myCat =[];
								</script>
								<?php
								$totaldays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); 
								
								$month_array=array();
								for($i=1; $i<=$totaldays; $i++)
								{
									if(!array_key_exists($i,$month_array))
									{
										$key = '';
										if($i<10)
										{
											$key = '0'.$i;
											$month_array[$key] = 0;
										}
										else
										{
											$month_array[$i] = 0;
										}
										?>
										<script type="text/javascript">
										var myKey = "Day " + '<?php echo $i; ?>';
										
										myCat.push(myKey);
										</script>
										<?php
										
									}
									
									
								}
								//print_r($month_array);
								$results = mysqli_query($con,"SELECT logindate FROM usercheck");
					                //$f2=mysql_num_rows($a2);
									
									if(mysqli_num_rows($results) >0)
									{
										while($row = mysqli_fetch_row($results))
										{
											$user_date = $row[0];
											$dateArray = explode('/',$user_date);
											$year = $dateArray[0];
											 $monthName = date("M", mktime(0, 0, 0, $dateArray[1], 10));
											 $currentMonth = date('m',mktime(0, 0, 0, $dateArray[1], 10));
											// echo $monthName; 
											//$month = date("M", strtotime($user_date));
											//echo $month;
											
											
											//echo $month.'<br/>';
											
											//$day = date('d',$dateArray));
											
											if($year == date("Y") && $currentMonth == date("m"))
											{
												
												if(array_key_exists($dateArray[2],$month_array))
												{
													$month_array[$dateArray[2]] = $month_array[$dateArray[2]] + 1;
												}
											}											
										}
									}
									//print_r($month_array);
									foreach($month_array as $key=>$value)
									{
									?>
									<script type="text/javascript">
											visitorsCount.push(<?php echo $value;?>);
									</script>
									
									<?php									
									}
									?>
									
								
										
							
								<script type="text/javascript">
											var d = new Date();
											var month = new Array();
											month[0] = "January";
											month[1] = "February";
											month[2] = "March";
											month[3] = "April";
											month[4] = "May";
											month[5] = "June";
											month[6] = "July";
											month[7] = "August";
											month[8] = "September";
											month[9] = "October";
											month[10] = "November";
											month[11] = "December";
											var n = month[d.getMonth()];
											$(function () {
											$('#container').highcharts({
												title: {
													text: 'Daily Visitors Chart of ' + n,
													x: -20 //center
												},
												subtitle: {
													text: '',
													x: -20
												},
												xAxis: {
													categories: myCat
												},
												yAxis: {
													min:0,
													title: {
														text: 'Visitors Count'
													},
													plotLines: [{
														value: 0,
														width: 1,
														color: '#808080'
													}]
												},
												tooltip: {
													valueSuffix: ' Users'
												},
												legend: {
													layout: 'vertical',
													align: 'right',
													verticalAlign: 'middle',
													borderWidth: 0
												},
												series: [{
													name: 'visitorsCount',
													data: visitorsCount
												}]
											});
										});
								</script>
								<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
</body>
</html>