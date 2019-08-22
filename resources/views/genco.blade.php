<div class="main-grid-container">
    <div class="left-pan">
        <p>
            Logged in as:<br />#admin name
        </p>
        <div id="avartar">
            <img src="profileImg/Img.jpg" alt="admin img">
        </div>
        <ul>
            <a href="/admin">
                <li>Home</li>
            </a>
            <a href="editprofile.php">
                <li>View/Edit Profile</li>
            </a>
        </ul>
    </div>

    <div class="rite-pan">
        <div class="dailyPost-form">
            <form action="" method="">
                <textarea name="genco_post" id="genco_post" required="required" placeholder="Your post would be sent by mail to the members of the GENCO platform"></textarea><br />
                <input type="reset" value="Clear" />
                <input type="button" value="Send to GENCO" onclick="isNewPost()" />
            </form>
        </div>
    </div>


</div>