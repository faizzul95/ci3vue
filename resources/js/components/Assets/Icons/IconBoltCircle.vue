<template>
  <icon-base
    icon-name="calendar-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      id="Layer_1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background: new 0 0 64 64"
      xml:space="preserve"
    >
      <circle
        class="icon-bolt-circle-st0"
        cx="32"
        cy="32"
        r="32"
        :style="[backgroundColor ? {} : { fill: 'none' }]"
      />
      <path
        class="icon-bolt-circle-st1"
        d="M46.9,17.5C46.7,17.2,46.4,17,46,17H29c-0.4,0-0.7,0.2-0.9,0.6l-8,16c-0.2,0.3-0.1,0.7,0,1
	c0.2,0.3,0.5,0.5,0.9,0.5h5.5l-8.4,18.6c-0.2,0.4-0.1,0.9,0.3,1.2c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0,0.5-0.1,0.6-0.2l24-20
	c0.3-0.3,0.4-0.7,0.3-1.1C43.8,33.3,43.4,33,43,33h-6.1l9.9-14.4C47,18.3,47.1,17.9,46.9,17.5z"
      />
      <path
        class="icon-bolt-circle-st2"
        d="M46.9,15.5C46.7,15.2,46.4,15,46,15H29c-0.4,0-0.7,0.2-0.9,0.6l-8,16c-0.2,0.3-0.1,0.7,0,1
	c0.2,0.3,0.5,0.5,0.9,0.5h5.5l-8.4,18.6c-0.2,0.4-0.1,0.9,0.3,1.2c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0,0.5-0.1,0.6-0.2l24-20
	c0.3-0.3,0.4-0.7,0.3-1.1C43.8,31.3,43.4,31,43,31h-6.1l9.9-14.4C47,16.3,47.1,15.9,46.9,15.5z"
      />
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-bolt-circle-st0 {
  fill: #4f5d73;
}
.icon-bolt-circle-st1 {
  opacity: 0.2;
  fill: #231f20;
}
.icon-bolt-circle-st2 {
  fill: #f5cf87;
}
</style>

<script>
import IconBase from "./IconBase.vue";

export default {
  props: {
    iconName: {
      type: String,
      default: "box",
    },
    width: {
      type: [Number, String],
      default: 24,
    },
    height: {
      type: [Number, String],
      default: 24,
    },
    iconColor: {
      type: String,
      default: "currentColor",
    },
    backgroundColor: {
      type: Boolean,
      default: true,
    },
  },
  components: { IconBase },
};
</script>
