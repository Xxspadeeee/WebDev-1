<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>DoTrack</title>
    <link rel="icon" href="../IMAGE/logo.png">
</head>

<body>
    <div class="wrapper-main-2">
        <div class="sidebar">
            <div class="container-flex-sidebar">
                <div class="image-text">
                    <img src="../IMAGE/doctracklogo.png" alt="">
                </div>
                <div class="menu-bar">
                    <div class="compose-Container active">
                        <a href="../HTML/compose.php">
                            <div class="list">
                                <span class="material-symbols-outlined">
                                    edit_document
                                </span>
                                <span>Compose Mail</span>
                            </div>
                        </a>
                    </div>
                    <div class="link-Container">

                        <a href="../HTML/Home.php">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                                <span>Home</span>
                            </div>
                        </a>
                        <a href="../HTML/Incoming.php">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    move_to_inbox
                                </span>
                                <span>Incoming</span>
                            </div>
                        </a>
                        <a href="../HTML/Pending.php">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    pending_actions
                                </span><span>Pending</span>
                            </div>
                        </a>
                        <a href="../HTML/Received.php">
                            <div class="list2"><span class="material-symbols-outlined">
                                    check_circle
                                </span><span>Received</span></div>
                        </a>
                        <a href="../HTML/Outgoing.php">
                            <div class="list2"><span class="material-symbols-outlined">
                                    outgoing_mail
                                </span> <span>Outgoing</span></div>
                        </a>
                        <a href="#">
                            <div class="list2"><span class="material-symbols-outlined">
                                    archive
                                </span><span>Archived</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-bar">
            <div class="heading-content">
                <div class="heading-content-searchbar">
                    <input type="text" placeholder="   Search...">
                </div>
                <div class="heading-content-image">
                    <div class="heading-content-image-user">
                        <span><img src="../IMAGE/sam.png" alt=""></span>
                        <p>SAMGYUP</p>
                    </div>
                    <span class="material-symbols-outlined">
                        dark_mode
                    </span>
                </div>

            </div>

        </div>

        <div class="content">
            <div class="home-table">

                <div class="box-table B">
                    <div class="body">

                        <h3>Incoming Document</h3>
                        <div class="abc">
                            <h1>69</h1>
                            <!-- <span class="material-symbols-outlined">
                                assignment_turned_in
                            </span> -->
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <p>View Details </p>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                    </div>
                </div>

                <div class="box-table Y">
                    <div class="body">

                        <h3>Pending Document</h3>
                        <div class="abc">
                            <h1>69</h1>
                            <!-- <span class="material-symbols-outlined">
                                assignment_turned_in
                            </span> -->
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <p>View Details </p>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                    </div>

                </div>

                <div class="box-table G">
                    <div class="body">
                        <h3>Outgoing Document</h3>
                        <div class="abc">
                            <h1>69</h1>
                            <!-- <span class="material-symbols-outlined">
                                assignment_turned_in
                            </span> -->
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <p>View Details </p>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                    </div>
                </div>

                <div class="box-table R">
                    <div class="body">
                        <h3>Finished Document</h3>
                        <div class="abc">
                            <h1>69</h1>
                            <!-- <span class="material-symbols-outlined">
                                assignment_turned_in
                            </span> -->
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <p>View Details </p><span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>