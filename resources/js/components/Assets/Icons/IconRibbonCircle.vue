<template>
  <icon-base
    icon-name="ribbon-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background: new 0 0 64 64"
      xml:space="preserve"
    >
      <g id="Layer_1">
        <g>
          <circle
            class="icon-ribbon-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-ribbon-circle-st1">
          <g>
            <path
              class="icon-ribbon-circle-st2"
              d="M16,21v31.4c0,1.1,0.7,2,1.6,2.4c0.3,0.1,0.7,0.2,1,0.2c0.7,0,1.4-0.3,1.9-0.8L32,43l11.4,11.2
				c0.5,0.5,1.2,0.8,1.9,0.8c0.3,0,0.7-0.1,1-0.2c1-0.4,1.6-1.4,1.6-2.4V21H16z"
            />
          </g>
        </g>
        <g>
          <g>
            <path
              class="icon-ribbon-circle-st3"
              d="M16,19v31.4c0,1.1,0.7,2,1.6,2.4c0.3,0.1,0.7,0.2,1,0.2c0.7,0,1.4-0.3,1.9-0.8L32,41l11.4,11.2
				c0.5,0.5,1.2,0.8,1.9,0.8c0.3,0,0.7-0.1,1-0.2c1-0.4,1.6-1.4,1.6-2.4V19H16z"
            />
          </g>
        </g>
        <g class="icon-ribbon-circle-st1">
          <path
            class="icon-ribbon-circle-st2"
            d="M48,21v-2c0-1.1-1.2-2-2.7-2H18.7c-1.5,0-2.7,0.9-2.7,2v2H48z"
          />
        </g>
        <g>
          <path
            class="icon-ribbon-circle-st4"
            d="M48,19v-5c0-1.1-1.2-2-2.7-2H18.7c-1.5,0-2.7,0.9-2.7,2v5H48z"
          />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-ribbon-circle-st0 {
  fill: #4f5d73;
}
.icon-ribbon-circle-st1 {
  opacity: 0.2;
}
.icon-ribbon-circle-st2 {
  fill: #231f20;
}
.icon-ribbon-circle-st3 {
  fill: #f5cf87;
}
.icon-ribbon-circle-st4 {
  fill: #e0995e;
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
