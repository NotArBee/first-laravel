<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="mt-5 bg-slate-200 shadow-xl p-5 mb-12 max-w-5xl m-auto">
        <h2 class="font-semibold tracking-tight text-2xl">{{ $post['article_title'] }}</h2>
        <div class="font-normal">
            <p>{{ $post['author'] }} | {{ $post['date'] }}</p>
        </div>
        <p class="mt-2 text-justify mb-5 font-light text-sm">
            {{ $post['article_description'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Article</a>
    </article>
</x-layout>
