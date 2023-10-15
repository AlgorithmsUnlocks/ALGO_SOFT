<?php include('assets/includes/header.php') ?>


    <!--Index Page-->

    <!--Hero Data Fetch From Header Table-->

<?php
global $connection;
$query = 'SELECT * FROM `heroData`';
$fetch_data = mysqli_query($connection, $query);
confirmQuery($fetch_data);
$data_count = mysqli_num_rows($fetch_data);
/*
 * Data Shows from the Database.
 */
if ($data_count > 0) {
    while ($row = mysqli_fetch_assoc($fetch_data)) {
        $title = $row['title'];
        $span1 = $row['span1'];
        $span2 = $row['span2'];
        $paragraph = $row['paragraph'];
        $buttonText = $row['buttonText'];
        $buttonLink = $row['buttonLink'];
        $scrollText = $row['scrollText'];
    }
    ?>
    <!-- Hero Introduction for Dev -->
    <section id='' class='dev-intro'>
        <div class='container'>
            <div class='dev-container'>

                <div class='dev-wrapper'>

                    <div class='dev-card'>
                        <h1> <?php echo $title ?>, <span> <?php echo $span1 ?> </span> and <span> <?php echo $span2
                                ?></span></h1>
                        <p>
                            <?php echo $paragraph ?>
                        </p>
                        <div class="dev-button-div">
                            <a href="my-works.php" class="dev-button">
                                <?php echo $buttonText ?> </a>
                        </div>
                    </div>
                    <div class="dev-card">
                        <span class="scroll-span"> <?php echo $scrollText ?> </span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php
} else { ?>
    <section id='' class='dev-intro'>
        <?php echo 'No Data found in the ' . $query . ' table'; ?>
    </section>
<?php }

