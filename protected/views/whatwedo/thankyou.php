<?php
/* $type The type of the submittion form */
?>
<h6 class='normalTitle'>Thank You!</h6>
<?php if ($type == 'admission'): ?>
<p>
    You have successfully submitted your information! We will evaluate your basic academic background, and email you a preliminary list of target graduate schools & programs soon. We appreciate the opportunity to serve you.
</p>
<?php elseif ($type == 'vip'): ?>
<p>
    You have successfully submitted your information! We will call/email you the detailed tour information once the travel itinerary is set up. Thanks again for your interest.
</p>
<?php elseif ($type == 'training' || $type == 'workshop'): ?>
<p>
    You have successfully submitted your information! We will call/email you the detailed training workshop information once the location and schedule is set up. Thanks again for your interest.
</p>
<?php endif; ?>
