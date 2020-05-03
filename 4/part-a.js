
var hourlyWage = 15;
var hourlyOvertimeWage = 22.50;
var hoursWorked = 0;
var counter = 1;
var totalHoursWorked = 0;
var totalWages = 0;
while(true){
	hoursWorked = prompt("Please enter the number of hours you worked OR enter -1 to exit.");
	hoursWorked = parseInt(hoursWorked);
	if(hoursWorked == -1){
		if(totalHoursWorked != 0){
			var row = document.getElementById('wages-table').insertRow(counter);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			cell1.innerHTML = "Total:";
			cell2.innerHTML = totalHoursWorked;
			cell3.innerHTML = totalWages;
		}
		break;
	}else{
		if(hoursWorked <= 40){
			var wage = hoursWorked * hourlyWage;
		}else{
			var normalHoursWage = hoursWorked * hourlyWage;
			var afterHoursWage = (hoursWorked - 40) * hourlyOvertimeWage;
			var wage = normalHoursWage + afterHoursWage;
		}
		totalHoursWorked += hoursWorked;
		totalWages += wage;
		var row = document.getElementById('wages-table').insertRow(counter);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		cell1.innerHTML = counter;
		cell2.innerHTML = hoursWorked;
		cell3.innerHTML = wage;
	}
	counter++;
}