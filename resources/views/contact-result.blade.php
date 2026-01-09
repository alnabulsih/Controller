<h2>Contact Form Result</h2>

@isset($contactData)
    <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Message:</strong> {{ $contactData['message'] }}</p>
@endisset


@empty($contactData)
    <p>No data found</p>
@endempty
