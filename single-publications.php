<!--
============================================================

     POST TEMPLATE
    ==============================

        1. HERO - Background Image pulled from "Featured Image"
        2. CONTENT - article, title, subtitle, metadata, content

============================================================
-->

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<form>

<h2>Payment</h2>
<div class="formgroup">
    <label>Recurring Or One Time? [select select-recurring "recurring" "one time"]</label>
    <label class="inlineIcons" for="amount"><span class="hidden">Donation Amount</span>
        <i class="fas fa-dollar-sign"></i> [number number-amount]</label>
    <label>Donation Frequency [select select-recurring "annual" "one time"]</label>
</div>

<h2>Payment Method</h2>
<div class="formgroup">
    <label> Your Name (required)
          [select select-recurring "annual" "one time"]
    </label>
</div>

<h2>Gift Recipient</h2>
<div class="formgroup">
    <label>Which part of the NAWCC would you like this gift to help? [select select-giftRecipient first_as_label "-- Choose support type --" "NAWCC" "National Watch & Clock Museum" "Library"]</label>
</div>

<div class="formgroup socialMedia">



            <!-- Twitter -->
            <label for="Twitter">
                <span class="hidden">Twitter</span>
                <i class="fa fa-twitter"></i>
                <input class="text-box single-line" data-val="true" data-val-length="Twitter cannot exceed 100 characters." data-val-length-max="100" id="Twitter" name="Twitter" placeholder="@twitterhandle" type="text" value="">
                <span class="field-validation-valid" data-valmsg-for="Twitter" data-valmsg-replace="true"></span>
            </label>

            <!-- Email -->
            <label for="Email">
                <span class="hidden">Email</span>
                <i class="fa fa-envelope"></i>
                <input class="text-box single-line" data-val="true" data-val-length="Email Address cannot exceed 100 characters." data-val-length-max="100" id="Email" name="Email" placeholder="example@email.com" type="text" value="">
                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </label>

            <!-- Other  -->
            <label for="OtherSocial">
                <span class="hidden">Other Social Media</span>
                <span data-balloon="Please list any additional online points of contact" data-balloon-pos="up">
                    <i class="fa fa-plus"></i>
                </span>
                <input class="text-box single-line" data-val="true" data-val-length="Other Social Networks cannot exceed 100 characters." data-val-length-max="100" id="OtherSocial" name="OtherSocial" placeholder="Other..." type="text" value="">
                <span class="field-validation-valid" data-valmsg-for="OtherSocial" data-valmsg-replace="true"></span>
            </label>

</div>


<div class="formgroup">
    <label> Your Email (required) </label>
    [email* your-email]
</div>

<div class="formgroup">
    <label> Your Message  </label>
    [textarea your-message]
</div>

<div class="formgroup">
    [submit "Send"]
</div>



<div class="taskList">

    <div class="task">
      <label class="control checkbox" for="task">
        <input data-val="true" data-val-enforcetrue="You must agree to the Terms of Service before you can Create an Account." id="AgreeToTerms" name="AgreeToTerms" value="true" aria-required="true" aria-describedby="AgreeToTerms-error" type="checkbox">
        <input name="AgreeToTerms" value="false" type="hidden">
        <span class="control__indicator"></span>
      </label>
      <div>
        <p class="has-medium-font-size">Well then! Now I simply must agree and now I simply must agree!</p>
        <p>Details:</p>
        <ul>
            <li>hotdogs</li>
            <li>carrots</li>
        </ul>
      </div>
    </div>

</div>

<label> Your Name (required)
    [text* your-name] </label>

<label> Your Email (required)
    [email* your-email] </label>

<label> Subject
    [text your-subject] </label>

<label> Your Message
    [textarea your-message] </label>

[submit "Send"]

</form>

    <section class="post_content">
        <?php the_content(); ?>
    </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
