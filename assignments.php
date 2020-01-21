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

                        <p><em>Please refer to the <a href="./calendar.php">calendar</a> for assignment due dates.</em></p>
                    </section>

                    <section>
                        <h2>Assignment 1: HTML Profile</h2>
    
                        <p><em>HTML, CSS, writing on the web</em></p>

                        <p>Customize the HTML profile that we cloned from <a href="">this repo</a href="">. You should only change the content of your profile. Don't alter the design or it. We want to keep the profiles consistent to create our own static social network for the class. Browse all <a href="">our profiles here</a> and find a piece of writing that interests you. Create a new comment/entry on your profile referencing a fellow student's writing. Keep the writing positive and link back to their profile.</p>

                        <p>Use the <code>blockquote</code> HTML element to quote another profile...</p>
                        
                        <pre>&lt;blockquote&gt;Fellow student's writing...&lt;/blockquote&gt;</pre>
                    </section>

                    <section>
                        <h2>Assignment 2: Calendar</h2>
    
                        <p><em>CSS grid, time-based website, writing on the web</em></p>
        
                        <p>Create a calendar using CSS grid. Play around with different grid layouts to make it flexible to the browser's width. Style your calendar and add at least three past events as subpages. These subpages should link back to the calendar. It's up to you what lives on these pages. You can post writing, images, video, or sound. Make sure to compress your files for web. If you are ambitious, you could try to use this calendar as a social media alternative. Your calendar should grow over the course of the semester as you learn more coding.</p>

                        <h3>A successful calendar should address these questions...</h3>

                        <ul>
                            <li>How will users know that an event falls on a particular day? You could convey this through basic HTML or CSS pseudo-elements like <code>::before</code> or <code>::after</code>. Experiment with CSS shapes. Please don't use images or found icons to do this.</li>
                            <li>The calendar should use CSS grid and only scroll on the Y axis. How can you structure your grid layout using <code>repeat</code> and <code>minmax</code> so that it works seamlessly on desktop and mobile?</li>
                        </ul>
        
                        <p><span class="important">By the end of the course your calendar should have at least 30 subpages.</span></p>
        
                        <h3>Resources</h3>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=tFKrK4eAiUQ">Easy Layouts with CSS Grid by Jen Simmons</a><br />
                        </p>

                        <pre>grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))</pre>
        
                        <p>
                            <a href="https://www.youtube.com/watch?v=2zxWEeBkjk0">Auto-fit vs auto-fill by Rachel Andrew</a><br />
                        </p>

                        <pre>grid-template-columns: repeat(auto-fill, minmax(50px, 1fr))</pre>
                        <pre>grid-template-columns: repeat(auto-fit, minmax(50px, 1fr))</pre>

                        <h3>Credit</h3>
        
                        <p>This assignment was inspired by <a href="http://everythingthathappened.today/">everythingthathappened.today</a> by Anna Marl.</p>
                    </section>

                    <section>
                        <h2>Assignment 3: 2 Screens</h2>

                        <p><em>HTML, CSS Media Queries, breakpoints</em></p>

                        <p>Create a website that displays different content when viewed on desktop and mobile. The user should browse your site on both devices at the same time to fully experience it.</p>

                        <p><em>Example: a website that displays images on mobile and text on desktop. Feel free to use this as a starting point but you are expected to go beyond this example.</em></p>

                        <h3>Resources</h3>

<pre>@media (max-width: 535px) {
    // Mobile only styles here
}</pre>
                    </section>

                    <section>
                        <h2>Coding from Life</h2>

                        <!-- <p>How do websites exist in the real world? The purpose of this assignment is to get you to think about websites 

                        How can we make websites that are grounded in the real world? Web design often takes place in sterial enviorments that have little to do with everyday experiences. How can we move design on the web towards a more accesssible and relatable place?

                        One way we can achieve this is by observing the world around us. What can we learn from nature? What can we learn from built enviorments? Is a website like a building? -->

                        <p><em>HTML, CSS, drawing</em></p>

                    </section>
            </main>
        </div>

        <script src="./js/text.js" type="text/javascript"></script>
    </body>
</html>