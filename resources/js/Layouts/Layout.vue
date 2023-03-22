<template>
    <div class="flex flex-col min-h-screen">
        <nav class="h-12 w-full bg-gray-800"></nav>
        <main class="flex-1">
            <slot />
        </main>
        <footer class="h-24 w-full bg-gray-700"></footer>
    </div>
</template>