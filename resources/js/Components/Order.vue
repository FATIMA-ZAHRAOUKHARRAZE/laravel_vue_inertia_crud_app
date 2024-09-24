<template>
    <div class="card my-3">
        <div class="card-body d-flex justify-content-center">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Order By
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <Link class="dropdown-item" :href="'/order/id/asc/tasks'">Id <i class="fa-arrow-up"></i></Link>
                        <Link class="dropdown-item" :href="'/order/id/desc/tasks'">Id <i class="fa-arrow-down"></i></Link>
                        <Link class="dropdown-item" :href="'/order/title/asc/tasks'">Title A-Z</Link>
                        <Link class="dropdown-item" :href="'/order/title/desc/tasks'">Title Z-A</Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    tasks: {
        type: Array,
        required: true
    }
});
</script>