?>

    <!-- Dev Expertise  -->
    <section class="dev-expertise">
        <div class="container">
            <div class="expertise-container">

                <div class="expertise-wrapper">

                    <div class="expertise-card">
                        <img src="assets/img/expertise.png" class="img-fluid"/>
                    </div>
                    <div class="expertise-card">
                        <h1> Expertise </h1>
                        <!-- Expertise List Data Fetch via PHP MySQL -->

                        <ul>
                            <?php
                            $query = 'SELECT * FROM `expertise_list`';
                            $fetch_data = mysqli_query($connection, $query);
                            confirmQuery($fetch_data);
                            $data_count = mysqli_num_rows($fetch_data);

                            if ($data_count > 0) {
                                while ($row = mysqli_fetch_assoc($fetch_data)) {
                                    $name = $row['name']; ?>
                                    <li><i class='fa-brands fa-css3-alt'></i> <span> <?php echo $name; ?> </span></li>
                                <?php }
                                echo "<li> <i class=\"fa-solid fa-plus\"></i> <span> More+ </span> </li>";
                            } else {
                                echo '<li> No Data Found! </li>';
                            }
                            ?>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Dev Life events -->
    <section class="life-events">
        <div class="container">
            <div class="life-events-container">

                <div class="life-events-wrapper">

                    <div class="life-events-card">
                        <h1> Life <span> Journey </span></h1>
                        <p>
                            My diverse experiences from the start of my career until now
                            define who I am today—a seasoned professional eager for new challenges and success.
                        </p>
                        <div class="dev-button-div">
                            <a href="https://php-learning-app.000webhostapp.com" target="_blank" class="dev-button">
                                see all events </a>
                        </div>

                    </div>
                    <div class="life-events-card">
                        <ul class="life-events">
                            <li>
                                <div class="time-range">
                                    <p> Mar. 2023 - Pre. 2023 </p>
                                </div>
                                <div class="events-line">

                                </div>
                                <div class="events-content">
                                    <h4> Technical Support Engineer</h4>
                                    <p> at <a href="https://wpmanageninja.com/" target="_blank"> WPManageNinja </a></p>
                                </div>
                            </li>

                            <li>
                                <div class="time-range">
                                    <p> Feb. 2023 - Mar. 2023</p>
                                </div>
                                <div class="events-line">

                                </div>
                                <div class="events-content">
                                    <h4> Software Developer </h4>
                                    <p>at <a href="https://neways3.com/" target="_blank"> Neways International
                                            Company </a></p>
                                </div>
                            </li>

                            <li>
                                <div class="time-range">
                                    <p> Jan. 2023 - Feb. 2023</p>
                                </div>
                                <div class="events-line">

                                </div>
                                <div class="events-content">
                                    <h4> Web Development Trainer </h4>
                                    <p> at <a href="https://sanabilacademy.org/" target="_blank">Sanabil Academy </a>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="time-range">
                                    <p> Nov. 2020 - Dec. 2022</p>
                                </div>
                                <div class="events-line">

                                </div>
                                <div class="events-content">
                                    <h4> Senior WordPress Developer </h4>
                                    <p> at <a href="https://russkinbright.com/" target="_blank"> Russkin Bright</a></p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <!-- Dev Latest Works -->
    <section class="dev-lt-works">
        <div class="container">
            <div class="dev-lt-works-container">

                <div class="dev-lt-works-wrapper">

                    <div class="dev-lt-works-card">
                        <p class="hi-light">latest work </p>
                        <h1> PHP <span> Learning APP. </span></h1>
                        <ul>
                            <li>website design</li>
                            <li>webflow development</li>
                            <li>concept</li>
                        </ul>
                        <p>
                            This is a homepage design and build for a concept project –
                            a chat application. I have designed the page first then later
                            built a responsive page in Webflow.
                        </p>
                        <div class="dev-button-div">
                            <a href="https://php-learning-app.000webhostapp.com" target="_blank" class="dev-button">
                                see
                                live
                                mode </a>
                        </div>

                    </div>
                    <div class="dev-lt-works-card">
                        <img src="assets/img/php-learning.png" alt="" srcset="">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="dev-lt-works">
        <div class="container">
            <div class="dev-lt-works-container">

                <div class="dev-lt-works-wrapper">

                    <div class="dev-lt-works-card">
                        <p class="hi-light">latest work </p>
                        <h1> Complete Blog <span> Application </span></h1>
                        <ul>
                            <li>website design</li>
                            <li>webflow development</li>
                            <li>concept</li>
                        </ul>
                        <p>
                            This is a homepage design and build for a concept project –
                            a chat application. I have designed the page first then later
                            built a responsive page in Webflow.
                        </p>
                        <div class="dev-button-div">
                            <a href="https://thinking-season.000webhostapp.com" target="_blank" class="dev-button">
                                see
                                live
                                mode </a>
                        </div>

                    </div>
                    <div class="dev-lt-works-card">
                        <img src="assets/img/php-blog.png" alt="" srcset="">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Dev More Projects -->
    <section class="dev-more-project">
        <div class="container">
            <div class="more-project-wrapper">
                <div class="more-project-card">
                    <a href="my-work.html" target="_blank" class="dev-button"> See More Projects </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dev Workflows Part -->
    <section id="workflows-dev" class="workflows-dev">
        <div class="container">
            <div class="workflows-container">

                <div class="workflows-wrapper">
                    <div class="workflows-card">
                        <h1> What <span> I do </span></h1>
                    </div>
                    <div class="workflows-card">
                        <h4> Design </h4>
                        <p>
                            I design beautiful and powerful websites for modern businesses.
                            Any business today needs a website that wins customers’
                            trust and helps you do your business well.
                            I make sure your website is up to that standard.
                        </p>
                        <hr>
                        <h4> Development </h4>
                        <p>
                            I build websites in Webflow where I can create responsive,
                            powerful and fully custom websites. Plus,
                            Webflow has an incredibly simple Content Editor for
                            you and your team to edit website content quickly and easily.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Dev Information -->
    <section class="dev-info">
        <div class="container">
            <div class="dev-info-container">
                <div class="dev-info-text text-center">
                    <h1>Get In <span> Touch </span></h1>
                    <p>
                        Problems trying to resolve the conflict between
                        the two major realms of Classical physics: Ruman Ahmed
                    </p>
                </div>
                <div class="dev-info-wrapper">

                    <div class="dev-info-card">
                        <div class="info-icon">
                            <img src="assets/img/phone.png"/>
                        </div>
                        <div class="info-contents">
                            <p> +880-1962641044 </p>
                        </div>
                        <div class="info-button">
                            <h5> Get Support </h5>
                            <button class=""> Submit Request</button>
                        </div>
                    </div>

                    <div class="dev-info-card">
                        <div class="info-icon">
                            <img src="assets/img/loca.png"/>
                        </div>
                        <div class="info-contents">
                            <p> Sylhet, Bangladesh </p>
                        </div>
                        <div class="info-button">
                            <h5> Get Support </h5>
                            <button class=""> Submit Request</button>
                        </div>
                    </div>

                    <div class="dev-info-card">
                        <div class="info-icon">
                            <img src="assets/img/email.png"/>
                        </div>
                        <div class="info-contents">
                            <p> dev.ruman@proton.me </p>
                        </div>
                        <div class="info-button">
                            <h5> Get Support </h5>
                            <button class=""> Submit Request</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include('assets/includes/footer.php') ?>