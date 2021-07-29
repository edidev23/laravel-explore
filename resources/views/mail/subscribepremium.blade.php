@extends('layouts.email')
@section("content")
<p>Hi,</p>

<p>Thank you for upgrading your plan with Acodei. On the <?php echo $package_name; ?> billing tier, you now have <?php echo $package_limit; ?> transaction syncs per month. As always, you can access historic data pulls at $<?php echo config("app.HISTORIC_PULL_PRICE"); ?> for each historic month.
</p>

<p>If you have any concerns or feedback, please email us at <a href="mailto:support@acodei.com">support@acodei.com</a>. We are happy to help in any way we can.</p>

<p>
Thank you for your support.
</p>

<p>
The Acodei Team
</p>

<p>
<a href="https://www.acodei.com/">Acodei Software</a>
</p>
@endsection