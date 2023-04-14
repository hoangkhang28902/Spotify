<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="../../../css/Global.css">
    <title>Document</title>
</head>
<body> -->
    <?php if (empty($_GET['page'])) { ?>
    <nav class="navbarLayout">
        <div>
            <header class="navbarHeader">
                <div class="chevronRoute">
                    <button class="btnChevron">
                        <svg role="img" height="16" width="16" aria-hidden="true" class="Svg-sc-ytk21e-0 kcBZLg IYDlXmBmmUKHveMzIPCF" viewBox="0 0 16 16" data-encore-id="icon">
                            <path d="M11.03.47a.75.75 0 0 1 0 1.06L4.56 8l6.47 6.47a.75.75 0 1 1-1.06 1.06L2.44 8 9.97.47a.75.75 0 0 1 1.06 0z">
                            </path>
                        </svg>
                    </button>
                    <button class="btnChevron">
                        <svg role="img" height="16" width="16" aria-hidden="true" class="Svg-sc-ytk21e-0 kcBZLg IYDlXmBmmUKHveMzIPCF" viewBox="0 0 16 16" data-encore-id="icon">
                            <path d="M4.97.47a.75.75 0 0 0 0 1.06L11.44 8l-6.47 6.47a.75.75 0 1 0 1.06 1.06L13.56 8 6.03.47a.75.75 0 0 0-1.06 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="buttonNavbarContainer">
                    <ul>
                        <li><button class="buttonNavbar">Premium</button></li>
                        <li><button class="buttonNavbar">Support</button></li>
                        <li><button class="buttonNavbar">Download</button></li>
                        <li><div class="lineNavbar"></div></li>
                    </ul>
                    <ul>
                        <div class="login">
                            <button class="buttonNavbar buttonLogup">Log up</button>
                        </div>
                        <div>
                            <button class="buttonLogin"><span>Login</span></button>
                        </div>
                    </ul>
                </div>
            </header>
        </div>
    </nav>
    <?php } ?>
<!-- </body>
</html> -->
