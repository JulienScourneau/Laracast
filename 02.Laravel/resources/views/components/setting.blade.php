@props(['heading'])
<section class="py- max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-4 border-b">
        {{$heading}}
    </h1>

    <div class="flex">

        <aside class="w-48 flex-shrink-0">
            <ul class="mr-2 ">
                <li class="mb-2 flex">
                    <a href="/admin/dashboard"
                       class="flex-1 rounded-xl p-2 {{request()->is('admin/dashboard') ?'text-white bg-blue-500':'border border-gray-300'}} ">Dashboard</a>
                </li>
                <li class="my-2 flex">
                    <a href="/admin/posts"
                       class="flex-1 rounded-xl p-2 {{request()->is('admin/posts') ?'text-white bg-blue-500':'border border-gray-300'}}">Posts</a>
                </li>

                <li class="my-2 flex">
                    <a href="/admin/posts/create"
                       class="flex-1 rounded-xl p-2 {{request()->is('admin/create') ?'text-white bg-blue-500':'border border-gray-300'}}">New Post</a>
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
