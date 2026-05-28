@if(!empty($actions) && $actions->isNotEmpty())
<section class="action py-[95px] hidden md:block">
    <div class="center">
        <h2 class="text-center text-[30px] mb-[30px]">Profitieren Sie jetzt von unseren Aktionen</h2>
        <ul class="grid grid-cols-[1.3fr_1fr_1fr] md:gap-5 lg:gap-[34px]">
            @foreach($actions as $action)
            <li>
                <a href="{{ $action->url ?? '#' }}" class="rounded-[30px] overflow-hidden flex h-full hover:shadow-[0px_0px_15px_rgba(0,0,0,0.3)]">
                    <img class="object-cover w-full h-full" src="{{ Storage::url($action->image ?? null) }}" alt="{{ $action->title }}">
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
