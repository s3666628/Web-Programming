//function myFunction() {
//    var x = document.getElementById("seats[FCC]").value;
//    document.getElementById("demo").innerHTML = "You selected: " + x;
//    console.log(x);
//}

var movie_selected = "ABC";
var movies = {
    AHF: "Boy Erased",
    ACT: "The Girl in the Spider's Web",
    ANM: "Ralph Breaks the Internet",
    RMC: "A Star is Born"
};

function logForm() {
    //function to capture the form information when user clicks on the 'order' button
    console.log("logForm Function has been called");
    var formInfomation = document.forms["myForm"];
    console.log("Form Submission Details");
    console.log(formInfomation);
    //    var formInfomation = String(formInfomation);
    document.getElementById("debug_out").innerHTML = formInfomation;

}

function getMovieTitle() {
    for (i = 0; i < movies.length - 1; i++) {
        console.log(movies[i]);
    }

}


function setMovieID(movie_id) {
    //when user clicks on post image this will set the movie id in the hidden input field
    console.log("setMovieID function called with movie id = " + movie_id);
    //    global movie_selected = movie_id;
    document.getElementById("hidden_mov_id").value = movie_id;
    movie_selected = movie_id;
    console.log("movie selected = " + movie_selected);
    //update the buttons based on the movie selected
    //    var button = document.getElementById("booking").innerHTML
    //document.getElementById("debug_out").innerHTML = "Field element id is: " + fieldId + " and Element value is: " + elementIdValue;
}
// function that updates the buttons based on movie id that has been selected


function upateMovieDayTime(day, time) {
    //function to test alerting on the screen

    window.alert("movie_id: " + movie_selected + " day: " + day + " time: " + time);
    console.log("movie_id: " + movie_selected + " day: " + day + " time: " + time);

    document.getElementById("hidden_mov_id").value = movie_selected;
    document.getElementById("hidden_day").value = day;
    document.getElementById("hidden_time").value = time;
    console.log("the values for hidden fields have been set: " + "movie_id: " + movie_selected + " day: " + day + " time: " + time);
    //    window.alert("enter alerting window function here");


}

function hideSections() {
    if (movie_selected == 'ABC') {
        var booking_section = document.getElementById("booking");
        var movie1 = document.getElementsByClassName("flex-container");
        console.log("found booking " + booking_section);
        booking_section.style.display = "none";
        movie1.style.display = "none";

    }

}
//    if movie_selected =='ACT' {
//        var x = document.getElementById("SPD_WEB");
//
//        if (x.style.display === "none") {
//            x.style.display = "block";
//        } else {
//            x.style.display = "none";
//        }
//
//    }
//}

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
    console.log("Field element id is: " + fieldId + " and Element value is: " + elementIdValue);
    document.getElementById("debug_out").innerHTML = "Field element id is: " + fieldId + " and Element value is: " + elementIdValue;
    //    window.alert("enter alerting window function here");

}

function testEventTarget(event) {
    var x = event.target;
    document.getElementById("input_name").value;
    //    window.alert("Triggered by a " + x.tagName + " element");
    console.log("Triggered by a " + x.tagName + " element");

}