
<!DOCTYPE >
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
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

                        <a href="#">
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
            
            <div class="window">
                <div class="window-flex">
                    <form class="form">
                        <div class="form-group">
                            <label for="to">To:</label>
                            <input type="email" class="form-control" id="to"
                                placeholder="Enter recipient" />
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" placeholder="Enter subject" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control"  id="message" rows="10"
                                placeholder="Enter your message"></textarea>
                        </div>
                        
                        
                        <div class="form-group-c">

                            <div class="form-group-c1">
                                <div class="form-group">
                                    <label for="prioritization">Prioritization:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">Urgent</option>
                                        <option value="">Usual</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="classification">Classification:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">Indorsement/Transmittal</option>
                                        <option value="">Leave Form</option>
                                        <option value="">Letter</option>
                                        <option value="">Memorandum</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="action">Action:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">For Approval/Signature</option>
                                        <option value="">For Comment/Justification</option>
                                        <option value="">For Confirmation</option>
                                        <option value="">For Consolidation</option>
                                        <option value="">For Dissemination</option>
                                        <option value="">For Monitoring</option>
                                        <option value="">For Printing</option>
                                        <option value="">For Submission of Documents</option>
                                        <option value="">For other approriate action, please specify.</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="delivery-Type">Delivery Type:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">Combination</option>
                                        <option value="">Hand-over</option>
                                        <option value="">Through-DTS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-c2">
                                <div class="form-group">
                                    <label for="dateofletter">Date of letter:</label>
                                    <input type="date">
                                </div>
                                <div class="form-group">
                                    <label for="sub-classificaiton">Sub-classificaiton:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">For Compliance</option>
                                        <option value="">For Information</option>
                                        <option value="">Inquiry</option>
                                        <option value="">Invitation</option>
                                        <option value="">Request</option>
                                        <option value="">Others</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="deadline">Deadline:</label>
                                    <input type="date">
                                </div>
                                <div class="form-group">
                                    <label for="references">References:</label>
                                    <select name="" id="">
                                        <option value="">Select Option</option>
                                        <option value="">None</option>
                                        
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-file-submit">
                            <label for="534426">
                                Choose File
                             </label>
                             <input type="file" name="" id="534426">
                        </div>
                        
                        <div class="form-group footer">
                            <button type="submit" class="btn"><span class="material-symbols-outlined">
                                send
                                </span><Span>Send</Span></button>
                            
                        </div>
                    </form>
                    
                </div>
                
            </div>





        </div>
    </div>

</body>

</html>
