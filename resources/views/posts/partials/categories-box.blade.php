<X-app-layout>
    <div>
        <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
        <div class="topics flex flex-wrap justify-start gap-2">
            @foreach ($categories as $category)
                <x-posts.category-badge :category="$category" />
            @endforeach
        </div>
    </div>
</X-app-layout>    