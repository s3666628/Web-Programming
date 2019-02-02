//function myFunction() {
//    var x = document.getElementById("seats[FCC]").value;
//    document.getElementById("demo").innerHTML = "You selected: " + x;
//    console.log(x);
//}

var movie_selected = "";
var movies = {
    AHF: "Boy Erased",
    ACT: "The Girl in the Spider's Web",
    ANM: "Ralph Breaks the Internet",
    RMC: "A Star is Born"
};


var prices = {
    standard_Ad: {
        o1: 14.00
    },
    standard_Co: {
        o1: 12.50
    },
    standard_Ch: {
        o1: 11.00
    },
    first_Ad: {
        o1: 24.00
    },
    first_Co: {
        o1: 22.50
    },
    first_Ch: {
        o1: 21.00
    }
};

alert(prices.standard_Co.o3);


function logForm() {
    //function to capture the form information when user clicks on the 'order' button
    console.log("logForm Function has been called");
    var formInfomation = document.forms["myForm"];
    console.log("Form Submission Details");
    console.log(formInfomation);
    //    var formInfomation = String(formInfomation);
    document.getElementById("debug_out").innerHTML = formInfomation;

}



//function setMovieID(movie_id) {
//    //when user clicks on post image this will set the movie id in the hidden input field
//    console.log("setMovieID function called with movie id = " + movie_id);
//    //    global movie_selected = movie_id;
//    document.getElementById("hidden_mov_id").value = movie_id;
//    movie_selected = movie_id;
//    console.log("movie selected = " + movie_selected);
//    //update the buttons based on the movie selected
//    //    var button = document.getElementById("booking").innerHTML
//    //document.getElementById("debug_out").innerHTML = "Field element id is: " + fieldId + " and Element value is: " + elementIdValue;
//}
//// function that updates the buttons based on movie id that has been selected


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

function showSections(movie_id) {
    console.log("show Sections Function Called");
    console.log("movie id passed in ");
    console.log(movie_id);
    movie_selected = movie_id;
    //1 - set the hidden field to be the value of the movie id that has been selected
    document.getElementById("hidden_mov_id").value = movie_id;
    //2 - show the sections for the movie id

    //    ACT: "The Girl in the Spider's Web",
    //    RMC: "A Star is Born"
    //    ANM: "Ralph Breaks the Internet",
    //    AHF: "Boy Erased",  

    var booking_form = document.getElementById("booking_form");

    var booking_mov_title = document.getElementById("movie_title");


    var synop_1 = document.getElementById("synop_1");
    var trailer_detail_1 = document.getElementById("trailer_detail_1");
    var book_buttons_1 = document.getElementById("book_buttons_1");

    var synop_2 = document.getElementById("synop_2");
    var trailer_detail_2 = document.getElementById("trailer_detail_2");
    var book_buttons_2 = document.getElementById("book_buttons_2");

    var synop_3 = document.getElementById("synop_3");
    var trailer_detail_3 = document.getElementById("trailer_detail_3");
    var book_buttons_3 = document.getElementById("book_buttons_3");

    var synop_4 = document.getElementById("synop_4");
    var trailer_detail_4 = document.getElementById("trailer_detail_4");
    var book_buttons_4 = document.getElementById("book_buttons_4");

    booking_form.style.display = "none";

    synop_1.style.display = "none";
    trailer_detail_1.style.display = "none";
    book_buttons_1.style.display = "none";
    //hide all the others
    synop_2.style.display = "none";
    trailer_detail_2.style.display = "none";
    book_buttons_2.style.display = "none";

    synop_3.style.display = "none";
    trailer_detail_3.style.display = "none";
    book_buttons_3.style.display = "none";

    synop_4.style.display = "none";
    trailer_detail_4.style.display = "none";
    book_buttons_4.style.display = "none";


    if (movie_id == 'ACT') {

        console.log("movie currently selected is: " + movie_selected);
        console.log("found synop_1 " + synop_1);
        console.log("found trailer_detail_1 " + trailer_detail_1);
        console.log("found book_buttons_1 " + book_buttons_1);

        synop_1.style.display = "block";
        trailer_detail_1.style.display = "block";
        book_buttons_1.style.display = "block";

        //        booking_form.style.display = "block";        
        document.getElementById("movie_title").innerHTML = "The Girl in the Spider's Web";

    } else if (movie_selected == 'RMC') {

        //hide all the others
        synop_2.style.display = "block";
        trailer_detail_2.style.display = "block";
        book_buttons_2.style.display = "block";

        //        booking_form.style.display = "block";        
        document.getElementById("movie_title").innerHTML = "A Star is Born";


    } else if (movie_selected == 'ANM') {

        synop_3.style.display = "block";
        trailer_detail_3.style.display = "block";
        book_buttons_3.style.display = "block";

        //        booking_form.style.display = "block";
        document.getElementById("movie_title").innerHTML = "Ralph Breaks the Internet";


    } else {

        synop_4.style.display = "block";
        trailer_detail_4.style.display = "block";
        book_buttons_4.style.display = "block";

        //        booking_form.style.display = "block";
        document.getElementById("movie_title").innerHTML = "Boy Erased";
    }

}

