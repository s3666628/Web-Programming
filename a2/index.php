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
            <h1 id="top">The Lunardo Cinema<img src="lunardo_logo.png" alt="lunardo logo" height="100" width="100"> </h1>
            <h3>The true cinema experience</h3>
        </div>
    </header>

    <nav>
        <div>
            <a href="#about">About Us</a> |
            <a href="#seats">Seats and Prices</a> |
            <a href="#showing">Now Showing</a> |
            <a href="#booking">Booking</a> |
        </div>
    </nav>

    <main>
        <article id='about'>
            <h2>About Us</h2>
            <p>The Lunardo Cinema was first opened in August 1922, when it was called 'The Portland' and was popular with locals and out-of-towners who would travel from far and wide to experience the magic of the motion picture in one of the finest examples of art deco architecture. At the time of its opening it was one of the only cinemas in Victoria able to show movies in <a href='https://en.wikipedia.org/wiki/70_mm_film' target="_blank">70 mm</a> - a higher resolution film gauge than standard 35mm film. Since that time, we have been a firm favourite with movie-buffs and cinema goers looking to see the magic of movies presented as the film makers intended.
                <figure>
                    <!-- Image of portland cinema sourced from https://www.freeimages.com/ all pictures are royalty free-->
                    <img src="old-portland-cinema.jpg" alt="The Lunardo Cinema" />
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
            <p>We now offer two types of seating, Standard and First-Class, both offer much improved levels of comformt and relaxation.
                <h4>First-Class Seat Features</h4>
                <ul>
                    <li>luxurious aesthetic</li>
                    <li>fully reclining seat</li>
                    <li>two individual motors</li>
                    <li>central processor</li>
                    <li>footrest sensor option</li>
                    <li>easy lift system</li>
                    <li>underseat lighting</li>
                    <li>auto-return footrest option</li>
                </ul>
                <figure>
                    <img src="first-class_Verona-Twin.png" alt="First Class Seat" />
                    <br />
                    <figcaption>The new first-class seat with motorised recline</figcaption>
                </figure>

                <h4>Standard Class Seat Features</h4>
                <ul>
                    <li>Leather headrest for extended durability</li>
                    <li>Multi-angled positioned backrest</li>
                    <li>No finger traps</li>
                </ul>
                <figure>
                    <img src="standard-seat.jpg" alt="Standard Seat" />
                    <br />
                    <figcaption>The new standard seat</figcaption>
                </figure>
            </p>The Cinema offers discounted pricing weekday afternoons (ie weekday matinée sessions) and all day on Mondays and Wednesdays.

            </table>

            <table>
                <tr>
                    <th>Seat Type</th>
                    <th>Seat Code</th>
                    <th>All day Monday and Wednesday AND 12pm on Weekday</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <th>Standard Adult</th>
                    <th>Standard Concession</th>
                    <th>Standard Child</th>
                    <th>First Class Adult</th>
                    <th>First Class Concession</th>
                    <th>First Class Child</th>

                </tr>
                <tr>
                    <td>STA</td>
                    <td>STP</td>
                    <td>SRC</td>
                    <td>FCA</td>
                    <td>FCP</td>
                    <td>FCC</td>
                </tr>
                <tr>
                    <td>14.00</td>
                    <td>12.50</td>
                    <td>11.00</td>
                    <td>24.00</td>
                    <td>22.50</td>
                    <td>21.00</td>
                </tr>
                <tr>
                    <td>19.80</td>
                    <td>17.50</td>
                    <td>15.30</td>
                    <td>30.00</td>
                    <td>27.00</td>
                    <td>24.00</td>
                </tr>

            </table>
            <p>

            </p>

        </article>
        <article id='showing'>
            <h2>Now Showing</h2>

        </article>
        <article id='booking'>
            <h2>Booking</h2>

        </article>


    </main>

    <footer>
        <div>&copy;<script>
                document.write(new Date().getFullYear());
            </script> Philip Beeby (s3666628), Last modified: 22/12/2018
            <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>