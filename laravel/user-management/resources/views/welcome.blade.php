<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capital International Group</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">
                <img
                    src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg"
                    width="135"
                    alt="Capital logo"
                />
            </div>
            <ul class="nav-links">
                <li><a href="#">Investment Services</a></li>
                <li><a href="#">Banking</a></li>
                <li><a href="#">Company</a></li>
                <li class="login"><a href="{{ route('login') }}">Login</a></li>
                <li><a href="#" class="get-started-btn">Get started</a></li>
                <div class="modal-container">
                    <div class="modal-button-wrapper">
                        <div class="button bg-white search-button">
                            <img src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e15d3d5274eec9065bc26cd_search-regular-white.svg" width="18" alt="Search Icon">
                        </div>
                    </div>
                    <div class="modal">
                        <div class="modal-contents">
                            <form action="/search" class="modal-search-form w-form">
                                <img src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e15d4659ba5cbdde64535f9_search-regular-blue.svg" width="16" alt="Form Icon" class="form-input-icon">
                                <input class="form-input form-input-naked w-input" autofocus maxlength="256" name="query" placeholder="Type your search" type="search" id="search-2" required>
                                <input type="submit" class="button form-search-button w-button get-started-btn" value="Search">
                            </form>
                        </div>
                    </div>
                    <div class="modal-screen"></div>
                </div>
            </ul>
        </nav>
    </header>

    <!-- Announcement -->
    <section class="announcement">
        <p>
            We recently published our 2023 Conscious Capital Sustainability Report.
            <a href="#">Click here</a> to access it.
        </p>
        <button class="close-btn" aria-label="Close"><img loading="lazy" src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5ee9f932491daca799c05000_close.svg" alt="" class="closing-x-qir-banner cc"></button>
    </section>

    <div class="hero">
        <!-- Hero Section -->
        <section class="fs">
            <h1>Invest with us. Bank with us.</h1>
            <h2>Grow with us.</h2>
            <p>
                Explore the ultimate suite of financial services designed to simplify
                asset and cash management for businesses, intermediaries, and
                high-net-worth individuals.
            </p>
        </section>

        <!-- Services Section -->
        <section class="services">
            <div class="service-box">
                <h3>Investment Platform</h3>
                <p>
                    Use our international investment platform to place your own trades
                    across an almost unlimited universe of assets.
                </p>
                <a href="#" class="get-started-btn">Learn more</a>
            </div>
            <div class="service-box">
                <h3>Investment Management</h3>
                <p>
                    Let us manage your investments. Select the optimal discretionary
                    strategy to meet your long-term financial goals.
                </p>
                <a href="#" class="get-started-btn">Learn more</a>
            </div>
            <div class="service-box">
                <h3>Banking</h3>
                <p>
                    With competitive rates of interest and fast account opening, we
                    serve corporates, trusts, and high net worth individuals.
                </p>
                <a href="#" class="get-started-btn">Learn more</a>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <a
                    href="/"
                    aria-current="page"
                    class="footer-logo w-inline-block w--current"
                ><img
                    src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e12f977c5e98c6f6bfd0612_CIG-white-gold.svg"
                    width="135"
                    alt="capital logo links to homepage"
                    class="image-123"
                /></a>
                <div class="social-icons">
                    <a
                        href="https://www.linkedin.com/company/the-capital-international-group"
                        target="_blank"
                        class="button-circle button-small bg-white w-inline-block"
                    ><img
                        src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e100b7a946b1214a5ac5861_linkedin.svg"
                        alt="linkedin"
                        class="social-icon"
                    /></a>
                    <a
                        href="https://www.facebook.com/CapitalInternationalGroup/"
                        target="_blank"
                        class="button-circle button-small bg-white w-inline-block"
                    ><img
                        src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e100b7a946b1260a3ac5851_facebook.svg"
                        alt="facebook"
                        class="social-icon"
                    /></a>
                    <a
                        href="https://www.instagram.com/capital_intl/"
                        target="_blank"
                        class="button-circle button-small bg-white w-inline-block"
                    ><img
                        src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e100b7a946b123113ac5858_instagram.svg"
                        alt="instagram"
                        class="social-icon"
                    /></a>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Investment Platform</a></li>
                        <li><a href="#">Investment Management</a></li>
                        <li><a href="#">Corporate Banking</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Conscious Capital</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Investment Platform Resources</a></li>
                        <li><a href="#">Investment Management Resources</a></li>
                        <li><a href="#">Capital International Bank Resources</a></li>
                        <li><a href="#">Client Charter</a></li>
                        <li><a href="#">Investment Onboarding Support</a></li>
                        <li><a href="#">Fraud Awareness</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                Regulated activities are carried out on behalf of the Capital
                International Group by its licensed member companies. Full company
                details, website terms, and privacy & cookie notice can be viewed
                <a href="#">here</a>.
            </p>
            <p>
                &copy; Capital International Group, 2024
                <a href="#">Cookie preferences</a>
            </p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>