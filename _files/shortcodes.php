
/**
 * Red
*/
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
/**
 * Blue
*/
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<div class="form">
<ul class="tab-group">
 	<li class="tab active"><a href="#login">Log In</a></li>
 	<li class="tab"><a href="/membership-registration">Sign Up</a></li>
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
</html>
