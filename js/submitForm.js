// Source code used in Spring 2016 by Megan Yates for CS1520 Part Two

function SubmitFormData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();
    $.post("email.php", { Name: name, Email: email, Phone: phone, Message: message},
    function(data) {
		$('#contact')[0].reset();
    });
}