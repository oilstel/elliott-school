<!DOCTYPE html>
<html>
    <head>
        <title>People – Elliott School</title>
        <?php include './partials/_meta.php'; ?>
    </head>
        
    <body>
        <div id="container">
            <?php include './partials/_header.php'; ?>

            <main>
                <section class="slideshow">
                    <div class="text">
                        <span id="slideshow-text">...</span>
                    </div>
                    <div id="controls">
                        <button id="randomizer">Who's next?</button>
                    </div>
                </section>
                <section>
                    <h2>People</h2>

                    <ol id="participants">
                    </ol>
                </section>
            </main>

            <script src="./js/text.js" type="text/javascript"></script>
            <script src="./js/people.js" type="text/javascript"></script>
        </div>
    </body>
</html>