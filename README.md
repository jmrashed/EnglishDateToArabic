# EnglishDateToArabic
Convert a date format in PHP
Suppose, your original date is 2021-01-06, and you want to convert as like d-m-Y


				$originalDate = "2010-03-21";
				$newDate = date("d-m-Y", strtotime($originalDate));
				echo $newDate;
Output will be 21-03-2010
