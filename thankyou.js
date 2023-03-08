// code for displaying a message when the contact form is submitted
document.querySelector('form').addEventListener('submit', function(event) {
	event.preventDefault();
	alert('Thank you for your message!');
});
