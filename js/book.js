"use strict";
$( () => {

	//arrival_date column makes focused in the reservation form
	$("#arrival_date").focus();
	$("#reservation_form").submit( evt => {
	let isValid = true;

	//create a code for validating email format as mentioned 
	var emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
	const email = $("#email").val().trim();
	//check an email field blank or not
	if (email == "") {
	$("#email").next().text("This field is required.");
	isValid = false;
	//check weather email address is entered true or not
} else if ( !emailPattern.test(email) ) {
$("#email").next().text("Must be a valid email address.");
isValid = false;
} else {
$("#email").next().text("");
}

//check the condition for night column it must be in number
var night_num = /^(?:[1-9]\d*|\d)$/;
	const nights = $("#nights").val();
	if (nights == "") {
	$("#nights").next().text("This field is required.");
	isValid = false;
} else if ( !night_num.test(nights) ) {
$("#nights").next().text("Must be entered in number.");
isValid = false;
} else {
$("#nights").next().text("");
}

//Checking the name must be entered in text
const name = $("#name").val().trim();
if(name == "") {
	$("#name").next().text("This field is required.");
	isValid = false;
}
else {
	$("#name").next().text("");
}

var number_r = /^[0-9]{10}$/;
const numbers = $("#phone").val();
if (numbers == "") {
$("#phone").next().text("This field is required.");
isValid = false;
} else if ( !number_r.test(numbers) ) {
$("#phone").next().text("Must be entered in number.");
isValid = false;
} else {
$("#phone").next().text("");
}

if(isValid == false) {
	evt.preventDefault();
}

})
	});

	
$(function() {
	$("#datepicker1").datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: '2011:2037',
		dateFormat: 'dd/mm/yy',
		minDate: 0,
		defaultDate: null
	}).on('changeDate', function(ev) {
  if($('#datepicker1').valid()){
   $('#datepicker1').removeClass('invalid').addClass('success');   
   $("#datepicker1").next().text("");
  }
  });
  
  });


