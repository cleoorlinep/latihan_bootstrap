
<?php
require_once "db.php";

$stmt = $pdo->query(
    "SELECT title, description, icon_class
     FROM expertise_items
     ORDER BY id ASC"
);

$expertiseItems = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portofolio</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="latihan_bootstrap.css">
</head>

<body>

    <!-- =====================================
                         NAVBAR
    ====================================== -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#home">
                MY PORTOFOLIO
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <!-- =====================================
                          HOME
    ====================================== -->

    <section id="home" class="home-section">
        <div class="container">

            <div class="row align-items-center min-vh-100 g-5">

                <div class="col-lg-7">

                    <p class="text-primary fw-bold mb-3">
                        HELLO, I'M
                    </p>

                    <img
                        src="images/CLEO ORLIN ELDRI P.jpeg"
                        alt="Foto Profil"
                        class="img-fluid rounded-circle profile-image shadow my-3 d-md-none">

                    <h1 class="display-5 fw-bold">
                        CLEO ORLIN ELDRI PRABOWO
                    </h1>

                    <h2 class="h3 text-secondary mb-4">
                        Analyst ICT &amp; Data Analytics
                    </h2>

                    <p class="lead text-secondary">
                        Developing expertise in ICT and Data Analytics through
                        continuous learning, technology exploration, and
                        hands-on experience across various projects.
                    </p>


                    <div class="d-flex gap-2 flex-wrap mt-4">

                        <a href="#projects" class="btn btn-primary btn-lg">
                            View Projects
                        </a>

                        <a href="#contact" class="btn btn-outline-primary btn-lg">
                            Contact Me
                        </a>

                    </div>

                </div>

                <div class="col-lg-5 text-center d-none d-md-block">

                    <img
                        src="images/CLEO ORLIN ELDRI P.jpeg"
                        alt="Foto Profil"
                        class="img-fluid rounded-circle profile-image shadow">

                </div>

            </div>
        </div>
    </section>


    <!-- =====================================
                          ABOUT
    ====================================== -->

    <section id="about" class="about-section py-5">
        <div class="container py-5">

            <div class="text-center mb-5">

                <span class="badge text-bg-secondary mb-3">
                    Tentang Saya
                </span>

                <h2 class="display-5 fw-bold">
                    About Me
                </h2>

                <p class="text-secondary">
                    Discover more about my background and professional areas of interest.
                </p>

            </div>


            <div class="row align-items-center g-5">

                <!-- DESKRIPSI DAN STATISTIK -->

                <div class="col-lg-6">

                    <h3 class="fw-bold mb-3">
                        Analytical, Objective, and
                        <br>Solution-Oriented
                    </h3>

                    <p class="text-secondary">
                        Strong interest in information technology and data analytics,
                        with a focus on transforming data and information into relevant
                        and actionable insights.
                    </p>

                    <p class="text-secondary">
                        Continuously strengthening expertise through ongoing learning,
                        technology exploration, and the practical application of knowledge
                        across diverse projects.
                    </p>

                    <div class="row g-3 mt-4">

                        <div class="col-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <h3 class="fw-bold text-primary">5+</h3>
                                    <p class="mb-0 text-secondary">Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <h3 class="fw-bold text-primary">2+</h3>
                                    <p class="mb-0 text-secondary">Years Learning</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <!-- FEATURE ABOUT -->

                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">

                                    <i class="bi bi-bar-chart-fill display-3 text-primary"></i>

                                    <h5 class="fw-bold mt-3">Data-Driven</h5>

                                    <p class="text-secondary mb-0">
                                        Analyzing data to identify relevant patterns
                                        and generate meaningful insights.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">

                                    <i class="bi bi-graph-up-arrow display-3 text-primary"></i>

                                    <h5 class="fw-bold mt-3">Analytical Thinking</h5>

                                    <p class="text-secondary mb-0">
                                        Evaluating information systematically
                                        to develop clear and informed insights.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">

                                    <i class="bi bi-lightbulb-fill display-3 text-warning"></i>

                                    <h5 class="fw-bold mt-3">Problem Solving</h5>

                                    <p class="text-secondary mb-0">
                                        Developing practical solutions through
                                        structured analysis and critical thinking.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-4">

                                    <i class="bi bi-cpu-fill display-3 text-success"></i>

                                    <h5 class="fw-bold mt-3">Technology Insight</h5>

                                    <p class="text-secondary mb-0">
                                        Understanding technology to support
                                        effective information and business needs.
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <!-- GRAFIK CHART.JS -->

            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-10 col-lg-8">

                    <div class="card shadow-sm p-3">

                        <h3 class="h5 text-center mb-2">
                            Expertise Overview
                        </h3>

                        <p class="text-muted text-center small">
                            Chart statis untuk visualisasi kompetensi.
                        </p>

                        <div class="chart-wrapper">
                            <canvas id="expertiseChart"></canvas>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- =====================================
                          SKILLS
    ====================================== -->

    
