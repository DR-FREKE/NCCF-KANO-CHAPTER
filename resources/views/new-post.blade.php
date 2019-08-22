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
            <a href="">
                <li>Log out</li>
            </a>
        </ul>
    </div>

    <div class="rite-pan">
        <div class="dailyPost-form">
            <form action="" method="">
                <textarea name="daily_post" id="daily_post" required="required" maxlength="250" placeholder="Post Word for today (250 words max.)"></textarea><br />
                <input type="reset" value="Clear" />
                <input type="button" value="Post" onclick="isNewWord()" />
            </form>
        </div>
    </div>


</div>