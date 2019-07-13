const datepicker = document.querySelectorAll('.datepicker');
M.Datepicker.init(datepicker);

const dropdown = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(dropdown, {
	constrainWidth: false,
	coverTrigger: false
});
