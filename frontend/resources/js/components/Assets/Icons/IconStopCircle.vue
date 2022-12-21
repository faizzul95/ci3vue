<template>
  <icon-base
    icon-name="stop-circle"
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
      <rect
        x="-55"
        y="-1513"
        class="icon-stop-circle-st0"
        width="608"
        height="1984"
      />
      <circle
        class="icon-stop-circle-st1"
        cx="32"
        cy="32"
        r="32"
        :style="[backgroundColor ? {} : { fill: 'none' }]"
      />
      <path
        class="icon-stop-circle-st2"
        d="M26.3,55c-1.6,0-4-1-5.1-2.1l-8.1-8.1C12,43.7,11,41.3,11,39.7V28.3c0-1.6,1-4,2.1-5.1l8.1-8.1
	c1.2-1.2,3.5-2.1,5.1-2.1h11.4c1.7,0,4,1,5.1,2.1l8.1,8.1c1.2,1.2,2.1,3.5,2.1,5.1v11.4c0,1.7-1,4-2.1,5.1l-8.1,8.1
	C41.7,54,39.3,55,37.7,55H26.3z"
      />
      <path
        class="icon-stop-circle-st3"
        d="M26.3,53c-1.6,0-4-1-5.1-2.1l-8.1-8.1C12,41.7,11,39.3,11,37.7V26.3c0-1.6,1-4,2.1-5.1l8.1-8.1
	c1.2-1.2,3.5-2.1,5.1-2.1h11.4c1.7,0,4,1,5.1,2.1l8.1,8.1c1.2,1.2,2.1,3.5,2.1,5.1v11.4c0,1.7-1,4-2.1,5.1l-8.1,8.1
	C41.7,52,39.3,53,37.7,53H26.3z"
      />
      <path
        class="icon-stop-circle-st4"
        d="M45,34c0,2.2-1.8,4-4,4H23c-2.2,0-4-1.8-4-4v-4c0-2.2,1.8-4,4-4h18c2.2,0,4,1.8,4,4V34z"
      />
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-stop-circle-st0 {
  display: none;
  fill: #2b3544;
}
.icon-stop-circle-st1 {
  fill: #4f5d73;
}
.icon-stop-circle-st2 {
  opacity: 0.2;
  fill: #231f20;
}
.icon-stop-circle-st3 {
  fill: #c75c5c;
}
.icon-stop-circle-st4 {
  fill: #ffffff;
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
