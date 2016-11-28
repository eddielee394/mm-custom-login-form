<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://tutorialonline.net/
 * @since      1.0.0
 *
 * @package    Mm_Sc
 * @subpackage Mm_Sc/public/partials
 */
?>
<div class="blue-form">
<div class="form">
<ul class="tab-group">
[MM_Member_Decision isMember='false']
 	<li class="tab active"><a href="#login">Log In</a></li>
 	<li class="tab"><a href="<?php echo $atts['url']; ?>">Sign Up</a></li>
[/MM_Member_Decision]
[MM_Member_Decision isMember='true']
 	<li class="tab"><a href="">Upgrade</a></li>
[/MM_Member_Decision]
</ul>
<div class="tab-content">
<div id="login">

[MM_Member_Decision isMember='true']

You are already logged in! Need to log out? You can do that <a title="Log out" href="[MM_CorePage_Link type='logout']">here</a>.

[/MM_Member_Decision]
[MM_Member_Decision isMember='false']
<h1>Welcome Back!</h1>
[MM_Form type='login']
[MM_Form_Message type='error']
[MM_Form_Message type='success']
<div class="field-wrap">
<p class="label">Username<span class="req">*</span></p>
[MM_Form_Field name='username' customAttributes='placeholder="Username"]

</div>
<div class="field-wrap">
<p class="label">Password<span class="req">*</span></p>
[MM_Form_Field name='password' customAttributes='placeholder="Password"]

</div>
<p class="forgot"><a href="[MM_CorePage_Link type='forgotPassword']">Forgot Password?</a></p>
[MM_Form_Button type='login' label='Login' class="button button-block"]
[/MM_Form]
[/MM_Member_Decision]

</div>
</div>
</div>
</div>
