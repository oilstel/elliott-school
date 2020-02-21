<!DOCTYPE html>
<html>
    <head>
        <title>Assignments – Elliott School</title>
        <?php include './partials/_meta.php'; ?>
    </head>
        
    <body>        
        <div id="container">

            <?php include './partials/_header.php'; ?>
            <main>
                    <section>
                        <p>This course will be made up of several assignments supported by in-class workshops.</p>

                        <ol id="assignments-list">
                            <li>✓ <a>HTML Profile</a></li>
                            <li><a>Calendar</a></li>
                            <li><a>2 Screens</a></li>
                            <li><a>Blurry Story</a></li>
                            <li><a>Print.css</a></li>
                            <!-- <li><a>Wayback Machine</a></li> -->
                            <!-- <li><a>Mural</a></li> -->
                            <li><a>Gardener</a></li>
                        </ol>

                        <p><em>Please refer to the <a href="./calendar.php">calendar</a> for assignment due dates.</em></p>
                    </section>

                    <section id="1">
                        <h2>Assignment 1: HTML Profile</h2>
    
                        <p><em>HTML, CSS, writing on the web</em></p>

                        <p>Customize the HTML profile that we cloned from <a href="https://github.com/oilstel/html-profile">this repo</a href="">. You should only change the content of your profile. Don't alter the design. We want to keep our profiles consistent to create a static social network for the class. Browse all <a href="https://paper.dropbox.com/doc/HTML-Profile-URLs--As261tdZRcBpKW2AyO0jxLXVAQ-J4aEU1RFPc6aWK4x9pYpk">our profiles here</a> and find a piece of writing that interests you. Create a new comment/entry on your profile referencing a fellow student's writing. Keep the writing positive and link back to their profile.</p>

                        <p>Also make sure your webring works if we don't finish it in class.</p>

                        <h3>Code</h3>

                        <p>Use the <code>blockquote</code> HTML element to quote a profile...</p>
                        
                        <pre>&lt;blockquote&gt;Fellow student's writing...&lt;/blockquote&gt;</pre>
                    </section>

                    <section id="2">
                        <h2>Assignment 2: Calendar</h2>
    
                        <p><em>CSS grid, time-based website, writing on the web</em></p>
        
                        <p>Create a calendar using CSS grid. Play around with different grid layouts to make it flexible to the browser's width. Style your calendar and add at least three past events as subpages. These subpages should link back to the calendar. It's up to you what lives on these pages. You can post writing, images, video, or sound. Make sure to compress your files for web. If you are ambitious, you could try to use this calendar as a social media alternative. Your calendar should grow over the course of the semester as you learn more coding.</p>

                        <h3>A successful calendar should address these questions...</h3>

                        <ul>
                            <li>How will users know that an event falls on a particular day? You could convey this through basic HTML or CSS pseudo-elements like <code>::before</code> or <code>::after</code>. Experiment with CSS shapes. Please don't use images or found icons to do this.</li>
                            <li>The calendar should be responsive and only scroll on the Y axis. How can you structure your grid layout using <code>repeat</code>, <code>minmax</code>, and @media queries so that it works seamlessly on desktop and mobile?</li>
                        </ul>
        
                        <p><span class="important">By the end of the course your calendar should have at least 20 subpages.</span></p>
        
                        <h3>Code & Resources</h3>

                        <p>
                            <a href="https://www.are.na/laurel-schwulst/websites-as-calendars">A channel</a> of example calendars we looked at in class.
                        </p>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=tFKrK4eAiUQ">Easy Layouts with CSS Grid by Jen Simmons</a>
                        </p>

                        <pre>grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))</pre>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=2zxWEeBkjk0">Auto-fit vs auto-fill by Rachel Andrew</a>
                        </p>

                        <pre>grid-template-columns: repeat(auto-fill, minmax(50px, 1fr))</pre>
                        <pre>grid-template-columns: repeat(auto-fit, minmax(50px, 1fr))</pre>

                        <h3>Credit</h3>
        
                        <p>This assignment was inspired by <a href="http://everythingthathappened.today/">everythingthathappened.today</a> by Anna Marl.</p>
                    </section>

                    <section id="3">
                        <h2>Assignment 3: 2 Screens</h2>

                        <p><em>HTML, CSS Media Queries, breakpoints</em></p>

                        <p>Create a website that displays different content when viewed on desktop and mobile. The user should browse your site on both devices at the same time to fully experience it.</p>

                        <p><em>Example: a website that displays images on mobile and text on desktop. Feel free to use this as a starting point but you are expected to go beyond this example.</em></p>

                        <p>To receive credit for this assignment place your Github repo url in <a href="https://paper.dropbox.com/doc/2-Screens--AuyGmYO8DL~83xpUPXXqquNsAQ-q2hPZin3YU2tMxjrAYf1b">this doc</a> before next class (2/28)</p>

                        <h3>Code</h3>

<pre>@media (max-width: 600px) {
    // Mobile styles here
}
@media(min-width:600px) {
    // Desktop styles here
}
</pre>
                    </section>

                    <section id="4">
                        <h2>Assignment 4: Blurry Story</h2>
    
                        <p><em>HTML, CSS, JavaScript writing on the web</em></p>

                        <p>Create a website slideshow that uses at least one <code>blur</code> filter. Convey a sense of narrative that transports the viewer. Think like a filmmaker! The slideshow should use vanilla JavaScript arrays, functions, and for loops.</p>

                        <h3>Things to note...</h3>

                        <p>CSS filters often can be CPU intensive when combined with transitions or JavaScript. How can we convey our blurry story without the experience feeling sluggish? Try to give yourself some working constraints before starting.</p>

                        <h3>Code</h3>
                                                
                        <pre>filter(blur: 20px);</pre>
                    </section>

                    <section id="5">
                        <h2>Assignment 5: Print.css</h2>
    
                        <p><em>HTML, CSS, JavaScript writing on the web</em></p>

                        <p>Create a print.css stylesheet for an existing website. Work through several iterations of your design and print them as you go. You should have at least 4 prints showing your design process to show us.</p>
                    </section>

                    <section id="6">
                        <h2>Assignment 6: Gardner</h2>
    
                        <p><em>HTML, CSS, JavaScript writing on the web</em></p>

                        <p>What does it mean to take care of a website? Many websites have secret gardeners, caretakers, or stewards. In the first part of this assignment you will reach out to a website maintainer (gardener). Someone behind the scenes that keeps the site oiled and is on site if something breaks. Website gardeners shouldn't be in the limelight. Conduct a short interview with them about their day to day tasks and how they update the website. Create a static site of your interview.</p>

                        <p>In the next part of this assignment you will create a website for a community garden in NYC. Did you know there are over 550 community gardens in NYC? Conduct a site visit to your assigned garden and document your findings. It is up to you how you approach this project but you are expected to keep/show process work. For the final presentation you will present your process work and the final website you created.</p>
                    </section>
            </main>
        </div>

        <script src="./js/text.js" type="text/javascript"></script>
    </body>
</html>