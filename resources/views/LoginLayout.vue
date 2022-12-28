<template>
  <router-view></router-view>
</template>

<script setup>
import { useRoute } from "vue-router";
import { ref, onMounted } from "vue";

onMounted(() => {
  const route = useRoute();
  document.title = route.meta.title;
});
</script>