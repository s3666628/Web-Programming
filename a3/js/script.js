//global variables
var movie_selected = "";
var discount_flag = 0;

// prices array
var prices = {
    standard_Ad: {
        o1: 14.00,
        o2: 19.80
    },
    standard_Co: {
        o1: 12.50,
        o2: 17.50
    },
    standard_Ch: {
        o1: 11.00,
        o2: 15.30
    },
    first_Ad: {
        o1: 24.00,
        o2: 30.00
    },
    first_Co: {
        o1: 22.50,
        o2: 27.00
    },
    first_Ch: {
        o1: 21.00,
        o2: 24.00
    }
};

//alert(prices.standard_Co.o2);

// logging function
function logForm() {
    //function to capture the form information when user clicks on the 'order' button
    console.log("logForm Function has been called");
    var formInfomation = document.forms["myForm"];
    console.log("Form Submission Details");
    console.log(formInfomation);
    //    var formInfomation = String(formInfomation);
    document.getElementById("debug_out").innerHTML = formInfomation;

}



function upateMovieDayTime(day, time, discount) {
    //function to test alerting on the screen

    discount_flag = discount; //set the global variable
    console.log(discount_flag);

    window.alert("movie_id: " + movie_selected + " day: " + day + " time: " + time + "discount flag: " + discount_flag);
    console.log("movie_id: " + movie_selected + " day: " + day + " time: " + time + "discount flag: " + discount_flag);

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
        document.getElementById("movie_title").innerHTML = "Boy Erased";
    }

}


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
    console.log(discount_flag);

    if (discount_flag === '1') {
        console.log("called TRUE")
        document.getElementById("booking_time").innerHTML = day + " " + "at " + time + " (Discount Price)";
    } else {
        console.log("called FALSE")
        document.getElementById("booking_time").innerHTML = day + " " + "at " + time + " (Standard Price)";
    }

}

function calcPrices() {


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
    // check if the global discount flag has been set

    if (discount_flag == '1') {
        numStandardAdultSeats = Number(numStandardAdultSeats) * prices.standard_Ad.o1;
        numStandardConcessionSeats = Number(numStandardConcessionSeats) * prices.standard_Co.o1;
        numStandardChildSeats = Number(numStandardChildSeats) * prices.standard_Ch.o1;
        numFirstAdultSeats = Number(numFirstAdultSeats) * prices.first_Ad.o1;
        numFirstConcessionSeats = Number(numFirstConcessionSeats) * prices.first_Co.o1;
        numFirstChildSeats = Number(numFirstChildSeats) * prices.first_Ch.o1;
    } else {
        numStandardAdultSeats = Number(numStandardAdultSeats) * prices.standard_Ad.o2;
        numStandardConcessionSeats = Number(numStandardConcessionSeats) * prices.standard_Co.o2;
        numStandardChildSeats = Number(numStandardChildSeats) * prices.standard_Ch.o2;
        numFirstAdultSeats = Number(numFirstAdultSeats) * prices.first_Ad.o2;
        numFirstConcessionSeats = Number(numFirstConcessionSeats) * prices.first_Co.o2;
        numFirstChildSeats = Number(numFirstChildSeats) * prices.first_Ch.o2;
    }

    var total = numStandardAdultSeats + numStandardConcessionSeats + numStandardChildSeats + numFirstAdultSeats + numFirstConcessionSeats + numFirstChildSeats;
    total = total.toFixed(2);
    document.getElementById("output_total").value = total;
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

//basic layout for the validation of fields was taken from here
//http://form.guide/snippets/javascript-form-validation-using-regular-expression.html

function validateNameInput() {
    var user_name = document.getElementById("input_name").value;
    console.log(user_name + "Validate Name has been called");
    var nameRGEX = /^[a-zA-Z \-.']{1,100}$/; //taken from tutorial answer
    //    var phoneRGEX = /^0/;
    var nameResult = nameRGEX.test(user_name);
    console.log(user_name + "is called");
    if (nameResult == false) {
        alert("please enter a valid name");
        //    if (nameResult === false) {
        //        alert("name:" + nameResult);
        //    } else {
        //        alert("I like it");
    }

}

function validateMobileInput() {
    var phoneNumber = document.getElementById("input_mobile").value;
    console.log(phoneNumber);
    var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
    //    var phoneRGEX = /^0/;
    var phoneResult = phoneRGEX.test(phoneNumber);
    console.log(phoneResult);
    if (phoneResult == false) {
        alert("please enter a valid mobile number");
    }
    //    if (phoneResult === false) {
    //        alert("mobile:" + phoneResult);
    //    } else {
    //        alert("I like it");
    //    }

}

function validateCCInput() {
    var credit_card = document.getElementById("input_cc").value;
    console.log(credit_card);
    var creditcardRegEx = /(^[0-9]{16}$)|([0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$)/;
    var cc_Result = creditcardRegEx.test(credit_card);
    console.log(cc_Result);
    if (cc_Result == false) {
        alert("please enter a valid credit card");
    }

    //    console.log(credit_card);
    //    if (cc_MC_Result === false && cc_VC_Result === false) {
    //        alert("Invalid Credit Card:");
    //    } else {
    //          alert("Valid Credit Card");
    //    }

}
//script to clear form


function clearForm() {
    document.getElementById("booking_form").reset();
}