---
title: 404 Page not found - Enjoy the Show
permalink: 404.html
---

@extends('_layouts.main')

@section('body')
<div class="grid gap-12 grid-cols-1 md:grid-cols-2 items-center">
    <article class="md:leading-normal">
        <h1 class="text-4xl md:text-3xl">
            404 <span class="font-semibold">Page not found</span>
        </h1>
        <p class="text-xl md:text-xl mt-8">
            <a href="/" alt="Back to Home" class="font-semibold underline hover:no-underline">Back to Home</a>
        </p>
    </article>
</div>
@endsection