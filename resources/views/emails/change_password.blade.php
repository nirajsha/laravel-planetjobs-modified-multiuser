@component('mail::message')
# Password Changed Email
<div>
<h3>Your Admin Password Has Been Changed</h3>
<p>
Your new password is:   {{$change_password['new_password']}}
</p>
</div>
@endcomponent
