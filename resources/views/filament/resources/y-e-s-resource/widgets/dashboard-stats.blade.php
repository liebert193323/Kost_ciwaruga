<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($this->getStats() as $stat)
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex items-center space-x-4">
                <div class="p-3 text-white bg-{{ $stat['color'] }}-500 rounded-full">
                    <x-dynamic-component :component="$stat['icon']" class="w-6 h-6" />
                </div>
                <div>
                    <h4 class="text-lg font-bold">{{ $stat['count'] }}</h4>
                    <p class="text-sm text-gray-500">{{ $stat['label'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
