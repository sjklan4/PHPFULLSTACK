<!DOCTYPE html>
<html>
<head>
	<title>달력</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
		}
		.month-year {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php
		// 현재 년, 월, 일 정보 가져오기
		$current_year = date("Y");
		$current_month = date("m");
		$current_day = date("d");

		// URL 매개변수로 전달된 년, 월 정보 가져오기 (없으면 현재 날짜로 설정)
		$year = isset($_GET['year']) ? $_GET['year'] : $current_year;
		$month = isset($_GET['month']) ? $_GET['month'] : $current_month;

		// 해당 월의 첫째 날과 마지막 날 계산
		$num_days = date("t", strtotime($year . "-" . $month . "-01"));
		$first_day = date("N", strtotime($year . "-" . $month . "-01"));
		$last_day = date("N", strtotime($year . "-" . $month . "-" . $num_days));

		// 이전 월과 다음 월 링크 계산
		$prev_month = $month == 1 ? 12 : $month - 1;
		$prev_year = $month == 1 ? $year - 1 : $year;
		$next_month = $month == 12 ? 1 : $month + 1;
		$next_year = $month == 12 ? $year + 1 : $year;

		// 해당 월의 날짜 배열 만들기
		$dates = array();
		$day = 1;
		for ($i = 1; $i <= 6; $i++) {
			$dates[$i] = array();
			for ($j = 1; $j <= 7; $j++) {
				if ($i == 1 && $j < $first_day) {
					$dates[$i][$j] = "";
				} else if ($day > $num_days) {
					$dates[$i][$j] = "";
				} else {
					$dates[$i][$j] = $day;
					$day++;
				}
			}
		}
	?>

	<!-- 이전 월, 다음 월 링크 및 현재 월/년 표시 -->
	<div>
		<a href="?year=<?php echo $prev_year ?>&month=<?php echo $prev_month ?>">이전</a>
		<span class="month-year"><?php echo $year ?>년 <?php echo $month ?>월</span>
		<a href="?year=<?php echo $next_year ?>&month=<?php echo $next_month ?>">다음</a>
	</div>

	<!-- 달력 표시 -->
	<table>
		<thead>
			<tr>
				<th>일</th>
				<th>월</th>
				<th>