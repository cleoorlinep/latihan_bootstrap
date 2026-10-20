document.addEventListener("DOMContentLoaded", function () {


    // ============================================
    // BAGIAN 1: MENU ACTIVE DAN AUTOSCROLL
    // ============================================

    const navLinks = Array.from(
        document.querySelectorAll(
            '.navbar .nav-link[href^="#"]'
        )
    );

    const sections = navLinks
        .map(function (link) {
            return document.querySelector(
                link.getAttribute("href")
            );
        })
        .filter(function (section) {
            return section !== null;
        });


    function setActiveMenu(sectionId) {

        navLinks.forEach(function (link) {

            const isActive =
                link.getAttribute("href") === "#" + sectionId;

            link.classList.toggle("active", isActive);

            if (isActive) {
                link.setAttribute("aria-current", "page");
            } else {
                link.removeAttribute("aria-current");
            }

        });

    }

    navLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            const target = document.querySelector(
                link.getAttribute("href")
            );

            if (!target) {
                return;
            }

            event.preventDefault();

            setActiveMenu(target.id);

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

            const navbarCollapse =
                document.querySelector(".navbar-collapse.show");

            if (
                navbarCollapse &&
                window.bootstrap &&
                window.bootstrap.Collapse
            ) {

                window.bootstrap.Collapse
                    .getOrCreateInstance(navbarCollapse)
                    .hide();

            }

        });

    });

    const sectionObserver = new IntersectionObserver(

        function (entries) {

            const visibleSections = entries
                .filter(function (entry) {
                    return entry.isIntersecting;
                })
                .sort(function (a, b) {

                    return Math.abs(a.boundingClientRect.top) -
                           Math.abs(b.boundingClientRect.top);

                });

            if (visibleSections.length > 0) {

                setActiveMenu(
                    visibleSections[0].target.id
                );

            }

        },

        {
            rootMargin: "-80px 0px -55% 0px",
            threshold: 0
        }

    );

    sections.forEach(function (section) {

        sectionObserver.observe(section);

    });

    const initialSection = sections.find(function (section) {

        return (
            section.id ===
            window.location.hash.slice(1)
        );

    });

    setActiveMenu(
        initialSection
            ? initialSection.id
            : sections.length > 0
                ? sections[0].id
                : ""
    );



    // ============================================
    // BAGIAN 2: GRAFIK CHART.JS
    // ============================================

    const chartCanvas =
        document.getElementById("expertiseChart");

    if (
        chartCanvas &&
        typeof window.Chart !== "undefined"
    ) {

        const expertiseData = [85, 78, 90, 82];
        const expertiseChart = new window.Chart(
            chartCanvas,
            {
                type: "bar",

                data: {

                    labels: [
                        "Data Analysis",
                        "ICT",
                        "Problem Solving",
                        "Technology"
                    ],

                    datasets: [{
                        label: "Expertise Score",

                        data: [0, 0, 0, 0],

                        backgroundColor: [
                            "rgba(235, 140, 148, 0.85)",
                            "rgba(244, 173, 183, 0.85)",
                            "rgba(214, 51, 132, 0.75)",
                            "rgba(248, 215, 218, 0.95)"
                        ],

                        borderColor: "#eb8c94",
                        borderWidth: 1,
                        borderRadius: 6
                    }]

                },

                options: {

                    responsive: true,
                    maintainAspectRatio: false,

                    animation: {
                        duration: 1400,
                        easing: "easeOutQuart"
                    },

                    plugins: {

                        legend: {
                            display: false
                        }

                    },

                    scales: {

                        y: {

                            beginAtZero: true,
                            max: 100,

                            ticks: {
                                stepSize: 20
                            },

                            title: {
                                display: true,
                                text: "Expertise Score (0–100)"
                            }

                        },

                        x: {

                            grid: {
                                display: false
                            }

                        }

                    }

                }

            }
        );

        const chartWrapper =
            chartCanvas.closest(".chart-wrapper") ||
            chartCanvas.parentElement;

        let hasAnimated = false;

        const chartObserver = new IntersectionObserver(

            function (entries) {

                entries.forEach(function (entry) {

                    if (
                        entry.isIntersecting &&
                        !hasAnimated
                    ) {

                        hasAnimated = true;

                        expertiseChart.data.datasets[0].data =
                            expertiseData.slice();

                        expertiseChart.update();

                    } else if (
                        !entry.isIntersecting &&
                        hasAnimated
                    ) {

                        hasAnimated = false;

                        expertiseChart.data.datasets[0].data = [
                            0, 0, 0, 0
                        ];

                        expertiseChart.update("none");

                    }

                });

            },

            {
                threshold: 0.15
            }

        );

        chartObserver.observe(chartWrapper);

    } else if (!chartCanvas) {

        console.warn(
            'Canvas grafik tidak ditemukan. Periksa id="expertiseChart".'
        );

    } else {

        console.error(
            "Chart.js belum berhasil dimuat."
        );

    }



    // ============================================
    // BAGIAN 3: CAROUSEL PROJECT MANUAL
    // ============================================

    const projectsViewport =
        document.querySelector(".projects-viewport");

    const projectsTrack =
        document.getElementById("projectsTrack");

    const prevButton =
        document.getElementById("prevProject");

    const nextButton =
        document.getElementById("nextProject");

    const projectNumber =
        document.getElementById("currentProjectNumber");


    if (
        projectsViewport &&
        projectsTrack &&
        prevButton &&
        nextButton
    ) {

        const projectSlides = Array.from(
            projectsTrack.querySelectorAll(":scope > .project-slide")
        );

        const totalProjects = projectSlides.length;

        let currentIndex = 0;

        const reducedMotion = window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

        function moveToProject(index, animate = true) {

            if (totalProjects === 0) {
                return;
            }

            currentIndex = Math.max(
                0,
                Math.min(index, totalProjects - 1)
            );

            prevButton.hidden = currentIndex === 0;
            prevButton.disabled = currentIndex === 0;

            nextButton.disabled =
                currentIndex === totalProjects - 1;


            const slideWidth =
                projectsViewport.getBoundingClientRect().width;

            if (animate && !reducedMotion) {

                projectsTrack.style.transition =
                    "transform 0.1s ease-in-out";

            } else {

                projectsTrack.style.transition = "none";

            }

            projectsTrack.style.transform =
                "translateX(-" + (currentIndex * slideWidth) + "px)";


            if (projectNumber) {

                projectNumber.textContent =
                    currentIndex + 1;

            }

        }

        prevButton.addEventListener("click", function () {

            if (currentIndex > 0) {

                moveToProject(currentIndex - 1);

            }

        });

        nextButton.addEventListener("click", function () {

            if (currentIndex < totalProjects - 1) {

                moveToProject(currentIndex + 1);

            }

        });

        window.addEventListener("resize", function () {

            moveToProject(currentIndex, false);

        });

        moveToProject(0, false);

    }

});