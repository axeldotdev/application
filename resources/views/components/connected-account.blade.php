@props(['provider', 'createdAt' => null])

<div>
    <div class="pl-3 flex items-center justify-between">
        <div class="flex items-center">
            @switch($provider)
                @case('apple')
                    <x-socialstream-icons.apple class="h-6 w-6 mr-2" />
                    @break
                @case('google')
                    <x-socialstream-icons.google class="h-6 w-6 mr-2" />
                    @break
                @case('microsoft')
                    <x-socialstream-icons.microsoft class="h-6 w-6 mr-2" />
                    @break
                @default
            @endswitch

            <div>
                <div class="text-sm font-semibold text-gray-600">
                    {{ __(ucfirst($provider)) }}
                </div>

                @if (! empty($createdAt))
                    <div class="text-xs text-gray-500">
                        Connected {{ $createdAt }}
                    </div>
                @else
                    <div class="text-xs text-gray-500">
                        {{ __('Not connected.') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            {{ $action }}
        </div>
    </div>

    @error($provider.'_connect_error')
    <div class="text-sm font-semibold text-red-500 px-3 mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
