function myFunction() {
    var x = document.getElementById("seats[FCC]").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
    console.log(x);
}

function validateForm() {
    console.log("validateForm Function");
    var y = document.forms["myForm"];
    console.log(y);

}