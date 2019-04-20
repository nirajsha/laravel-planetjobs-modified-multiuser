@component('mail::message')
# Profile Information Changed
<div>
<h3>Your Profile Information Has Been Changed</h3>
<p>
Your Name:   {{$change_profile['name']}} <br> Your Email : {{$change_profile['email']}} <br>
</p>
</div>
@endcomponent
