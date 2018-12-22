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
            <h3>the magic of the movies</h3>
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
            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
            <!--commented out this 'under contstruction image          
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />-->
        </article>

        <article id='seats'>
            <h2>Seats and Prices</h2>

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
