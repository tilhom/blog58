@component('mail::message')
# Introduction

## Hello {{$user->name}}

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam vel voluptas sapiente obcaecati id rerum similique reprehenderit accusamus cupiditate expedita! Deleniti qui, minima distinctio modi aut perferendis nostrum error itaque.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

1. fsdfsd
1. dsfsdf
1. dsfsdf

Thanks,<br>
{{ config('app.name') }}
@endcomponent
