@extends('userapp.template')

@section('user')
<!DOCTYPE html>
<html>
<head>
	<title>Student Results</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			var pageSize = 10;
			var pageNumber = 1;

			function displayTable() {
				$.ajax({
					url: "http://127.0.0.1:8000/api/results?_page=" + pageNumber + "&_limit=" + pageSize,
					type: "GET",
					dataType: "json",
					success: function(data) {
						var table = "<table class='table'>";
						table += "<thead><tr><th>ID</th><th>Symbol Number</th><th>GPA</th></tr></thead>";
						table += "<tbody>";
						$.each(data, function(key, value) {
							table += "<tr>";
							table += "<td>" + value.id + "</td>";
							table += "<td>" + value.symbolnumber + "</td>";
							table += "<td>" + value.gpa + "</td>";
							table += "</tr>";
						});
						table += "</tbody>";
						table += "</table>";
						$("#jsonTable").html(table);

						var pageCount = Math.ceil(data.length / pageSize);
						var pagination = "<nav><ul class='pagination'>";
						if (pageNumber > 1) {
							pagination += "<li class='page-item'><a class='page-link' href='#' data-page='" + (pageNumber - 1) + "'>Previous</a></li>";
						}
						for (var i = 1; i <= pageCount; i++) {
							pagination += "<li class='page-item " + (i === pageNumber ? 'active' : '') + "'><a class='page-link' href='#' data-page='" + i + "'>" + i + "</a></li>";
						}
						if (pageNumber < pageCount) {
							pagination += "<li class='page-item'><a class='page-link' href='#' data-page='" + (pageNumber + 1) + "'>Next</a></li>";
						}
						pagination += "</ul></nav>";
						$("#pagination").html(pagination);

						$("#pagination a").click(function(e) {
							e.preventDefault();
							pageNumber = parseInt($(this).data("page"));
							displayTable();
						});
					}
				});
			}

			displayTable();
		});
	</script>
</head>
<body>
	<div class="container">
		<div id="jsonTable"></div>
	</div>
</body>
</html>

@endsection