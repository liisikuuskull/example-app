<script setup>
const props = defineProps({
  cart: {
    type: Object,
    default: null,
  },
});
</script>
<template>
  {{ cart }}
</template>