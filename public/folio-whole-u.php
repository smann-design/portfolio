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
            <section class="proj-sectionhead">
                <h2>Whole U</h2>
            </section>

            <section class="whole-u-logo">
                <img src="img/whole-u-branding.png" alt="">
            </section>


        <!--PROJ CONTEXT ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Project Context</h2>
            </section>

            <section class="proj-context-text">
                    <p>For my graduate studies capstone project (Minneapolis College of Art and Design, 2019) I set out to cultivate empathy in kids, specifically older grade school to younger middle school aged kids.</p>
                    <p>My focus was on developing insight and self-awareness through game-like interaction via an app that's tailored to discovering the broad range of human emotions. My theory is that in order for kids to be capable of having empathy for others, they must first be able to recognize, identify, understand, and welcome their own emotions.</p>
                    <p>This project leans into storytelling, character design, game design, annimation and illustration.</p>
            </section>


        <!--VISUAL LANDSCAPE ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Visual Landscape</h2>
            </section>

            <section class="whole-u-visualstyles">
                <img src="img/whole-u-visualstyles.png" alt="">
            </section>

            <section class="proj-context-text">
                    <p>My research into the gammut of media that middle school children are interested in reflects my perception of children of this age managing a significant undercurrent of change.</p>
                    <p>The landscape of visual imagery that appeals to them spans the upper end of simple and childish to the lower end of daring and sophisticated, harkening to them holding on to their innocene in one hand while reaching for maturity with the other.</p>
                    <p>The execution of artwork for my app will lean in the direction of the simpler and more childish inspired by some of my first hand observations of my step children in which it was clear that they would, at times, momentarily regress in their behavioral maturity. Not in terms of being "naugty", but in terms of how they'd entertain themselves. It was clear that they were retreating to things that offered them emotional or social comfort, or possibly a break from continuous expectations.</p>
                    <p>It's my hope that these learning modules might offer a small respite or comfort from the increasing and growing expectations of preteens.</p>
            </section>


        <!--CHARACTER DESIGN----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Character Design Sketches</h2>
            </section>

            <section class="whole-u-char-sketches">
                <img src="img/whole-u-char-art.png" alt="">
            </section>


        <!--STORYBOARDS----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Storyboards</h2>
            </section>

            <section class="whole-u-storyboard">
                <img src="img/whole-u-storyboard.png" alt="">
            </section>


        <!--DEMO----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Prototype Annimation</h2>
            </section>

            <div style="
                padding:75% 0 0 0;
                /* padding-top: 56.25% This is where the magic is. In CSS, the padding-top property can receive a percentage, this is what keeps our iframe to the right ratio. By using percentage, it will calculate the padding to use based on the width of the element. In our example, we want to keep the ratio of 56.26% (height 9 ÷ width 16) because this is the default ratio for YouTube videos. However, other ratios can be used as well. https://blog.theodo.com/2018/01/responsive-iframes-css-trick/  */
                position:relative;
                margin-bottom: 100px;">

                <iframe src="https://player.vimeo.com/video/396764391?title=0&byline=0&portrait=0"
                style="
                position:absolute;
                top:0;
                left:50%;
                transform: translateX(-50%);
                width:90%;
                height:90%;"
                frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                </iframe>

                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>


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