//function setToHide(id_val){
//    var x = document.getElementById(id_val);
//    return x.style.display = "none";
//    
//}

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

function showBookingFrom() {
    //displays the booking form if user clicks on a button - form is hidden by default
    var booking_form = document.getElementById("booking_form");
    booking_form.style.display = "block";
}

function displayBookingDayTime(day, time) {
    //displays the booking form if user clicks on a button - form is hidden by default
    console.log("displayBookingDayTime CALLED");
    //    var subTitle = document.getElementsByClassName("booking_time");
    console.log(day);
    console.log(time);

    document.getElementById("booking_time").innerHTML = day + " " + "at " + time;

}


function testOnChange() {
    

    //function to test a non-button element and alert its value
    var numStandardAdultSeats = document.getElementById("seats[STA]").value;
    var numStandardConcessionSeats = document.getElementById("seats[STP]").value;
    var numStandardChildSeats = document.getElementById("seats[STC]").value;

    var numFirstAdultSeats = document.getElementById("seats[FCA]").value;
    var numFirstConcessionSeats = document.getElementById("seats[FCP]").value;
    var numFirstChildSeats = document.getElementById("seats[FCC]").value;

    console.log(numStandardAdultSeats);
    console.log(numStandardConcessionSeats);
    console.log(numStandardChildSeats);
    console.log(numFirstAdultSeats);
    console.log(numFirstConcessionSeats);
    console.log(numFirstChildSeats);


    numStandardAdultSeats = Number(numStandardAdultSeats) * prices.standard_Ad.o1;
    numStandardConcessionSeats = Number(numStandardConcessionSeats) * prices.standard_Co.o1;
    numStandardChildSeats = Number(numStandardChildSeats) * prices.standard_Ch.o1;
    numFirstAdultSeats = Number(numFirstAdultSeats) * prices.first_Ad.o1;
    numFirstConcessionSeats = Number(numFirstConcessionSeats) * prices.first_Co.o1;
    numFirstChildSeats = Number(numFirstChildSeats) * prices.first_Ch.o1;


//    console.log(numStandardAdultSeats);
//    console.log(numStandardConcessionSeats);
//    console.log(numStandardChildSeats);
//    console.log(numFirstAdultSeats);
//    console.log(numFirstConcessionSeats);
//    console.log(numFirstChildSeats);

    var total = numStandardAdultSeats + numStandardConcessionSeats + numStandardChildSeats + numFirstAdultSeats + numFirstConcessionSeats + numFirstChildSeats;

    //    var totalOut = document.getElementsByClassName("output_total");
    document.getElementById("output_total").value = total;
    //    console.log(typeof (numStandardSeats))

    //    var elementId = elementId *12; 
    //    window.alert(elementId);
    //    console.log(elementId);
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