<section id="skills" class="skills-section py-5">
    <div class="container py-5">

        <div class="text-center mb-5">

            <span class="badge text-bg-warning mb-3">Keahlian</span>

            <h2 class="display-5 fw-bold">Expertise</h2>

            <p class="text-secondary">
                Key areas of expertise in ICT, data analytics, and technology.
            </p>

        </div>

        <div class="row g-4">

            <?php
            $icons = [
                ['icon' => 'bi bi-bar-chart-fill', 'color' => 'text-primary'],
                ['icon' => 'bi bi-pie-chart-fill', 'color' => 'text-success'],
                ['icon' => 'bi bi-cpu-fill', 'color' => 'text-warning'],
                ['icon' => 'bi bi-lightbulb-fill', 'color' => 'text-danger']
            ];
            ?>

            <?php foreach ($expertiseItems as $index => $item): ?>
                <?php $style = $icons[$index % count($icons)]; ?>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">

                            <i class="<?= $style['icon'] ?> display-3 <?= $style['color'] ?>"></i>

                            <h4 class="fw-bold mt-3">
                                <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>
                            </h4>

                            <p class="text-secondary">
                                <?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>



    <!-- =====================================
                         PROJECTS
    ====================================== -->

    <section id="projects" class="projects-section py-5">
        <div class="container py-5">

            <div class="text-center mb-5">
                <span class="badge text-bg-primary mb-3">MY WORK</span>
                <h2 class="display-5 fw-bold">Projects</h2>

                <p class="text-secondary">
                    A selection of projects focused on monitoring,
                    analytics, and smart technology solutions.
                </p>
            </div>


            <!-- CAROUSEL PROJECTS -->

            <div class="projects-carousel-shell">

                <!-- PANAH KIRI: TERSEMBUNYI SAAT PROJECT 1 -->

                <button
                    type="button"
                    class="project-prev-btn"
                    id="prevProject"
                    aria-label="Project sebelumnya"
                    title="Project sebelumnya"
                    hidden
                    disabled>

                    <i class="bi bi-chevron-left"></i>
                </button>


                <!-- AREA PROJECT -->

                <div class="projects-viewport">

                    <div class="projects-track" id="projectsTrack">


                        <!-- PROJECT 1 -->

                        <div class="project-slide">
                            <div class="card border-0 shadow-sm h-100">

                                <img
                                    src="images/Track meter.jpeg"
                                    class="card-img-top project-image"
                                    alt="Track Meter">

                                <div class="card-body p-4">

                                    <span class="badge text-bg-primary mb-2">
                                        Digital Monitoring
                                    </span>

                                    <h4 class="card-title fw-bold">
                                        Track Meter
                                    </h4>

                                    <p class="card-text text-secondary">
                                        A digital monitoring system designed to track
                                        and display measurement data efficiently.
                                    </p>

                                    <button
                                        type="button"
                                        class="btn btn-outline-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#trackMeterModal">
                                        View Details
                                    </button>

                                </div>
                            </div>
                        </div>


                        <!-- PROJECT 2 -->

                        <div class="project-slide">
                            <div class="card border-0 shadow-sm h-100">

                                <img
                                    src="images/air quality monitoring.jpg"
                                    class="card-img-top project-image"
                                    alt="Air Quality Monitor">

                                <div class="card-body p-4">

                                    <span class="badge text-bg-success mb-2">
                                        Environmental Monitoring
                                    </span>

                                    <h4 class="card-title fw-bold">
                                        Air Quality Monitor
                                    </h4>

                                    <p class="card-text text-secondary">
                                        A monitoring solution for observing air quality
                                        conditions and environmental data.
                                    </p>

                                    <button
                                        type="button"
                                        class="btn btn-outline-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#airQualityModal">
                                        View Details
                                    </button>

                                </div>
                            </div>
                        </div>


                        <!-- PROJECT 3 -->

                        <div class="project-slide">
                            <div class="card border-0 shadow-sm h-100">

                                <img
                                    src="images/smart home control.jpg"
                                    class="card-img-top project-image"
                                    alt="Smart Home Control">

                                <div class="card-body p-4">

                                    <span class="badge text-bg-warning mb-2">
                                        IoT System
                                    </span>

                                    <h4 class="card-title fw-bold">
                                        Smart Home Control
                                    </h4>

                                    <p class="card-text text-secondary">
                                        A smart home concept for managing connected
                                        devices through technology.
                                    </p>

                                    <button
                                        type="button"
                                        class="btn btn-outline-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#smartHomeModal">
                                        View Details
                                    </button>

                                </div>
                            </div>
                        </div>


                        <!-- PROJECT 4 -->

                        <div class="project-slide">
                            <div class="card border-0 shadow-sm h-100">

                                <img
                                    src="images/data analytics dashboard.png"
                                    class="card-img-top project-image"
                                    alt="Data Analytics Dashboard">

                                <div class="card-body p-4">

                                    <span class="badge text-bg-info mb-2">
                                        Data Analytics
                                    </span>

                                    <h4 class="card-title fw-bold">
                                        Data Analytics Dashboard
                                    </h4>

                                    <p class="card-text text-secondary">
                                        A dashboard concept for presenting numerical
                                        data and identifying useful insights.
                                    </p>

                                    <button
                                        type="button"
                                        class="btn btn-outline-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#dataDashboardModal">
                                        View Details
                                    </button>

                                </div>
                            </div>
                        </div>


                        <!-- PROJECT 5 -->

                        <div class="project-slide">
                            <div class="card border-0 shadow-sm h-100">

                                <img
                                    src="images/smart traffic monitoring.png"
                                    class="card-img-top project-image"
                                    alt="Smart Traffic Monitoring">

                                <div class="card-body p-4">

                                    <span class="badge text-bg-danger mb-2">
                                        Smart Technology
                                    </span>

                                    <h4 class="card-title fw-bold">
                                        Smart Traffic Monitoring
                                    </h4>

                                    <p class="card-text text-secondary">
                                        A traffic monitoring concept for presenting
                                        traffic information and supporting data analysis.
                                    </p>

                                    <button
                                        type="button"
                                        class="btn btn-outline-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#trafficMonitoringModal">
                                        View Details
                                    </button>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- PANAH KANAN -->

                <button
                    type="button"
                    class="project-next-btn"
                    id="nextProject"
                    aria-label="Project berikutnya"
                    title="Project berikutnya">

                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>


            <!-- NOMOR PROJECT -->

            <p class="text-center text-secondary small mt-4 mb-0">
                Project <span id="currentProjectNumber">1</span> of 5
            </p>

        </div>
    </section>


    <!-- =====================================
              DETAIL PROJECT 1
                  TRACK METER
    ====================================== -->

    <div class="modal fade"
         id="trackMeterModal"
         tabindex="-1"
         aria-labelledby="trackMeterTitle"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <span class="badge text-bg-primary mb-2">
                            DIGITAL MONITORING
                        </span>

                        <h2 class="modal-title fw-bold" id="trackMeterTitle">
                            Track Meter
                        </h2>

                        <p class="text-secondary mb-0">
                            Digital Measurement Monitoring System
                        </p>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body p-4 p-md-5">

                    <img src="images/Track meter.jpeg"
                         alt="Track Meter Project"
                         class="img-fluid rounded project-detail-image mb-4">

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Overview</h4>
                        <p>
                            Track Meter is a digital monitoring system designed
                            to track and display measurement data in a clear,
                            structured, and efficient format. The project focuses
                            on making measurement information easier to understand
                            and monitor through a digital interface.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Problem Statement</h4>
                        <p>
                            Measurement information can be difficult to review
                            when it is presented manually or in a format that
                            is not easy to understand. Digital presentation can
                            make measurement information more accessible.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Objectives</h4>
                        <ul>
                            <li>Present measurement data in a clear digital format.</li>
                            <li>Make measurement information easier to read.</li>
                            <li>Support more efficient measurement monitoring.</li>
                            <li>Provide a foundation for future data analysis.</li>
                        </ul>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Key Features</h4>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-speedometer2"></i>
                                    <h6>Digital Measurement Display</h6>
                                    <p class="mb-0">
                                        Presents measurement information in a
                                        digital format that is easier to read.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-graph-up"></i>
                                    <h6>Data Monitoring</h6>
                                    <p class="mb-0">
                                        Supports observation of measurement values
                                        when relevant data is available.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-layout-text-window"></i>
                                    <h6>Structured Information</h6>
                                    <p class="mb-0">
                                        Organizes measurement information for
                                        convenient review.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-bar-chart"></i>
                                    <h6>Data Analysis Potential</h6>
                                    <p class="mb-0">
                                        Provides a starting point for displaying
                                        measurement trends and summaries.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">How It Works</h4>

                        <div class="project-workflow">

                            <div class="workflow-step">
                                <span>01</span>
                                <div>
                                    <h6>Measurement Input</h6>
                                    <p>Measurement values are collected or entered.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>02</span>
                                <div>
                                    <h6>Data Processing</h6>
                                    <p>Available values are organized for presentation.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>03</span>
                                <div>
                                    <h6>Digital Display</h6>
                                    <p>Users view the available measurement information.</p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Expected Benefits</h4>
                        <ul>
                            <li>Improved readability of measurement information.</li>
                            <li>More organized data presentation.</li>
                            <li>Easier review of recorded measurement values.</li>
                        </ul>
                    </section>

                    <section>
                        <h4 class="project-detail-heading">Future Development</h4>
                        <p>
                            Possible improvements include historical data storage,
                            interactive charts, and automatic data collection,
                            depending on the actual measurement system.
                        </p>
                    </section>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- =====================================
          DETAIL PROJECT 2: AIR QUALITY
    ====================================== -->

    <div class="modal fade"
         id="airQualityModal"
         tabindex="-1"
         aria-labelledby="airQualityTitle"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <span class="badge text-bg-success mb-2">
                            ENVIRONMENTAL MONITORING
                        </span>

                        <h2 class="modal-title fw-bold" id="airQualityTitle">
                            Air Quality Monitor
                        </h2>

                        <p class="text-secondary mb-0">
                            Environmental Data Monitoring Concept
                        </p>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body p-4 p-md-5">

                    <img src="images/air quality monitoring.jpg"
                         alt="Air Quality Monitor Project"
                         class="img-fluid rounded project-detail-image mb-4">

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Overview</h4>
                        <p>
                            Air Quality Monitor is an environmental monitoring
                            concept focused on presenting air quality information
                            clearly and organizing environmental measurements
                            for easier review.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Problem Statement</h4>
                        <p>
                            Environmental measurements may be difficult to
                            interpret if information is fragmented or poorly
                            organized. A clear monitoring interface can help
                            users review available information.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Objectives</h4>
                        <ul>
                            <li>Present air quality information clearly.</li>
                            <li>Support observation of environmental conditions.</li>
                            <li>Organize available air quality measurements.</li>
                            <li>Provide a basis for environmental analysis.</li>
                        </ul>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Key Features</h4>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-wind"></i>
                                    <h6>Air Quality Information</h6>
                                    <p class="mb-0">
                                        Presents available air quality measurements
                                        in an organized interface.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h6>Environmental Data</h6>
                                    <p class="mb-0">
                                        Organizes environmental observations for
                                        easier review and interpretation.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h6>Condition Trends</h6>
                                    <p class="mb-0">
                                        Can support trend visualization when
                                        measurements are recorded over time.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-info-circle"></i>
                                    <h6>Readable Information</h6>
                                    <p class="mb-0">
                                        Aims to make monitoring results easier
                                        for users to understand.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">How It Works</h4>

                        <div class="project-workflow">

                            <div class="workflow-step">
                                <span>01</span>
                                <div>
                                    <h6>Environmental Data</h6>
                                    <p>Available measurements are collected or entered.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>02</span>
                                <div>
                                    <h6>Data Organization</h6>
                                    <p>Measurements are arranged for easier interpretation.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>03</span>
                                <div>
                                    <h6>Monitoring Interface</h6>
                                    <p>Users review the presented air quality information.</p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Expected Benefits</h4>
                        <ul>
                            <li>Clearer presentation of environmental measurements.</li>
                            <li>More convenient review of available data.</li>
                            <li>Support for understanding environmental conditions.</li>
                        </ul>
                    </section>

                    <section>
                        <h4 class="project-detail-heading">Future Development</h4>
                        <p>
                            Possible improvements include connecting environmental
                            sensors, storing historical readings, visualizing trends,
                            and creating threshold-based alerts.
                        </p>
                    </section>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- =====================================
         DETAIL PROJECT 3: SMART HOME
    ====================================== -->

    <div class="modal fade"
         id="smartHomeModal"
         tabindex="-1"
         aria-labelledby="smartHomeTitle"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <span class="badge text-bg-warning mb-2">
                            IOT SYSTEM
                        </span>

                        <h2 class="modal-title fw-bold" id="smartHomeTitle">
                            Smart Home Control
                        </h2>

                        <p class="text-secondary mb-0">
                            Connected Home Management Concept
                        </p>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body p-4 p-md-5">

                    <img src="images/smart home control.jpg"
                         alt="Smart Home Control Project"
                         class="img-fluid rounded project-detail-image mb-4">

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Overview</h4>
                        <p>
                            Smart Home Control is a smart home concept exploring
                            how connected household devices can be managed through
                            a centralized and convenient interface.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Problem Statement</h4>
                        <p>
                            Managing multiple household devices separately can
                            become inconvenient. A centralized control interface
                            can make device management and status review easier.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Objectives</h4>
                        <ul>
                            <li>Explore centralized control of connected devices.</li>
                            <li>Make device status easier to review.</li>
                            <li>Improve convenience in household device management.</li>
                            <li>Provide a basis for smart home integration.</li>
                        </ul>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Key Features</h4>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-house-gear"></i>
                                    <h6>Centralized Interface</h6>
                                    <p class="mb-0">
                                        Organizes device controls and available
                                        status information in one interface.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-toggle-on"></i>
                                    <h6>Device Control Concept</h6>
                                    <p class="mb-0">
                                        Provides a concept for managing supported
                                        connected devices.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-phone"></i>
                                    <h6>Convenient Access</h6>
                                    <p class="mb-0">
                                        Explores a more accessible way to interact
                                        with household technology.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-activity"></i>
                                    <h6>Device Status</h6>
                                    <p class="mb-0">
                                        Can display status when supported by the
                                        connected hardware or system.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">How It Works</h4>

                        <div class="project-workflow">

                            <div class="workflow-step">
                                <span>01</span>
                                <div>
                                    <h6>User Interaction</h6>
                                    <p>The user selects a device or control option.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>02</span>
                                <div>
                                    <h6>Control Process</h6>
                                    <p>The system processes the requested action.</p>
                                </div>
                            </div>

                            <div class="workflow-step">
                                <span>03</span>
                                <div>
                                    <h6>Device Response</h6>
                                    <p>
                                        A connected device responds when supported
                                        by the system.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Expected Benefits</h4>
                        <ul>
                            <li>More centralized device management.</li>
                            <li>Improved accessibility of device controls.</li>
                            <li>A foundation for connected home automation.</li>
                        </ul>
                    </section>

                    <section>
                        <h4 class="project-detail-heading">Future Development</h4>
                        <p>
                            Potential improvements include actual device integration,
                            automation schedules, status updates, and energy usage
                            monitoring, depending on the project implementation.
                        </p>
                    </section>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- =====================================
          DETAIL PROJECT 4: DATA DASHBOARD
    ====================================== -->

    <div class="modal fade"
         id="dataDashboardModal"
         tabindex="-1"
         aria-labelledby="dataDashboardTitle"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <span class="badge text-bg-info mb-2">DATA ANALYTICS</span>

                        <h2 class="modal-title fw-bold" id="dataDashboardTitle">
                            Data Analytics Dashboard
                        </h2>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body p-4 p-md-5">

                    <img
                        src="images/data analytics dashboard.png"
                        alt="Data Analytics Dashboard"
                        class="img-fluid rounded project-detail-image mb-4">

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Overview</h4>

                        <p>
                            Data Analytics Dashboard is a concept for presenting
                            numerical data through a structured visual interface.
                            It focuses on organizing information so users can
                            understand patterns and insights more easily.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Problem Statement</h4>

                        <p>
                            Raw numerical data can be difficult to interpret
                            without a clear presentation. A dashboard provides
                            a visual approach to organizing important information.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Objectives</h4>

                        <ul>
                            <li>Present data in an organized format.</li>
                            <li>Make numerical information easier to interpret.</li>
                            <li>Support identification of patterns and trends.</li>
                            <li>Improve clarity in data presentation.</li>
                        </ul>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Key Features</h4>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-bar-chart"></i>

                                    <h6>Data Visualization</h6>

                                    <p class="mb-0">
                                        Presents numerical information through
                                        visual charts and graphs.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-clipboard-data"></i>

                                    <h6>Data Summary</h6>

                                    <p class="mb-0">
                                        Organizes important data into an
                                        easily readable presentation.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Workflow</h4>

                        <ol>
                            <li>Collect or enter the available data.</li>
                            <li>Organize data into useful categories.</li>
                            <li>Present information through charts or summaries.</li>
                        </ol>
                    </section>

                    <section>
                        <h4 class="project-detail-heading">Future Development</h4>

                        <p>
                            Possible development includes database integration,
                            interactive filters, automatic data updates, and
                            additional data visualization options.
                        </p>
                    </section>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- =====================================
          DETAIL PROJECT 5: SMART TRAFFIC
    ====================================== -->

    <div class="modal fade"
         id="trafficMonitoringModal"
         tabindex="-1"
         aria-labelledby="trafficMonitoringTitle"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <span class="badge text-bg-danger mb-2">
                            SMART TECHNOLOGY
                        </span>

                        <h2 class="modal-title fw-bold" id="trafficMonitoringTitle">
                            Smart Traffic Monitoring
                        </h2>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body p-4 p-md-5">

                    <img
                        src="images/smart traffic monitoring.png"
                        alt="Smart Traffic Monitoring"
                        class="img-fluid rounded project-detail-image mb-4">

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Overview</h4>

                        <p>
                            Smart Traffic Monitoring is a concept focused on
                            presenting traffic-related information in an organized
                            format. It explores how data can support observation
                            of traffic conditions and patterns.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Problem Statement</h4>

                        <p>
                            Traffic information may be difficult to assess when
                            data is fragmented or not presented clearly.
                            A monitoring interface can help organize available
                            information for easier review.
                        </p>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Project Objectives</h4>

                        <ul>
                            <li>Present traffic information in a clear format.</li>
                            <li>Support observation of traffic patterns.</li>
                            <li>Explore data-driven traffic analysis.</li>
                            <li>Improve accessibility of monitoring information.</li>
                        </ul>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Key Features</h4>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-activity"></i>

                                    <h6>Traffic Data</h6>

                                    <p class="mb-0">
                                        Organizes available traffic information
                                        in a structured format.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="project-feature">
                                    <i class="bi bi-graph-up-arrow"></i>

                                    <h6>Trend Analysis</h6>

                                    <p class="mb-0">
                                        Explores changes in recorded traffic
                                        information over time.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="mb-4">
                        <h4 class="project-detail-heading">Workflow</h4>

                        <ol>
                            <li>Collect or enter traffic information.</li>
                            <li>Organize the available data.</li>
                            <li>Present information for review and analysis.</li>
                        </ol>
                    </section>

                    <section>
                        <h4 class="project-detail-heading">Future Development</h4>

                        <p>
                            Possible development includes database integration,
                            live traffic data sources, interactive maps, and
                            traffic trend visualizations.
                        </p>
                    </section>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                        Close Details
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- =====================================
                         CONTACT
    ====================================== -->

    ```html
<section id="contact" class="contact-section py-5">
    <div class="container py-5">

        <div class="text-center mb-5">
            <span class="badge text-bg-success mb-3">
                Hubungi Saya
            </span>

            <h2 class="display-5 fw-bold">
                CONTACT ME
            </h2>

            <p class="text-secondary">
                Let's Connect...
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">

                        <form id="contactForm">
                            <div class="row g-3">

                                <div class="col-12 col-md-6">
                                    <label for="name" class="form-label">
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="form-control"
                                        placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="email@example.com"
                                        required>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">
                                        Message
                                    </label>

                                    <textarea
                                        id="message"
                                        name="message"
                                        class="form-control"
                                        rows="5"
                                        placeholder="Write your message..."
                                        required></textarea>
                                </div>

                                <div class="col-12">
                                    <button
                                        type="submit"
                                        class="btn btn-success"
                                        id="sendMessageBtn">
                                        Send Message
                                    </button>

                                    <p
                                        id="contactStatus"
                                        class="mt-3 mb-0"
                                        role="status"
                                        aria-live="polite">
                                    </p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


    <!-- =====================================
                    FOOTER
    ====================================== -->

    <footer class="bg-dark text-white py-4">
        <div class="container">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">

                <p class="mb-0">
                    © 2026 My Portofolio
                </p>

                <div class="social-links">

                    <a
                        href="https://www.instagram.com/cleoorlinep/"
                        class="text-white me-3"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram">

                        <i class="bi bi-instagram fs-5"></i>
                    </a>

                    <a
                        href="https://github.com/cleoorlinep"
                        class="text-white me-3"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub">

                        <i class="bi bi-github fs-5"></i>
                    </a>

                    <a href="#" class="text-white" aria-label="LinkedIn">
                        <i class="bi bi-linkedin fs-5"></i>
                    </a>

                </div>

            </div>
        </div>
    </footer>


    <!-- =====================================
                      JAVASCRIPT
    ====================================== -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>

    <script src="latihan_bootstrap.js"></script>

</body>
</html>