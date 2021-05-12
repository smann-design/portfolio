<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Stacy Mann Design</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/favicon-gray.ico">
        <link rel="stylesheet" href="https://use.typekit.net/biz3tjl.css">
        <link rel="stylesheet" href="css/css.css">
    </head>

    <body>

    <!--HEADER INCLUDE  ------------------------------------------------------>
        <header>
            <?php include ("includes/nav-header.php");?>
        </header>

    <!--BEGIN MAIN SECTION  ------------------------------------------------------>
        <main>

        <!--BANNER IMG ----------------------------------------------------------->


            <!-- The following code sourced by google searching "responsive vimeo embeds". I customized for margins and centering. https://vimeo.zendesk.com/hc/en-us/articles/360000710167-Accessing-and-editing-embed-codes -->
            <div style="
                padding:56.25% 0 0 0;
                /* padding-top: 56.25% This is where the magic is. In CSS, the padding-top property can receive a percentage, this is what keeps our iframe to the right ratio. By using percentage, it will calculate the padding to use based on the width of the element. In our example, we want to keep the ratio of 56.26% (height 9 ÷ width 16) because this is the default ratio for YouTube videos. However, other ratios can be used as well. https://blog.theodo.com/2018/01/responsive-iframes-css-trick/  */
                position:relative;">

                <iframe src="https://player.vimeo.com/video/263678913?title=0&byline=0&portrait=0"
                style="
                position:absolute;
                top:40px;
                left:50%;
                transform: translateX(-50%);
                width:90%;
                height:90%;"
                frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                </iframe>

                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>




        <!--PROJ CONTEXT ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Project Context</h2>
            </section>

            <section class="proj-context-text">
                <p>This student assignment was to design a one minute infographic for a topic of my choosing.</p>
                <p>I had recently watched a PBS program called "The Great Ploar Bear Feast" which I found to be both startling and compelling in its telling of not only the implications of melting ice caps to the survival of the polar bear, but what the next directly-linked layer of implications are for the people of the region.</p>
                <p>In that my infographic project was limited to one minute, I chose to focus on retelling the core issue and to attempt to do so in a way that, hopefully, would deliver the kind of urgency and concern that I felt in watching the full documentary.</p>
                <p>I'm happy to say mission accomplished &ndash; my project was received by my peers and friends with quite emotional responses. Additionally, I was from that point compelled to make storytelling central to all of my design endeavors.</p>
            </section>



        <!--ANU STORYBOARD ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Storyboard</h2>
            </section>

            <section class="proj-element-80width">
                <img src="img/anu-storyboard1.png" alt="">
            </section>

            <section class="proj-element-80width">
                <img src="img/anu-storyboard2.png" alt="">
            </section>


        <!--ANU MOODBOARD ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Moodboard</h2>
            </section>

            <section class="proj-element-80width">
                <img src="img/anu-moodboard.png" alt="">
            </section>



        <!--DELIVERABLES & TOOLS ---------------------------------------->
            <section class="project-deliverables dkgray">
                <div class="project-deliverables-header">
                    <h2>"Meet Anu" Project Deliverables &amp; Tools</h2>
                </div>

                <ul>
                    <li><h4>Topic Research</h4></li>
                    <li><h4>Story Development</h4></li>
                    <li><h4>Script Writing</h4></li>
                    <li><h4>Original Illustration</h4></li>
                    <li><h4>Score Selection</h4></li>
                    <li><h4>Adobe Illustrator &amp; Adobe After Effects</h4></li>
                </ul>
            </section>



        <!--PORTFOLIO LINKS  --------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Portfolio</h2>
            </section>

            <section class="folio-links-include">
                <?php include ("includes/folio-links.php"); ?>
            </section>



    <!--END OF MAIN SECTION  --------------------------------------------------->
        </main>


    <!--FOOTER INCLUDE  ---------------------------------------------------->
        <footer>
            <?php include ("includes/nav-footer.php");?>
        </footer>

    </body>

</html>
