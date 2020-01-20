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
                            <li><a>HTML Profile</a></li>
                            <li><a>Calendar</a></li>
                            <li><a>2 Screens</a></li>
                            <li><a>Coding from Life</a></li>
                            <li><a>Print.css</a></li>
                            <li><a>Wayback Machine</a></li>
                            <li><a>Mural</a></li>
                            <li><a>Gardener</a></li>
                        </ol>

                        <p><em>Please refer to the <a>calendar</a> for assignment due dates.</em></p>
                    </section>

                    <section>
                        <h2>Assignment 1: HTML Profile</h2>
    
                        <p><em>HTML, CSS, writing on the web</em></p>

                        <p>Customize the HTML profile that we cloned from <a href="">this repo</a href="">. You should only change + add to the content of your profile. Don't alter the design or it! We want to keep the profiles consistent to create our own class social network. Browse all <a href="">our profiles here</a> and find a piece of writing that interests you. Create a new comment entry on your profile referencing your fellow students writing. Keep the writing positive and add a link back to their profile.</p>

                        <p>Use the blockquote element to reference the person's writing...</p>
                        
                        <code>&lt;blockquote&gt;Fellow students writing...&lt;/blockquote&gt;</code>
                    </section>

                    <section>
                        <h2>Assignment 2: Calendar</h2>
    
                        <p><em>CSS, grid layout, time-based website</em></p>
        
                        <p>Create a calendar using CSS grid. Play around with different grid layouts to make it flexible to the browsers width. Style your calendar and add at least three past events to it as subpages. These subpages should link back to the calendar. It's up to you what lives on these pages. You can post writing, images, video, or sound. You could also try to use it as a social media replacement. Your calendar will grow over the course of the semester as you learn more coding!</p>

                        <h3>A successful calendar should answer these questions...</h3>

                        <ul>
                            <li>How will users know an event falls on a particular day? Convey this through basic HTML or CSS pseudo-elements like ::before or ::after. Experiment with CSS shapes. Please don't use images as icons.</li>
                            <li>The calendar should use Grid and only scroll in the Y axis. How can you structure your grid layout using repeat and minmax so that it works seamlessly on desktop and mobile?</li>
                        </ul>
        
                        <p>By the end of the course your calendar should have at least 30 subpages.</p>
        
                        <h3>Resources</h3>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=tFKrK4eAiUQ">Easy Layouts with CSS Grid by Jen Simmons</a><br />
                        </p>

                        <code>grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))</code>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=2zxWEeBkjk0">Auto-fit vs auto-fill by Rachel Andrew</a><br />
                        </p>

                        <code>grid-template-columns: repeat(auto-fill, minmax(50px, 1fr))</code>
                        <code>grid-template-columns: repeat(auto-fit, minmax(50px, 1fr))</code>

                        <h3>Credit</h3>
        
                        <p>This assignment was inspired by <a href="http://everythingthathappened.today/">everythingthathappened.today</a> by Anna Marl.</p>
                    </section>

                    <section>
                        <h2>Assignment 3: 2 Screens</h2>

                        <p><em>HTML, CSS Media Queries</em></p>

                        <p>Create a website that displays different content on desktop/mobile. The user should have to browse your site on both devices at the same time to fully experience it.</p>

                        <p>An example of this would be a website that displays images on mobile and text on desktop. Feel free to use this as a starting point but you are expected to go beyond this.</p>

                        <h3>Resources</h3>

<pre>@media (max-width: 535px) {
    // Mobile only styles here
}</pre>
                    </section>

                    <section>
                        <h2>Coding from Life</h2>

                        <p><em>HTML, CSS, drawing</em></p>

                    </section>
            </main>
        </div>

        <script src="./js/text.js" type="text/javascript"></script>
    </body>
</html>