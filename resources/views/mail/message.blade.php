@extends('layouts.email')
@section('content')
    <p>Hi,</p>

    <p>Name <?php echo $name; ?> </p>
    <p>Message <?php //echo $message; ?> </p>

    <p>If you have any concerns or feedback, please email us at <a href="mailto:support@acodei.com">support@acodei.com</a>.
        We are happy to help in any way we can.</p>

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
