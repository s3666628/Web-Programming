<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
</head>

<body>

    <header>
        <div>
            <h1 id="top">The Lunardo Cinema<img src="lunardo_logo2.png" alt="lunardo logo" height="100" width="100"> </h1>
            <h2 id="tagline">The real cinema experience, since 1922</h2>
        </div>
    </header>


    <div id="nav">
        <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#seats">Seats and Prices</a></li>
            <li><a href="#showing">Now Showing</a></li>
            <li><a href="#booking">Booking</a></li>
        </ul>
    </div>


    <main>
        <article id='about'>
            <h2>About Us</h2>
            <p>The Lunardo Cinema was first opened in August 1922, when it was called 'The Portland' and was popular with locals and out-of-towners who would travel from far and wide to experience the magic of the motion picture in one of the finest examples of art deco architecture. At the time of its opening it was one of the only cinemas in Victoria able to show movies in <a href='https://en.wikipedia.org/wiki/70_mm_film' target="_blank">70 mm</a> - a higher resolution film gauge than standard 35mm film. Since that time, we have been a firm favourite with movie-buffs and cinema goers looking to see the magic of movies presented as the film makers intended.
                <figure>
                    <!-- Image of portland cinema sourced from https://www.freeimages.com/ all pictures are royalty free-->
                    <img src="old-portland-cinema.jpg" width="350" height="350" alt="The Lunardo Cinema" />
                    <br />
                    <figcaption>The Lunardo Cinema</figcaption>
                </figure>
            </p>

            <p>To ensure we are able to maintain our tradition of presenting films in their best possible light we have recently invested millions of dollars upgrading our projection and sound systems to the lastest <a href='http://www.dolby.com/us/en/platforms/dolby-cinema.html' target="_blank">Dolby Cinema</a> standards. With Dolby Vision projection and Dolby Atmos sound you will see and hear a movie like never before, setting a new standard in cinema immersion.
            </p>
            <p>For your viewing comfort we have also refurbished all our seating - we are now proud to offer new levels of upgraded seating in both standard and first-class seating. With our first-class seating we are taking luxury to new heights with our 160-degree motorised reclining leather seats.</p>

            <p>Whether you are local to our town or travelling from further afield you will find visiting the Lunardo is an experience you cannot get at your general multiplex cinema. Please come and experience the true magic of the movies - at The Lunardo Cinema.</p>
            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
            <!--commented out this 'under contstruction image          
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />-->
        </article>

        <article id='seats'>
            <h2>Seats and Prices</h2>
            <p>
                We now offer two types of seating, Standard and First-Class, both offer much improved levels of comformt and relaxation. </p>
            <h4>First-Class Seat Features</h4>
            <ul class="seat_list">
                <li>Luxurious aesthetic</li>
                <li>Fully reclining seat</li>
                <li>Two individual motors</li>
                <li>Central processor</li>
                <li>Footrest sensor option</li>
                <li>Easy lift system</li>
                <li>Underseat lighting</li>
                <li>Auto-return footrest option</li>
            </ul>
            <figure>
                <img src="first-class_Verona-Twin.png" width="350" height="350" alt="First Class Seat" />
                <br />
                <figcaption>The new first-class seat with motorised recline</figcaption>
            </figure>

            <h4>Standard Class Seat Features</h4>
            <ul class="seat_list">
                <li>Leather headrest for extended durability</li>
                <li>Multi-angled positioned backrest</li>
                <li>No finger traps</li>
            </ul>
            <figure>
                <img src="standard-seat.jpg" width="450" height="350" alt="Standard Seat" />
                <br />
                <figcaption>The new standard seat</figcaption>
            </figure>

            <p>The Cinema offers discounted pricing weekday afternoons (ie weekday matinée sessions) and all day on Mondays and Wednesdays. </p>




            <table>
                <tr>
                    <th>Seat Type</th>
                    <th>Seat Code</th>
                    <th>All day Monday and Wednesday AND 12pm on Weekday</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <th>Standard Adult</th>
                    <td>STA</td>
                    <td>14.00</td>
                    <td>19.80</td>

                </tr>
                <tr>
                    <th>Standard Concession</th>
                    <td>STP</td>
                    <td>12.50</td>
                    <td>17.50</td>

                </tr>
                <tr>
                    <th>Standard Child</th>
                    <td>STC</td>
                    <td>11.00</td>
                    <td>15.30</td>

                </tr>
                <tr>
                    <th>First Class Adult</th>
                    <td>FCA</td>
                    <td>24.00</td>
                    <td>30.00</td>

                </tr>
                <tr>
                    <th>First Class Concession</th>
                    <td>FCP</td>
                    <td>22.50</td>
                    <td>27.00</td>

                </tr>
                <tr>
                    <th>First Class Child</th>
                    <td>FCC</td>
                    <td>21.00</td>
                    <td>24.00</td>

                </tr>
            </table>



        </article>
        <article id='showing'>
            <h2>Now Showing</h2>

            <!--            this code was sourced from W3 Schools
