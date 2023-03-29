@props(['formAction' => false])

<div class="bg-zinc-700 w-11/12 ml-6">
    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
    @endif
            <div class="p-4 sm:px-6 sm:py-4 border-b border-gray-150">
                @if(isset($title))
                    <h3 class="mt-6 pl-10 text-white text-lg pt-6">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="px-4 sm:p-6">
                <div class="text-white">
                    {{ $content }}
                </div>
            </div>

            <div class="inline-flex items-center px-3 py-1.5 mt-2 border border-amber-300 text-xs font-medium rounded-full text-amber-300 bg-zinc-900 hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500 mb-6 ml-4">
                {{ $buttons }}
            </div>
    @if($formAction)
        </form>
    @endif
</div>
