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
                <h2>"The Wizard of Oz" Title Sequence</h2>
            </section>

            <!-- The following code sourced by google searching "responsive vimeo embeds". I customized for margins and centering. https://vimeo.zendesk.com/hc/en-us/articles/360000710167-Accessing-and-editing-embed-codes -->
            <div style="
                padding:56.25% 0 0 0;
                /* padding-top: 56.25% This is where the magic is. In CSS, the padding-top property can receive a percentage, this is what keeps our iframe to the right ratio. By using percentage, it will calculate the padding to use based on the width of the element. In our example, we want to keep the ratio of 56.26% (height 9 ÷ width 16) because this is the default ratio for YouTube videos. However, other ratios can be used as well. https://blog.theodo.com/2018/01/responsive-iframes-css-trick/  */
                position:relative;">

                <iframe src="https://player.vimeo.com/video/267168761?title=0&byline=0&portrait=0"
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




        <!--PROJ CONTEXT ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Project Context</h2>
            </section>

            <section class="proj-context-text">
                <p>This student assignment was to design a one minute film title sequence of my choosing. In it, I aimed to create a title sequence for The Wizard of Oz as if the film were to be remade today.</p>
                <p>I developed visual cues to key elements of the story with the intention of portraying a celebratory and contemporary allusion to something so classic. It was my first attempt at animating the flight of a bird, but not my last! This exploration hooked me deeply on continuing to study and create the intricacies of human, animal, and character animation.</p>
            </section>


        <!--OZ STORYBOARD ----------------------------------------------------------->
            <section class="proj-sectionhead">
                <h2>Storyboard</h2>
            </section>

            <section class="proj-element-80width">
                <img src="img/wizard-oz-storyboard.jpg" alt="">
            </section>


        <!--DELIVERABLES & TOOLS ---------------------------------------->
            <section class="project-deliverables dkgray">
                <div class="project-deliverables-header">
                    <h2>"Wizard of Oz" Project Deliverables &amp; Tools</h2>
                </div>

                <ul>
                    <li><h4>Wizard of Oz Logo Design</h4></li>
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
