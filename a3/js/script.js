//function myFunction() {
//    var x = document.getElementById("seats[FCC]").value;
//    document.getElementById("demo").innerHTML = "You selected: " + x;
//    console.log(x);
//}

function logForm() {
    //function to capture the form information when user clicks on the 'order' button
    console.log("logForm Function has been called");
    var formInfomation = document.forms["myForm"];
    console.log("Form Submission Details");
    console.log(formInfomation);
//    var formInfomation = String(formInfomation);
    document.getElementById("debug_out").innerHTML = formInfomation;

}

function testOnClick() {
    //function to test alerting on the screen
    window.alert("test");
    console.log("test")
    //    window.alert("enter alerting window function here");


}

function testOnChange() {
    //function to test a non-button element and alert its value
    var elementId = document.getElementById("seats[STA]").value;
    window.alert(elementId);
    console.log(elementId);
    //    window.alert("enter alerting window function here");


}

function fieldValueOutput(fieldId) {
    //function to get the id of the field and the value entered
    var elementIdValue = document.getElementById(fieldId).value;
//    window.alert(elementIdValue);
    console.log("Field element id is: "+fieldId+" and Element value is: " +elementIdValue);
    document.getElementById("debug_out").innerHTML = "Field element id is: "+fieldId+" and Element value is: " +elementIdValue;
    //    window.alert("enter alerting window function here");


}

function testEventTarget(event) {
    var x = event.target;
    document.getElementById("input_name").value;
    //    window.alert("Triggered by a " + x.tagName + " element");
    console.log("Triggered by a " + x.tagName + " element");

}