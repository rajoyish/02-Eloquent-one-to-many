<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <section>
                        <div class="mx-auto flex max-w-7xl flex-col items-center px-5 py-8 sm:px-6 lg:px-8">
                            <div class="prose prose-blue mx-auto flex w-full max-w-3xl flex-col text-left">
                                <div class="mx-auto w-full">
                                    <h1>
                                        {{ $post->title }}
                                    </h1>
                                    <p>
                                        {{ $post->body }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- comments --}}
                    <div class="mx-auto max-w-screen-sm antialiased">
                        <h3 class="mb-4 text-lg font-semibold text-gray-900">{{ $post->comments->count() }} Comments</h3>
                        <div class="space-y-4">
                            @foreach ($post->comments as $comment)
                                {{--  component comment --}}
                                <div class="flex">
                                    <div class="mr-3 flex-shrink-0">
                                        <img class="mt-2 h-8 w-8 rounded-full sm:h-10 sm:w-10"
                                            src="https://i.pravatar.cc/300" alt="" />
                                    </div>
                                    <div class="flex-1 rounded-lg border px-4 py-2 leading-relaxed sm:px-6 sm:py-4">
                                        <strong>{{ Auth::user()->name }}</strong> <span class="text-xs text-gray-400">
                                            {{ $comment->created_at->format('M d, Y') }}
                                        </span>
                                        <p class="text-sm">
                                            {{ $comment->body }}
                                        </p>
                                    </div>
                                </div>
                                {{--  / component comment --}}
                            @endforeach

                        </div </div>
                        {{-- Ende of Content --}}
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
