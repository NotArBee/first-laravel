<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="mt-5 bg-slate-200 shadow-xl p-5 mb-12 max-w-5xl m-auto">
            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="font-semibold tracking-tight text-2xl hover:underline">{{ $post['article_title'] }}</h2>
            </a>
            <div class="font-normal">
                <p>{{ $post['author'] }} | {{ $post['date'] }}</p>
            </div>
            <p class="mt-2 text-justify mb-5 font-light text-sm">
                {{ Str::limit($post['article_description'], 300) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
