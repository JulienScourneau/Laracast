@props(['heading'])
<section class="py- max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-4 border-b">
        {{$heading}}
    </h1>

    <div class="flex">

        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4 p-2">Links</h4>
            <ul class="mr-2 ">
                <div class="p-2 mb-2">
                    <a href="/admin/dashboard"
                       class="w-full rounded-xl {{request()->is('admin/dashboard') ?'text-white bg-blue-500':'border border-gray-300'}} ">
                        Dashboard
                    </a>
                </div>
                <li class=" block mx-0 mt-2 rounded-xl p-2 {{request()->is('admin/posts') ?'text-white bg-blue-500':'border border-gray-300'}}">
                    <a href="/admin/posts" class="w-full btn-block">Posts</a>
                </li>
                <li class="mt-2 p-2 rounded-xl {{request()->is('admin/posts/create') ?'text-white bg-blue-500':'border border-gray-300'}} ">
                    <a href="/admin/posts/create">New
                        Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">

            <x-panel>
                {{$slot}}
            </x-panel>

        </main>
    </div>

</section>
