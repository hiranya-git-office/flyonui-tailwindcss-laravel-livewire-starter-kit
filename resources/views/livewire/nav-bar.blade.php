<div>
    <header class="flex mb-6 items-center justify-between">
        <button class="btn btn-square btn-ghost lg:hidden" onclick="document.getElementById('sidebar-toggle').click()">
            <svg …>☰</svg>
        </button>
        <h1 class="text-2xl font-bold">{{ $title ?? 'My App' }}</h1>
        <div><!-- optional actions --></div>
    </header>
</div>