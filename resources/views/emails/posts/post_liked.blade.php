@component('mail::message')
# Your post as liked

{{ $liker->name }} liked one of your posts.

@component('mail::button', ['url' => route('posts.show', $post)])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
