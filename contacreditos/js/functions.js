// This file contains all the auxiliar Javascript functions

// This function goes through all the checkboxes and adds the values of those checked
function checkTotal() {
	var sum = 0;
	for(i = 0; i < $('input').length; i++) {
		if($('input')[i].checked) {
			sum = sum + parseFloat($('input')[i].value);
		}
	}

	// if the sum is above 40.5 ECTS we have and invalid case
	if(sum > 40.5){
		$('.sum').removeClass('text-success');
		$('.sum').addClass('text-error');
	}
	if(sum <= 40.5){
		$('.sum').removeClass('text-error');
		$('.sum').addClass('text-success');
	}
		$('.sum').html(sum);

	for(j = 1; j < 7; j++){
		id = '#' + j + ' input';
		if(areAllChecked(id)){
			$(id)[0].checked = true;
		}
		else{
			$(id)[0].checked = false;
		}
	}
}

function areAllChecked(id){
	list = $(id);
	var all = true;
	for(i = 1; i < list.length; i++){
		if(!list[i].checked){
			all = false
		}
	}
	return all;
}

function checkAll(id){
	list = $(id);
	if(areAllChecked(id)){
		for(i = 0; i < list.length; i++){
			list[i].checked = false;
		}
	}
	else{
		for(i = 0; i < list.length; i++){
			list[i].checked = true;
		}
	}
	checkTotal();
}

// This function cleans (unchecks) the checkboxes from the semester that is not selected
// This is helpful because you cannot take courses from both semesters at the same time
function cleanOtherHalfyear(){
	list = $('.collapse.in input');
	for(var i=0; i < list.length; i++){
		list[i].checked = false; // uncheck all boxes
	}
	checkTotal(); // update the sum of ECTS
}