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
<div class="red-form">
[MM_Member_Decision isMember='true']
You are already logged in! Need to log out? You can do that <a title="Log out" href="[MM_CorePage_Link type='logout']">here</a>.
[/MM_Member_Decision]

[MM_Member_Decision isMember='false']
<div class="main">

[MM_Form type='login']
<div class="login-form">

[MM_Form_Message type='error']
[MM_Form_Message type='success']
<h1>Login <a class="login-form-title" href="/join">Sign Up</a></h1>
<div class="inset">
<p class="login-form-label">EMAIL ADDRESS</p>
[MM_Form_Field name='username']
<p class="login-form-label">PASSWORD</p>
[MM_Form_Field name='password']
<p class="remember">[MM_Form_Field name='rememberMe' class="remember"]
<label for="remember">Remember me for 14 days</label></p>

</div>
<p class="p-container"><a href="[MM_CorePage_Link type='forgotPassword']">Forgot password ?</a>
[MM_Form_Button type='login' label='Login']</p>
[/MM_Form]

</div>
</div>
[/MM_Member_Decision]
</div>
