<section class="code4pa_stayUpdated">
    <h2>Stay Updated</h2>
    <p>Our team is pulling together lots of fun event details. Register your email to stay connected to event progress. We are excited to see you in September!</p>
    <form method="post" action="<?php echo site_url(); ?>/?na=s" onsubmit="return newsletter_check(this)">
        <label for="stayUpdated">
            Enter Your Email
            <input type="email" name="ne" id="stayUpdated" placeholder="example@email.com" required>
        </label>
        <input type="submit" value="Subscribe">
    </form>
</section>

<!-- JS - FORM VALIDATION - VIA NEWSLETTER PLUGIN -->
<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>
