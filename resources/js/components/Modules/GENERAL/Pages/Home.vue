<template>
  <h1 class="title">Home</h1>
  <h4>Already implemented!</h4>
  <ul>
    <li>Vue Router v4.x</li>
    <li>Vuex v4.x</li>
  </ul>
  <p>Here is the counter example with Vuex.</p>
  <h1 class="counter">{{ $store.state.counter.counter }}</h1>
  <p>
    {{ $store.state.counter.counter }}
    <sup>2</sup> =
    {{ $store.getters["counter/powerCounter"] }}
  </p>
  <div class="counter-buttons">
    <button @click="$store.dispatch('counter/decreaseCounter')">-</button>
    <button @click="$store.dispatch('counter/increaseCounter')">+</button>
  </div>
</template>

<script>
export default {
  setup() {},
};
</script>

<style lang="sass" scoped>
.counter
  font-size: 80px
  margin: 0
</style>