https://www.w3schools.com/CSS/tryit.asp?filename=trycss_website_layout_grid
-->

            <div class="row">
                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img src="The_Girl_in_the_Spider's_Web_poster.png" width="330" height="489" alt="The_Girl_in_the_Spider" />

                    <table>
                        <tr>
                            <th>The Girl in the Spider's Web (G)</th>

                        </tr>
                        <tr>
                            <td>Wednesday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Thurday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 6 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img src="A_Star_is_Born.png" width="330" height="489" alt="A_Star_is_Born.png" />

                    <table>
                        <tr>
                            <th>A Star is Born (MA)</th>

                        </tr>
                        <tr>
                            <td>Monday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday - 6 PM</td>
                        </tr>

                        <tr>
                            <td>Saturday - 3 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 3 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img src="Ralph_Breaks_the_Internet_(2018_film_poster).png" width="330" height="489" alt="Ralph_Breaks_the_Internet" />

                    <table>
                        <tr>
                            <th>Ralph Breaks the Internet (PG)</th>

                        </tr>
                        <tr>
                            <td>Monday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 12 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img src="Boy_Erased_(2018_poster).png" width="330" height="489" alt="Boy_Erased" />

                    <table>
                        <tr>
                            <th>Boy Erased (PG)</th>

                        </tr>
                        <tr>
                            <td>Wednesday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Thurday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 9 PM</td>
                        </tr>

                    </table>


                </div>
            </div>

            <h3>The Girl in the Spider's Web (G)</h3>
            <div class="flex-container">

                <div>
                    <p>Young computer hacker Lisbeth Salander and journalist Mikael Blomkvist find themselves caught in a web of spies, cybercriminals and corrupt government officials.</p>
                </div>

                <div id="trailer">

                    <!-- the iframe information was taken from YouTube -->

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                </div>

            </div>
            <h3>Make a Booking:</h3>
            <button type="button" class="button" value="Input Button">Wed : 9PM</button>
            <button type="button" class="button" value="Input Button">Thu : 9PM</button>
            <button type="button" class="button" value="Input Button">Fri : 9PM</button>
            <button type="button" class="button" value="Input Button">Sat : 6PM</button>
            <button type="button" class="button" value="Input Button">Sun : 6PM</button>


        </article>
        <article id='booking'>
            <h2>Booking</h2>
            <h3>The Girl in the Spider's Web (G) - Saturday 6 PM</h3>

            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">
                <div>
                    <fieldset>
                        <legend>Standard</legend>
                        <label for="adults">Adults</label>
                        <select name="Adults">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br />
                        <label for="concession">Concession</label>
                        <select name="Concession">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br />
                        <label for="children">Children</label>
                        <select name="Children">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    <br />
                    <fieldset>
                        <legend>First Class</legend>
                        <label for="adults">Adults</label>
                        <select name="Adults">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br />
                        <label for="concession">Concession</label>
                        <select name="Concession">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br />
                        <label for="children">Children</label>
                        <select name="Children">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    <br />
                    <label for="total">Total $</label>
                    <input type="text" name="total" maxlength="7" />

                    <label for="name">Name</label>
                    <input type="text" name="name" maxlength="20" />

                    <label for="email">Email</label>
                    <input type="text" name="email" maxlength="20" />

                    <label for="mobile">mobile</label>
                    <input type="text" name="mobile" maxlength="20" />

                    <label for="credit">Credit Card</label>
                    <input type="text" name="credit" maxlength="20" />

                    <label for="depart">Expiry Date</label>
                    <input type="date" name="expiry"/>
                    
                    <button type="submit" class="button" value="Submit">Submit</button>



                </div>

            </form>



        </article>


    </main>

    <footer>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> Philip Beeby (s3666628), Last modified: 05/01/2019
            <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
